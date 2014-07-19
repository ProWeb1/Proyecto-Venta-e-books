window.open    = function(){};
    window.print   = function(){};
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }

    function __linkClick(e) {
      parent.window.postMessage(this.href, '*');
    };

    function __bindToLinks() {
      var __links = document.querySelectorAll('a');
      for (var i = 0, l = __links.length; i < l; i++) {
        if ( __links[i].getAttribute('data-t') == '_blank' ) {
          __links[i].addEventListener('click', __linkClick, false);
        }
      }
    }