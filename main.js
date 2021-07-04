// slides
 
// var slideIndex = 0;
// showSlides();

// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 2000); // Change image every 2 seconds
// }


// function toggleMenu(){
//   const menuToggle = document.querySelector('.menuToggle');
//   const navigation = document.querySelector('.navigation');
//   menuToggle.classList.toggle('active');
// }

const btnviewmore = document.querySelector('#btnview');
const menu = document.querySelector('.menu__box');

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });


//for button view more
btnviewmore.addEventListener('click', function () {
    console.log('yay button is working');
    if (menu.classList.contains('disp')) {//close 
        menu.classList.remove('disp');
        document.getElementById("btnview").innerHTML = "Show Less";
/*        menu.classList.add('fade-out');
        menu.classList.remove('fade-in');*/
    } else {
        menu.classList.add('disp');
        document.getElementById("btnview").innerHTML = "Show More";
        /*menu.classList.add('fade-in');
        mneu.classList.remove('fade-out');*/
    }
})



// contact form//
function validateForm(){
  const user = document.getElementById('user').value;   //fetching value
  if(user == ""){
    // document.getElementById('username').innerHTML = "please fill the user name";
  alert("invalid");
    return false;
  }
}