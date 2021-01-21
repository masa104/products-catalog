'use strict';

// Hero animation
const heroTl = gsap.timeline({
  defaults: {
    autoAlpha: 1,
    duration: 1
  }
});
const heroAnime = {
  autoAlpha: 0,
  y: 150
}
heroTl.from(['.outline'], heroAnime)
heroTl.from(['.hero-img'], heroAnime)


// gsap.registerPlugin(ScrollTrigger);
// const features = gsap.utils.toArray('.feature');
// features.forEach((el, i) => {
//   gsap.set(el, {
//     autoAlpha: 0,
//     ease: 'power2.ease',
//   })
//   gsap.to(el, {
//     autoAlpha: 1,
//     duration: 1,
//     scrollTrigger: {
//       trigger: el,
//       start: 'top-=100 top+=150',
//       end: 'top top+=150',
//       scrub: (features.length - i) * 0.2,
//       toggleActions: 'play none none reverse'
//     },
//   });
// });
