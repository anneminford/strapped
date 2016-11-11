

//= include ../bower_components/bootstrap-sass/assets/javascripts/bootstrap.js

console.log('ready steady go');

jQuery( document ).ready(function() {
    jQuery('.carousel').carousel({interval: 3500});
	jQuery(".carousel-indicators li:first").addClass("active");
	jQuery(".carousel-inner .item:first").addClass("active");
});

