//animation for image
function imageAnimation() {
  let figures = gsap.utils.toArray(".animation__image");
  figures.forEach((el) => {
    gsap.from(el, {
      opacity: 0,
      duration: 2,
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom top",
        toggleActions: "resume pause resume pause",
      },
    });
  });

  let images = gsap.utils.toArray(".animation__image img");
  images.forEach((el) => {
    gsap.from(el, {
      opacity: 0,
      scale: 1.5,
      duration: 2,
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom top",
        toggleActions: "resume pause resume pause",
      },
    });
  });
}

// // Fade In Transitions Items
function fadeInUpInit() {
  gsap.utils.toArray(".animation-wrapper").forEach((section) => {
    const elems = section.querySelectorAll(".animation-item");
    // Set starting params for sections
    gsap.set(elems, {
      y: 60,
      opacity: 0,
      duration: 2,
      ease: "power3.out",
      overwrite: "auto",
    });

    ScrollTrigger.create({
      trigger: section,
      start: "top 60%",
      end: "bottom 30%",
      markers: false,
      // toggleActions: "play complete none",
      onEnter: () =>
        gsap.to(elems, {
          y: 0,
          opacity: 1,
          stagger: 0.7,
        }),
    });
  });
}

//Animation Fade In Left
function fadeInLeft() {
  const items__left = gsap.utils.toArray(".fade-left");

  items__left.forEach((item__left, i) => {
    const anim = gsap.fromTo(
      item__left,
      { autoAlpha: 0, x: -50 },
      { duration: 1, autoAlpha: 1, x: 0, ease: "power3.in" }
    );
    ScrollTrigger.create({
      trigger: item__left,
      animation: anim,
      start: "top bottom",
      end: "bottom top",
      toggleActions: "resume pause resume pause",

      // once: true,
    });
  });
}

//Animation Fade In Right
function fadeInRight() {
  const items__right = gsap.utils.toArray(".fade-right");

  items__right.forEach((item__right, i) => {
    const anim = gsap.fromTo(
      item__right,
      { autoAlpha: 0, x: 50, opacity: 0 },
      { duration: 1, autoAlpha: 1, x: 0, opacity: 1, ease: "power3.in" }
    );
    ScrollTrigger.create({
      trigger: item__right,
      animation: anim,
      start: "top bottom",
      end: "bottom top",
      toggleActions: "resume pause resume pause",
      // once: true,
    });
  });
}
