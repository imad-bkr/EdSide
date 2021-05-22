(function () {
    var user = document.querySelector(".user");
    var userMenu = document.querySelector(".user-menu");

    menuShow = function () {
        user.style.backgroundColor = "rgb(35, 35, 95)";
        userMenu.classList.remove("hidden");
    };

    menuHide = function () {
        user.style.backgroundColor = "rgb(7, 7, 61)";
        userMenu.classList.add("hidden");
    };

    user.addEventListener("mouseover", menuShow);
    userMenu.addEventListener("mouseover", menuShow);
    user.addEventListener("mouseout", menuHide);
    userMenu.addEventListener("mouseout", menuHide);
})();