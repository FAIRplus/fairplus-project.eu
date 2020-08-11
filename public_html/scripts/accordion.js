

window.addEventListener("load", accordions, false);

function accordions() {
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("accordion-active");
    var panel = this.nextElementSibling;
    if (panel.style.height === "auto") {
      panel.style.height = "0";
      panel.style.opacity = "0";
      panel.style.padding = "0";
    } else {
      panel.style.height = "auto";
      panel.style.opacity = "1";
      panel.style.padding = "10px 18px";
    }
  });
}
}
