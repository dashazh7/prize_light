document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector(".request__form-input--tel");

    phoneInput.addEventListener("input", function () {
        let numbersOnly = phoneInput.value.replace(/[^0-9]/g, "");

        if (numbersOnly.startsWith("7")) {
            numbersOnly = numbersOnly.slice(1);
        }

        numbersOnly = numbersOnly.slice(0, 10);

        phoneInput.value = "+7" + numbersOnly;
    });

    phoneInput.addEventListener("focus", function () {
        if (phoneInput.value === "") {
            phoneInput.value = "+7";
        }
    });

    phoneInput.addEventListener("blur", function () {
        if (phoneInput.value === "+7") {
            phoneInput.value = "";
        }
    });
});