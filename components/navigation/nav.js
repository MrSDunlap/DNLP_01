// Navigation javascript
const navLinks = document.querySelectorAll(".nav-item a");
const marker = document.querySelector(".marker");

//Remove active class from all links and add active to the clicked link
function activeLink() {
  navLinks.forEach((link) => link.classList.remove("active"));
  this.classList.add("active");
}
navLinks.forEach((link) => link.addEventListener("click", activeLink));
