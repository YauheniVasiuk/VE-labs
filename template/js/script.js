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

if (localStorage.getItem("checked_elem") !== null) {
  let elem = $(".menu .menu-item .check_this");
  elem[0].classList.remove("check_this");
  let checked_elem = $(
    "a:contains('" + localStorage.checked_elem.trim() + "')"
  );
  checked_elem[0].classList.add("check_this");
  delete localStorage.checked_elem;
}

let element_arr = $(".menu .menu-item");
for (let i = 0; i < element_arr.length; i++) {
  element_arr[i].addEventListener("click", function () {
    localStorage.setItem("checked_elem", this.textContent);
  });
}
