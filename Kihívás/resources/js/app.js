
const selectElemnt = (element) => document.querySelector(element)

//nav nyitás,csukás
selectElemnt('.menu-icons').addEventListener('click',()=>{
    selectElemnt('nav').classList.toggle('active')
})

//nav nyitás,
// When the user scrolls the page, execute myFunction
