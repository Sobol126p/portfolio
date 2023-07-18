var m = 0;

const menu1 = document.getElementById('menu1');
const menu2 = document.getElementById('menu2');
const menu3 = document.getElementById('menu3');
const menu4 = document.getElementById('menu4');

menu_button.addEventListener('click', function () {

    if (m == 0) {
        menu1.style.display = 'block';
        menu2.style.display = 'block';
        menu3.style.display = 'block';
        menu4.style.display = 'block';
        m = 1;
    }
    else if (m == 1) {
        menu1.style.display = 'none';
        menu2.style.display = 'none';
        menu3.style.display = 'none';
        menu4.style.display = 'none';
        m = 0;
    }

});


const kursy_button = document.getElementById('kursy-button');
const kursy_button_m = document.getElementById('kursy-button-m');
const kursy_button_s = document.getElementById('kursy-button-s');
const kursy_bg = document.getElementById('kursy-bg');
const kursy_border = document.getElementById('kursy-border');
const close_kursy_bg = document.getElementById('kursy-bg');
const body = document.getElementById('body');



kursy_button.addEventListener('click', function () {

    kursy_bg.style.display = 'block';
    body.style.overflow = 'hidden';
    kursy_border.style.display = 'block';
    console.log()

});

kursy_button_m.addEventListener('click', function () {

    kursy_bg.style.display = 'block';
    body.style.overflow = 'hidden';
    kursy_border.style.display = 'block';
    console.log()

});

kursy_button_s.addEventListener('click', function () {

    kursy_bg.style.display = 'block';
    body.style.overflow = 'hidden';
    kursy_border.style.display = 'block';
    console.log()

});

function close_kursy(){
    
    kursy_bg.style.display = 'none';
    body.style.overflow = 'auto';
    kursy_border.style.display = 'none';

}



close_kursy_bg.addEventListener('click', function () {

    kursy_bg.style.display = 'none';
    body.style.overflow = 'auto';
    kursy_border.style.display = 'none';

});

function str()
{
    console.log('klik');
}