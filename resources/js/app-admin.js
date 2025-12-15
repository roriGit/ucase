function showFileName(input) {
    if (input.files.length > 0) {
        document.getElementById('file-name').innerText =
            input.files[0].name;
    }
}

function handleDrop(event) {
    event.preventDefault();
    const input = document.getElementById('image');
    input.files = event.dataTransfer.files;
    showFileName(input);
}
