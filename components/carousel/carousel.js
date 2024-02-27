const allBTN = document.querySelector(".all-projects");
const designBTN = document.querySelector(".design-projects");
const developedBTN = document.querySelector(".developed-projects");

const sorter = document.querySelectorAll(".p-nav-btns button");

function clickTester() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.querySelector(".portfolio-container").innerHTML =
        this.responseText;
    }
  };
  xhttp.open("GET", "projects.php", true);
  xhttp.send();
}

//Connecting to the Project database.
function fetchData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("portfolio-container").innerHTML =
        this.responseText;
    }
  };
  xhttp.open("GET", "carousel.comp.php", true);
  xhttp.send();
}
function sorter(xhttp) {
  allBTN.addEventListener("click", () => {});
}
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
