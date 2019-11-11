jQuery(document).ready(function($){

  jQuery('.hamburger').click(function(){
    $('.main_container').toggleClass('sidebar_sm');
  });

  jQuery('.link_signup').click(function(){
    console.log("signup link clicked");
    $('.login').addClass('signup_view');
  });

  jQuery('.link_login').click(function(){
    if ($('.login').hasClass('signup_view')) {
      $('.login').removeClass('signup_view');
    }
    else {
      
    }
  });

});
