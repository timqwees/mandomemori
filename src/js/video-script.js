(function () {
  'use strict';

  function Slider () {
    this.carders = document.querySelectorAll('.carder');
    this.currentIndex = 0;

    this.isDragging = false;
    this.startX = 0;
    this.currentX = 0;

    this.initEvents();
    this.setActivePlaceholder();
  }

  // initialize drag events
  Slider.prototype.initEvents = function () {
    document.addEventListener('touchstart', this.onStart.bind(this));
    document.addEventListener('touchmove', this.onMove.bind(this));
    document.addEventListener('touchend', this.onEnd.bind(this));

    document.addEventListener('mousedown', this.onStart.bind(this));
    document.addEventListener('mousemove', this.onMove.bind(this));
    document.addEventListener('mouseup', this.onEnd.bind(this));

  };

  // set active placeholder
  Slider.prototype.setActivePlaceholder = function () {
    var placeholders = document.querySelectorAll('.carders-placeholder__item');
    var activePlaceholder = document.querySelector('.carders-placeholder__item--active')

    if (activePlaceholder) {
      activePlaceholder.classList.remove('carders-placeholder__item--active');
    }

    placeholders[this.currentIndex].classList.add('carders-placeholder__item--active');
  };

  // mousedown event
  Slider.prototype.onStart = function (evt) {
    this.isDragging = true;

    this.currentX = evt.pageX || evt.touches[0].pageX;
    this.startX = this.currentX;

    var carder = this.carders[this.currentIndex];

    // calculate ration to use in parallax effect
    this.windowWidth = window.innerWidth;
    this.carderWidth = carder.offsetWidth;
    this.ratio = this.windowWidth / (this.carderWidth / 4);
  };

  // mouseup event
  Slider.prototype.onEnd = function (evt) {
    this.isDragging = false;

    var diff = this.startX - this.currentX;
    var direction = (diff > 0) ? 'left' : 'right';
    this.startX = 0;

    if (Math.abs(diff) > this.windowWidth / 4) {
      if (direction === 'left') {
        this.slideLeft();
      } else if (direction === 'right') {
        this.slideRight();
      } else {
        this.cancelMovecarder();
      }

    } else {
      this.cancelMovecarder();

    }

  };

  // mousemove event
  Slider.prototype.onMove = function (evt) {
    if (!this.isDragging) return;

    this.currentX = evt.pageX || evt.touches[0].pageX;
    var diff = this.startX - this.currentX;
    diff *= -1;

    // don't let drag way from the center more than quarter of window
    if (Math.abs(diff) > this.windowWidth / 4) {
      if (diff > 0) {
        diff = this.windowWidth / 4;
      } else {
        diff = - this.windowWidth / 4;
      }
    }

    this.movecarder(diff);
  };

  // slide to left direction
  Slider.prototype.slideLeft = function () {
    // if last don't do nothing
    if (this.currentIndex === this.carders.length - 1) {
      this.cancelMovecarder();
      return;
    }

    var self = this;
    var carder = this.carders[this.currentIndex];
    var carderWidth = this.windowWidth / 2;

    carder.style.left = '-50%';/*Смещение предыдцщего блока после прокрутки*/

    this.resetcarderElsPosition();

    this.currentIndex += 1;
    this.setActivePlaceholder();
    carder = this.carders[this.currentIndex];

    carder.style.left = '50%';

    this.movecarderEls(carderWidth * 3);

    // add delay to resetting position
    setTimeout(function () {
      self.resetcarderElsPosition();
    }, 300);
  };

  // slide to right direction
  Slider.prototype.slideRight = function () {
    // if last don't do nothing
    if (this.currentIndex === 0) {
      this.cancelMovecarder();
      return;
    }

    var self = this;
    var carder = this.carders[this.currentIndex];
    var carderWidth = this.windowWidth / 2;

    carder.style.left = '150%';

    this.resetcarderElsPosition();

    this.currentIndex -= 1;
    this.setActivePlaceholder();
    carder = this.carders[this.currentIndex];

    carder.style.left = '50%';

    this.movecarderEls(-carderWidth * 3);

    // add delay to resetting position
    setTimeout(function () {
      self.resetcarderElsPosition();
    }, 300);
  };

  // put active carder in original position (center)
  Slider.prototype.cancelMovecarder = function () {
    var self = this;
    var carder = this.carders[this.currentIndex];

    carder.style.transition = 'transform 0.8s ease-out';
    carder.style.transform = '';

    this.resetcarderElsPosition();
  };

  // reset to original position elements of carder
  Slider.prototype.resetcarderElsPosition = function () {
    var self = this;
    var carder = this.carders[this.currentIndex];

    var carderLogo = carder.querySelector('.carder__logo');
    var carderPrice = carder.querySelector('.carder__price');
    var carderTitle = carder.querySelector('.carder__title');
    var carderSubtitle = carder.querySelector('.carder__subtitle');
    var carderImage = carder.querySelector('.carder__image');
    var carderWishList = carder.querySelector('.carder__wish-list');
    var carderCategory = carder.querySelector('.carder__category');
    var carderWillAnimate = carder.querySelectorAll('.carder__will-animate');
    // move carder elements to original position
    carderWillAnimate.forEach(function (el) {
      el.style.transition = 'transform 0.8s ease-out';
    });

    carderLogo.style.transform = '';
    carderPrice.style.transform = '';

    carderTitle.style.transform = '';
    carderSubtitle.style.transform = '';

    carderImage.style.transform = 'translateX(-1.5em)';
    carderWishList.style.transform = '';
    carderCategory.style.transform = '';

    // clear transitions
    setTimeout(function () {
      carder.style.transform = '';
      carder.style.transition = '';

      carderWillAnimate.forEach(function (el) {
        el.style.transition = '';
      });
    }, 800); /*время появления в мс/с*/

  };

  // slide carder while dragging
  Slider.prototype.movecarder = function (diff) {

    var carder = this.carders[this.currentIndex];

    carder.style.transform = 'translateX(calc(' + diff + 'px - 50%))';
    diff *= -1;

    this.movecarderEls(diff);
  };

  // create parallax effect on carder elements sliding them
  Slider.prototype.movecarderEls = function (diff) {
    var carder = this.carders[this.currentIndex];

    var carderLogo = carder.querySelector('.carder__logo');
    var carderPrice = carder.querySelector('.carder__price');
    var carderTitle = carder.querySelector('.carder__title');
    var carderSubtitle = carder.querySelector('.carder__subtitle');
    var carderImage = carder.querySelector('.carder__image');
    var carderWishList = carder.querySelector('.carder__wish-list');
    var carderCategory = carder.querySelector('.carder__category');
    var carderWillAnimate = carder.querySelectorAll('.carder__will-animate');

    carderLogo.style.transform = 'translateX(' + (diff / this.ratio) + 'px)';
    carderPrice.style.transform = 'translateX(' + (diff / this.ratio) + 'px)';

    carderTitle.style.transform = 'translateX(' + (diff / (this.ratio * 0.90)) + 'px)';
    carderSubtitle.style.transform = 'translateX(' + (diff / (this.ratio * 0.85)) + 'px)';

    carderImage.style.transform = 'translateX(' + (diff / (this.ratio * 0.35)) + 'px)';
    
    carderWishList.style.transform = 'translateX(' + (diff / (this.ratio * 0.85)) + 'px)';
    carderCategory.style.transform = 'translateX(' + (diff / (this.ratio * 0.65)) + 'px)';

  };


  // create slider
  var slider = new Slider();

})();

