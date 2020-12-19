'use strict';
// gsap.registerPlugin(ScrollTrigger);

// const cardTl = gsap.timeline({
//   defaults: {
//     autoAlpha: 1,
//   }
// })
// cardTl.from('.card', {
//   duration: 1,
//   stagger: 0.1,
//   autoAlpha: 0,
//   y: 150
// })
// gsap.utils.toArray('.section').forEach(section => {
//   ScrollTrigger.create({
//     trigger: section,
//     animation: cardTl
//   })
// })


gsap.registerPlugin(ScrollTrigger);

const defaultAnime = {
  autoAlpha: 0,
  ease: 'power2.ease',
  y: 150,
}

gsap.utils.toArray('.scroll-trigger').forEach((trigger, i) => {
  const cards = document.querySelectorAll('.card')
  cards.forEach(card => {
    gsap.set(card, defaultAnime)
    gsap.to(card, {
      autoAlpha: 1,
      y: 0,
      scrollTrigger: {
        trigger: card,
        toggleActions: 'play none none reverse'
      }
    });
  });
});
