window.onload = function () {
    const menuButton = document.getElementById("bars");
    const menu = document.getElementById("menu");

    if (menu.style.left === "0px") {
        menuButton.style.left = "250px";
    } else {
        menuButton.style.left = "0px";
    }

    menuButton.addEventListener("click", function () {
        if (menu.style.left === "0px") {
            menu.style.left = "-250px";
            menuButton.style.left = "0px";
        } else {
            menu.style.left = "0px";
            menuButton.style.left = "250px";
        }
    });

    document.addEventListener("click", function (event) {
        if (event.target !== menuButton && event.target !== menu) {
            menu.style.left = "-250px";
            menuButton.style.left = "0px";
        }
    });
};