const videoPlayer = document.querySelector('.video-player')
const video = videoPlayer.querySelector('.video')
const playButton = videoPlayer.querySelector('.play-button')
const volume = videoPlayer.querySelector('.volume')
const currentTimeElement = videoPlayer.querySelector('.current')
const durationTimeElement = videoPlayer.querySelector('.duration')
const progress = videoPlayer.querySelector('.video-progress')
const progressBar = videoPlayer.querySelector('.video-progress-filled')

const videoPlayer1 = document.querySelector('.video-player1')
const video1 = videoPlayer1.querySelector('.video1')
const playButton1 = videoPlayer1.querySelector('.play-button1')
const currentTime1Element = videoPlayer1.querySelector('.current1')
const durationTime1Element = videoPlayer1.querySelector('.duration1')
const progress1 = videoPlayer1.querySelector('.video-progress1')
const progressBar1 = videoPlayer1.querySelector('.video-progress-filled1')
const volume1 = videoPlayer1.querySelector('.volume1')

const videoPlayer2 = document.querySelector('.video-player2')
const video2 = videoPlayer2.querySelector('.video2')
const playButton2 = videoPlayer2.querySelector('.play-button2')
const currentTime2Element = videoPlayer2.querySelector('.current2')
const durationTime2Element = videoPlayer2.querySelector('.duration2')
const progress2 = videoPlayer2.querySelector('.video-progress2')
const progressBar2 = videoPlayer2.querySelector('.video-progress-filled2')
const volume2 = videoPlayer2.querySelector('.volume2')

