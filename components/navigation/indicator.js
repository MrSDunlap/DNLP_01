// NAV INDICATOR ================================================================
const home = document.querySelector(".n-home a");
const about = document.querySelector(".n-about a");
const work = document.querySelector(".n-work a");
const contact = document.querySelector(".n-contact a");
const homeLogo = document.querySelector(".logo");

const indicator = document.querySelector(".indicator");

home.addEventListener("click", () => {
  indicator.classList.remove("home-width");
  indicator.classList.remove("about-width");
  indicator.classList.remove("work-width");
  indicator.classList.remove("contact-width");

  indicator.classList.add("home-width");
});
about.addEventListener("click", () => {
  indicator.classList.remove("home-width");
  indicator.classList.remove("about-width");
  indicator.classList.remove("work-width");
  indicator.classList.remove("contact-width");

  indicator.classList.add("about-width");
});
work.addEventListener("click", () => {
  indicator.classList.remove("home-width");
  indicator.classList.remove("about-width");
  indicator.classList.remove("work-width");
  indicator.classList.remove("contact-width");

  indicator.classList.add("work-width");
});
contact.addEventListener("click", () => {
  indicator.classList.remove("home-width");
  indicator.classList.remove("about-width");
  indicator.classList.remove("work-width");
  indicator.classList.remove("contact-width");

  indicator.classList.add("contact-width");
});
homeLogo.addEventListener("click", () => {
  indicator.classList.remove("home-width");
  indicator.classList.remove("about-width");
  indicator.classList.remove("work-width");
  indicator.classList.remove("contact-width");

  indicator.classList.add("home-width");
});
