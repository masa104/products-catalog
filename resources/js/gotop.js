document.addEventListener("DOMContentLoaded", () => {
  const gotop = document.getElementById('gotop');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
      gotop.classList.add('show');
    } else {
      gotop.classList.remove('show');
    }
  }, false);
});
