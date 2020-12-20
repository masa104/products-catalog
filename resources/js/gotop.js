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

const scrollToTopBtn = document.getElementById("gotop")
const rootElement = document.documentElement

function handleScroll() {
  // do something on scroll
  const scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  if ((rootElement.scrollTop / scrollTotal) > 0.80) {
    //show button
    scrollToTopBtn.classList.add('show');
  } else {
    //hide button
    scrollToTopBtn.classList.remove('show');
  }
}

function scrollToTop() {
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
scrollToTopBtn.addEventListener("click", scrollToTop)
document.addEventListener("scroll", handleScroll)
