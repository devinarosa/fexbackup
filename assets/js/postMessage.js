

// edit post

document.querySelectorAll('.edit-post').forEach(element => {
    var id_post = $(element).attr('id-post');
    element.addEventListener('click', (e) => {
        window.scrollTo(0,0);
        document.querySelector('.post-text-area').value = e.target.parentElement.parentElement.parentElement.parentElement.querySelector('.post-text').innerText;
        document.querySelector('.post-btn').innerText = "Edit";
        document.querySelector('.khususEditFlag').value = "Y";
        document.querySelector('.khususIDPost').value = id_post;
        document.querySelector('.imageElement').src = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.querySelector('img').src;
    })
    

});


//addimage
var preview = document.createElement("div");
preview.className = "row pl-3";
var imageElement = document.createElement('img');
imageElement.className = 'imageElement';
imageElement.style.width = "300px";
preview.appendChild(imageElement);
var button = document.querySelector('input[type="file"]');
var ref = document.querySelector(".col-sm-7").parentElement;
var imagePreview;

document.querySelector(".col-sm-7").parentElement.parentElement.insertBefore(preview, ref);

button.onchange = e => {
    let previewTarget = document.querySelector('.imageElement');
    imagePreview = URL.createObjectURL(e.target.files[0]);
    previewTarget.src = imagePreview;
    previewTarget.onload = () => {
        URL.revokeObjectURL(newImage);
    }
}