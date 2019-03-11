jQuery("#openNav").click(function(){
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("masthead").style.marginLeft = "250px";
});

jQuery("#closeNav").click(function(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("masthead").style.marginLeft= "0";
});

jQuery(document).ready(function(){
  jQuery('.slides').slick({
   	autoplay: true,
  });
});

jQuery(document).ready(function(){
  jQuery('.slides-four').slick({
   	autoplay: true,
    infinite: true,
    speed: 300,
  	slidesToShow: 4,
  	slidesToScroll: 4
  });
});

jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 1) {
    jQuery(".idHeader").addClass("black-header");
  } else {
    jQuery(".idHeader").removeClass("black-header");
  }
});

jQuery(document).ready(function(){
  jQuery(".btn-menu").click(function(){
    jQuery(".submenu-links").toggleClass("invisible");
    jQuery(this).toggleClass("btn-active");
  });
});

jQuery(document).ready(function(){
  jQuery("#solucoes-vg").click(function(){
    jQuery(".solucoes-vg").toggleClass("invisible");
  });
});

function handleSelect(elm){
  window.location = elm.value;
}

jQuery( "li.has-mega-menu" ).hover(function() {
  var wContainer;
  wContainer = jQuery(".container").width();

  jQuery("li.has-mega-menu ul.sub-menu").width(wContainer);
});

$('#leiaMais').on('click', function(e) {
  $('.text-hide').toggleClass("show-hide-text");
  e.preventDefault();
});