/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');

//Hamburger Button animation
$(document).ready(function (){

    $('.first-button').on('click', function () {
  
      $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {
  
      $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {
  
      $('.animated-icon3').toggleClass('open');
    });
});


//Custom audio player with Plyr library
const player = new Plyr('audio', {
    controls: [
        'restart',
        'play',
        'progress',
        'current-time',
        'duration',
        'mute',
        'volume',
        'autoplay',
      
    ]
});



//beat audio loader controller

let source = document.getElementById('beat-link');
let brand = document.getElementById('beat-brand');
let beatSelector = document.getElementById('main-list-audio');
let pause = source.getAttribute('autoplay');

function beatController(e) {

    let beatSelected = e.target;

      if(e.target == beatSelector){
        return;
      }

    let newSrc = beatSelected.getAttribute('beat');
        brand.innerHTML = beatSelected.innerText;
        source.removeAttribute('src');
        source.setAttribute('src', newSrc);
}

beatSelector.addEventListener('click', beatController);


beatSelector.addEventListener('keypress', (e) => {
  if(e.keyCode ===  13)
    beatController(event);
});




