
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


//arrow controls
var arrowRight = document.querySelectorAll('.controls .arrow .fa-caret-right');
var arrowLeft = document.querySelectorAll('.controls .arrow .fa-caret-left');

arrowRight.forEach(i => {
    i.onclick = e => {
        let scrollTarget = e.target.parentElement.parentElement.parentElement.parentElement.querySelector('.horizontalScroll');
        let maxScroll = scrollTarget.scrollWidth - scrollTarget.clientWidth;

        scrollTarget.scrollLeft += 1000;
        e.target.previousSibling.previousSibling.style.color = 'black';

        if(scrollTarget.scrollLeft > maxScroll - 10){    
            e.target.style.color = 'lightgrey';
        }
    }
});

arrowLeft.forEach(i => {
    i.onclick = e => {
        let scrollTarget = e.target.parentElement.parentElement.parentElement.parentElement.querySelector('.horizontalScroll');
        let maxScroll = scrollTarget.scrollWidth - scrollTarget.clientWidth;
        
        scrollTarget.scrollLeft -= 1000;
        e.target.nextSibling.nextSibling.style.color = 'black';

        if(scrollTarget.scrollLeft <= 10){    
            e.target.style.color = 'lightgrey';
        }
}
});

//dragable
var scroll = document.querySelectorAll('.horizontalScroll');
var initPosition = 0;
var finalPosition = 0;
var dragging = false;
var sensitivity = 1.7;

window.onload = () => {
    if(window.innerWidth < 575){
        scroll.forEach(i => {
            i.onmousedown = e => {
            }
            i.onmousemove = e => {
            }
            i.onmouseup = e => { 
            }
        })
    }
    else{
        scroll.forEach(i => {
            i.onmousedown = e => {
                initPosition = e.clientX;
                e.target.style.cursor = 'grabbing';
                dragging = true;
            }
            i.onmousemove = e => {
                currentPosition = e.clientX;
                dx = currentPosition - initPosition;
                if(dx > 4){
                    i.querySelectorAll('.item').forEach(image => {
                        image.style.pointerEvents = 'none';
                        image.style.userSelect = 'none';
                    })
                }
                if(dragging){
                    finalPosition = e.clientX;
                    e.target.scrollLeft -= (finalPosition - initPosition) * sensitivity;
                }    
            }
            i.onmouseup = e => { 
                initPosition = 0;
                finalPosition = 0;
                dragging = false;
                e.target.style.cursor = 'grab';
                i.querySelectorAll('.item').forEach(image => {
                    image.style.pointerEvents = 'auto';
                    image.style.userSelect = 'auto';
                })
            }
        })
    }
}

document.querySelector('body').onresize = () => {

    if(window.innerWidth < 575){
        scroll.forEach(i => {
            i.onmousedown = e => {
            }
            i.onmousemove = e => {
            }
            i.onmouseup = e => { 
            }
        })
    }
    else{
        scroll.forEach(i => {
            i.onmousedown = e => {
                initPosition = e.clientX;
                e.target.style.cursor = 'grabbing';
                dragging = true;
            }
            i.onmousemove = e => {
                currentPosition = e.clientX;
                dx = currentPosition - initPosition;
                if(dx > 4){
                    i.querySelectorAll('.item').forEach(image => {
                        image.style.pointerEvents = 'none';
                        image.style.userSelect = 'none';
                    })
                }
                if(dragging){
                    finalPosition = e.clientX;
                    e.target.scrollLeft -= (finalPosition - initPosition) * sensitivity;
                }    
            }
            i.onmouseup = e => { 
                initPosition = 0;
                finalPosition = 0;
                dragging = false;
                e.target.style.cursor = 'grab';
                i.querySelectorAll('.item').forEach(image => {
                    image.style.pointerEvents = 'auto';
                    image.style.userSelect = 'auto';
                })
            }
        })
    }
}