jQuery(document).ready(function($) {
  if( acf.fields.color_picker ) {
    // custom colors
    var palette = ['#ffdad1', '#edf2ff', '#ffd7c7', '#e5d4d3', '#dfdfff', '#cccccc'];

    // when initially loaded find existing colorpickers and set the palette
    acf.add_action('load', function() {
      $('input.wp-color-picker').each(function() {
        $(this).iris('option', 'palettes', palette);
      });
    });

    // if appended element only modify the new element's palette
    acf.add_action('append', function(el) {
      $(el).find('input.wp-color-picker').iris('option', 'palettes', palette);
    });
  }
});