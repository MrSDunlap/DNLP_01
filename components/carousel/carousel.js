const allBTN = document.querySelector(".all-projects");
const designBTN = document.querySelector(".design-projects");
const developedBTN = document.querySelector(".developed-projects");

const sorter = document.querySelectorAll(".p-nav-btns button");

var xhr = new XMLHttpRequest();

xhr.onload = function () {
  if (xhr.status === 200) {
    responseObject = JSON.parse(xhr.responseText);
    var newProject = "";

    for (i = 0; responseObject.projects.length; i++) {
      newProject += '<div class="card">';
      newProject +=
        '<div class="title">' + responseObject.$projects[i].title + "</div>";
      newProject +=
        '<div class="desc">' +
        responseObject.projects[i].description +
        "</div>";
      newProject +=
        '<div class="software">' +
        responseObject.projects[i].software +
        "</div>";
      newProject += "</div>";
    }
    document.querySelector(".portfolio__container").innerHTML.newProject;
  }
};

xhr.open("GET", "json/projects.json", true);
xhr.send(null);

//Replacing the active class with the clicked selection
allBTN.addEventListener("click", () => {
  allBTN.classList.remove("active");
  designBTN.classList.remove("active");
  developedBTN.classList.remove("active");

  allBTN.classList.add("active");
  fetchData(sorterAll($projects));
});
designBTN.addEventListener("click", () => {
  allBTN.classList.remove("active");
  designBTN.classList.remove("active");
  developedBTN.classList.remove("active");

  designBTN.classList.add("active");
});
developedBTN.addEventListener("click", () => {
  allBTN.classList.remove("active");
  designBTN.classList.remove("active");
  developedBTN.classList.remove("active");

  developedBTN.classList.add("active");
});
