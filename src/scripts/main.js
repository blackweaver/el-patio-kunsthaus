'use strict';
let filters = require('./_filters');
let interactions = require('./_interactions');
let scroll_effects = require('./_scroll-effects');
let multiselect = require('./_multiselect');
let tabs = require('./_tabs');
let general = require('./_general');
let accordion = require('./_accordion');
let image_slider_big = require('./_image-slider-big');
let forms = require('./_forms');
let newsletter_subscription = require('./_newsletter-subscription.js');

function possiblyDebug(s) {
	if (window.debug) {
		console.log(s);
	}
}
