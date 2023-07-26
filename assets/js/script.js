"use strict";

// mobile menu
let openMenu = document.getElementById("open");
let mobileMenu = document.querySelector('.open-menu')
let navLinks = document.querySelectorAll(".nav-link");

openMenu.addEventListener("click", function (event) {
  event.preventDefault();
  document.body.classList.toggle("_lock");
  mobileMenu.classList.toggle("open");
});

navLinks.forEach((navLink) => {
  navLink.addEventListener("click", function () {
    document.body.classList.remove("_lock");
    mobileMenu.classList.remove("open");
  });
});
