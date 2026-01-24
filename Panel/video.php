<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>VIDEOS</title>
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    html,body { margin:0; height:100%; background:#000; }
    video { width:100%; height:100%; object-fit:contain; background:#000; }
  </style>
</head>
<body>
  <video id="homevideo"
         autoplay
         playsinline
         preload="auto"
         controlslist="nodownload noplaybackrate"
         disablepictureinpicture>
  </video>

<script>
(function(){
  const playlist = ["../assets/videos/"];
  const ids      = [46];
  const total    = 1;
  const video    = document.getElementById('homevideo');

  if (!Array.isArray(playlist) || playlist.length === 0) {
    console.error('Playlist vacío.');
    return;
  }

  
  const SINGLE = total === 1;
  let switching = false;
  let nextLock = false;

  if (SINGLE) {
    video.loop = true; // Activa loop para un video
  }

  let index = 0;
  let lastTime = 0;
  let stalledTicks = 0;
  let watchdogInterval = null;
  let playRetryTimer = null;

  const MAX_STALLED_TICKS = 5;
  const WATCHDOG_PERIOD_MS = 2000;
  const PLAY_RETRY_MS = 800;
  const mod = (n, m) => ((n % m) + m) % m;

  function clearPlayRetry(){
    if (playRetryTimer) { clearTimeout(playRetryTimer); playRetryTimer = null; }
  }

  function setSource(i){
    switching = true;
    clearPlayRetry();

    index = mod(i, total);
    const src = playlist[index];

    video.pause();
    video.removeAttribute('src');
    while (video.firstChild) video.removeChild(video.firstChild);
    video.setAttribute('src', src);

    lastTime = 0;
    stalledTicks = 0;

    const onCanPlay = () => {
      video.removeEventListener('canplay', onCanPlay);
      switching = false;
      tryPlay();
    };

    try { video.load(); } catch(e) { console.warn('video.load() excepción:', e); }

    if (video.readyState >= 2) {
      switching = false;
      tryPlay();
    } else {
      video.addEventListener('canplay', onCanPlay, { once:true });
    }
  }

  function tryPlay(){
    clearPlayRetry();
    video.play().catch(function(){
      playRetryTimer = setTimeout(tryPlay, PLAY_RETRY_MS);
    });
  }

  function safeLoadAndPlay(){
    if (switching) return;
    try { video.load(); } catch(e) {}
    tryPlay();
  }

  function next(step = 1){
    if (SINGLE) {
      setSource(0); // Recarga el mismo video
      return;
    }
    if (nextLock) return;
    nextLock = true;
    setTimeout(function(){ nextLock = false; }, 500);
    setSource(index + step);
  }

  function prev(step = 1){ setSource(index - step); }

  function startWatchdog(){
    stopWatchdog();
    lastTime = video.currentTime || 0;
    watchdogInterval = setInterval(function(){
      const t = video.currentTime || 0;
      if (video.ended) return;

      if (Math.abs(t - lastTime) < 0.01) {
        stalledTicks++;
        if (!switching) {
          if (video.readyState < 2 || video.networkState === 2) {
            video.pause();
            safeLoadAndPlay();
          } else if (!video.paused) {
            video.play().catch(function(){});
          }
        }
        if (stalledTicks >= MAX_STALLED_TICKS) {
          console.warn('Watchdog: sin progreso');
          stalledTicks = 0;
          if (SINGLE) {
            safeLoadAndPlay();
          } else {
            next(1);
          }
        }
      } else {
        stalledTicks = 0;
        lastTime = t;
      }
    }, WATCHDOG_PERIOD_MS);
  }

  function stopWatchdog(){
    if (watchdogInterval) { clearInterval(watchdogInterval); watchdogInterval = null; }
  }

  // ===== Handlers =====
  video.addEventListener('ended', function () {
    if (!SINGLE) next(1);
  });

  // Listener SIN optional chaining
  video.addEventListener('error', function (ev) {
    var msg = '';
    try {
      if (ev && ev.message) {
        msg = ev.message;
      } else if (video && video.error) {
        var ve = video.error; // MediaError
        // 1=ABORTED, 2=NETWORK, 3=DECODE, 4=SRC_NOT_SUPPORTED
        msg = (ve && ve.message) ? ve.message : ('MediaError code=' + ve.code);
      } else {
        msg = String(ev);
      }
    } catch (e) {
      msg = 'Error de reproducción (detalle no disponible)';
    }

    console.error('Video error en índice ' + index + ' -> ' + msg);

    if (SINGLE) {
      safeLoadAndPlay();
    } else {
      next(1);
    }
  });

  video.addEventListener('stalled', function () {
    if (switching) return;
    console.warn('stalled recibido; intento de recuperación');
    safeLoadAndPlay();
  });

  video.addEventListener('abort', function () {
    if (switching) return;
    console.warn('abort recibido');
    if (SINGLE) safeLoadAndPlay();
    else next(1);
  });

  document.addEventListener('visibilitychange', function(){
    if (!document.hidden) {
      video.play().catch(function(){ safeLoadAndPlay(); });
    }
  });

  video.addEventListener('play', startWatchdog);
  video.addEventListener('pause', stopWatchdog);

  // ===== Inicializar =====
  setSource(0);
  
  window._player = { next, prev, setSource, video, playlist, ids };
})();
</script>
</body>
</html>
