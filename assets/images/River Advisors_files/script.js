"use strict";

// mobile menu
let openMenu = document.querySelector(".open-menu");
let navLinks = document.querySelectorAll(".nav-link");

openMenu.addEventListener("click", function (event) {
  event.preventDefault();
  document.body.classList.toggle("_lock");
  openMenu.classList.toggle("open");
});

navLinks.forEach((navLink) => {
  navLink.firstChild.addEventListener("click", function () {
    document.body.classList.remove("_lock");
    openMenu.classList.remove("open");
  });
});
