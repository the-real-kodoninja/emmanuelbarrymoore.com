<?php

//project name
$prjNme1 = 'Merra';
$prjNme2 = 'VGS';
$prjNme3 = 'PGR';
$prjNme4 = 'GreenHeartPT';
$prjNme5 = 'Aviyon 2.0';

// js tab logic
$jsTab1a = 'prjTab1a()';
$jsTab2a = 'prjTab2a()';
$jsTab3a = 'prjTab3a()';
$jsTab4a = 'prjTab4a()';
$jsTab5a = 'prjTab5a()';

// img id
$prjId1 = 'prj-1a';
$prjId2 = 'prj-2a';
$prjId3 = 'prj-3a';
$prjId4 = 'prj-4a';
$prjId5 = 'prj-5a';

// image load
$imgRde1 = 'img/prj/1497952_438752086301730_3328249670183103996_o.jpg';
$imgRde2 = 'img/prj/10955297_437159913127614_8738536223488507369_o.png';
$imgRde3 = 'img/prj/11080378_437147096462229_2929647443503860244_o.png';
$imgRde4 = 'img/prj/11148567_955037097860610_1543569738534476929_o.jpg';
$imgRde5 = 'img/prj/12105881_513576795485925_5217886422197168529_n.png';

$mod1a = '
<div class="pRjCntA dI">
    <div onclick="'.$jsTab1a.'">
        <img id="'.$prjId1.'" class="pRjImg_1a iTmSel dI" src="'.$imgRde1.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme1.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab2a.'">
        <img id="'.$prjId2.'" class="pRjImg_1a dI" src="'.$imgRde2.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme2.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab3a.'">
        <img id="'.$prjId3.'" class="pRjImg_1a dI" src="'.$imgRde3.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme3.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab4a.'">
        <img id="'.$prjId4.'" class="pRjImg_1a dI" src="'.$imgRde4.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme4.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
    <div onclick="'.$jsTab5a.'">
        <img id="'.$prjId5.'" class="pRjImg_1a dI" src="'.$imgRde5.'"/>
        <div class="prjNme1 dB">
            <span>'.$prjNme5.'</span>
            <span>Last Updated:</span>
        </div>
    </div>
</div>
';

$mod2a = '
<!-- container B -->
<div class="pRjCntB dI pA">
    <!-- project start -->
    <div id="prj1b">
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Name:</div>
            <div class="txtLbl2 dI">'.$prjNme1.'</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Description:</div>
            <div class="txtLbl2 dI">Merra is a social networking website and app geared towards design and fashion. Users can browse tending post, photos, videos, and followers. </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">User Experience:</div>
            <div class="txtLbl2 dI">
                <p>Design: Users with a passion for design will be greeted with a sleek simple interface that focuses on enhancing their love of design. The black, and white color palate allows their work, and post, to shine. Having a simple color palate allows their work which will contain colors from post to pop.</p>

<p>User: No matter what age, social class, experience, and quality of work Merra allows everyone to easily become involved in art, fashion, and design.</p>

