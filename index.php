<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap JS 3.3.7 -->
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
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=256834864809662";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>

<body>

    <div id="header">

        <div class="container">
            <ul>
                <li class="hidden-xs">
                    <a href="#">
                    台商中國商旅現況
                </a>
                </li>
                <li class="hidden-xs">
                    <a href="#">
                    格蘭雲天意外台商死亡事件
                </a>
                </li>
                <li class="hidden-xs">
                    <a href="#">
                    兩岸有關單位消極處理
                </a>
                </li>
                <li class="hidden-xs">
                    <a href="#">
                    後續事件現況追蹤
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
        <div id="heroimg">

            <div class="title">
                <h1>關於中國商旅你不能不知！</h1>
            </div>


        </div>
        <div id="section1" class="section">
            <div class="bg-title">
                <h2>台商至中國商旅現況</h2>
                <div class="text"></div>
                <button type="button" onclick="window.location.reload()" style="background:#000;">就這樣啦</button>
                
                <?php
                $counter = intval(file_get_contents("counter.dat"));
                
                if (!isset($_COOKIE['visitor'])) {
                    $counter++;
                    $fp = fopen("counter.dat", "w");
                    flock($fp, LOCK_EX);   // do an exclusive lock
                    fwrite($fp, $counter);
                    flock($fp, LOCK_UN);   // release the lock
                    fclose($fp);
                    setcookie("visitor", 1, time()+3600);
                }
                echo "Visitors: " . $counter ;
                ?>
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="num-text">
                                <p> 因兩岸關係開放影響，國人至中國旅遊意願增加， 使得中國旅遊及商旅人次大增。除了一線城市也逐漸跨 足至二三線城市以及知名景點旅遊機會大增，但是糾紛 也相對增加。 中國二三線最令人詬病的種種問題一一浮現檯面， 如旅遊市場秩序混亂，有些地方旅遊市場亂象叢生，甚 至存在黑惡勢力的影響；旅遊不文明現象時常發生，如 插隊、大聲咆哮；旅遊廁所還達不到遊客的要求，與國 際標準還有很大差距；旅遊涉外糾紛日益增加，旅遊大 外交格局還沒有形成等等，造成台灣國人在中國有許多
                                    糾紛無法解決，甚至遭遇到人身安全也無法也無機關可 管，連申訴管道都有問題。
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
                <h2>知名五星飯店格蘭雲天意外台商死亡事件</h2>
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <p> 201510月 台灣旅客任先生住宿於貴陽格蘭雲天，因房內不平均厚地毯絆倒頭部直接撞擊 未依照標準位置放置的鐵製垃圾桶，腦部重創安全流程延誤40分鐘救護車才抵達，任先生不 幸送醫不治，而格蘭雲天僅以五萬元人民幣表示慰問，並無為了自身飯店設施不良且安全流 程不足等因素公開道歉以及承諾未來設施改善表示負責。 期間像貴陽法院提出訴訟，貴陽法院表示須由海基會海協會提出訴訟，轉而聯繫海基會 海協會，卻又表示並無此業務協助。台灣旅客在中國的權利完全無單位可以保障，也無管道
                                進行申訴，對於在中國的跨境旅客簡直置身無法治國家！！
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/proof1.png" alt="">
                            <p>台商任先生死亡證明</p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/proof2.png" alt="">
                            <p>當地檢調單位檢視地毯不當不平之處圖</p>
                            <img src="images/proof3.png" alt="">
                            <p>鐵製垃圾桶撞擊圖</p>
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
                <h2>兩岸有關單位消極處理</h2>
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="unit">
                                <h3>貴陽格蘭雲天</h3>
                                <p> 僅五萬元人民幣表示慰問， 並未面對事件給予家屬道歉及 承諾未來飯店設施改善，僅表 視此為單一突發事件，不承認 飯店有所疏失，將旅客的人身 安全置之無物。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="unit">
                                <h3>貴陽法院</h3>
                                <p> 事件發生後家屬進行提告， 經過近一年的時間，才告知此 案件須經由海基會、海協會提 告，台灣不得以個人單位進行 提告。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="unit">
                                <h3>海基會、海協會</h3>
                                <p> 家屬轉達貴陽法院公告，僅 表示無法提供業務、無此案例 ，並未協助進一步全力爭取， 形同虛設。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="section4" class="section">
            <div class="bg-title">
                <h2>後續事件現況追蹤</h2>
            </div>
            <div class="container">
                <div class="content">
                    <p>201701貴陽法院表示台灣民眾不得以個人進行訴訟，須經由海基會、海協會進行 訴訟，海基海協會表示對於台灣民眾沒有此業務服務提供，導致整體事件羅生門， 此為貴州當地知名五星級飯店之案例，台灣人民以及全球華人在中國地區旅遊毫無 保障可言。目前全案正透過當地律師協助尋求其他管道進行訴訟以及申訴。
                    </p>
                    <div class="fb-comments" data-href="https://wwchen412.github.io/CHTS/" data-numposts="5"></div>
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