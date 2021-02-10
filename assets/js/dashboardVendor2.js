$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

//boothColor
const boothColorChoices = document.querySelectorAll('.boothColorButton');
var interval = 360/boothColorChoices.length ;
var hueShift = 0;

const previewBooth = document.querySelector('.boothPreview .preview');
const inputWarna = document.querySelector('.input_warna');

boothColorChoices.forEach(e => {
    //add filter to change color
    e.style.filter = `hue-rotate(${hueShift}deg)`;
    hueShift += interval;

    //radio
    e.onclick = i => {
        i.target.parentElement.querySelector('.checked').classList.remove('checked');
        i.target.classList.add('checked');
        previewBooth.style.filter = document.querySelector('.checked').style.filter;
        inputWarna.value = document.querySelector('.checked').style.filter;
    }
}  
);

previewBooth.style.filter = document.querySelector('.checked').style.filter;

//image handling
const inputFoto = document.querySelectorAll('.foto .inputImg');
const inputFasilitas = document.querySelectorAll('.fasilitas .inputImg');
const boothFoto = document.querySelector('.gallery img')
var newImage;

inputFasilitas.forEach(i => {
i.onchange = e => {
    let previewTarget = e.target.parentElement.parentElement.querySelector('.preview');
    newImage = URL.createObjectURL(e.target.files[0]);
    previewTarget.src = newImage;
    previewTarget.onload = () => {
        URL.revokeObjectURL(newImage);
    }
}
});

inputFoto.forEach(i => {
i.onchange = e => {
    let previewTarget = e.target.parentElement.parentElement.querySelector('.preview');
    newImage = URL.createObjectURL(e.target.files[0]);
    previewTarget.src = newImage;
    boothFoto.src = newImage;
    boothFoto.onload = () => {
        URL.revokeObjectURL(newImage);
    }
}
});


const removeFoto = document.querySelectorAll('.foto .removeImage');
removeFoto.forEach(i => {

    i.onclick = e => {
        let previewTarget = e.target.parentElement.querySelector('.preview');
        let inputTarget = e.target.parentElement.parentElement.querySelector('.inputImg');
        
        previewTarget.src = './img/tambahGambar.png';
        inputTarget.value = '';
    }
})


//boothPreview

const nameField = document.querySelector('#nama');
const boothName = document.querySelector('.booth-name')
nameField.onkeyup = () => {
    boothName.textContent = nameField.value;
    if(nameField.value == ''){
        boothName.textContent = 'Halmahera Music School';
    }
}

const descField = document.querySelector('#deskripsi');
const boothDesc = document.querySelector('.booth-desc')
descField.onkeyup = () => {
    boothDesc.textContent = descField.value;
    if(descField.value == ''){
        boothDesc.textContent = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, odit!';
    }
}

const inputLogo = document.querySelector('.inputLogo');
const previewLogo = document.querySelector('.logoPreview .preview');
const boothLogo = document.querySelector('.logo .booth-logo');

inputLogo.onchange = () => {
    let newImage = URL.createObjectURL(inputLogo.files[0]);
    previewLogo.src = newImage;
    boothLogo.src = newImage;
    boothLogo.onload = () => {
        URL.revokeObjectURL(newImage);
    }
}

//add fasilitas
const plus = document.querySelector('.plus');
const ref = document.querySelector('.p');

plus.onclick = e => {
    let target = e.target.parentElement.parentElement.parentElement;

    let tmp = document.createElement('div');
    tmp.className = 'col-md-4 mb-4';
    
    let fotoPreview = document.createElement('div');
    fotoPreview.className = 'rounded border fotoPreview';

    let i = document.createElement('i');
    i.className = 'far fa-times removeImage';
    i.onclick = a => {a.target.parentElement.parentElement.remove()};

    let img = document.createElement('img');
    img.src = 'assets/img/tambahGambar.png';
    img.className = 'preview';

    fotoPreview.appendChild(i);
    fotoPreview.appendChild(img);
    tmp.appendChild(fotoPreview);

    let file = document.createElement('div');
    file.className = 'custom-file mt-3';
    file.style.fontSize = '15px';

    let input = document.createElement('input');
    input.type = 'file';
    input.className = 'custom-file-input inputImg';
    input.id = 'customFile';
    input.accept = 'image/*';

    let label = document.createElement('label');
    label.className = 'custom-file-label';
    label.for = 'customFile';
    label.innerText = 'Upload/Edit';

    file.appendChild(input);
    file.appendChild(label);
    tmp.appendChild(file);

    input = document.createElement('input');
    input.type = 'text';
    input.className = 'form-control pl-3 mt-3';
    input.id = 'nama_fasilitas';
    input.placeholder = 'Nama Fasilitas';
    input.style.borderRadius = '20px';

    tmp.appendChild(input);
    target.insertBefore(tmp, ref);
}