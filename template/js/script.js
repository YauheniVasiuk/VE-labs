$(document).ready(function () {
  $(".header_burger").click(function (event) {
    $(".header_burger,.menu").toggleClass("active");
    $(".logo").toggleClass("active");
    $("body").toggleClass("lock");
  });
  if (
    sessionStorage.getItem("errors_contact") !== null &&
    sessionStorage.getItem("errors_contact") == "true"
  ) {
    $("body,html").animate(
      {
        scrollTop:
          $(document).height() - $(window).height() - $(window).scrollTop(),
      },
      500
    );
  }
});

dark.setAttribute("href", "#");
let checkbox = document.querySelector(".theme-checkbox");

if (localStorage.getItem("theme") == "true") {
  dark.setAttribute("href", "/template/CSS/dark.CSS");
  checkbox.checked = true;
}

checkbox.onchange = function () {
  if (this.checked) {
    localStorage.setItem("theme", "true");
    dark.setAttribute("href", "/template/CSS/dark.CSS");
  } else {
    localStorage.setItem("theme", "false");
    dark.setAttribute("href", "#");
  }
};

if (sessionStorage.getItem("checked_elem") !== null) {
  let elem = $(".menu .menu-item .check_this");
  elem[0].classList.remove("check_this");
  let checked_elem = $(
    "a:contains('" + sessionStorage.checked_elem.trim() + "')"
  );
  checked_elem[0].classList.add("check_this");
  // delete sessionStorage.checked_elem;
}

let element_arr = $(".menu .menu-item");
for (let i = 0; i < element_arr.length; i++) {
  element_arr[i].addEventListener("click", function () {
    sessionStorage.setItem("checked_elem", this.textContent);
  });
}

let elements_skill = $(".line-wrapper");
for (let i = 0; i < elements_skill.length; i++) {
  let items_skill = [];
  let items_elements = elements_skill[i].childNodes;
  for (let j = 0; j < items_elements.length; j++) {
    if (items_elements[j].nodeName != "#text") {
      items_skill.push(items_elements[j]);
    }
  }
  let text_skill = items_skill[0].innerText;
  let item_style = text_skill.split("\n");
  items_skill[0].style.width = item_style[1];
  items_skill[1].style.width = item_style[1];
}

let line_classes = $(".skill-item");
for (let i = 0; i < line_classes.length; i++) {
  if (
    line_classes[i].childNodes[1].alt == "JavaScript" ||
    line_classes[i].childNodes[1].alt == "HTML" ||
    line_classes[i].childNodes[1].alt == "MySQL" ||
    line_classes[i].childNodes[1].alt == "Figma"
  ) {
    line_classes[i].insertAdjacentHTML(
      "beforebegin",
      "<div class='line'></div>"
    );
  }
}

let elem_cont = $(".menu-link.check_this").text();
if (elem_cont == "Contact") {
  $("div .social").remove();
}
