const callbackButton = document.querySelector('.call__button');
const header = document.querySelector('header');
const footer = document.querySelector('footer');
const headerHeight = header.offsetHeight; 
const footerHeight = footer.offsetHeight; 

function toggleCallbackButton() {
    const scrollPosition = window.scrollY; 
    const windowHeight = window.innerHeight; 


    if (scrollPosition > headerHeight && scrollPosition < document.body.scrollHeight - footerHeight - windowHeight) {
        callbackButton.style.opacity = 1; 
        callbackButton.style.transform = 'translateY(0)'; 
    } else {
        callbackButton.style.opacity = 0; 
        callbackButton.style.transform = 'translateY(20px)'; 
    }
}

window.addEventListener('scroll', toggleCallbackButton);

toggleCallbackButton();