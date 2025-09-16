document.addEventListener("DOMContentLoaded", function () {
    const toggleLink = document.querySelector(".header__email"); 
    const toggleButton = document.getElementById("dropdownToggle"); 
    const dropdown = document.querySelector(".header__window");

    toggleLink.addEventListener("click", function (event) {
        event.preventDefault(); 
        dropdown.classList.toggle("active");

        if (dropdown.classList.contains("active")) {
            toggleButton.src = "./images/header/expand_less-blue.svg"; 
        } else {
            toggleButton.src = "./images/header/expand_more-blue.svg";
        }
    });

    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target) && event.target !== toggleLink && event.target !== toggleButton) {
            dropdown.classList.remove("active");
            toggleButton.src = "./images/header/expand_more-blue.svg"; 
        }
    });
});