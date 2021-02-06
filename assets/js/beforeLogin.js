
// call modal on search bar click before login

document.querySelector('form').onsubmit = e => {
    e.preventDefault();
    $('.registerModal').modal('toggle');
    //bring up modal
}


// submitButton

document.querySelector('.submitButton').onclick = e => {
    $('.registerModal').modal('toggle');
}

// more
document.querySelector('.more').onclick = e => {
    e.preventDefault();
    $('.registerModal').modal('toggle');
}

// carousel items
document.querySelectorAll('.item').forEach(item => {
    item.onclick = e => {
        $('.registerModal').modal('toggle');
    }
})

// explore
document.querySelector('.triggerModal').onclick = e => {
    e.preventDefault();
    $('.registerModal').modal('toggle');
}