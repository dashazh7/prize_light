const urlParams = new URLSearchParams(window.location.search);
const success = urlParams.get('success');

if (success == '1') {
    const modal = document.getElementById('successModal');
    const modal_close = document.getElementsByClassName('modal__close')[0];

    modal.style.display = 'block';

    modal_close.onclick = function() {
        modal.style.display = 'none';

        history.replaceState(null, null, window.location.pathname);
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';

            history.replaceState(null, null, window.location.pathname);
        }
    }
}