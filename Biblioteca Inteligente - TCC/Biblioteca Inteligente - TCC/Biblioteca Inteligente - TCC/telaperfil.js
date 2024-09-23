// Place this script at the end of your body tag
const swiper = new Swiper('.swiper-container', {
    // Configurações do Swiper (your Swiper options here)
    slidesPerView: 'auto',
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });