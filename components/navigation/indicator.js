// NAV INDICATOR ================================================================
const home = document.querySelector(".n-Home a");
const about = document.querySelector(".n-About a");
const portfolio = document.querySelector(".n-Portfolio a");
const contact = document.querySelector(".n-Contact a");
const homeLogo = document.querySelector(".logo");

const indicator = document.querySelector(".indicator");

if (home) {
  console.log(`Home is set`);
} else {
  console.log(`Home is not set`);
}

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
portfolio.addEventListener("click", () => {
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
