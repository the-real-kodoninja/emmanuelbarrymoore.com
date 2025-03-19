<?php
$cln = "''";

include_once("icl/aviy_code.php");
include_once("icl/pgeMod1.php");
include_once("icl/pgeMod2.php");
include_once("icl/pgeMod3.php");
include_once("icl/pgeMod4.php");
//include_once("icl/pgeMod5.php");


?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Emmanuel Barry Moore's design and code portfolio</title>
<?php include_once("icl/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>
</head>
<body>
    <!-- universal results module start -->
    <div class="popMd-Wpr aUto">
        <div id="clXsch" class="schMdCnt dN">
            <div class="fR cP" onclick="clBtnX()"><span class="clBtn">X</span></div>
            <div class="schMd-Hdr">
                <span id="schMd-1a"></span>
                <span id="schMd-1b"><!-- search term goes here --></span>
            </div>
            <div class="schMd-Bdy unv1a"><!-- search results goes here --></div>
            <div class="schMd-Bdy unv2a dN">
                <div class="cntOpt">
                    <span><i class="fi-mobile"></i> (213)-876-8784</span>
                    <span><i class="fi-mail"></i> <a href="mailto:emmanuel.moore.aviy@gmail.com?Subject=Hello%20again" target="_top">emmanuel.barry.moore@gmail.com</a></span>
                    <span><i class="fi-mail"></i> <a href="mailto:emmanuel.moore@live.com?Subject=Hello%20again" target="_top">emmanuel.moore@live.com</a></span>
                    <span><i class="fi-social-skype"></i> emmanuelphp</span>
                    <span><i class="fi-social-xbox"></i> emoorephp</span>
                </div>
                <div class="bck1w cntMsg">
                    <form method="POST" onsubmit="return false;">
                        <div class="iptCbn">
                            <i class="fi-torso"></i>
                            <input id="cN" type="text" placeholder="Full Name" required>
                            <i class="fi-mail"></i>
                            <input id="cE" type="text" placeholder="offer@freelance.tech" required>
                        </div>
                        <div class="iptCbn">
                            <i class="fi-mobile"></i>
                            <input id="cP" type="text" placeholder="(---) --- ----">
                            <i class="fi-web"></i>
                            <input id="cW" type="text" placeholder="freelance.tech">
                        </div>
                        <i class="fi-comment"></i>
                        <textarea  id="cM" placeholder="Hello, What's your message" required></textarea>
                        <div>
                            <input class="sndMsg" type="submit" value="Send Message" onclick="sndMsg()"/>
                            <span id="dialog-form1" class="sndMsg-dialog dN">
                                <span class="clx-Btn-form fR cP" onclick="upTgle('dialog-form1')">X</span>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="schMd-Bdy unv3a dN">
                <embed src="file/Emmanuel-Barry-Moore_Cover-Letter_Generic.pdf" alt="pdf">
            </div>
            <div class="schMd-Bdy unv4a dN">
                <embed src="file/Emmanuel-Barry-Moore_Resume.pdf" alt="pdf">
            </div>
        </div>
    </div>
    <!-- universal results module end -->

    <!-- image module start -->
    <div class="bckDrp pF dN"></div>
    <!-- image enlarge -->

    <div class="aUto">
    <div class="popMd-Wpr aUto">
        <div id="clXimg" class="imgMdCnt dN">
            <div class="fR cP" onclick="clBtnX()"><span class="clBtn">X</span></div>
            <div id="imgMdLoad" class="imgMdpd1"><!-- image loads here --></div>
            <div class="imgMdpd2">
                <span id="txtMdLoad1a"><!-- text info goes here --></span>
            </div>
        </div>
    </div>
    </div>
    <!-- image module end -->

    <header class="mnHdr_1">
        <div class="mnInr">
            <div class="fL dI">
                <span class="mnLgo"></span>
                <span></span>
                <form class="schMdle dI" action="#" method="get">
                    <i id="sChIcn" class="fi-magnifying-glass"></i>
                    <input type="text" class="sChBar_1 dI" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search Emmanuel Moore">
                    <input class="schSnd" type="submit" value='s' onclick="schMdle2x()">
                </form>
            </div>
            <div class="fR dI mnHdr_1fR">
                <!-- notification module -->
                <div class="dI" onclick="notiMdle()">
                    <span id="notiCnt">6</span>
                    <i class="fi-alert notiIcn"></i>
                </div>
                <!-- login module -->
                <div class="dI" onclick="lGnMdle()">
                    <span class="cP">login</span>
                    <i class="fi-torsos-all"></i>
                </div>
            </div>
        </div>
        <div id="dbSr"></div>
    </header>
    <div class="mnInr aUto">
        <!-- dropdown menu -->
        <div class="dRpMnu fR dN" id="lGnMdle">
            <div class="pF zl3">
                <form class="aUto">
                    <i class="fi-torsos"></i>
                    <input type="text" placeholder="Username"/>
                    <i class="fi-lock"></i>
                    <input type="password" placeholder="Password"/>
                    <input class="button_1" type="submit" value="Login"/>
                    <a href="">Forgot Something?</a>
                </form>
            </div>
        </div>
        <!-- dropdown menu -->
        <div class="dRpMnu notiPt1 fR dN" id="notiMdle">
            <div class="pF notiPt2 zl3 aUto">
                <header class="bck1w">Notifications <span>(6)</span></header>
                <div class="notiBdy noti_Hgtr scroll_y">
                    <div id="notiCnt_1" class="noti_Cnt-Wpr">
                        <div class="fR cP clBtn_Wpr-1" onclick="upTgle('notiCnt_1')">
                            <div class="clBtn">X</div>
                        </div>
                        <div class="noti_Cnt-Txt">
                            <span><strong>New! module for the main header.</strong></span>
                            <span>Notification module added.</span>
                        </div>
                    </div>
                    <div id="notiCnt_2" class="noti_Cnt-Wpr">
                        <div class="fR cP clBtn_Wpr-1" onclick="upTgle('notiCnt_2')">
                            <div class="clBtn">X</div>
                        </div>
                        <div class="noti_Cnt-Txt">
                            <span><strong>New! tab for the navigation.</strong></span>
                            <span>Wireframes added.</span>
                        </div>
                    </div>
                    <div id="notiCnt_3" class="noti_Cnt-Wpr">
                        <div class="fR cP clBtn_Wpr-1" onclick="upTgle('notiCnt_3')">
                            <div class="clBtn">X</div>
                        </div>
                        <div class="noti_Cnt-Txt">
                            <span><strong>New! for the overall updates.</strong></span>
                            <span>reach me updated v1.002.</span>
                        </div>
                    </div>
                    <div id="notiCnt_4" class="noti_Cnt-Wpr">
                        <div class="fR cP clBtn_Wpr-1" onclick="upTgle('notiCnt_4')">
                            <div class="clBtn">X</div>
                        </div>
                        <div class="noti_Cnt-Txt">
                            <span><strong>New! for the about section.</strong></span>
                            <span>Skills mastery added.</span>
                        </div>
                    </div>
                    <div id="notiCnt_5" class="noti_Cnt-Wpr">
                        <div class="fR cP clBtn_Wpr-1" onclick="upTgle('notiCnt_5')">
                            <div class="clBtn">X</div>
                        </div>
                        <div class="noti_Cnt-Txt">
                            <span><strong>New! for the footer and navigation menu.</strong></span>
                            <span>Social links added.</span>
                        </div>
                    </div>
                    <div id="notiCnt_6" class="noti_Cnt-Wpr">
                        <div class="fR cP clBtn_Wpr-1" onclick="upTgle('notiCnt_6')">
                            <div class="clBtn">X</div>
                        </div>
                        <div class="noti_Cnt-Txt">
                            <span><strong>New! for the about section.</strong></span>
                            <span>Employment location added.</span>
                        </div>
                    </div>
                    <div class="notiFtr">
                        <button class="noti_viewMore" onclick="noti_viewMore()">
                            <span><strong>End of Updates</strong></span>
                            <span>View previous updates from Emmanuel</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bNrWpr">
        <div class="bNrImg cP">
            <img class="bNrImg" onclick="imgMdLoad1x()" src="img/bnr/Screenshot%20from%202015-10-14%2020_44_35a.png"/>
        </div>
    </div>
    <div class="bck1w mgFx1">
        <div class="aUto mnInr">
            <div class="uSrInfo pR">
                <div class="uSrImg dI cP">
                    <img class="uSrImg" onclick="imgMdLoad2x()" src="img/temp/20160517_082019.jpg"/>
                </div>
                <div class="uSrStat dI pA">
                    <h1 class="uSrName dB">Emmanuel Barry Moore</h1>
                    <div class="statA">
                        <i class="fi-torso-business"></i>
                        <span>Developer</span>
                    </div>
                    <div class="statA">
                        <i class="fi-marker"></i>
                        <span>Costa Mesa, CA</span>
                    </div>
                    <div class="statA">
                        <i class="fi-trophy"></i>
                        <span>Johnson &amp; Wales University</span>
                    </div>
                    <div class="dB uSrBio1">
                         <span><i class="fi-torso"></i>Full-Stack Front/Back-End Developer, Programmer, UI/UX Designer, Software Developer/Engineer.</span>
                        <span><i class="fi-info rdFt"></i>Looking for employment in Los Angles, CA</span>
                    </div>
                </div>
                <button class="button-primary cntUsr fR pR" onclick="cntUsr()">Reach Me</button>
            </div>
        </div>
        <div class="bck2w">
            <div class="aUto mnInr">
                <!-- nav tab 1 -->
                <nav class="navTab1">
                    <a id="tab1a" class="navItm itm1" onclick="navTab1()">Projects</a>
                    <a id="tab2a" class="navItm clr1" onclick="navTab2()">Code</a>
                    <a id="tab3a" class="navItm clr1" onclick="navTab3()">Wireframes</a>
                    <!-- <a id="tab5a" class="navItm clr1" onclick="navTab5()">Blog</a> -->
                    <a id="tab4a" class="navItm clr1" onclick="navTab4()">About</a>
                    <ul class="sclNav fR mp1">
                        <li><a href="https://www.facebook.com/Emmanuel.Moore" target="_blank"><i id="scl1" class="fi-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/EmmanuelB_Moore" target="_blank"><i id="scl2" class="fi-social-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/+Aviyon" target="_blank"><i id="scl3" class="fi-social-google-plus"></i></a></li>
                        <li><a href="http://www.youtube.com/aviyon365" target="_blank"><i id="scl4" class="fi-social-youtube"></i></a></li>
                        <li><a href="http://www.linkedin.com/in/emmanuelmoore" target="_blank"><i id="scl5" class="fi-social-linkedin"></i></a></li>
                        <li><a href="https://github.com/Emmanuel-Moore" target="_blank"><i id="scl6" class="fi-social-github"></i></a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <div class="aUto mnInr">
        <!-- projects -->
        <div id="tab1" class="pRjdsPy">
            <?php echo ''.$mod1a.''.$mod2a.''; ?>
        </div>
        <div id="tab2" class="pRjdsPy dN">
            <?php echo ''.$mod1b.''.$mod2b.''; ?>
        </div>
        <div id="tab3" class="pRjdsPy dN">
            <?php echo ''.$mod1c.''.$mod2c.''; ?>
        </div>
        <div id="tab5" class="pRjdsPy dN">
            <div class="pge_5a fL dI">
                <div class="sideNav-schWpr bck1 wide">
                    <i id="sChIcn" class="fi-magnifying-glass"></i>
                    <input type="text" placeholder="Search blogs">
                </div>
                <aside>
                    <nav class="nav-li-aside">
                        <ul>
                            <li class="nav-header">Filter</li>
                            <li><i class="fi-pencil"></i> Text</li>
                            <li><i class="fi-camera"></i> Photos</li>
                            <li><i class="fi-play-video"></i> Videos</li>
                        </ul>
                    </nav>
                    <div class="side-tagBox">
                        <header>Tags</header>
                        <div class="side-tagBox-Bdy">
                            <ul>
                                <li><a href="search.php?s=%23tech">Tech</a></li>
                                <li><a href="search.php?s=%23design">Design</a></li>
                                <li><a href="search.php?s=%23innovation">Innovation</a></li>
                                <li><a href="search.php?s=%23laptops">Laptops</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="pge_5b fR dI">
                <div class="blog-post_Wpr">
                    <div class="blog-post_Usr pA">
                        <img class="dI" src=""/>
                        <div>
                            <span>Emmanuel Moore</span>
                        </div>
                    </div>
                    <div class="blog-post_Bdy">
                        <hgroup>
                            <h2>Blog Title</h2>
                        </hgroup>
                        <p>Hello!</p>
                    </div>
                    <div class="blog-post_Ftr">cxSCXC
                    </div>
                </div>
            </div>
        </div>
        <div id="tab4" class="pRjdsPy dN">
            <?php echo ''.$mod4a.''; ?>
        </div>

            <footer>
            <ul class="sclNav mp2">
                <li><a href="https://www.facebook.com/Emmanuel.Moore" target="_blank"><i id="scl1" class="fi-social-facebook"></i></a></li>
                <li><a href="https://twitter.com/EmmanuelB_Moore" target="_blank"><i id="scl2" class="fi-social-twitter"></i></a></li>
                <li><a href="https://plus.google.com/+Aviyon" target="_blank"><i id="scl3" class="fi-social-google-plus"></i></a></li>
                <li><a href="http://www.youtube.com/aviyon365" target="_blank"><i id="scl4" class="fi-social-youtube"></i></a></li>
                <li><a href="http://www.linkedin.com/in/emmanuelmoore" target="_blank"><i id="scl5" class="fi-social-linkedin"></i></a></li>
                <li><a href="https://github.com/Emmanuel-Moore" target="_blank"><i id="scl6" class="fi-social-github"></i></a></li>
            </ul>
            <small class="ftrB">
                emmanuelmoore.tech Created by <a href="https://www.facebook.com/Emmanuel.Moore" target="_blank">Emmanuel Moore</a></br>
                &#169; emmanuelmoore.tech 2016 <b>Version: 1.0003</b>
            </small>
        </footer>
    </div>
</div>
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>
</body>
</html>

