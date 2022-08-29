const menu=document.querySelector('.menu');
const btnMenu=document.querySelector('.icon-menu');
const navMenu=document.querySelector('.nav');

btnMenu.addEventListener('click',()=>{
    navMenu.classList.toggle('active');
    menu.classList.toggle('active');
})

//--------------CARDS PROMOCIONES----------------

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

  //---------------------MENU CATEGORIAS------------------------//
  const btnCategoria=document.querySelector('.btn-categorias');
  const listaCategorias=document.querySelector('.lista-categorias');

  btnCategoria.addEventListener('click',()=>{
      listaCategorias.classList.toggle('active');
  })