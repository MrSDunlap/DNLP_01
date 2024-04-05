export const createNav = function (navItems, logo) {
  //Create the navigation element
  const nav = document.createElement("nav");
  nav.setAttribute("class", "nav");

  //Create the inner logo container
  const logoLink = document.createElement("div");
  logoLink.setAttribute("class", "logo");
  const logoAnchor = document.createElement("a");
  logoAnchor.href = logo.url;
  logoAnchor.textContent = logo.text;
  logoLink.append(logoAnchor);

  //Create the inner nav container list
  const navCont = document.createElement("div");
  navCont.setAttribute("class", "nav-container");
  //append an indicator for the animation sequence
  let ind = document.createElement("span");
  ind.setAttribute("class", "indicator");

  //prepend the logo within the nav-container element
  navCont.prepend(logoLink);

  //Create the ul containing the nav-links
  const navUl = document.createElement("ul");
  navUl.setAttribute("class", "nav-links");

  //Loop through the array containing the nav-items
  navItems.forEach((item) => {
    //Create li and anchor tag for each item
    const liElement = document.createElement("li");
    liElement.setAttribute("class", `nav-item n-${item.text}`);
    const aElement = document.createElement("a");

    aElement.textContent = item.text;
    aElement.href = item.url;

    liElement.appendChild(aElement);
    navUl.appendChild(liElement);
    navCont.append(navUl);
    navUl.append(ind);
  });

  //append ul to the nav
  nav.append(navCont);
  document.querySelector("body").prepend(nav);
  //Add indicator on screen load to home
  document.querySelector(".indicator").classList.add("home-width");
};
