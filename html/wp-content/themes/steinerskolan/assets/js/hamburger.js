const navbar = document.querySelector(".navbar");
const ham = document.querySelector(".ham");
const open = document.querySelector(".open-menu");
const close = document.querySelector(".close-menu");

function toggleHamburger() {
  navbar.classList.toggle("show-nav");
  open.classList.toggle("hide-open");
  close.classList.toggle("show-close");
}

ham.addEventListener("click", toggleHamburger);
