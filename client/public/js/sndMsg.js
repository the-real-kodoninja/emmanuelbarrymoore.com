function sndMsg() {

    $('#dialog-form1').show(300).css('display','inline-block').css('background','linear-gradient(#EA1414, #E73333)').addClass('sndMsg-error');
    $('#dialog-form1').text('Sorry, something went wrong. Please use other methods listed above to contact me for now!');

    var n = _("cN").value;
    var e = _("cE").value;
    var p = _("cP").value;
    var w = _("cW").value;
    var m = _("cM").value;

    if(n == "" || e == "" || p == "" || w == "" || m == ""){
        $('#dialog-form1').show(300).css('display','inline-block').css('background','linear-gradient(#EA1414, #E73333)').addClass('sndMsg-error');
        $('#dialog-form1').text('Sorry, something is missing.');
    } else {
        _(".sndMsg").innerHTML = 'please wait...';
        var ajax = ajaxObj("POST", "prs/sndMsg.php");
        ajax.onreadystatechange = function() {
       if(ajaxReturn(ajax) == true) {
           if(ajax.responseText == "send_failed"){
				$('#dialog-form1').show(300).css('display','inline-block').css('background','linear-gradient(#EA1414, #E73333)').addClass('sndMsg-error');
                $('#dialog-form1').text('Sorry, something went wrong. Please use other methods listed above to contact me for now!');
				} else {
				_(".sndMsg").innerHTML = 'sent!';
				$('#dialog-form1').show(300).css('display','inline-block').css('background','linear-gradient(#3FDB10, #25AD18)').addClass('sndMsg-success');
                $('#dialog-form1').text('Success!');
				}
      		}
        }
        ajax.send("n="+n+"&e="+e+"&p="+p+"&w="+w+"&m="+m);
    }
}

