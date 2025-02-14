const scriptURL = 'https://script.google.com/macros/s/AKfycbxe1-PCyToCjbqearkx73c5uwG-llmUUTRMGNpxgD5ZgALZ6QT1VXqMYuOWsUL3sTk7/exec'
const form = document.forms['submit-to-google-sheet']
                         
form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    then(response => console.log('Success!', response))
    .catch(error => console.error('Error!', error.message))
})