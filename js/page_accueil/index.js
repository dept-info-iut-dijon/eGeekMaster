// JavaScript source code
var id = undefined;
var num_image = 0;
var currentImage;


function main() {
    console.log("Hello, world");
    listecontrol = document.querySelectorAll(".slider-control");
    for (let i = 0; i < listecontrol.length; i++) {
        listecontrol[i].onclick = click;
    }
    currentImage = 0;
    id = setInterval(nextImage, 2000);
    

}
function nextImage() {
    currentImage = (currentImage + 1) % listecontrol.length;
    print(currentImage);
}

/**
 * active one image of slider
 * @param {any} number
 */
function print(number) {
    let listeimage = document.querySelectorAll(".slider-panel");
    let listecontrol = document.querySelectorAll(".slider-control");
    for (let i = 0; i < listeimage.length; i++) {
        listeimage[i].classList.remove("active");
        listecontrol[i].classList.remove("active");
    }
    listeimage[number].classList.add("active");
    listecontrol[number].classList.add("active")
    
}
function click(evt) {
    let button = evt.target;
    let controls = document.querySelectorAll(".slider-control");
    let pos = [].indexOf.call(controls, button);
    print(pos);
    currentImage = pos;
    clearInterval(id);
    id = setInterval(nextImage, 2000);
}

window.onload = main;