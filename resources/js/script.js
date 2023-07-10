import.meta.glob([
    '../img/**',
]);

// MUSIC PLAYER
const audio = document.querySelector('#audio');
const playPauseButton = document.querySelector('#play-pause');
const seekBar = document.querySelector('#seek-bar');

playPauseButton.addEventListener('click', () => {
  if (audio.paused) {
    audio.play();
    playPauseButton.classList.remove('play');
    playPauseButton.classList.add('stop');
    document.querySelector('#play-pause-icon').src = 'build/img/pause.png';
  } else {
    audio.pause();
    playPauseButton.classList.remove('stop');
    playPauseButton.classList.add('play');
    document.querySelector('#play-pause-icon').src = 'build/img/play.png';
  }
});

audio.addEventListener('timeupdate', () => {
  const value = (audio.currentTime / audio.duration) * 100;
  seekBar.value = value;
});

seekBar.addEventListener('change', () => {
  const time = (seekBar.value / 100) * audio.duration;
  audio.currentTime = time;
});

// SLIDER
const carousel = document.querySelector('.carousel');
const slides = document.querySelectorAll('.slide');
const navIndicators = document.querySelectorAll('.nav-indicator');

let currentIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    if (i === index) {
      slide.classList.add('active');
    } else {
      slide.classList.remove('active');
    }
  });

  navIndicators.forEach((indicator, i) => {
    if (i === index) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}

navIndicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    showSlide(index);
  });
});

