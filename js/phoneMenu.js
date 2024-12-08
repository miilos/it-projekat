const openBtn = document.querySelector(".burger-btn");
const closeBtn = document.querySelector(".phone-menu__close-btn");
const phoneMenu = document.querySelector(".phone-menu");

openBtn.addEventListener("click", () => {
  phoneMenu.classList.add("phone-menu--active");
});

closeBtn.addEventListener("click", () => {
  phoneMenu.classList.remove("phone-menu--active");
});
