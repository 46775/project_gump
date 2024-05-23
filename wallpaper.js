const backgrounds = [
    'wallpaper/1.jpg',
    'wallpaper/2.jpg',
    'wallpaper/3.gif',
    'wallpaper/4.jpg',
    'wallpaper/5.gif',
    'wallpaper/6.gif',
    'wallpaper/7.gif',
    'wallpaper/8.jpg',
    'wallpaper/9.jpg',
    'wallpaper/10.gif']

let currentBgIndex = 0;

function changeBackground() {
    document.body.style.background = `url('${backgrounds[currentBgIndex]}') no-repeat center center fixed`;
    document.body.style.backgroundSize = 'cover';
    currentBgIndex = (currentBgIndex + 1) % backgrounds.length;
}
document.getElementById('changeBg').addEventListener('click', changeBackground);

