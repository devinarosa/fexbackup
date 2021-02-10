const contacts = document.querySelectorAll('.contactUs i.hidden');
const trigger = document.querySelector('.contactUs i.trigger')
var offset = -110;
var seperation = 110;

contacts.forEach(i => {
    i.setAttribute('offset', `${offset}`);
    offset -= seperation;
});

trigger.onclick = () => {
    if(contacts[0].style.transform == ''){
    contacts.forEach(i => {
        i.style.transform = `translate(0px, ${i.getAttribute('offset')}px)`;
        i.style.opacity = '1';
    })
    }else{
        contacts.forEach(i => {
        i.style.transform = ``;
        i.style.opacity = '';
    })
    }
}