const videoPlayer3 = document.querySelector('.video-player3')
const video3 = videoPlayer3.querySelector('.video3')
const playButton3 = videoPlayer3.querySelector('.play-button3')
const currentTime3Element = videoPlayer3.querySelector('.current3')
const durationTime3Element = videoPlayer3.querySelector('.duration3')
const progress3 = videoPlayer3.querySelector('.video-progress3')
const progressBar3 = videoPlayer3.querySelector('.video-progress-filled3')
const volume3 = videoPlayer3.querySelector('.volume3')

const videoPlayer4 = document.querySelector('.video-player4')
const video4 = videoPlayer4.querySelector('.video4')
const playButton4 = videoPlayer4.querySelector('.play-button4')
const currentTime4Element = videoPlayer4.querySelector('.current4')
const durationTime4Element = videoPlayer4.querySelector('.duration4')
const progress4 = videoPlayer4.querySelector('.video-progress4')
const progressBar4 = videoPlayer4.querySelector('.video-progress-filled4')
const volume4 = videoPlayer4.querySelector('.volume4')

const videoPlayer5 = document.querySelector('.video-player5')
const video5 = videoPlayer5.querySelector('.video5')
const playButton5 = videoPlayer5.querySelector('.play-button5')
const currentTime5Element = videoPlayer5.querySelector('.current5')
const durationTime5Element = videoPlayer5.querySelector('.duration5')
const progress5 = videoPlayer5.querySelector('.video-progress5')
const progressBar5 = videoPlayer5.querySelector('.video-progress-filled5')
const volume5 = videoPlayer5.querySelector('.volume5')

const videoPlayer6 = document.querySelector('.video-player6')
const video6 = videoPlayer6.querySelector('.video6')
const playButton6 = videoPlayer6.querySelector('.play-button6')
const currentTime6Element = videoPlayer6.querySelector('.current6')
const durationTime6Element = videoPlayer6.querySelector('.duration6')
const progress6 = videoPlayer6.querySelector('.video-progress6')
const progressBar6 = videoPlayer6.querySelector('.video-progress-filled6')
const volume6 = videoPlayer6.querySelector('.volume6')

const videoPlayer7 = document.querySelector('.video-player7')
const video7 = videoPlayer7.querySelector('.video7')
const playButton7 = videoPlayer7.querySelector('.play-button7')
const currentTime7Element = videoPlayer7.querySelector('.current7')
const durationTime7Element = videoPlayer7.querySelector('.duration7')
const progress7 = videoPlayer7.querySelector('.video-progress7')
const progressBar7 = videoPlayer7.querySelector('.video-progress-filled1')
const volume7 = videoPlayer7.querySelector('.volume7')

//Play and Pause button
playButton.addEventListener('click', (e) => {
  if(video.paused){
    video.play()
    e.target.textContent = '❚❚'
  } else {
    video.pause()
    e.target.textContent = '►'
  }
})

playButton1.addEventListener('click', (e) => {
  if(video1.paused){
    video1.play()
    e.target.textContent = '❚❚'
  } else {
    video1.pause()
    e.target.textContent = '►'
  }
})

playButton2.addEventListener('click', (e) => {
  if(video2.paused){
    video2.play()
    e.target.textContent = '❚❚'
  } else {
    video2.pause()
    e.target.textContent = '►'
  }
})

playButton3.addEventListener('click', (e) => {
  if(video3.paused){
    video3.play()
    e.target.textContent = '❚❚'
  } else {
    video3.pause()
    e.target.textContent = '►'
  }
})

playButton4.addEventListener('click', (e) => {
  if(video4.paused){
    video4.play()
    e.target.textContent = '❚❚'
  } else {
    video4.pause()
    e.target.textContent = '►'
  }
})

playButton5.addEventListener('click', (e) => {
  if(video5.paused){
    video5.play()
    e.target.textContent = '❚❚'
  } else {
    video5.pause()
    e.target.textContent = '►'
  }
})

playButton6.addEventListener('click', (e) => {
  if(video6.paused){
    video6.play()
    e.target.textContent = '❚❚'
  } else {
    video6.pause()
    e.target.textContent = '►'
  }
})

