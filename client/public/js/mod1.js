function navTab1() {
    $('#tab1a').addClass('itm1');
    $('#tab1a').css('color','#4F5D95').css('border-bottom','3px solid #4F5D95');
    $('#tab2a, #tab3a, #tab4a, #tab5a').css('color','#424141').css('border','none');
    $('#tab1').show(300);
    $('#tab2, #tab3, #tab4, #tab5').hide();
}

function navTab2() {
    $('#tab2a').addClass('itm2');
    $('#tab2a').css('color','#0E3EFF').css('border-bottom','3px solid #0E3EFF');
    $('#tab1a, #tab3a, #tab4a, #tab5a').css('color','#424141').css('border','none');
    $('#tab2').show(300);
    $('#tab1, #tab3, #tab4, #tab5').hide();
}

function navTab3() {
    $('#tab3a').addClass('itm3');
    $('#tab3a').css('color','#2DE621').css('border-bottom','3px solid #2DE621');
    $('#tab1a, #tab2a, #tab4a, #tab5a').css('color','#424141').css('border','none');
    $('#tab3').show(300);
    $('#tab1, #tab2, #tab4, #tab5').hide();
}

function navTab4() {
    $('#tab4a').addClass('itm4');
    $('#tab4a').css('color','#F3B114').css('border-bottom','3px solid #F3B114');
    $('#tab1a, #tab2a, #tab3a, #tab5a').css('color','#424141').css('border','none');
    $('#tab4').show(300);
    $('#tab1, #tab2, #tab3, #tab5').hide();
}

function navTab5() {
    $('#tab5a').addClass('itm4');
    $('#tab5a').css('color','#B416D4').css('border-bottom','3px solid #B416D4');
    $('#tab1a, #tab2a, #tab3a, #tab4a').css('color','#424141').css('border','none');
    $('#tab5').show(300);
    $('#tab1, #tab2, #tab3, #tab4').hide();
}

//project tabs
function prjTab1a() {
    $('#prj-1a').addClass('iTmSel');
    $('#prj-2a, #prj-3a, #prj-4a, #prj-5a').removeClass('iTmSel');
    $('#prj1b').show(300);
    $('#prj2b, #prj3b, #prj4b, #prj5b').hide();
}

function prjTab2a() {
    $('#prj-2a').addClass('iTmSel');
    $('#prj-1a, #prj-3a, #prj-4a, #prj-5a').removeClass('iTmSel');
    $('#prj2b').show(300);
    $('#prj1b, #prj3b, #prj4b, #prj5b').hide();
}

function prjTab3a() {
    $('#prj-3a').addClass('iTmSel');
    $('#prj-1a, #prj-2a, #prj-4a, #prj-5a').removeClass('iTmSel');
    $('#prj3b').show(300);
    $('#prj2b, #prj2b, #prj4b, #prj5b').hide();
}

function prjTab4a() {
    $('#prj-4a').addClass('iTmSel');
    $('#prj-1a, #prj-2a, #prj-3a, #prj-5a').removeClass('iTmSel');
    $('#prj4b').show(300);
    $('#prj1b, #prj2b, #prj3b, #prj5b').hide();
}

function prjTab5a() {
    $('#prj-5a').addClass('iTmSel');
    $('#prj-1a, #prj-2a, #prj-3a, #prj-4a').removeClass('iTmSel');
    $('#prj5b').show(300);
    $('#prj1b, #prj2b, #prj3b, #prj4b').hide();
}

//code tabs
function cdeTab1() {
    $('#cde-1a').addClass('iTmSel');
    $('#cde-2a, #cde-3a, #cde-4a, #cde-5a').removeClass('iTmSel');
    $('#cdeVw1').show(300);
    $('#cdeVw2, #cdeVw3, #cdeVw4, #cdeVw5').hide();
}

function cdeTab2() {
    $('#cde-2a').addClass('iTmSel');
    $('#cde-1a, #cde-3a, #cde-4a, #cde-5a').removeClass('iTmSel');
    $('#cdeVw2').show(300);
    $('#cdeVw1, #cdeVw3, #cdeVw4, #cdeVw5').hide();
}

function cdeTab3() {
    $('#cde-3a').addClass('iTmSel');
    $('#cde-1a, #cde-2a, #cde-4a, #cde-5a').removeClass('iTmSel');
    $('#cdeVw3').show(300);
    $('#cdeVw1, #cdeVw2, #cdeVw4, #cdeVw5').hide();
}

function cdeTab4() {
    $('#cde-4a').addClass('iTmSel');
    $('#cde-1a, #cde-2a, #cde-3a, #cde-5a').removeClass('iTmSel');
    $('#cdeVw4').show(300);
    $('#cdeVw1, #cdeVw2, #cdeVw3, #cdeVw5').hide();
}

function cdeTab5() {
    $('#cde-5a').addClass('iTmSel');
    $('#cde-1a, #cde-2a, #cde-3a, #cde-4a').removeClass('iTmSel');
    $('#cdeVw5').show(300);
    $('#cdeVw1, #cdeVw2, #cdeVw3, #cdeVw4').hide();
}


// Wireframe tabs

function wRFltr1a() {
    $('.pht, .vct').show(300);
    $('#tab1b').css('color','#4F5D95').css('border-bottom','3px solid #4F5D95');
    $('#tab2b, #tab3b, #tab4b').css('color','#424141').css('border','none');
}

function wRFltr2a() {
    $('.pht').show(300);
    $('.vct, .pdf').hide();
    $('#tab2b').css('color','#0E3EFF').css('border-bottom','3px solid #0E3EFF');
    $('#tab1b, #tab3b, #tab4b').css('color','#424141').css('border','none');
}

function wRFltr3a() {
    $('.pdf').show(300);
    $('.pht, .vct').hide();
    $('#tab3b').css('color','#2DE621').css('border-bottom','3px solid #2DE621');
    $('#tab1b, #tab2b, #tab4b').css('color','#424141').css('border','none');
}

function wRFltr4a() {
    $('.vct').show(300);
    $('.pht, .pdf').hide();
    $('#tab4b').css('color','#F3B114').css('border-bottom','3px solid #F3B114');
    $('#tab1b, #tab2b, #tab3b').css('color','#424141').css('border','none');
}

