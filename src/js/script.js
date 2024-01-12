var alarm;
alarm = new Audio();
window.addEventListener("load", () => {
  const f = document.getElementById("file1");
  f.addEventListener("change", (evt) => {
    let input = evt.target;
    if (input.files.length == 0) {
      return;
    }
    const file = input.files[0];
    if (!file.type.match("audio.*")) {
      alert("音声ファイルを選択してください。");
      return;
    }
    const reader = new FileReader();
    reader.onload = () => {
      alarm.pause();
      alarm.src = reader.result;
    };
    reader.readAsDataURL(file);
  });
});

function play() {
  alarm.play();
  alarm.loop=false;
}
function loop() {
    alarm.play();
    alarm.loop = true;
}
function stopp() {
alarm.pause();
}
function stopp2() {
alarm.pause();
alarm.currentTime = 0;
}