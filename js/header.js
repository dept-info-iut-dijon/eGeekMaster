function BarreLateral () {
    const menuButton = document.getElementById("bars");
    const menu = document.getElementById("menu");

    if (menu.style.left === "0px") {
        menuButton.style.left = "250px";
    } else {
        menuButton.style.left = "0px";
        menu.style["box-shadow"] = "0px 0px 0px black";
    }

    menuButton.addEventListener("click", function () {
        if (menu.style.left === "0px") {
            menu.style.left = "-250px";
            menu.style["box-shadow"] = "0px 0px 0px black";
        } else {
            menu.style.left = "0px";
            menu.style["box-shadow"] = "0px 0px 30px black";
        }
    });

    document.addEventListener("click", function (event) {
        if (event.target !== menuButton && event.target !== menu) {
            menu.style.left = "-250px";
            menu.style["box-shadow"] = "0px 0px 0px black";
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const menuIcon = document.getElementById('bars');
        const sideMenu = document.getElementById('menu');
    
        menuIcon.addEventListener('click', function () {
            if (sideMenu.style.left === '-250px') {
                sideMenu.style.left = '0';
                menu.style["box-shadow"] = "0px 0px 0px black";
            } else {
                sideMenu.style.left = '-250px';
                menu.style["box-shadow"] = "0px 0px 30px black";
            }
        });
    });
};

window.addEventListener('load', BarreLateral);