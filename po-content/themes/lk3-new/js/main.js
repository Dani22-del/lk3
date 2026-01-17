// Animation & Counter logic moved from inline script
document.addEventListener('DOMContentLoaded', function(){
  // Reveal on Scroll Logic
  const observerOptions = { threshold: 0.1 };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
        // Jika ada counter di dalamnya, jalankan counter
        const counters = entry.target.querySelectorAll(".counter");
        counters.forEach((counter) => runCounter(counter));
      }
    });
  }, observerOptions);

  document
    .querySelectorAll(".reveal")
    .forEach((el) => observer.observe(el));

  // Counter Function
  function runCounter(el) {
    if (el.dataset.done) return;
    const target = +el.dataset.target;
    const speed = target > 100 ? 200 : 50;
    const update = () => {
      const current = +el.innerText;
      const inc = target / speed;
      if (current < target) {
        el.innerText = Math.ceil(current + inc);
        setTimeout(update, 1);
      } else {
        el.innerText = target;
        el.dataset.done = "true";
      }
    };
    update();
  }

  // WA toggle
  window.toggleWA = function() {
    const box = document.getElementById("waOptions");
    if (!box) return;
    box.classList.toggle("hidden");
  }
});
