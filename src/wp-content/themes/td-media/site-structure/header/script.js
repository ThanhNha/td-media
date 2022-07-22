function header() {
  var header = gsap.to("#header", { y: "-=200", duration: 0.2, ease: "power2.in", paused: true });
  //fixed header
  ScrollTrigger.create({
    trigger: "#header",
    start: "10px top",
    end: 99999,
    toggleClass: { className: "scrolled", targets: "#header" },
    onUpdate: ({ progress, direction, isActive }) => {
      if (direction == -1) {
        header.reverse();
      }
      if (direction == 1) {
        header.play();
      } else if (direction == 1 && isActive == true) {
        header.play();
      }
    },
  });

  const hamburger = $("#hamburger-menu");
  const body = $("body");
  const overlay = $("#overlay");

  hamburger.click(() => {
    body.toggleClass("open-menu");
  });

  let has_sub = $(".has-sub");
  let sub = $(".sub-menu-wrapper");
  has_sub.click((e) => {
    e.preventDefault();
    sub.toggleClass("open-sub");
  });
  overlay.click(() => {
    body.removeClass("open-menu");
  });
  $(document).on("click", function (e) {
    if ($(e.target).closest("#sidebar").length === 0) {
      $("#sidebar .sub-menu-wrapper").removeClass("open-sub");
    }
  });
}
