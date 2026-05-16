window.addEventListener("load", () => {
  setTimeout(() => {
    const p = document.getElementById("preloader");
    p.classList.add("hide");

    setTimeout(() => p.remove(), 500);
  }, 800);
});
