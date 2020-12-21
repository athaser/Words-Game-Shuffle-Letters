// JS for content editable trick from Chris Coyier

var h3 = document.querySelector("h3");

h3.addEventListener("input", function() {
  this.setAttribute("data-heading", this.innerText);
});