require('../css/index.css');

//beat audio loader controller
let beatSelector = document.getElementById('main-list-audio');
let audioPlayer = document.getElementsByTagName('audio-player')[0];
let audioList = document.querySelector('.beat-section');

function beatController(e) {
    let beatSelected = e.target;

      if(e.target.tagName != "A" )
        return;
    
    let newSrc = beatSelected.getAttribute('beat');
    let newImage =  beatSelected.getAttribute('img');
    let newAuthor = beatSelected.textContent;
    let newTitle = beatSelected.textContent;

    newAuthor =  newAuthor.substring(0, newAuthor.indexOf('-'));
    newTitle = newTitle.split("-").pop();
   
    audioPlayer.setAttribute('songSrc', newSrc);
    audioPlayer.setAttribute('songImg', newImage);
    audioPlayer.setAttribute('songAuthor', newAuthor);
    audioPlayer.setAttribute('songTitle', newTitle);
}

beatSelector.addEventListener('click', beatController);

beatSelector.addEventListener('keypress', (e) => {
  if(e.keyCode ===  13)
    beatController(event);
});

//load the first beat from the list 
window.onload = () => {
  let newSrc = audioList.getAttribute('beat');
  let newImage =  audioList.getAttribute('img');
  let newAuthor = audioList.textContent;
  let newTitle = audioList.textContent;
  
  newAuthor =  newAuthor.substring(0, newAuthor.indexOf('-'));
  newTitle = newTitle.split("-").pop();
  audioPlayer.setAttribute('songSrc', newSrc);
  audioPlayer.setAttribute('songImg', newImage);
  audioPlayer.setAttribute('songAuthor', newAuthor);
  audioPlayer.setAttribute('songTitle', newTitle);
}

//bug css 
if(window.screen.width <= 650){
  beatSelector.removeAttribute('style');
}