<p>Navigation: By having the main menu button to house  Merra is structured to easily navigate through 4 simple pages. Highlighting a browse section will allow the user to search through other post, photos, and videos. For the designer, they tend to compare there work to other designers and artist, seeking inspiration from other work, art, movies, color, clothing, and so on. Top followers will always be located to the right to for immediate focus. Comparing work from the top followers will motivate there interest for their work or interest. Designers can easily look at the browse tab seeking inspiration comparing work agaisnt the top liked, most searched, and most views. </p>
            </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Start Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Launch Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Tags:</div>
            <div class="txtLbl2 dI">
                <ul class="tags">
                    <li><a class="tag" href="#">Html5</a></li>
                    <li><a class="tag" href="#">CSS3</a></li>
                    <li><a class="tag" href="#">JavaScript</a></li>
                    <li><a class="tag" href="#">PHP</a></li>
                    <li><a class="tag" href="#">MySql</a></li>
                    <li><a class="tag" href="#">Aviyon</a></li>
                    <li><a class="tag" href="#">Fashion</a></li>
                    <li><a class="tag" href="#">Design</a></li>
                </ul>
            </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Screenshots:</div>
            <div class="txtLbl2 dI">
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/1497952_438752086301730_3328249670183103996_o.jpg" onclick="imgMdLoadA1()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/1956974_452110524965886_3592992194369016038_o.png" onclick="imgMdLoadA2()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/1979267_452110544965884_4304109027105706713_o.png" onclick="imgMdLoadA3()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/10847640_441833165993622_759013998857865719_o.png" onclick="imgMdLoadA4()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/10982934_452110511632554_1305654246484625943_o.png" onclick="imgMdLoadA5()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/10998650_438752069635065_2582403745631551149_o.png" onclick="imgMdLoadA6()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11025729_452110504965888_6603559219363703143_o.png" onclick="imgMdLoadA7()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11038756_452110488299223_5861095077181582035_o.png" onclick="imgMdLoadA8()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11071028_452110508299221_1021865555271002401_o.png" onclick="imgMdLoadA9()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11073511_441833285993610_2850762594793321085_o.png" onclick="imgMdLoadA10()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11080519_441833175993621_5830639489145194764_o.png" onclick="imgMdLoadA11()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11080706_438752122968393_6393302437541185724_o.jpg" onclick="imgMdLoadA12()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11083996_438752112968394_6161231752377524332_o.png" onclick="imgMdLoadA13()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11102916_438752079635064_8040816838221876289_o.png" onclick="imgMdLoadA14()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11113368_441833219326950_8077036340947125888_o.png" onclick="imgMdLoadA15()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11113368_441833252660280_9117950646441880141_o.png" onclick="imgMdLoadA16()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11130336_441833225993616_7868741162253772710_o.png" onclick="imgMdLoadA17()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11149818_452110468299225_8561133191623202061_o.png" onclick="imgMdLoadA18()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11154764_452110491632556_1151004283217662142_o.png" onclick="imgMdLoadA19()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11169569_452110464965892_3779027394733216845_o.png" onclick="imgMdLoadA20()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11194478_452110478299224_8595446277400333682_o.png" onclick="imgMdLoadA21()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11194594_452110484965890_4149396739354951617_o.png" onclick="imgMdLoadA22()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/merra/11203530_452110558299216_6840595144662657396_o.png" onclick="imgMdLoadA23()"/>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- project start -->
    <div id="prj2b" class="dN">
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Name:</div>
            <div class="txtLbl2 dI">'.$prjNme2.'</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Description:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">User Experience:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Start Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Launch Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Tags:</div>
            <div class="txtLbl2 dI">
                <ul class="tags">
                    <li><a class="tag" href="#">Html5</a></li>
                    <li><a class="tag" href="#">CSS3</a></li>
                    <li><a class="tag" href="#">JavaScript</a></li>
                    <li><a class="tag" href="#">PHP</a></li>
                    <li><a class="tag" href="#">MySql</a></li>
                    <li><a class="tag" href="#">Aviyon</a></li>
                    <li><a class="tag" href="#">Game</a></li>
                    <li><a class="tag" href="#">Gamer</a></li>
                </ul>
            </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Screenshots:</div>
            <div class="txtLbl2 dI">
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/1899839_440495486127390_5733312386717923476_o.png" onclick="imgMdLoadB1()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/10465524_444688749041397_5976036714847470057_o.png" onclick="imgMdLoadB2()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/10495103_437159903127615_4768128498918948212_o.png" onclick="imgMdLoadB3()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/10861097_440495452794060_485203377758271434_o.png" onclick="imgMdLoadB4()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/10955297_437159913127614_8738536223488507369_o.png" onclick="imgMdLoadB5()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/10984586_444688732374732_9066232176233041352_o.png" onclick="imgMdLoadB6()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11021377_444688702374735_3324004203071787904_o.png" onclick="imgMdLoadB7()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11045337_443056935871245_1216761580130375349_o.png" onclick="imgMdLoadB8()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11063852_437159909794281_7509261776167730714_o.png" onclick="imgMdLoadB19()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11070192_444688719041400_2200445824210841092_o.png" onclick="imgMdLoadB10()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11076184_443056955871243_7244147025832922325_o.png" onclick="imgMdLoadB11()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11077945_444688739041398_6367445016179754933_o.png" onclick="imgMdLoadB12()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11079560_437159923127613_8847632152457777460_o.png" onclick="imgMdLoadB13()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11080508_444688705708068_5025523181124524677_o.png" onclick="imgMdLoadB14()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11080731_440495456127393_6294049989479742744_o.png" onclick="imgMdLoadB15()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11080831_437159943127611_8748393789143058657_o.jpg" onclick="imgMdLoadB16()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11082415_440495469460725_3716269357485864487_o.png" onclick="imgMdLoadB17()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11087807_443056939204578_2322521777929892972_o.png" onclick="imgMdLoadB18()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11090939_440495466127392_2707407751194385269_o.png" onclick="imgMdLoadB19()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11113940_444688712374734_8322642197878654355_o.png" onclick="imgMdLoadB20()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11130375_443056959204576_6811875521749232351_o.png" onclick="imgMdLoadB21()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/vgs/11136251_444688735708065_1937918852961523183_o.png"onclick="imgMdLoadB22()"/>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- project start -->
    <div id="prj3b" class="dN">
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Name:</div>
            <div class="txtLbl2 dI">'.$prjNme3.'</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Description:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">User Experience:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Start Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Launch Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Tags:</div>
            <div class="txtLbl2 dI">
                <ul class="tags">
                    <li><a class="tag" href="#">Html5</a></li>
                    <li><a class="tag" href="#">CSS3</a></li>
                    <li><a class="tag" href="#">JavaScript</a></li>
                    <li><a class="tag" href="#">PHP</a></li>
                    <li><a class="tag" href="#">MySql</a></li>
                    <li><a class="tag" href="#">Aviyon</a></li>
                    <li><a class="tag" href="#">Food</a></li>
                    <li><a class="tag" href="#">Recipes</a></li>
                </ul>
            </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Screenshots:</div>
            <div class="txtLbl2 dI">
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/1614013_437147089795563_8755174189425878628_o.png" onclick="imgMdLoadC1()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11012000_437147109795561_8640557458722196680_o.png" onclick="imgMdLoadC2()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11048682_443021695874769_865243086297841500_o.png" onclick="imgMdLoadC3()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11070101_437147133128892_4692613673233540009_o.png" onclick="imgMdLoadC4()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11080378_437147096462229_2929647443503860244_o.png" onclick="imgMdLoadC5()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11080793_437147099795562_1335046400220148210_o.png" onclick="imgMdLoadC6()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11082440_443021705874768_4651063909660373108_o.png" onclick="imgMdLoadC7()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11094152_443021715874767_4291799541312354421_o.png" onclick="imgMdLoadC8()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/pgr/11136240_443021725874766_5295439458542139272_o.png" onclick="imgMdLoadC9()"/>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- project start -->
    <div id="prj4b" class="dN">
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Name:</div>
            <div class="txtLbl2 dI">'.$prjNme4.'</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Description:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">User Experience:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Start Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Launch Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Tags:</div>
            <div class="txtLbl2 dI">
                <ul class="tags">
                    <li><a class="tag" href="#">Html5</a></li>
                    <li><a class="tag" href="#">CSS3</a></li>
                    <li><a class="tag" href="#">JavaScript</a></li>
                    <li><a class="tag" href="#">PHP</a></li>
                    <li><a class="tag" href="#">MySql</a></li>
                    <li><a class="tag" href="#">Aviyon</a></li>
                    <li><a class="tag" href="#">Social</a></li>
                    <li><a class="tag" href="#">Connections</a></li>
                </ul>
            </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Screenshots:</div>
            <div class="txtLbl2 dI">
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/1980501_955038101193843_5565818349684851117_o.jpg" onclick="imgMdLoadD1()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11010583_955037851193868_2872136631088041283_o.jpg" onclick="imgMdLoadD2()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11011939_955037934527193_2760126084887791562_o.jpg" onclick="imgMdLoadD3()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11079998_955037524527234_2253325221238154678_o.jpg" onclick="imgMdLoadD4()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11136090_955037711193882_916684494792241660_o.jpg" onclick="imgMdLoadD5()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11148567_955037097860610_1543569738534476929_o.jpg" onclick="imgMdLoadD6()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11154576_955037581193895_8025093307947206791_o.jpg" onclick="imgMdLoadD7()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11154576_955037581193895_8025093307947206791_o.jpg" onclick="imgMdLoadD8()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11157523_955038047860515_7463366602084980064_o.jpg" onclick="imgMdLoadD9()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11155043_955038357860484_6168071543445594944_o.jpg" onclick="imgMdLoadD10()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11157523_955038047860515_7463366602084980064_o.jpg" onclick="imgMdLoadD11()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11161703_955037167860603_3753640108829535325_o.jpg" onclick="imgMdLoadD12()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11164635_955037657860554_7614564749226175066_o.jpg" onclick="imgMdLoadD13()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot3/ghpt/11169554_955038464527140_1781779550120457726_o.jpg" onclick="imgMdLoadD14()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11169579_955037271193926_4355236387694178411_o.jpg" onclick="imgMdLoadD15()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11174302_955037351193918_9146954543274840299_o.jpg" onclick="imgMdLoadD16()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/ghpt/11174728_955038264527160_6465011376463576850_o.jpg" onclick="imgMdLoadD17()"/>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- project start -->
    <div id="prj5b" class="dN">
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Name:</div>
            <div class="txtLbl2 dI">'.$prjNme5.'</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Description:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">User Experience:</div>
            <div class="txtLbl2 dI">To be added.</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Start Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Launch Date:</div>
            <div class="txtLbl2 dI">Unknown</div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Tags:</div>
            <div class="txtLbl2 dI">
                <ul class="tags">
                    <li><a class="tag" href="#">Html5</a></li>
                    <li><a class="tag" href="#">CSS3</a></li>
                    <li><a class="tag" href="#">JavaScript</a></li>
                    <li><a class="tag" href="#">PHP</a></li>
                    <li><a class="tag" href="#">MySql</a></li>
                    <li><a class="tag" href="#">Aviyon</a></li>
                    <li><a class="tag" href="#">Code</a></li>
                    <li><a class="tag" href="#">Design</a></li>
                </ul>
            </div>
        </div>
        <div class="txtCnt1">
            <div class="txtLbl1 dI">Screenshots:</div>
            <div class="txtLbl2 dI">
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/12105881_513576795485925_5217886422197168529_n.png" onclick="imgMdLoadE1()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/905994_454702081373397_4300636660481133033_o.png" onclick="imgMdLoadE2()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/1979190_471498593027079_1809703558581115132_o.png" onclick="imgMdLoadE3()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/10365313_457563677753904_5734641220004495223_o.png" onclick="imgMdLoadE4()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/10648439_471498596360412_2004393459943213085_o.png" onclick="imgMdLoadE5()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/10710409_457563637753908_8617346335530935915_o.png" onclick="imgMdLoadE6()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/10914977_471498669693738_3397566661228879250_o.png" onclick="imgMdLoadE7()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/10916701_454702054706733_70604174088959140_o.png" onclick="imgMdLoadE8()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/10987413_454702078040064_2996084551481726508_o.png" onclick="imgMdLoadE9()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11098239_471498673027071_5790546974266221437_o.png" onclick="imgMdLoadE10()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11105154_457563627753909_7873929672413201744_o.png" onclick="imgMdLoadE11()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11140765_454702028040069_3140347876362506641_o.png" onclick="imgMdLoadE12()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11174567_454702031373402_3818283885789673487_o.png" onclick="imgMdLoadE13()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11182743_454702051373400_1902763685499284966_o.png" onclick="imgMdLoadE14()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11201012_457563634420575_7127334624798920226_o.png" onclick="imgMdLoadE15()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11206498_457563651087240_5699865030096698084_o.png" onclick="imgMdLoadE16()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11206526_471498666360405_5820184573256481129_o.png" onclick="imgMdLoadE17()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11212151_454702064706732_6373377485393637733_o.png" onclick="imgMdLoadE18()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11227547_471498583027080_8754946738339718143_o.png" onclick="imgMdLoadE19()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11262482_457563681087237_2468896542943752930_o.png" onclick="imgMdLoadE20()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11270379_457563667753905_5283361916375076017_o.png" onclick="imgMdLoadE21()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11270554_457563661087239_6634009015058180832_o.png" onclick="imgMdLoadE22()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11402368_471498599693745_5419150570460919060_o.png" onclick="imgMdLoadE23()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11402745_471498659693739_3184648856721405992_o.png" onclick="imgMdLoadE24()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11406510_471498663027072_3862956439981790753_o.png" onclick="imgMdLoadE25()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11411676_471498606360411_3644808367929188370_o.png" onclick="imgMdLoadE26()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11412242_471498603027078_4817681960680078110_o.png" onclick="imgMdLoadE27()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11415516_471498586360413_3665520873321356312_o.png" onclick="imgMdLoadE28()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11416394_471498676360404_5965106793183843446_o.png" onclick="imgMdLoadE29()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11537168_471498609693744_8475068509873582406_o.png" onclick="imgMdLoadE30()"/>
                <img id="prj-5a" class="pRjImg_1a dI" src="img/prj/screenshot/aviyon_2.0/11539251_471498579693747_5296402228476081245_o.png" onclick="imgMdLoadE31()"/>
            </div>
        </div>
    </div>
    <!-- END -->
</div>
';

?>

