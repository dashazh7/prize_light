    document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".fixed__header");
    const aboutSection = document.querySelector("#about");

    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            header.classList.remove("visible");
        } else {
            header.classList.add("visible");
        }
    }, { threshold: 0.1 });

    observer.observe(aboutSection);
});