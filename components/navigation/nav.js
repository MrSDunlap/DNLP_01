// Navigation javascript
const navLinks = document.querySelectorAll(".nav-item");
const marker = document.querySelector(".indicator");

// Remove active class from all links and add active to the clicked link
function activeLink() {
  navLinks.forEach((link) => link.classList.remove("active"));
  this.classList.add("active");
}
navLinks.forEach((link) => link.addEventListener("click", activeLink));

// Nav burger code
const topLine = document.querySelector(".top");
const midLine = document.querySelector(".mid");
const bottomLine = document.querySelector(".bottom");

const burger = document.querySelector(".nav-burger");
const navMenu = document.querySelector(".nav-links-m");
const logo = document.querySelector(".logo-m");

if (burger) {
  burger.addEventListener("click", () => {
    if (!navMenu.classList.contains("nav-open")) {
      navMenu.classList.toggle("nav-open");
      anime({
        targets: ".nav-burger .top",
        keyframes: [{ translateY: 8.5 }, { rotate: 45 }],
      });
      anime({
        targets: ".nav-burger .mid",
        opacity: [1, 0],
      });
      anime({
        targets: ".nav-burger .bottom",
        keyframes: [{ translateY: -8.5 }, { rotate: -45 }],
      });
    } else {
      navMenu.classList.toggle("nav-open");
      anime({
        targets: ".nav-burger .top",
        keyframes: [{ rotate: 0 }, { translateY: 0 }],
      });
      anime({
        targets: ".nav-burger .mid",
        opacity: [0, 1],
      });
      anime({
        targets: ".nav-burger .bottom",
        keyframes: [{ rotate: 0 }, { translateY: 0 }],
      });
    }
  });
} else {
  console.log("Burger menu is not functioning properly.");
}

//close menu when the user selects a menu item
navMenu.addEventListener("click", () => {
  if (navMenu.classList.contains("nav-open")) {
    navMenu.classList.remove("nav-open");

    anime({
      targets: ".nav-burger .top",
      keyframes: [{ rotate: 0 }, { translateY: 0 }],
    });
    anime({
      targets: ".nav-burger .mid",
      opacity: [0, 1],
    });
    anime({
      targets: ".nav-burger .bottom",
      keyframes: [{ rotate: 0 }, { translateY: 0 }],
    });
  } else {
    return;
  }
});

//close the menu when the user clicks the logo
logo.addEventListener("click", () => {
  if (navMenu.classList.contains("nav-open")) {
    navMenu.classList.remove("nav-open");

    anime({
      targets: ".nav-burger .top",
      keyframes: [{ rotate: 0 }, { translateY: 0 }],
    });
    anime({
      targets: ".nav-burger .mid",
      opacity: [0, 1],
    });
    anime({
      targets: ".nav-burger .bottom",
      keyframes: [{ rotate: 0 }, { translateY: 0 }],
    });
  } else {
    return;
  }
});
//Close the menu when the screen is widened
window.addEventListener("resize", (e) => {
  if (window.matchMedia(`(min-width: 778px)`).matches) {
    navMenu.classList.remove("nav-open");
    anime({
      targets: ".nav-burger .top",
      keyframes: [{ rotate: 0 }, { translateY: 0 }],
    });
    anime({
      targets: ".nav-burger .mid",
      opacity: [0, 1],
    });
    anime({
      targets: ".nav-burger .bottom",
      keyframes: [{ rotate: 0 }, { translateY: 0 }],
    });
  }
});
