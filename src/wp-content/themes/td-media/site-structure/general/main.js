"use strict";
$ = jQuery;

$(document).ready(function () {
  $("p:empty").remove();
  imageAnimation();
  fadeInUpInit();
  fadeInLeft();
  fadeInRight();
  //Block function
  header();
  // blockHome();
  about_ss4();
  // Slider
  //Header aminations
  // header();

  postDetail();
  footer();
});
