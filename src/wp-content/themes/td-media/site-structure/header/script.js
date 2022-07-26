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
  const html = $("html");
  const overlay = $("#overlay");

  hamburger.click(() => {
    html.toggleClass("open-menu");
  });

  let has_sub = $(".has-sub");
  let sub = $(".sub-menu-wrapper");
  has_sub.each(function (index) {
    has_sub.eq(index).on("click", function (e) {
      e.preventDefault();
      sub.removeClass("open-sub");
      sub.eq(index).toggleClass("open-sub");
    });
  });
  overlay.click(() => {
    html.removeClass("open-menu");
  });
  $(document).on("click", function (e) {
    if ($(e.target).closest("#sidebar").length === 0) {
      $("#sidebar .sub-menu-wrapper").removeClass("open-sub");
    }
  });
}
