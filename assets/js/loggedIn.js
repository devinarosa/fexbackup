        // change booth color
        // var counter = 0;
        // setInterval(e => {
        //     counter += 1;
        //     document.querySelector('.booth').style.filter = `hue-rotate(${counter}deg)`;
        // }, 10);

        function initModals(){
            document.querySelectorAll(".item").forEach(i => {
                i.style.filter = i.getAttribute('color_booth').replace(';','');
                
                i.onclick = e => {
                    const schoolModal = document.querySelector('.schoolFullModal');

                    var color = e.target.parentElement.getAttribute('color_booth').replace(';','');
                    // console.log(color)
                    // change name
                    schoolModal.querySelector('.booth-name').innerText = e.target.parentElement.querySelector('.boothSmallName').innerText;
                    // change deskripsi
                    schoolModal.querySelector('.profile').innerText = e.target.parentElement.getAttribute('deskripsi');
                    // change pic
                    schoolModal.querySelector('.booth-img').setAttribute('src', `assets/upload/foto/${e.target.parentElement.getAttribute('foto')}`);
                    // change logo
                    schoolModal.querySelector('.booth-logo').setAttribute('src', `assets/img/roles/${e.target.parentElement.getAttribute('logo')}`);
                    // change href
                    schoolModal.querySelectorAll('a').forEach(i => {
                        i.setAttribute('href', `${e.target.parentElement.getAttribute('linkToProfile')}`);
                    })
                    //change color
                    document.querySelector('.booth').style.filter = color;
                    // document.getElementsByClassName(".booth").style.filter = color;
                    // console.log(document.querySelector('.booth'))
                    // $('.img-fluid').css('filter', color)
                    document.querySelector('.booth-contactUs').style.filter = color;

                    $(".schoolFullModal").modal("toggle");
                }
            })
        }
        
        initModals();
        // // ADD CLOSE BUTTON
        var added = false;
        var bdy = document.querySelector('body');
        const asd = { attributes: true, childlist : true, subtree : true};

        const obs = new MutationObserver((a, b) => {
            if(!added){
            added = true;
            const backdrop = document.querySelector('.schoolFullModal');

            let close = document.createElement('i');
            close.className = "far fa-times fa-2x text-white mr-3 mr-sm-0 d-none d-sm-block";
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

        obs.observe(bdy, asd);

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



        ///dragable
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

        function showAll(th) {
            var id_category = th;

            $.ajax({
              type: "POST",
              url: baseurl+"ajax/getChangeCategory",
              data:{
                id_category:id_category
              },
              success: function(response) {
                $('.change').html(response);
                initModals();
              }
            })
        }

        let kategori = document.querySelector('.pilihanKategori').querySelectorAll('div');
        kategori[0].querySelector('h6').classList.add('aktif');

        kategori.forEach(i => {

            i.onclick = e => {
                
                document.querySelector('.aktif').classList.remove('aktif');

                e.target.parentElement.querySelector('h6').classList.add('aktif');

                // e.target.parentElement.querySelector('h6').classList.toggle('aktif');

            }

        })

