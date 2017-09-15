<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>中國五星級殺人酒店</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/noise.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=256834864809662";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    </script>
</head>

<body>

    <div id="header">

        <div class="container">
            <ul>
                <li class="hidden-xs">
                    <a href="#">
                    中國旅遊現況
                </a>
                </li>
                <li class="hidden-xs">
                    <a href="#">
                    格蘭雲天酒店 死亡慘案
                </a>
                </li>
                <li class="hidden-xs">
                    <a href="#">
                    事後處理
                </a>
                </li>

                <li class="share-btn">
                    <ul>
                        <li>

                            <a href="#">
                                <div class="fb-share-button" data-href="https://wwchen412.github.io/CHTS/" data-layout="button" data-size="small" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://wwchen412.github.io/CHTS/"> <img src="images/fb.svg" alt=""></a>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a href="http://line.naver.jp/R/msg/text/?關於中國商旅你不能不知！"> <img src="images/line.svg" alt=""></a>


                        </li>
                        <li>

                            <button class="btn" data-clipboard-text="https://wwchen412.github.io/CHTS/" style="padding:0;margin:0">
                                <img src="images/share.svg" alt="Copy to clipboard">
                            </button>


                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
    <div id="wrap">
        <div class="fix-light"></div>
        <div id="heroimg" class="blink">

            <div class="title">
                <div class="titleinner">
                    <h1>中國五星級殺人酒店
                        <span> 
                    <br> 時間：2015年10月
                    <br> 地點：中國貴陽格蘭雲天酒店
                    <br> 危機一：室內地板施工不良，地毯拱起形成波浪狀，導致室內地面凹凸不平
                    <br> 危機二：金屬包邊垃圾桶收邊上緣處薄如刀刃，品質低劣
                    <br> 危機三：客房服務疏忽，金屬製垃圾桶未依標準位置放置，而隨意放置在房間正中央 
                    <br>危機四：五星級酒店完全無危機處理機制</span>
                    </h1>
                </div>


            </div>



        </div>
        <!--        連署標題-->
        <div class="support">
            <p style="border-bottom: 1px solid #900; padding-bottom: 15px;">呼籲國內外人士一同注意旅遊安全，讓相關單位重視此問題如果您也認同，請按 「 我要支持 」</p>
            <button name="clickMe" onclick="countIt();">我要支持</button>
            <p>
                目前支持人數
                <span class="num" style="font-size:1.2rem;color:#f00;">
                <?= intval(file_get_contents("number.dat")) ?>
                </span>人
            </p>
        </div>
        <!--        結束-->
        <div id="section1" class="section">
            <div class="bg-title">
                <h2>中國旅遊現況</h2>
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="num-text">
                                <p>
                                    前往中國洽公及旅遊人數年年攀升，且大部份是來自亞洲地區之旅客、商務客。旅客除了一線城市，近年來也逐漸延伸至二三線城市及許多其他知名景點，但相對地，消費糾紛不斷攀升。
                                    <br> 中國二三線城市最令人詬病的種種問題一一浮現檯面，如旅遊市場秩序混亂、詐騙案增加，甚至存在黑惡勢力的影響；旅遊不文明現象時常發生 ，如治安不佳、遇糾紛求償無門等，且外地人申報公安後難獲得妥善的處理；當旅遊涉外糾紛日益增加，旅遊大外交格局尚未形成，造成旅客在中國有許多糾紛皆無法解決，甚至遭遇到人身安全也無機關可管，連申訴管道都有問題。
                                </p>
                            </div>

                        </div>
                        <div class="col-md-7">
                            <div class="num-chart">
                                <h3>台灣至中國旅遊人次逐年成長已達573萬人
                                </h3>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 903.52 426.65"><defs><style>.cls-1{isolation:isolate;}.cls-12,.cls-2{fill:none;}.cls-12,.cls-13,.cls-2{stroke:#fff;stroke-miterlimit:10;}.cls-13,.cls-2{stroke-width:1.87px;}.cls-3{font-size:17.75px;}.cls-3,.cls-4,.cls-8,.cls-9{fill:#fff;font-family:LiGothicMed, Apple LiGothic;}.cls-4{font-size:17.55px;}.cls-5{letter-spacing:0.84em;}.cls-6{letter-spacing:1.63em;}.cls-7{letter-spacing:2.67em;}.cls-8{font-size:21px;}.cls-9{font-size:14.2px;}.cls-10{opacity:0.88;}.cls-11{opacity:0.75;mix-blend-mode:screen;}.cls-12{stroke-width:3px;}</style></defs><title>資產 1chart</title><g class="cls-1"><g id="圖層_2" data-name="圖層 2"><g id="圖層_1-2" data-name="圖層 1"><polyline class="cls-2" points="63.62 18.66 63.62 299.72 806.66 299.72"/><text class="cls-3" transform="translate(0 61.66)">600萬</text><text class="cls-3" transform="translate(3.75 14.79)">人次</text><text class="cls-4" transform="translate(8.44 380.82)">年份註：<tspan x="0" y="21.06">1. 國人赴中國大陸探親自1987年11月起開放。</tspan><tspan class="cls-5" x="347.89" y="21.06">	</tspan><tspan x="368.57" y="21.06">2. 成長率係指較上年同期增減比例。</tspan><tspan class="cls-6" x="649.94" y="21.06">	</tspan><tspan x="0" y="42.12">3. 細項數字不等於合計數係四捨五入之故。</tspan><tspan class="cls-6" x="334.03" y="42.12">	</tspan><tspan x="368.57" y="42.12">資料來源：中國大陸「國家旅遊局」、「中國旅遊研究院」。</tspan><tspan class="cls-7" x="842.44" y="42.12">	</tspan></text><text class="cls-3" transform="translate(0 268.43)">450萬</text><text class="cls-3" transform="translate(0 201.35)">500萬</text><text class="cls-3" transform="translate(0 134.27)">550萬</text><text class="cls-8" transform="translate(117.61 280.51)">448.4萬</text><text class="cls-8" transform="translate(198.65 208.57)">514.1萬</text><text class="cls-8" transform="translate(287.11 173.96)">526.3萬</text><text class="cls-8" transform="translate(383.65 121.85)">534.0萬</text><text class="cls-8" transform="translate(467.73 192.12)">516.3萬</text><text class="cls-8" transform="translate(562.54 121.53)">536.6萬</text><text class="cls-8" transform="translate(657.34 148.78)">549.9萬</text><text class="cls-8" transform="translate(762.99 81.48)">573.0萬</text><text class="cls-3" transform="translate(88.86 328.89)">2009</text><text class="cls-3" transform="translate(183.6 328.89)">2010</text><text class="cls-3" transform="translate(278.34 328.89)">2011</text><text class="cls-3" transform="translate(373.07 328.89)">2012</text><text class="cls-3" transform="translate(467.81 328.89)">2013</text><text class="cls-3" transform="translate(562.55 328.89)">2014</text><text class="cls-3" transform="translate(657.29 328.89)">2015</text><text class="cls-3" transform="translate(743.04 328.89)">2016</text><text class="cls-9" transform="translate(75.9 349.45)">成長率2.2%</text><text class="cls-9" transform="translate(171.34 349.45)">成長率14.6%</text><text class="cls-9" transform="translate(265.37 349.45)">成長率2.4%</text><text class="cls-9" transform="translate(359.75 349.45)">成長率1.5%</text><text class="cls-9" transform="translate(455.92 349.45)">成長率-3.3%</text><text class="cls-9" transform="translate(549.59 349.45)">成長率3.9%</text><text class="cls-9" transform="translate(644.33 349.45)">成長率2.5%</text><text class="cls-9" transform="translate(730.07 349.45)">成長率4.3%</text><g class="cls-10"><polyline class="cls-12" points="107.19 271.41 198.47 175.98 284.91 151.78 396.93 140.72 486.14 168.38 581.57 140.72 671.47 124.81 762.75 91.62"/></g><line class="cls-13" x1="57.34" y1="52.07" x2="69.98" y2="52.07"/><line class="cls-13" x1="57.34" y1="127.47" x2="69.98" y2="127.47"/><line class="cls-13" x1="57.34" y1="195.19" x2="69.98" y2="195.19"/><line class="cls-13" x1="57.34" y1="262.91" x2="69.98" y2="262.91"/><line class="cls-13" x1="107.06" y1="293.57" x2="107.06" y2="306.21"/><line class="cls-13" x1="200.97" y1="293.57" x2="200.97" y2="306.21"/><line class="cls-13" x1="295.78" y1="293.57" x2="295.78" y2="306.21"/><line class="cls-13" x1="390.59" y1="293.57" x2="390.59" y2="306.21"/><line class="cls-13" x1="484.49" y1="293.57" x2="484.49" y2="306.21"/><line class="cls-13" x1="579.3" y1="293.57" x2="579.3" y2="306.21"/><line class="cls-13" x1="674.11" y1="293.57" x2="674.11" y2="306.21"/><line class="cls-13" x1="759.89" y1="293.57" x2="759.89" y2="306.21"/></g></g></g></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="section2" class="section">
            <div class="bg-title">
                <h2>格蘭雲天酒店 死亡慘案！！</h2>
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                旅客任先生受邀參加2015年在貴陽舉辦的世界众籌大會因而下榻貴陽格蘭雲天酒店，因室內地板施工不良，地毯拱起形成波浪狀，導致室內地面凹凸不平，而地毯厚重又有花紋需公安手電筒放地上才能清晰看到。任先生因而絆倒，絆倒後的金屬包邊垃圾桶未依標準位置放置且垃圾桶上方收邊處尖銳，任先生的頭部直接撞擊金屬包邊垃圾桶，導致腦部重創流血不止。家屬緊急告知酒店請求協助，救護車在40分鐘後才抵達至酒店，任先生因額頭處有長達8CM的傷口，深達骨皮質，任先生於救護人員抵達時，已經沒有生命徵狀；醫院方經過一個小時的急救，仍回天乏術。
                            </p>
                            <p>
                                事後，格蘭雲天酒店總經理向家屬表示，他們是央企，有異議請至法院訴訟解決，完全不反省酒店方需要檢討自身酒店的設備及安全問題。
                            </p>
                        </div> 
                    </div>
                       <div class="row">
                        <div class="col-md-4">
                            <img src="images/proof2.png" alt="">
                            <p>當地檢調單位檢視地毯不當不平之處圖</p>
                            
                        </div>
                        
                        <div class="col-md-4">
                            <img src="images/proof06.png" alt="">
                           <p></p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/proof5.png" alt="">
                           <p></p>
                        </div>
                        </div>
                        <div class="row">
                       
                        <div class="col-md-4">
                            <img src="images/proof3.png" alt="">
                            <p>鐵製垃圾桶撞擊圖</p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/proof1.png" alt="">
                            <p>台商任先生死亡證明</p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/proof4.png" alt="">
                            <p>任先生無任何心血管疾病診斷證明書</p>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <div id="section3" class="section">
            <div class="bg-title">
                <h2>事後處理</h2>
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12" style="background-color: white;padding: 30px;border-radius: 5px;margin: 10px auto;">
                            <h3>公安局：</h3>
                            <p style="display:inline-block;vertical-align:top;">
                            1.貴陽市公安局經開分局出警力；<br>
                            <span style="font-size:.8em;">&nbsp;&nbsp;(1)在現場拍攝大量照片。</span><br>
                            <span style="font-size:.8em;">&nbsp;&nbsp;(2)家屬、格蘭雲天酒店方等相關人員，帶回警局做筆錄。</span><br>
                            <span style="font-size:.8em;">&nbsp;&nbsp;(3)至醫院太平間驗屍。</span><br>
                            2.家屬委託律師前往公安局調取相關(1)現場照片(2)多方筆錄(3)驗屍報告 等卷宗，卻遭拒絕<br>
                              (寓意受害方完全無法調取證據更無資料依據可輔助官司證據)。 <br>
                            3.酒店方委託律師親口承認，酒店方得以完整調閱卷宗相關內容。<br>
                            （寓意酒店方得以調取所有相關證據卷宗,而受害方依法調取相關卷宗卻無能為力） <br>
                            4.公安局做出「意外」死亡結論。
                            </p>
                            <img src="images/prof.jpg" alt="" style="max-width:300px;display:inline-block;">
                        </div>
                        <div class="col-md-12" style="background-color: white;padding: 30px;border-radius: 5px;">
                            <h3>法院：</h3>
                            <p>
                                1.第一次向酒店的所在地，「貴陽市花溪區人民法院」提出訴訟，法院經過幾個月後審查，以「本案涉台」的理由，將案件移送到「貴陽市中級人民法院」。
                                <br>2.「貴陽市中級人民法院」一年多後才開庭審理，拒絕本案現場證人進入法庭，原因是「台灣籍人士不方便旁聽」。
                                <br>3.2017年初「貴陽市中級人民法院」駁回起訴，裁定理由為：「家屬所提供的原告家屬的身份證明文件是由律師自行前往兩岸海協會、海基會公證處領取，而非由兩岸海協會、海基會公證處寄送給院方，故此文件無從認定原告家屬與被害者的關係，故原告家屬不具備原告資格」
                            </p>
                        </div>
                        <div class="col-md-12" style="background-color: white;padding: 30px;border-radius: 5px;margin-top:10px;">
                            <h3>貴州省公證協會：</h3>
                            <p>
                            本案是本人或受委託人，已經先到海基、海協會蓋過認證章，而貴州省公證協會表示：
                            <br>
                            兩岸公證文件，都是由當事人自行至協會蓋認證章，協會方絕不會代為寄送給院方。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="section4" class="section">
            <div class="container">
                <div class="content">
                <div class="fb-comments" data-href="http://horrorhotel.tk/" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-scrolltop">
        ︿
    </div>
    <!-- jQuery JS 1.12.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
       
        // 點擊支持 字加一

        function countIt() {
            alert('感謝您的支持！');
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.querySelector(".num").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "count.php", true);
            xmlhttp.send();
           
        }
        // 複製連結
        new Clipboard('.btn');
        var clipboard = new Clipboard('.btn');
        clipboard.on('success', function(e) {
            alert('已複製連結');
        });
        $(function() {
            var bodyHeight_31 = $('body').height() / 3;
            console.log(bodyHeight_31);
            var $window = $(window);
            var blockTop = 0;
            var nav_index = 0;

            $('#header ul li.hidden-xs').click(function() {
                nav_index = $(this).index();
                blockTOP = $('.section').eq(nav_index).offset().top;
                $('body,html').stop(true, false).animate({
                    scrollTop: blockTOP - 82
                })
            })
            $window.scroll(function() {
                if ($window.scrollTop() >= bodyHeight_31) {

                    $('.btn-scrolltop').fadeIn();
                } else {
                    $('.btn-scrolltop').fadeOut();
                }
            })
            $('.btn-scrolltop').click(function() {
                $('body,html').stop(true, false).animate({
                    scrollTop: 0
                })
            })
        })
    </script>
</body>

</html>