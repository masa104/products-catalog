const mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  autoHeight: true,
  calculateHeight: true,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

})
