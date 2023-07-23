$(document).ready(function () {
  $(".header_burger").click(function (event) {
    $(".header_burger,.menu").toggleClass("active");
    $(".logo").toggleClass("active");
    $("body").toggleClass("lock");
  });
});

dark.setAttribute("href", "#");
//logo.setAttribute('src', '/template/images/dark.svg')

let checkbox = document.querySelector(".theme-checkbox");

if (localStorage.getItem("theme") == "true") {
  dark.setAttribute("href", "/template/CSS/dark.CSS");
  //logo.setAttribute('src', '/template/images/light.svg');
  checkbox.checked = true;
}

checkbox.onchange = function () {
  if (this.checked) {
    localStorage.setItem("theme", true);
    dark.setAttribute("href", "/template/CSS/dark.CSS");
  } else {
    localStorage.setItem("theme", false);
    dark.setAttribute("href", "#");
  }
};
