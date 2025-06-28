const video = document.getElementById("hero-video");
const playBtn = document.getElementById("play");

const userInfo = document.getElementById("user-info");

playBtn.addEventListener("click", function () {
    if (video.paused) {
        userInfo.style.display = "none";
        video.play();
        video.style.visibility = "visible";
        playBtn.textContent = "◼ Parar";
    } else {
        userInfo.style.display = "flex";
        video.pause();
        video.currentTime = 0;
        video.style.visibility = "hidden";
        playBtn.textContent = "▶ Trailer";
    }
});

video.addEventListener("ended", () => {
    setTimeout(() => {
        video.play();
        playBtn.click();
    }, 1000);
});