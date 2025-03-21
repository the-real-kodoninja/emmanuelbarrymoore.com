<?php
// js tab logic
$jsTab1b = 'cdeTab1()';
$jsTab2b = 'cdeTab2()';
$jsTab3b = 'cdeTab3()';
$jsTab4b = 'cdeTab4()';
$jsTab5b = 'cdeTab5()';

// img id
$prjId1b = 'cde-1a';
$prjId2b = 'cde-2a';
$prjId3b = 'cde-3a';
$prjId4b = 'cde-4a';
$prjId5b = 'cde-5a';

$mod1c = '
<div class="pRjCntA dI">
    <div onclick="'.$jsTab1b.'">
        <img id="'.$prjId1b.'" class="pRjImg_1a iTmSel dI" src="'.$imgRde1.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme1.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab2b.'">
        <img id="'.$prjId2b.'" class="pRjImg_1a dI" src="'.$imgRde2.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme2.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab3b.'">
        <img id="'.$prjId3b.'" class="pRjImg_1a dI" src="'.$imgRde3.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme3.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab4b.'">
        <img id="'.$prjId4b.'" class="pRjImg_1a dI" src="'.$imgRde4.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme4.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab5b.'">
        <img id="'.$prjId5b.'" class="pRjImg_1a dI" src="'.$imgRde5.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme5.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
</div>
';

