const startBtn = document.querySelector(".intro__content-btn");

startBtn.addEventListener("click", (e) => {
  document.querySelector(".rock").scrollIntoView({
    behavior: "smooth",
  });
});
