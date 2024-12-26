const startBtn = document.querySelector(".intro__content-btn");
const btnNextRock = document.querySelector(".rock__next-btn");
const btnNextHipHop = document.querySelector(".hiphop__next-btn");

startBtn.addEventListener("click", (e) => {
  document.querySelector(".rock").scrollIntoView({
    behavior: "smooth",
  });
});

btnNextRock.addEventListener("click", (e) => {
  document.querySelector(".hiphop").scrollIntoView({
    behavior: "smooth",
  });
});

btnNextHipHop.addEventListener("click", (e) => {
  document.querySelector(".indie").scrollIntoView({
    behavior: "smooth",
  });
});
