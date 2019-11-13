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

  jQuery(".add_product_btn").click(function(){
    jQuery("#addProductModal").modal("show");
  });

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $("#select-image").css("background-image", "url(" + e.target.result + ")");
                $("#select-image .select_image_overlay").addClass("remove_overlay");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });

});