$mod2c = '
<div class="pRjCntC dI pA">
    <nav class="s2dHdr">
        <form class="schMdle2 dI" action="#" method="get">
            <span id="sChIcn"></span>
            <input type="text" class="sChBar_2 dI" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search Wireframes">

            <div class="sChMnu dI cP" onclick="upTgle('.$cln.'sChMnu-Itm'.$cln.')">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="sChMnu-Itm" class="dN">
                <ul>
                    <li id="tab1b" class="itm1" onclick="wRFltr1a()">Everything</li>
                    <li id="tab2b" onclick="wRFltr2a()">Photos</li>
                    <li id="tab3b" onclick="wRFltr3a()">PDF</li>
                    <li id="tab4b" onclick="wRFltr4a()">Vector<li>
                </ul>
                <input class="dN" type="submit" value='.$cln.'s'.$cln.'>
            </div>
        </form>
    </nav>
    <div class="pRjCntC-Bdy wFrme">
        <!------------------------------------------------------------- photo -->
        <!-- aviyon -->
        <div class="aviyon pht" onclick="phtView1a()">
            <img src="wireframes/aviyon/WP_20150504_03_03_28_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView2a()">
            <img src="wireframes/aviyon/WP_20150504_03_04_13_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView3a()">
            <img src="wireframes/aviyon/WP_20150504_03_04_34_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView4a()">
            <img src="wireframes/aviyon/WP_20150504_03_04_55_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView5a()">
            <img src="wireframes/aviyon/WP_20150504_03_05_15_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView6a()">
            <img src="wireframes/aviyon/WP_20150504_03_05_32_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView7a()">
            <img src="wireframes/aviyon/WP_20150504_03_05_51_Pro.jpg"/>
        </div>
        <div class="aviyon pht" onclick="phtView8a()">
            <img src="wireframes/aviyon/WP_20150504_03_06_09_Pro.jpg"/>
        </div>
        <!-- merra -->
        <div class="merra pht" onclick="phtView1b()">
            <img src="wireframes/merra/WP_20150402_03_33_29_Pro.jpg"/>
        </div>
        <div class="merra pht" onclick="phtView2b()">
            <img src="wireframes/merra/WP_20150402_03_34_05_Pro.jpg"/>
        </div>
        <div class="merra pht" onclick="phtView3b()">
            <img src="wireframes/merra/WP_20150402_03_34_27_Pro.jpg"/>
        </div>
        <div class="merra pht" onclick="phtView4b()">
            <img src="wireframes/merra/WP_20150402_03_35_00_Pro.jpg"/>
        </div>
        <!-- pgr -->
        <div class="pgr pht" onclick="phtView1c()">
            <img src="wireframes/pgr/WIN_20150408_032903.JPG"/>
        </div>
        <div class="pgr pht" onclick="phtView2c()">
            <img src="wireframes/pgr/WIN_20150408_032922.JPG"/>
        </div>
        <div class="pgr pht" onclick="phtView3c()">
            <img src="wireframes/pgr/WIN_20150408_032948.JPG"/>
        </div>
        <div class="pgr pht" onclick="phtView4c()">
            <img src="wireframes/pgr/WIN_20150408_033003.JPG"/>
        </div>
        <!-- vgs -->
        <div class="vgs pht" onclick="phtView1d()">
            <img src="wireframes/vgs/635654914116381433.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView2d()">
            <img src="wireframes/vgs/635654914222401033.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView3d()">
            <img src="wireframes/vgs/WP_20150313_04_13_32_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView4d()">
            <img src="wireframes/vgs/WP_20150313_04_14_01_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView5d()">
            <img src="wireframes/vgs/WP_20150313_04_14_15_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView6d()">
            <img src="wireframes/vgs/WP_20150313_04_14_28_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView7d()">
            <img src="wireframes/vgs/WP_20150313_04_14_44_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView8d()">
            <img src="wireframes/vgs/WP_20150313_04_14_58_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView9d()">
            <img src="wireframes/vgs/WP_20150313_04_15_11_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView10d()">
            <img src="wireframes/vgs/WP_20150313_04_15_25_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView11d()">
            <img src="wireframes/vgs/WP_20150313_04_15_37_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView12d()">
            <img src="wireframes/vgs/WP_20150330_20_22_07_Pro.jpg"/>
        </div>
        <div class="vgs pht" onclick="phtView13d()">
            <img src="wireframes/vgs/WP_20150330_20_22_39_Pro.jpg"/>
        </div>
        <!-------------------------------------------------------------- PDF -->
        <span class="pdf dN">Sorry theres no PDFs uploaded yet.</span>
        <!----------------------------------------------------------- vector -->
        <!-- aviyon -->
        <div class="aviyon vct" onclick="vctView1a()">
            <img src="wireframes/aviyon/home.svg"/>
        </div>
        <div class="aviyon vct" onclick="vctView2a()">
            <img src="wireframes/aviyon/projects.svg"/>
        </div>
        <div class="aviyon vct" onclick="vctView3a()">
            <img src="wireframes/aviyon/user1a.svg"/>
        </div>
        <div class="aviyon vct" onclick="vctView4a()">
            <img src="wireframes/aviyon/user1b.svg"/>
        </div>
        <div class="aviyon vct" onclick="vctView5a()">
            <img src="wireframes/aviyon/user1c.svg"/>
        </div>
        <div class="aviyon vct" onclick="vctView6a()">
            <img src="wireframes/aviyon/user2a.svg"/>
        </div>
        <div class="aviyon vct" onclick="vctView7a()">
            <img src="wireframes/aviyon/user3a.svg"/>
        </div>
        <!-- merra -->
        <div class="merra vct" onclick="vctView1b()">
            <img src="wireframes/merra/merra_prvw_1a.svg"/>
        </div>
        <div class="merra vct" onclick="vctView2b()">
            <img src="wireframes/merra/merra_prvw_1b.svg"/>
        </div>
        <div class="merra vct" onclick="vctView3b()">
            <img src="wireframes/merra/merra_prvw_2a.svg"/>
        </div>
        <div class="merra vct" onclick="vctView4b()">
            <img src="wireframes/merra/merra_prvw_2b.svg"/>
        </div>
        <div class="merra vct" onclick="vctView5b()">
            <img src="wireframes/merra/merra_prvw_2c.svg"/>
        </div>
        <div class="merra vct" onclick="vctView6b()">
            <img src="wireframes/merra/merra_prvw_3.svg"/>
        </div>
        <div class="merra vct" onclick="vctView7b()">
            <img src="wireframes/merra/merra_prvw_4.svg"/>
        </div>
        <!-- pgr -->
        <div class="pgr vct" onclick="vctView1c()">
            <img src="wireframes/pgr/upPrw.svg"/>
        </div>
        <div class="pgr vct" onclick="vctView2c()">
            <img src="wireframes/pgr/upPrw1.svg"/>
        </div>
        <div class="pgr vct" onclick="vctView3c()">
            <img src="wireframes/pgr/upPrw2.svg"/>
        </div>
        <div class="pgr vct" onclick="vctView4c()">
            <img src="wireframes/pgr/upPrw3.svg"/>
        </div>
        <div class="pgr vct" onclick="vctView5c()">
            <img src="wireframes/pgr/upPrw4.svg"/>
        </div>
        <div class="pgr vct" onclick="vctView6c()">
            <img src="wireframes/pgr/upPrw5.svg"/>
        </div>
        <div class="pgr vct" onclick="vctView7c()">
            <img src="wireframes/pgr/upPrw6.svg"/>
        </div>
        <!-- vgs -->
        <div class="vgs vct" onclick="vctView1d()">
            <img src="wireframes/vgs/prvw_1.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView2d()">
            <img src="wireframes/vgs/prvw_2.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView3d()">
            <img src="wireframes/vgs/prvw_3.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView4d()">
            <img src="wireframes/vgs/prvw_4.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView5d()">
            <img src="wireframes/vgs/prvw_5.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView6d()">
            <img src="wireframes/vgs/prvw_6.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView7d()">
            <img src="wireframes/vgs/prvw_7.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView8d()">
            <img src="wireframes/vgs/prvw_8.svg"/>
        </div>
        <div class="vgs vct" onclick="vctView9d()">
            <img src="wireframes/vgs/prvw_9.svg"/>
        </div>
    </div>
</div>
';

?>

