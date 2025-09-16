document.addEventListener("DOMContentLoaded", function () {
    const toggleLink = document.querySelector(".header__menu-window"); 
    const toggleButton = document.getElementById("AboutDropdownToggle"); 
    const dropdown = document.querySelector(".header__about-window");

    toggleLink.addEventListener("click", function (event) {
        event.preventDefault(); 
        dropdown.classList.toggle("active");

        if (dropdown.classList.contains("active")) {
            toggleButton.src = "./images/header/expand_less-white.svg"; 
        } else {
            toggleButton.src = "./images/header/expand_more-white.svg";
        }
    });

    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target) && event.target !== toggleLink && event.target !== toggleButton) {
            dropdown.classList.remove("active");
            toggleButton.src = "./images/header/expand_more-white.svg"; 
        }
    });
});