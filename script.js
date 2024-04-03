// console.log("No cache, no cookies, no worries :)");
import { createNav } from "./components/navigation/nav-mod.js";

//Navivation array of title objects ***********************************
const navItems = [
  { text: "Home", url: "#home" },
  { text: "About", url: "#about" },
  { text: "Portfolio", url: "#portfolio" },
  { text: "Contact", url: "#contact" },
];
const logo = {
  text: "dnlp.",
  url: "#",
};
createNav(navItems, logo);
