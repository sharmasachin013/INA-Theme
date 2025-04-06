const container = document.querySelector(".path-flexicard .container-view");
const frames = document.querySelectorAll(".path-flexicard .frame");

container.addEventListener("click", (event) => {
  removeActiveClasses();
  event.target.classList.add("focused");
});

function removeActiveClasses() {
  frames.forEach((panel) => {
    panel.classList.remove("focused");
  });
}
