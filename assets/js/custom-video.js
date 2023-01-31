//video
var playButton = document.querySelector(".video-play-button");
var video = document.querySelector('.qr-patrol-video')
// Event listener for the play/pause button
playButton.addEventListener("click", function() {
  if (video.paused == true) {
    // Play the video
    video.play();

    // Update the button text to 'Pause'
    playButton.style.opacity = "0";
  } else {
    // Pause the video
    video.pause();

    // Update the button text to 'Play'
    playButton.style.opacity = "1";
  }
});