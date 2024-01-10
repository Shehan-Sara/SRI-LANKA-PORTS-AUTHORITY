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

  

  //404 page animation

  const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')


if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


const sr = ScrollReveal({
    distance: '90px',
    duration: 3000,
})

sr.reveal(`.home__img`, {origin: 'top', delay: 400})
sr.reveal(`.home__data`, {origin: 'bottom', delay: 600})
sr.reveal(`.home__footer`, {origin: 'bottom', delay: 800})