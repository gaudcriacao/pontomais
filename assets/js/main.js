jQuery(document).ready(function($) {

  window.paceOptions = {
  // Disable the 'elements' source
  elements: false,

  // Only show the progress on regular and ajax-y page navigation,
  // not every request
  restartOnRequestAfter: false
}

  /*==========================================================================
FITVID
  ========================================================================== */
  $('.entry-content').fitVids();

  /*==========================================================================
Responsive wp_video_shortcode().
  ========================================================================== */
  $('.wp-video-shortcode').parent('div').css('width', 'auto');

  /**
   * Odin Core shortcodes
   */

  /*==========================================================================
  TABS
  ========================================================================== */
  $('.odin-tabs a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });

  /*==========================================================================
  TOOLTIPS
  ========================================================================== */
  $('.odin-tooltip').tooltip();


  /*==========================================================================
  EQUALIZE
  ========================================================================== */
  $('.equal-height').equalize(); // defaults to height
  $('.equal-width').equalize('width'); // defaults to height
  $('.owl-stage').equalize(); // defaults to height

  /*==========================================================================
  DEPOIMENTOS
  ========================================================================== */
  $('.depoimentos-list').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      }
    }
  });

  /*==========================================================================
  Slider
  ========================================================================== */
  $('.solucoes-list').bxSlider({
    mode: 'vertical',
    slideMargin: 30,
    infiniteLoop: true,
    nextSelector: '.slider-next',
    prevSelector: '.slider-prev ',
    nextText: '<i class="fa fa-angle-down"></i>',
    prevText: '← Go back',
    pager: false,
    responsive: true,
    breaks: [{
      screen: 0,
      slides: 1,
      pager: false
    }, {
      screen: 460,
      slides: 1
    }, {
      screen: 768,
      slides: 1
    }, {
      screen: 1024,
      slides: 3
    }]
  });

  /*==========================================================================
  FILTRO PLANOS
  ========================================================================== */
  // init Isotope
  var $grid = $('#planos-grid').isotope({
    itemSelector: '.plano',
    layoutMode: 'fitRows'
  });
  $grid.isotope({
    filter: '.10, .50, .100'
  });
  // filter functions
  var filterFns = {

  };
  // bind filter button click
  $('.filters-button-group').on('click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({
      filter: filterValue
    });
  });
  // change is-checked class on buttons
  $('.button-group').each(function(i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });

  /*==========================================================================
  AnchorScroll
  ========================================================================== */
  smoothScroll.init({
    selectorHeader: '.data-scroll-header', // Selector for fixed headers (must be a valid CSS selector)
    speed: 500, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutCubic', // Easing pattern to use
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    scrollOnLoad: true, // Boolean. If true, animate to anchor on page load if URL has a hash
    callback: function(toggle, anchor) {} // Function to run after scrolling
  });

  /*==========================================================================
  WALLOP
  ========================================================================== */
  var wallopEl = document.querySelector('.Wallop');
  var slider = new Wallop(wallopEl);

  /*==========================================================================
  Count to timer
  ========================================================================== */
  // $('.number_count').waypoint(function() {
  //   $(this).countTo({
  //     speed: 1600,
  //     formatter: function(value, options) {
  //       value = value.toFixed(options.decimals);
  //       value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
  //       return value;
  //     }
  //   });
  // }, {
  //   triggerOnce: false,
  //   offset: 'bottom-in-view'
  // });

});
