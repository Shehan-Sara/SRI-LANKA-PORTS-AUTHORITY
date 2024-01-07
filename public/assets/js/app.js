$(document).ready(function(){

    //Custom Slider
    $('#custom-slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots:false,
        smartSpeed:1000,
        margin:24,
        responsive:{
            0:{
                items:1,
                nav:false, 
            },
            768:{
                items:2,
            },
            1140:{
                items:2,
                center:true,
                dots:true,
            }
        }
    })

    


});

function showContent(sectionId) {
    // Hide all content sections
    $("#electrical, #mechanical, #other-equipement").addClass("d-none");

    // Show the selected content section
    $("#" + sectionId).removeClass("d-none");

    // Remove the 'active' class from all nav links
    $(".nav-link").removeClass("active");

    // Add the 'active' class to the clicked nav link
    $("[onclick=\"showContent('" + sectionId + "')\"]").addClass("active");
  }