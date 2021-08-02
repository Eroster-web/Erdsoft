//carousel global import//
import Vue from 'vue';
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);
//slider//
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
//Kupon show//
function showdiv(){
    document.querySelector('.gift').style.visibility="visible";
}

//mozgatás//
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


//class active//
var selector = '.pills li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});



//nav nyitás/csukás//
const selectElemnt = (element) => document.querySelector(element)

selectElemnt('.menu-icons').addEventListener('click',()=>{
    selectElemnt('nav').classList.toggle('active')
})


