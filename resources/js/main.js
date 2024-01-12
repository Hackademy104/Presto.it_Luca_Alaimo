let searchBtn = document.querySelector('.searchBtn');
let closeBtn = document.querySelector('#closeBtn');
let searchBox = document.querySelector('.searchBox');
let nav = document.querySelector('#navbar1');
let navbar2 = document.querySelector('#navbar2');

searchBtn.addEventListener("click", () => {
    searchBox.classList.add('active');
});

closeBtn.addEventListener("click", () => {
    searchBox.classList.remove('active');
});

// document.addEventListener("DOMContentLoaded", function () {
//     window.onscroll = function(){
//         if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 ){
//             navbar2.style.top = "0";
//         }else{
//             navbar2.style.top = "60px";
//         }
//     }
// })