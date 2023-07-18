
var nr = 0;
var last_nr = 0;


function slide_starter() {
    slide_r1 = [];
    slide_r1[0] = document.getElementById('slide1_r1');
    slide_r1[1] = document.getElementById('slide2_r1');
    slide_r1[2] = document.getElementById('slide3_r1');

    slide_r1[0].style.display = 'grid';
    slide_r1[1].style.display = 'none';
    slide_r1[2].style.display = 'none';

    left_button_r1 = document.getElementById('left_button_r1');
    right_button_r1 = document.getElementById('right_button_r1');


    slide_s = [];
    slide_s[0] = document.getElementById('slide1s');
    slide_s[1] = document.getElementById('slide2s');
    slide_s[2] = document.getElementById('slide3s');

    slide_s[0].style.display = 'grid';
    slide_s[1].style.display = 'none';
    slide_s[2].style.display = 'none';

    left_button_s = document.getElementById('left_button_s');
    right_button_s = document.getElementById('right_button_s');

    left_button_m = document.getElementById('left_button_m');
    right_button_m = document.getElementById('right_button_m');


    slide_m = [];
    slide_m[0] = document.getElementById('slide1m');
    slide_m[1] = document.getElementById('slide2m');
    slide_m[2] = document.getElementById('slide3m');

    slide_m[0].style.display = 'grid';
    slide_m[1].style.display = 'none';
    slide_m[2].style.display = 'none';



    menu_button = document.getElementById('menu_button');

    //const menu1 = document.getElementById('menu1');
   // const menu2 = document.getElementById('menu2');
   // const menu3 = document.getElementById('menu3');
   // const menu4 = document.getElementById('menu4');

}


left_button_r1.addEventListener('click', function () {

    if (nr == 0) {
        slide_r1[nr].style.display = 'none';
        slide_r1[2].style.display = 'grid';
        nr = 2;
        last_nr = 1
    }
    else {
        slide_r1[nr].style.display = 'none';
        slide_r1[nr - 1].style.display = 'grid';
        nr = nr - 1;
        last_nr = nr;
    }

});


right_button_r1.addEventListener('click', function () {

    if (nr == 2) {
        slide_r1[nr].style.display = 'none';
        slide_r1[0].style.display = 'grid';
        nr = 0;
        last_nr = 1
    }
    else {
        slide_r1[nr].style.display = 'none';
        slide_r1[nr + 1].style.display = 'grid';
        nr = nr + 1;
        last_nr = nr;
    }

});



var nrm = 0;
var last_nrm = 0;




left_button_m.addEventListener('click', function () {

    if (nrm == 0) {
        slide_m[nrm].style.display = 'none';
        slide_m[2].style.display = 'grid';
        nrs = 2;
        last_nrm = 1
    }
    else {
        slide_m[nrm].style.display = 'none';
        slide_m[nrm - 1].style.display = 'grid';
        nrm = nrm - 1;
        last_nrm = nrm;
    }

});


right_button_m.addEventListener('click', function () {

    if (nrm == 2) {
        slide_m[nrm].style.display = 'none';
        slide_m[0].style.display = 'grid';
        nrm = 0;
        last_nrm = 1
    }
    else {
        slide_m[nrm].style.display = 'none';
        slide_m[nrm + 1].style.display = 'grid';
        nrm = nrm + 1;
        last_nrm = nrm;
    }

});





var nrs = 0;
var last_nrs = 0;



left_button_s.addEventListener('click', function () {

    if (nrs == 0) {
        slide_s[nrs].style.display = 'none';
        slide_s[2].style.display = 'grid';
        nrs = 2;
        last_nrs = 1
    }
    else {
        slide_s[nrs].style.display = 'none';
        slide_s[nrs - 1].style.display = 'grid';
        nrs = nrs - 1;
        last_nrs = nrs;
    }

});


right_button_s.addEventListener('click', function () {

    if (nrs == 2) {
        slide_s[nrs].style.display = 'none';
        slide_s[0].style.display = 'grid';
        nrs = 0;
        last_nrs = 1
    }
    else {
        slide_s[nrs].style.display = 'none';
        slide_s[nrs + 1].style.display = 'grid';
        nrs = nrs + 1;
        last_nrs = nrs;
    }

});






/*setInterval(function () {
    nr++;
    if (nr == 3) {
        nr = 0;
    }

    slide[last_nr].style.display = 'none';
    slide[nr].style.display = 'grid';

    last_nr = nr;
    console.log('nr: ' + nr + '  ---  ' + last_nr)

}, 4000);*/