function BarreLateral () {
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
        } else {
            menu.style.left = "0px";
        }
    });

    document.addEventListener("click", function (event) {
        if (event.target !== menuButton && event.target !== menu) {
            menu.style.left = "-250px";
        }
    });
    document.addEventListener('DOMContentLoaded', function () {
        const menuIcon = document.getElementById('bars');
        const sideMenu = document.getElementById('menu');
    
        menuIcon.addEventListener('click', function () {
            if (sideMenu.style.left === '-250px') {
                sideMenu.style.left = '0';
            } else {
                sideMenu.style.left = '-250px';
            }
        });
    });
};
