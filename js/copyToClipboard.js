function copyToClipboard(element) {
    const text = element.innerText;
    navigator.clipboard.writeText(text).then(() => {
        alert("Скопировано: " + text);
    }).catch(err => {
        console.error("Ошибка копирования:", err);
    });
};