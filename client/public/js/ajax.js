function ajaxObj( meth, url ) {
var x = new XMLHttpRequest();
x.open( meth, url, true );
x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
return x;
}
function ajaxReturn(x){
if(x.readyState == 4 && x.status == 200){
   return true;
}
}
//if (screen.width <= 750) {
//document.location = "mobile/index.php";
//}

function skck_1() {
	_("sdc_1").innerHTML = '<input type="hidden" name="sdq" id="sdq" value="<?php echo $sk5; ?>"/>';
	_("sdc_2").innerHTML = '<input class="sdc dH" type="text" name="sdc" id="sdc"/>';
	_("sdc_3").innerHTML = '<input type="hidden" name="xt" id="xt" value="<?php echo $xtc; ?>"/>';
}
window.addEventListener("load", skck_1);


function ldCnt1(type,elem){

	_(elem).innerHTML = 'Loading <span id="ldIcn"></span>';
	var ajax = ajaxObj("POST", "php_includes/content/feedCnt.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			if(ajaxReturn(ajax) == true){
				_("ldCnt1").innerHTML = ajax.responseText;
			} else {
				_("ldCnt1").innerHTML = ajax.responseText;
			}
		}
	}
	ajax.send("type="+type);
}


function rpte(type,id,user,r1,r2,elem){
	var r1 = _("r1").value;
	var r2 = _("r2").value;
	if(r1 == ""){
		_("rus").innerHTML = '<span class="se2">Please select something to report.</span>';
		_(elem).innerHTML = 'submit';
		return false;
	} else if(r2 == ""){
		_("rus").innerHTML = '<span class="se2">Please explain <?php echo $log_username; ?>.</span>';
		_(elem).innerHTML = 'submit';
		return false;
	} else {
	_(elem).innerHTML = 'Please wait <span id="ldIcn"></span>';
	var ajax = ajaxObj("POST", "php_parsers/rs.php");
	ajax.onreadystatechange = function() {
		if(ajaxReturn(ajax) == true) {
			if(ajaxReturn(ajax) == true){
				_(elem).innerHTML = '<span class="se1">report sent</span>';
				_(".radio-info").css("display", "none");
				_("rus").innerHTML = "Thank you <?php echo $log_username; ?> we will research this matter ASAP.";
			} else {
				_("rus").innerHTML = ajax.responseText;
				_(".radio-info").css("display", "none");
				_(elem).innerHTML = '<span class="se1">submit</span>';
			}
		}
	}
	ajax.send("type="+type+"&id="+id+"&user="+user+"&r1="+r1+"&r2="+r2);
	}
}


function yHandler(){
	var wrap = document.getElementById('wrap');
	var contentHeight = wrap.offsetHeight;
	var yOffset = window.pageYOffset;
	var y = yOffset + window.innerHeight;
	if(y >= contentHeight){
		// Ajax call to get more dynamic data goes here
		wrap.innerHTML += '<div class="newData"></div>';
	}
	var status = document.getElementById('status');
	status.innerHTML = contentHeight+" | "+y;
}
window.onscroll = yHandler;

