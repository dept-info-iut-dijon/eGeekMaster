/**
 * @author Théo Cornu
*/
// Fonctions liées à la manipulation des éléments HTML

function addClassToElements(elements, className) {
    elements.forEach((element) => element.classList.add(className));
}

function removeClassFromElements(elements, className) {
    elements.forEach((element) => element.classList.remove(className));
}

function rotateSmiley1() {
    smiley1.style.transition = "transform 0.5s";
    smiley1.style.transformOrigin = "center center";
    smiley1.style.transform = "rotate(360deg)";
}

function resetSmiley1() {
    smiley1.style.transition = "transform 0.5s";
    smiley1.style.transform = "rotate(0deg)";
}

function scaleAndTrembleSmiley2() {
    isSmiley2Hovered = true;
    smiley2.style.transition = "transform 0.5s, scale 0.1s";
    smiley2.style.transformOrigin = "center center";
    smiley2.style.transform = "scale(5)";
    tremble();
}

function resetSmiley2() {
    isSmiley2Hovered = false;
    smiley2.style.transition = "transform 0.5s, scale 0.2s";
    smiley2.style.transformOrigin = "center center";
    smiley2.style.transform = "scale(1)";
    cancelAnimationFrame(idSmiley);
}

function createHeart() {
    const heart = document.createElement("div");
    heart.classList.add("heart");
    heart.style.marginLeft = `${Math.random() * 80}%`;
    smiley3Div.appendChild(heart);
    setTimeout(() => {
        heart.remove();
    }, 3000);
}

function nextImage() {
    currentImage = (currentImage + 1) % sliderControls.length;
    activateImage(currentImage);
}

function tremble() {
    if (isSmiley2Hovered) {
        smiley2.style.transform = `translate(${getRandomOffset()}px, ${getRandomOffset()}px) scale(10)`;
        idSmiley = requestAnimationFrame(tremble);
    }
}

function getRandomOffset() {
    return (Math.random() * 1000) - 500;
}

function activateImage(number) {
    const sliderPanels = document.querySelectorAll(".slider-panel");
    const sliderControls = document.querySelectorAll(".slider-control");

    removeClassFromElements(sliderPanels, "active");
    removeClassFromElements(sliderControls, "active");

    sliderPanels[number].classList.add("active");
    sliderControls[number].classList.add("active");
}

function clickSliderControl(evt) {
    const button = evt.target;
    const pos = [...sliderControls].indexOf(button);
    activateImage(pos);
    currentImage = pos;
    clearInterval(id);
    id = setInterval(nextImage, 2000);
}

function scrollTop() {
    window.scrollTo({
        behavior: "smooth",
        top: 0
    });
}

// Fonctions liées à la logique de l'application

function main() {
    console.log("Hello, world");

    const sliderControls = document.querySelectorAll(".slider-control");
    const smiley1 = document.getElementById("smiley1");
    const smiley2 = document.getElementById("smiley2");
    const smiley3 = document.getElementById("smiley3");
    const smiley3Div = document.getElementById("smiley3Div");

    let currentImage = 0;
    let id = setInterval(nextImage, 2000);
    let isSmiley2Hovered = false;
    let heartInterval = null;
    let idSmiley = null;

    smiley1.addEventListener("mouseover", rotateSmiley1);
    smiley1.addEventListener("mouseout", resetSmiley1);

    smiley2.addEventListener("mouseover", scaleAndTrembleSmiley2);
    smiley2.addEventListener("mouseout", resetSmiley2);

    smiley3.addEventListener("mouseover", () => {
        heartInterval = setInterval(createHeart, 200);
    });
    smiley3.addEventListener("mouseout", () => {
        clearInterval(heartInterval);
    });

    sliderControls.forEach((control) => {
        control.addEventListener("click", clickSliderControl);
    });

    const scrollToTopButton = document.querySelector(".scroll-to-top");
    scrollToTopButton.addEventListener("click", scrollTop);
}

window.addEventListener("load", main);


