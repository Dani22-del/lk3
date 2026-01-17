// js/bimtek.js
// SCRIPT REVEAL (sama dengan yang ada di HTML bimtek)
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  },
  { threshold: 0.1 }
);

document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));

function toggleWA() {
  const box = document.getElementById("waOptions");
  box.classList.toggle("hidden");
}