playButton7.addEventListener('click', (e) => {
  if(video7.paused){
    video7.play()
    e.target.textContent = '❚❚'
  } else {
    video7.pause()
    e.target.textContent = '►'
  }
})

//volume // звук
volume.addEventListener('mousemove', (e)=> {
  video.volume = e.target.value
})
volume1.addEventListener('mousemove', (e)=> {
  video1.volume1 = e.target.value
})
volume2.addEventListener('mousemove', (e)=> {
  video2.volume2 = e.target.value
})
volume3.addEventListener('mousemove', (e)=> {
  video3.volume3 = e.target.value
})
volume4.addEventListener('mousemove', (e)=> {
  video4.volume4 = e.target.value
})
volume5.addEventListener('mousemove', (e)=> {
  video5.volume5 = e.target.value
})
volume6.addEventListener('mousemove', (e)=> {
  video6.volume6 = e.target.value
})
volume7.addEventListener('mousemove', (e)=> {
  video7.volume7 = e.target.value
})

//current time and duration // таймер
const currentTime = () => {
  let currentMinutes = Math.floor(video.currentTime / 60)
  let currentSeconds = Math.floor(video.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video.duration / 60)
  let durationSeconds = Math.floor(video.duration - durationMinutes * 60)

  currentTimeElement.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTimeElement.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video.addEventListener('timeupdate', currentTime)

const currentTime1 = () => {
  let currentMinutes = Math.floor(video1.currentTime / 60)
  let currentSeconds = Math.floor(video1.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video1.duration / 60)
  let durationSeconds = Math.floor(video1.duration - durationMinutes * 60)

  currentTime1Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime1Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video1.addEventListener('timeupdate', currentTime1)

const currentTime2 = () => {
  let currentMinutes = Math.floor(video2.currentTime / 60)
  let currentSeconds = Math.floor(video2.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video2.duration / 60)
  let durationSeconds = Math.floor(video2.duration - durationMinutes * 60)

  currentTime2Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime2Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video2.addEventListener('timeupdate', currentTime2)

const currentTime3 = () => {
  let currentMinutes = Math.floor(video3.currentTime / 60)
  let currentSeconds = Math.floor(video3.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video3.duration / 60)
  let durationSeconds = Math.floor(video3.duration - durationMinutes * 60)

  currentTime3Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime3Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video3.addEventListener('timeupdate', currentTime3)

const currentTime4 = () => {
  let currentMinutes = Math.floor(video4.currentTime / 60)
  let currentSeconds = Math.floor(video4.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video4.duration / 60)
  let durationSeconds = Math.floor(video4.duration - durationMinutes * 60)

  currentTime4Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime4Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video4.addEventListener('timeupdate', currentTime4)

const currentTime5 = () => {
  let currentMinutes = Math.floor(video5.currentTime / 60)
  let currentSeconds = Math.floor(video5.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video5.duration / 60)
  let durationSeconds = Math.floor(video5.duration - durationMinutes * 60)

  currentTime5Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime5Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video5.addEventListener('timeupdate', currentTime5)

const currentTime6 = () => {
  let currentMinutes = Math.floor(video6.currentTime / 60)
  let currentSeconds = Math.floor(video6.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video6.duration / 60)
  let durationSeconds = Math.floor(video6.duration - durationMinutes * 60)

  currentTime6Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime6Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video6.addEventListener('timeupdate', currentTime6)

const currentTime7 = () => {
  let currentMinutes = Math.floor(video7.currentTime / 60)
  let currentSeconds = Math.floor(video7.currentTime - currentMinutes * 60)
  let durationMinutes = Math.floor(video7.duration / 60)
  let durationSeconds = Math.floor(video7.duration - durationMinutes * 60)

  currentTime7Element.innerHTML = `${currentMinutes}:${currentSeconds < 10 ? '0'+currentSeconds : currentSeconds}`
  durationTime7Element.innerHTML = `${durationMinutes}:${durationSeconds}`
}

video7.addEventListener('timeupdate', currentTime7)

//Progress bar // путь видео краснач линия
video.addEventListener('timeupdate', () =>{
  const percentage = (video.currentTime / video.duration) * 100
  progressBar.style.width = `${percentage}%`
})

//change progress bar on click
progress.addEventListener('click', (e) =>{
  const progressTime = (e.offsetX / progress.offsetWidth) * video.duration
  video.currentTime = progressTime
})
