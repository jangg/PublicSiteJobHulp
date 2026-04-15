$(function () {
    var $ticker  = $("#ticker");
    var $items   = $("#ticker li");
    var current  = 0;
    var paused   = false;
    var pos      = $ticker.width();
    var animId;
    var lastTime = null;
    var speed    = 120; // pixels per seconde (onafhankelijk van framerate)

  
    function step(timestamp) {
      if (!paused) {
        var delta = lastTime ? (timestamp - lastTime) / 1000 : 0;
        pos -= speed * delta; // bijv. 60px/s op elk scherm
        var $li = $items.eq(current);
        $li.css("transform", "translateX(" + pos + "px)").show();
  
        // Volgende item als bijna klaar
        if (pos < -$li.outerWidth()) {
          $li.hide();
          current = (current + 1) % $items.length;
          pos = $ticker.width();
        }
      }
      lastTime = timestamp;
      animId = requestAnimationFrame(step);
    }
  
$ticker.hover(
      function () { paused = true; },
      function () { paused = false; lastTime = null; } // ← reset
    );  
    animId = requestAnimationFrame(step);
  });
