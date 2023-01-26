var swiper = new Swiper(".food-slider", {
    grabCursor:true,
   loop:true,
   centeredSlides:true,
   spaceBetween: 20,
   pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
   breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    700: {
      slidesPerView: 2,
     
    },
    1000: {
      slidesPerView: 3,
    
    },
  },
  });


  let previewContainer = document.querySelector('.food-preview-container');
let previewBox = previewContainer.querySelectorAll('.food-preview');

document.querySelectorAll('.food .slide').forEach(food =>{
   food.onclick = () =>{
      previewContainer.style.display = 'flex';
      let name = food.getAttribute('data-name');
      previewBox.forEach(preveiw =>{
         let target = preveiw.getAttribute('data-target');
         if(name == target){
            preveiw.classList.add('active');
         }
      });
   };
});
previewContainer.querySelector('#close-preview').onclick = () =>{
    previewContainer.style.display = 'none';
    previewBox.forEach(close =>{
       close.classList.remove('active');
    });
 };

 

 
 