// edit post

document.querySelectorAll('.edit-post').forEach(element => {
    element.addEventListener('click', (e) => {
        window.scrollTo(0,0);
        document.querySelector('.post-text-area').value = e.target.parentElement.parentElement.parentElement.parentElement.querySelector('.post-text').innerText;
        document.querySelector('.post-btn').innerText = "Edit";
    })
});

