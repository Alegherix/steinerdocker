window.addEventListener("load", () => {
  document.body.classList.remove("loading");
});

window.addEventListener("resize", () => {
  document.body.classList.add("loading");
  setTimeout(() => {
    document.body.classList.remove("loading");
  }, 500);
});



