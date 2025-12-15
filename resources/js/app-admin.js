function showFileName(input) {
    if (input.files.length > 0) {
        document.getElementById('file-name').innerText =
            input.files[0].name;
    }
}

function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = e => {
            document.getElementById('preview').src = e.target.result;
            document.getElementById('preview').classList.remove('hidden');
            document.getElementById('upload-text').classList.add('hidden');
            document.getElementById('file-name').innerText = input.files[0].name;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function handleDrop(event) {
    event.preventDefault();
    const input = document.getElementById('image');
    input.files = event.dataTransfer.files;
    previewImage(input);
}