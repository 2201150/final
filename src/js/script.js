var audioPlayer = document.getElementById("audioPlayer");

function play() {
    audioPlayer.play();
}

function loop() {
    audioPlayer.loop = true;
    audioPlayer.play();
}

function stopp() {
    audioPlayer.pause();
}

function stopp2() {
    audioPlayer.pause();
    audioPlayer.currentTime = 0;
}
