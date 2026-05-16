// Off-canvas
const toggle = document.getElementById("offcanvas-toggle");
const closeBtn = document.getElementById("offcanvas-close");
const canvas = document.getElementById("offcanvas-flip");
const overlay = document.getElementById("oc-overlay");
const openOC = () => {
  canvas.classList.add("open");
  overlay.classList.add("open");
  document.body.style.overflow = "hidden";
};
const closeOC = () => {
  canvas.classList.remove("open");
  overlay.classList.remove("open");
  document.body.style.overflow = "";
};
toggle?.addEventListener("click", openOC);
closeBtn?.addEventListener("click", closeOC);
overlay?.addEventListener("click", closeOC);

// Commitment slider
const track = document.getElementById("commit-track");
document.getElementById("next-btn")?.addEventListener("click", () =>
  track.scrollBy({
    left: 216,
    behavior: "smooth",
  }),
);
document.getElementById("prev-btn")?.addEventListener("click", () =>
  track.scrollBy({
    left: -216,
    behavior: "smooth",
  }),
);
