'use strict';

const btn = document.querySelector('.menu-btn');
const menu = document.querySelector('.side-menu');

btn.addEventListener('click', e =>{
    menu.classList.toggle('menu-expanded');
    menu.classList.toggle('menu-collapsed');

    document.querySelector('body').classList.toggle('body-expanded');
});
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);