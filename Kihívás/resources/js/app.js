import Vue from 'vue';
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

const delay = 3000; //ms

const slides = document.querySelector(".slides");
const slidesCount = slides.childElementCount;
const maxLeft = (slidesCount - 1) * 100 * -1;

let current = 0;
let count = 0;
function changeSlide(next = true) {
  if (next) {
    current += current > maxLeft ? -100 : current * -1;
  } else {
    current = current < 0 ? current + 100 : maxLeft;
  }

  slides.style.left = current + "%";
}

function showdiv(){
    document.querySelector('.gift').style.visibility="visible";
}

// Controls
document.querySelector(".next-slide").addEventListener("click", function() {
  changeSlide();
    count++;
    if(count>=3){
        showdiv();
    }
});

document.querySelector(".prev-slide").addEventListener("click", function() {
  changeSlide(false);
  count++;
    if(count>=3){
        showdiv();
    }
});



var selector = '.pills li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});





const selectElemnt = (element) => document.querySelector(element)

//nav nyitás,csukás
selectElemnt('.menu-icons').addEventListener('click',()=>{
    selectElemnt('nav').classList.toggle('active')
})


