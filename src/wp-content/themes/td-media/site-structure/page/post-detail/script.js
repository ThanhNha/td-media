function postDetail() {
  $(".wrapper-blogs").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 6000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          arrows: false,
        },
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: "40px",
          arrows: false,
        },
      },
    ],
  });
}

function copyLink() {
  const input = document.querySelector("#input-copy");
  const message = $(".message-copy");
  input.value = window.location.href;
  input.setAttribute("type", "text");
  input.select();
  input.setSelectionRange(0, 99999);
  document.execCommand("copy");
  input.setAttribute("type", "hidden");
  window.getSelection().removeAllRanges();
  message.removeClass("opacity-0");
  this.copySuccess = true;
  setTimeout(() => {
    message.addClass("opacity-0");
  }, 1000);
}
