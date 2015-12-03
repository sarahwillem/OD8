(function ($, Drupal) {

  /**
   * More information about using JavaScript in strict mode can be found at
   * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode.
   */
  'use strict';

  /**
   * An example Drupal theme function that returns a message in a paragraph tag.
   *
   * @param {string} message The message to be displayed.
   * @return {string} The message wrapped in a <p> tag.
   */
  Drupal.theme.pistachioMessage = function (classes, message) {
    var classString = classes.join(' '),
        markup = '<p class="' + classString + '">' + message + '</p>';
    return markup;
  };

  /**
   * An example of a Drupal behavior.
   */
  Drupal.behaviors.pistachioExample = {
    attach: function(context, settings) {
      var message = 'Pistachio!';
      var $messageMarkup = Drupal.theme('pistachioMessage', ['pistachio-example', 'pistachio-example__message'], 'Hello world! I was created using JavaScript!');
      $('.region-content', context).once('pistachio-example').append($messageMarkup);
    }
  };

} (jQuery, Drupal));
