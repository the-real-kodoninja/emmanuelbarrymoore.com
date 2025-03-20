function upTgle(id) {
   $("#"+id).toggle(300);
}

function clBtnX() {
    $('#clXimg, #clXsch').hide(300);
    $('.bckDrp').hide();
}

function schMdle2x(){
    $('.schMdCnt').show(300);
    $('.bckDrp, .unv1a').show();
    $('.unv2a, .cntMsg, .unv3a, .unv4a').hide();
    $('#schMd-1a').text('Search Results for:');
    $('.unv1a').text('Sorry were still under maintenance :(');
    return false;
}

function cntUsr() {
    $('.schMdCnt').show(300);
    $('.bckDrp, .unv2a, .cntMsg, .cntOpt').show();
    $('.unv1a, #dialog-form1, .unv3a, .unv4a').hide();
    $('#schMd-1a').text('Contacting Emmanuel');
    $('#unv1a').text('');
}

function noti_viewMore() {
    $('.schMdCnt').show(300);
    $('.bckDrp, .unv2a, .cntMsg, .cntOpt').show();
    $('#dialog-form1, .unv3a, .unv4a, .cntMsg, .cntOpt').hide();
    $('#schMd-1a').text('Notification view more results');
    $('.unv1a').text('Sorry, I was created extremely recently so I dont have any more updates.');
}

function notiMdle() {
    $('#notiMdle').toggle(300);
    $('#lGnMdle').hide();
}

function lGnMdle() {
    $('#lGnMdle').toggle(300);
    $('#notiMdle').hide();
}

function fileOpn1() {
    $('.schMdCnt, .unv3a').show(300);
    $('.bckDrp').show();
    $('.unv1a, .unv2a, .unv4a, .cntMsg').hide();
     $('#schMd-1a').text('Emmanuel\'s Cover Letter');
}

function fileOpn2() {
    $('.schMdCnt, .unv4a').show(300);
    $('.bckDrp').show();
    $('.unv1a, .unv2a, .unv3a, .cntMsg').hide();
     $('#schMd-1a').text('Emmanuel\'s Resume');
}

function rqstFm() {
    $('.schMdCnt').show(300);
    $('.bckDrp, .cntMsg, .unv2a').show();
    $('.unv1a, .unv3a, .unv4a, .cntOpt, #dialog-form1').hide();
    $('#schMd-1a').text('Requesting references');
}

var pic = $('.uSrImg');
var curPos = 0;

var requestAnimationFrame = window.requestAnimationFrame ||
                            window.mozrequestAnimationFrame ||
                            window.webkitrequestAnimationFrame ||
                            window.msrequestAnimationFrame;

function makePicMove() {
    curPos += 5;

    pic.style.left = curPos + "px";

    requestAnimationFrame(makePicMove);
}

makePicMove();

