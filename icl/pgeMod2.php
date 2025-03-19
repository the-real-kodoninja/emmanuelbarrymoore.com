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

$mod1b = '
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

$mod2b = '
<div class="pRjCntC dI pA">
    <div id="DsClmr" class="DsClmr dB">
        <span class="clx-Btn-form fR cP" onclick="upTgle('.$cln.'DsClmr'.$cln.')">X</span>
        <strong>Disclaimer:</strong> The following code, are code snippets and do not follow the actual folder layout nor conventional naming.
    </div>
    <!-- Code View -->
    <div id="cdeVw1" class="cdeCnt-Wpr">
        <div class="cdeCnt-Hdr">
            <span>'.$prjNme1.'</span>
        </div>
        <div class="cdeCnt-Pad">
            <div class="cdeCnt-Sbr">
                <ul class="cdeCnt-Fdr">
                    <li onclick="upTgle('.$cln.'cdeFdr1a'.$cln.')">root</li>
                    <kpd id="cdeFdr1a" >
                        <ul>
                            <li onclick="upTgle('.$cln.'cdeFdr2a'.$cln.')">css
                                <ul id="cdeFdr2a" class="dN">
                                    <li>header.css</li>
                                    <li>main.css</li>
                                    <li>master_stylesheet.css</li>
                                    <li>user.css</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr3a'.$cln.')">js
                                <ul id="cdeFdr3a" class="dN">
                                    <li>main.js</li>
                                    <li>master_javascript_header.js</li>
                                    <li>mod1.js</li>
                                    <li>mod2.js</li>
                                    <li>mod3.js</li>
                                    <li>mod4.js</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr4a'.$cln.')">icl
                                <ul id="cdeFdr4a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr4b'.$cln.')">header
                                        <ul id="cdeFdr4b" class="dN">
                                            <li>meta_tags.php</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr5a'.$cln.')">mobile
                                <ul id="cdeFdr5a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr5b'.$cln.')">css
                                        <ul id="cdeFdr5b" class="dN">
                                            <li>img</li>
                                            <li>header.css</li>
                                            <li>main.css</li>
                                            <li>master_stylesheet.css</li>
                                            <li>user.css</li>
                                        </ul>
                                    </li>
                                    <li onclick="upTgle('.$cln.'cdeFdr5c'.$cln.')">js
                                        <ul id="cdeFdr5c" class="dN">
                                            <li>main.js</li>
                                            <li>master_javascript_footer.js</li>
                                            <li>master_javascript_header.js</li>
                                            <li>mod1.js</li>
                                            <li>mod2.js</li>
                                            <li>mod3.js</li>
                                            <li>mod4.js</li>
                                        </ul>
                                    </li>
                                    <li>browse.php</li>
                                    <li>index.php</li>
                                    <li>search.php</li>
                                    <li>user.php</li>
                                </ul>
                            </li>
                        </ul>
                        <li onclick="codeLd1a()">index.php</li>
                    </kpd>
                </ul>
            </div>
            <div class="cdeCnt-Bdy">
                <pre><code>
                    <span id="codeLd1a">Code loads here...</span>
                </code></pre>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- Code View -->
    <div id="cdeVw2" class="cdeCnt-Wpr dN">
        <div class="cdeCnt-Hdr">
            <span>'.$prjNme2.'</span>
        </div>
        <div class="cdeCnt-Pad">
            <div class="cdeCnt-Sbr">
                <ul class="cdeCnt-Fdr">
                    <li onclick="upTgle('.$cln.'cdeFdr1a'.$cln.')">root</li>
                    <kpd id="cdeFdr1a" >
                        <ul>
                            <li onclick="upTgle('.$cln.'cdeFdr2a'.$cln.')">css
                                <ul id="cdeFdr2a" class="dN">
                                    <li>header.css</li>
                                    <li>main.css</li>
                                    <li>master_stylesheet.css</li>
                                    <li>user.css</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr3a'.$cln.')">js
                                <ul id="cdeFdr3a" class="dN">
                                    <li>main.js</li>
                                    <li>master_javascript_header.js</li>
                                    <li>mod1.js</li>
                                    <li>mod2.js</li>
                                    <li>mod3.js</li>
                                    <li>mod4.js</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr4a'.$cln.')">icl
                                <ul id="cdeFdr4a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr4b'.$cln.')">header
                                        <ul id="cdeFdr4b" class="dN">
                                            <li>meta_tags.php</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr5a'.$cln.')">mobile
                                <ul id="cdeFdr5a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr5b'.$cln.')">css
                                        <ul id="cdeFdr5b" class="dN">
                                            <li>img</li>
                                            <li>header.css</li>
                                            <li>main.css</li>
                                            <li>master_stylesheet.css</li>
                                            <li>user.css</li>
                                        </ul>
                                    </li>
                                    <li onclick="upTgle('.$cln.'cdeFdr5c'.$cln.')">js
                                        <ul id="cdeFdr5c" class="dN">
                                            <li>main.js</li>
                                            <li>master_javascript_footer.js</li>
                                            <li>master_javascript_header.js</li>
                                            <li>mod1.js</li>
                                            <li>mod2.js</li>
                                            <li>mod3.js</li>
                                            <li>mod4.js</li>
                                        </ul>
                                    </li>
                                    <li>browse.php</li>
                                    <li>index.php</li>
                                    <li>search.php</li>
                                    <li>user.php</li>
                                </ul>
                            </li>
                        </ul>
                        <li>index.php</li>
                    </kpd>
                </ul>
            </div>
            <div class="cdeCnt-Bdy">
                <pre><code>
                    Code loads here.
                </code></pre>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- Code View -->
    <div id="cdeVw3" class="cdeCnt-Wpr dN">
        <div class="cdeCnt-Hdr">
            <span>'.$prjNme3.'</span>
        </div>
        <div class="cdeCnt-Pad">
            <div class="cdeCnt-Sbr">
                <ul class="cdeCnt-Fdr">
                    <li onclick="upTgle('.$cln.'cdeFdr1a'.$cln.')">root</li>
                    <kpd id="cdeFdr1a" >
                        <ul>
                            <li onclick="upTgle('.$cln.'cdeFdr2a'.$cln.')">css
                                <ul id="cdeFdr2a" class="dN">
                                    <li>header.css</li>
                                    <li>main.css</li>
                                    <li>master_stylesheet.css</li>
                                    <li>user.css</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr3a'.$cln.')">js
                                <ul id="cdeFdr3a" class="dN">
                                    <li>main.js</li>
                                    <li>master_javascript_header.js</li>
                                    <li>mod1.js</li>
                                    <li>mod2.js</li>
                                    <li>mod3.js</li>
                                    <li>mod4.js</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr4a'.$cln.')">icl
                                <ul id="cdeFdr4a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr4b'.$cln.')">header
                                        <ul id="cdeFdr4b" class="dN">
                                            <li>meta_tags.php</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr5a'.$cln.')">mobile
                                <ul id="cdeFdr5a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr5b'.$cln.')">css
                                        <ul id="cdeFdr5b" class="dN">
                                            <li>img</li>
                                            <li>header.css</li>
                                            <li>main.css</li>
                                            <li>master_stylesheet.css</li>
                                            <li>user.css</li>
                                        </ul>
                                    </li>
                                    <li onclick="upTgle('.$cln.'cdeFdr5c'.$cln.')">js
                                        <ul id="cdeFdr5c" class="dN">
                                            <li>main.js</li>
                                            <li>master_javascript_footer.js</li>
                                            <li>master_javascript_header.js</li>
                                            <li>mod1.js</li>
                                            <li>mod2.js</li>
                                            <li>mod3.js</li>
                                            <li>mod4.js</li>
                                        </ul>
                                    </li>
                                    <li>browse.php</li>
                                    <li>index.php</li>
                                    <li>search.php</li>
                                    <li>user.php</li>
                                </ul>
                            </li>
                        </ul>
                        <li>index.php</li>
                    </kpd>
                </ul>
            </div>
            <div class="cdeCnt-Bdy">
                <pre><code>
                    Code loads here.
                </code></pre>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- Code View -->
    <div id="cdeVw4" class="cdeCnt-Wpr dN">
        <div class="cdeCnt-Hdr">
            <span>'.$prjNme4.'</span>
        </div>
        <div class="cdeCnt-Pad">
            <div class="cdeCnt-Sbr">
                <ul class="cdeCnt-Fdr">
                    <li onclick="upTgle('.$cln.'cdeFdr1a'.$cln.')">root</li>
                    <kpd id="cdeFdr1a" >
                        <ul>
                            <li onclick="upTgle('.$cln.'cdeFdr2a'.$cln.')">css
                                <ul id="cdeFdr2a" class="dN">
                                    <li>header.css</li>
                                    <li>main.css</li>
                                    <li>master_stylesheet.css</li>
                                    <li>user.css</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr3a'.$cln.')">js
                                <ul id="cdeFdr3a" class="dN">
                                    <li>main.js</li>
                                    <li>master_javascript_header.js</li>
                                    <li>mod1.js</li>
                                    <li>mod2.js</li>
                                    <li>mod3.js</li>
                                    <li>mod4.js</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr4a'.$cln.')">icl
                                <ul id="cdeFdr4a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr4b'.$cln.')">header
                                        <ul id="cdeFdr4b" class="dN">
                                            <li>meta_tags.php</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr5a'.$cln.')">mobile
                                <ul id="cdeFdr5a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr5b'.$cln.')">css
                                        <ul id="cdeFdr5b" class="dN">
                                            <li>img</li>
                                            <li>header.css</li>
                                            <li>main.css</li>
                                            <li>master_stylesheet.css</li>
                                            <li>user.css</li>
                                        </ul>
                                    </li>
                                    <li onclick="upTgle('.$cln.'cdeFdr5c'.$cln.')">js
                                        <ul id="cdeFdr5c" class="dN">
                                            <li>main.js</li>
                                            <li>master_javascript_footer.js</li>
                                            <li>master_javascript_header.js</li>
                                            <li>mod1.js</li>
                                            <li>mod2.js</li>
                                            <li>mod3.js</li>
                                            <li>mod4.js</li>
                                        </ul>
                                    </li>
                                    <li>browse.php</li>
                                    <li>index.php</li>
                                    <li>search.php</li>
                                    <li>user.php</li>
                                </ul>
                            </li>
                        </ul>
                        <li>index.php</li>
                    </kpd>
                </ul>
            </div>
            <div class="cdeCnt-Bdy">
                <pre><code>
                    Code loads here.
                </code></pre>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- Code View -->
    <div id="cdeVw5" class="cdeCnt-Wpr dN">
        <div class="cdeCnt-Hdr">
            <span>'.$prjNme5.'</span>
        </div>
        <div class="cdeCnt-Pad">
            <div class="cdeCnt-Sbr">
                <ul class="cdeCnt-Fdr">
                    <li onclick="upTgle('.$cln.'cdeFdr1a'.$cln.')">root</li>
                    <kpd id="cdeFdr1a" >
                        <ul>
                            <li onclick="upTgle('.$cln.'cdeFdr2a'.$cln.')">css
                                <ul id="cdeFdr2a" class="dN">
                                    <li>header.css</li>
                                    <li>main.css</li>
                                    <li>master_stylesheet.css</li>
                                    <li>user.css</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr3a'.$cln.')">js
                                <ul id="cdeFdr3a" class="dN">
                                    <li>main.js</li>
                                    <li>master_javascript_header.js</li>
                                    <li>mod1.js</li>
                                    <li>mod2.js</li>
                                    <li>mod3.js</li>
                                    <li>mod4.js</li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr4a'.$cln.')">icl
                                <ul id="cdeFdr4a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr4b'.$cln.')">header
                                        <ul id="cdeFdr4b" class="dN">
                                            <li>meta_tags.php</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li onclick="upTgle('.$cln.'cdeFdr5a'.$cln.')">mobile
                                <ul id="cdeFdr5a" class="dN">
                                    <li onclick="upTgle('.$cln.'cdeFdr5b'.$cln.')">css
                                        <ul id="cdeFdr5b" class="dN">
                                            <li>img</li>
                                            <li>header.css</li>
                                            <li>main.css</li>
                                            <li>master_stylesheet.css</li>
                                            <li>user.css</li>
                                        </ul>
                                    </li>
                                    <li onclick="upTgle('.$cln.'cdeFdr5c'.$cln.')">js
                                        <ul id="cdeFdr5c" class="dN">
                                            <li>main.js</li>
                                            <li>master_javascript_footer.js</li>
                                            <li>master_javascript_header.js</li>
                                            <li>mod1.js</li>
                                            <li>mod2.js</li>
                                            <li>mod3.js</li>
                                            <li>mod4.js</li>
                                        </ul>
                                    </li>
                                    <li>browse.php</li>
                                    <li>index.php</li>
                                    <li>search.php</li>
                                    <li>user.php</li>
                                </ul>
                            </li>
                        </ul>
                        <li>index.php</li>
                    </kpd>
                </ul>
            </div>
            <div class="cdeCnt-Bdy">
                <pre><code>
                    Code loads here.
                </code></pre>
            </div>
        </div>
    </div>
    <!-- END -->
</div>
';

?>

