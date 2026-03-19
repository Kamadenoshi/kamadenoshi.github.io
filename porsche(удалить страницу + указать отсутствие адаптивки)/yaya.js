document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper", {
    loop: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    effect: "slide",
    speed: 500,
    on: {
      slideChangeTransitionEnd() {
        updateActiveYear(this.realIndex);
      },
    },
  });

  const timeline = document.querySelector(".timeline");
  const items = document.querySelectorAll(".timeline-item");

  function updateActiveYear(index) {
    items.forEach((item) => item.classList.remove("active"));
    const activeItem = document.querySelector(
      `.timeline-item[data-slide="${index}"]`
    );
    if (activeItem) {
      activeItem.classList.add("active");

      const containerWidth = document.querySelector(
        ".timeline-container"
      ).offsetWidth;
      const itemWidth = activeItem.offsetWidth;
      const itemOffset = activeItem.offsetLeft;
      const centerOffset = containerWidth / 2 - itemWidth / 2;

      gsap.to(timeline, {
        duration: 0.1,
        ease: "power2.out",
        x: -itemOffset + centerOffset,
      });
    }
  }

  items.forEach((item) => {
    item.addEventListener("click", function () {
      const slideIndex = parseInt(this.getAttribute("data-slide"));
      swiper.slideTo(slideIndex); // Используем slideTo вместо slideToLoop
    });
  });

  updateActiveYear(swiper.realIndex);
});
