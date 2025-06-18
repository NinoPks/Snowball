const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");
const signin = document.querySelector(".signin");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  nav.classList.toggle("active");
  signin.classList.toggle("active");
});


