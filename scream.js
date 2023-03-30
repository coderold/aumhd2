const screambtn = document.getElementById('screambtn');
const text = document.getElementById('textt');
const inputtext = document.getElementById('inputtext');
const screamf = document.getElementById('screamf');
const qts = document.getElementById('qts');

var audio1 = new Audio('assets/audios/scream1.mp3');
var audio2 = new Audio('assets/audios/scream2.mp3');
var audio3 = new Audio('assets/audios/scream3.mp3');

var sounds = [audio1, audio2, audio3];

qts.className = 'hide';

function scream() {
    sounds[Math.floor(Math.random() * 3)].play();

    text.innerHTML = inputtext.value;
    inputtext.value = "";
    inputtext.classList.toggle('hide');
    screambtn.classList.toggle('hide');
    text.classList.toggle('textfade');
    setTimeout(fade, 2000);
}

function fade() {
    screamf.classList.toggle('hide');
    qts.className = 'container fade-in';
}


screambtn.addEventListener("click" , scream);