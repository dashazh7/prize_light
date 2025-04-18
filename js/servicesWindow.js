document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("ServicesDropdownToggle");
    const dropdown = document.querySelector(".header__services-window");

    toggleButton.addEventListener("click", function (event) {
        event.preventDefault(); 
        dropdown.classList.toggle("active");

        if (dropdown.classList.contains("active")) {
            toggleButton.src = "./images/header/expand_less.png"; 
        } else {
            toggleButton.src = "./images/header/expand_more.svg";
        }
    });

    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target) && event.target !== toggleButton) {
            dropdown.classList.remove("active");
            toggleButton.src = "./images/header/expand_more.svg"; 
        }
    });
});
