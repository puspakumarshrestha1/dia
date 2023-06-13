

   // magnific popup


  
//   $('#appointment_date').datepicker({
//      'format': 'm/d/yyyy',
//      'autoclose': true
//    });
//    $('#appointment_time').timepicker();

   jQuery(document).ready(function($) {
  // 'use strict';

  var $particles = $('#particles');
  var frame = {};
  var content = {
    start: 0
  };
  var count = 500;
  var minParticleSize = 4;
  var maxParticleSize = 120;
  var particleDistributionPow = 9;
  var particles = [];
  var maxY = frame.height;

  function updateDimensions() {
    frame.width = document.documentElement.offsetWidth;
    frame.height = document.documentElement.offsetHeight;
    maxY = frame.height;
  }

  // Generate particles
  function generateParticles() {
    particles.length = 0;
    var elements = [];
    var $el, zoom, size, x, y, zIndex;

    // Particles
    for (var i = 0; i < count; i++) {
      $el = $('<img/>');
      zoom = Math.pow(Math.random(), particleDistributionPow) * 0.99 + 0.01;
      size = Math.max(minParticleSize, maxParticleSize * zoom);

      x = Math.random() * (frame.width - size);
      y = Math.random() * (maxY - size) - zoom;
      zIndex = Math.round(zoom * 100);

      // Adjust dot size
      $el.css({
        width: Math.round(size),
        height: Math.round(size),
        zIndex: zIndex,
        opacity: 1 - zoom,
        left: Math.round(x),
        top: Math.round(y)
      }).attr('data-scrollax', "properties: { 'translateY': '" + (zIndex - zIndex * 50) + "px' }");

      // Add to particles
      elements.push($el[0]);
    }
    $particles.empty().append(elements);
  }

  updateDimensions();
  generateParticles();

  var parallax = new Scrollax().init();

  $(window).resize(function() {
    updateDimensions();
    generateParticles();

    parallax.reload();
  });
	//You may also like Plugin
	// alsolike(
	// 	"mJvweb", "Horizontal Parallax using Scrollax.js",
	// 	"yygvPx", "Modern Tabs Design with pure CSS",
	// 	"azpWBr", "THE CONFETTI ANIMATION"
	// );
});