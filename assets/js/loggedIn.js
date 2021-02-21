// change booth color
var counter = 0;
setInterval(e => {
    counter += 1;
    document.querySelector('.booth').style.filter = `hue-rotate(${counter}deg)`;
}, 10);

document.querySelectorAll(".item").forEach(i => {
    i.onclick = e => {
        const schoolModal = document.querySelector('.schoolFullModal');

        // change name
        schoolModal.querySelector('.booth-name').innerText = e.target.parentElement.querySelector('.boothSmallName').innerText;
        // change pic
        schoolModal.querySelector('.booth-img').setAttribute('src', `./img/carousel ${Math.ceil(Math.random()*4)}.jpg`);
        // change logo
        schoolModal.querySelector('.booth-logo').setAttribute('src', `./img/sekolah ${Math.ceil(Math.random()*6)}.png`);
        // change href
        //schoolModal.querySelector('a').setAttribute('href', `${Math.ceil(Math.random()*6)}.html`);

        $(".schoolFullModal").modal("toggle");
    }
})


// ADD CLOSE BUTTON
var added = false;
var body = document.querySelector('body');
const config = { attributes: true, childlist : true, subtree : true};

const observer = new MutationObserver((a, b) => {
    if(!added){
    added = true;
    const backdrop = document.querySelector('.schoolFullModal');

    let close = document.createElement('i');
    close.className = "far fa-times fa-2x text-white mr-3 mr-sm-0";
    close.style.position = "absolute";
    close.style.top = "2%";
    close.style.right = "2%";
    close.style.cursor = "pointer";

    close.onclick =  e => {
        $(".schoolFullModal").modal("toggle");
    };

    backdrop.appendChild(close);
    }
});

observer.observe(body, config);

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