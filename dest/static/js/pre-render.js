/**
 * Decisions that will influence rendering,
 * therefore this file will be loaded blocking/inline
 */

// Propagate active JS before rendering
var h = document.documentElement;
h.className = h.className.replace(/\bno-js\b/g, '') + 'js';

// detect IE 11 because it needs fixes for features it does "support"
if (navigator.userAgent.match(/Trident\/7\./)) {
  navigator.isIE11 = true;
  h.className = h.className + ' ie11';
}

// detect iOS because Vimeo Player will not accept play()
if (navigator.userAgent.match(/OS .+ like Mac OS X/)) {
  navigator.isIOS = true;
  h.className = h.className + ' iOS';
}