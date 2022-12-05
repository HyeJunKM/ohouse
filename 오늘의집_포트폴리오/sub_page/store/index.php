<?
  include_once('./_config.php');
?> 

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>쇼핑을 쉽게, 스타일링은 즐겁게! 오늘의집 스토어</title>
  <!-- 공용 --> <!-- 공용은 항상 경로설정 다시 해주기 --> 
  <link rel="shortcut icon" href="<?=$path?>img/favicon.png" type="image/x-icon">
  <meta name="publisher" content="hj">
  <!-- 셀프 --> <!-- 셀프는 여기서만 사용하는 것 -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- 공용 -->
  <script src="<?=$path?>script/lib/jquery.min.js"></script>

</head>
<body>

  <ul id="skip">
    <li><a href="#header">메뉴바로가기</a></li>
    <li><a href="#main">메인바로가기</a></li>
    <li><a href="#footer">하단바로가기</a></li>
  </ul>


  <div id="wrap">
    <!-- 모달 -->
    <?
      include_once($path.'modal.php');
    ?>
    <!-- 모달 -->

    <!-- 헤더 -->
    <?
      include_once($path.'header.php');
    ?>
    <!-- 헤더 -->
    

    <!-- 셀프 - 메인영역 -->
    <main id="main">
      <section id="section1">
        <div class="s-container">
          <div class="s-view">
            <ul class="s-wrap">
              <li class="slide slide9 last"><a href="#"><img src="./img/slide9.jpg" alt=""></a></li>
              <li class="slide slide1"><a href="#"><img src="./img/slide1.jpg" alt=""></a></li>
              <li class="slide slide2"><a href="#"><img src="./img/slide2.jpg" alt=""></a></li>
              <li class="slide slide3"><a href="#"><img src="./img/slide3.jpg" alt=""></a></li>
              <li class="slide slide4"><a href="#"><img src="./img/slide4.jpg" alt=""></a></li>
              <li class="slide slide5"><a href="#"><img src="./img/slide5.jpg" alt=""></a></li>
              <li class="slide slide6"><a href="#"><img src="./img/slide6.jpg" alt=""></a></li>
              <li class="slide slide7"><a href="#"><img src="./img/slide7.jpg" alt=""></a></li>
              <li class="slide slide8"><a href="#"><img src="./img/slide8.jpg" alt=""></a></li>
              <li class="slide slide9"><a href="#"><img src="./img/slide9.jpg" alt=""></a></li>
              <li class="slide slide1 first"><a href="#"><img src="./img/slide1.jpg" alt=""></a></li>
            </ul>
          </div>
          <span class="s-count">
            <em class="count-num"></em>
            <i>/</i>
            <em class="total-num"></em>
            <i class='plus'>+</i>
          </span>
        </div>
        
        <div class="nav">
          <ul>
            <li class='nav-btn'>주말특가</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>윈터세일</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>인테리어 세일</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>인기가전 특가</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>캠핑 초특가</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>덴버 세일</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>빠른배송</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>삼성 기획전</li>
            <li class='bar'><i>|</i></li>
            <li class='nav-btn'>쿠쿠 세일</li>
            <li class='arrow prev'><img src="./img/nav_next.png" alt=""></li>
            <li class='arrow next'><img src="./img/nav_next.png" alt=""></li>
          </ul>
        </div>
      </section>

      <section id="section2">
        <ul>
          <li><a href="#"><img src="./img/icon1.jpg" alt=""><h4>하루특가</h4><strong>HOT</strong></a></li>
          <li><a href="#"><img src="./img/icon2.jpg" alt=""><h4>베스트</h4></a></li>
          <li><a href="#"><img src="./img/icon3.jpg" alt=""><h4>오늘의딜</h4><strong>SALE</strong></a></li>
          <li><a href="#"><img src="./img/icon4.jpg" alt=""><h4>오!굿즈</h4><strong>SALE</strong></a></li>
          <li><a href="#"><img src="./img/icon5.jpg" alt=""><h4>빠른배송</h4></a></li>
          <li><a href="#"><img src="./img/icon6.jpg" alt=""><h4>프리미엄</h4></a></li>
          <li><a href="#"><img src="./img/icon7.jpg" alt=""><h4>리퍼마켓</h4></a></li>
          <li><a href="#"><img src="./img/icon8.jpg" alt=""><h4>삼성특가</h4></a></li>
          <li><a href="#"><img src="./img/icon9.jpg" alt=""><h4>오!쇼룸</h4><strong>NEW</strong></a></li>
          <li><a href="#"><img src="./img/icon10.jpg" alt=""><h4>기획전</h4></a></li>
        </ul>
      </section> 

      <section id="section3">
        <div class="title"><h3>오늘의딜</h3><a href="#">더보기</a></div>
        <div class="s-container"> 
          <div class="s-view">
            <ul class="s-wrap">
              <li class="slide slide1">
                <div class="gap">
                  <a href="#">
                    <img src="./img/deal1.jpg" alt="">
                    <span class="timer">4일 남음</span>
                    <strong class="bookmark"><img src="./img/bookmark_white.png" alt=""></strong>
                  </a>
                  <div class="content">
                    <h1>타카타카</h1>
                    <h2>[오늘의딜]스위스항균인증/스탠다드 WP워터쉴드 방수매트리스커버 10size</h2>
                    <h3><em>62%</em><strong>8,900</strong></h3>
                    <h4><img src="./img/star.png" alt=""><strong>4.7</strong>리뷰 45,521</h4>
                    <span class='bg-button'><h6>무료배송</h6><h5>특가</h5></span>
                  </div>
                </div>
              </li>

              <li class="slide slide2">
                <div class="gap">
                  <a href="#">
                    <img src="./img/deal2.jpg" alt="">
                    <span class="timer">1일 남음</span>
                    <strong class="bookmark"><img src="./img/bookmark_white.png" alt=""></strong>
                  </a>
                  <div class="content">
                    <h1>홈앤하우스</h1>
                    <h2>[오늘의딜] 멀티코팅 바지걸이 20p</h2>
                    <h3><em>43%</em><strong>9,500</strong></h3>
                    <h4><img src="./img/star.png" alt=""><strong>4.8</strong>리뷰 40,696</h4>
                    <span class='bg-button'><h6>무료배송</h6><h5>특가</h5></span>
                  </div>
                </div>
              </li>

              <li class="slide slide3">
                <div class="gap">
                  <a href="#">
                    <img src="./img/deal3.jpg" alt="">
                    <span class="timer">4일 남음</span>
                    <strong class="bookmark"><img src="./img/bookmark_white.png" alt=""></strong>
                  </a>
                  <div class="content">
                    <h1>듀플렉스</h1>
                    <h2>[단독특가] 3.5L 대용량 무드등 초음파 가습기 DP-G50UH</h2>
                    <h3><em>46%</em><strong>19,900</strong></h3>
                    <h4><img src="./img/star.png" alt=""><strong>4.8</strong>리뷰 5</h4>
                    <img src="./img/delivery.png" alt="">
                    <h5>평일 16:00까지 결제시</h5>
                    <span class='bg-button'><h6>무료배송</h6><h5>특가</h5></span>
                  </div>
                </div>
              </li>

              <li class="slide slide4">
                <div class="gap">
                  <a href="#">
                    <img src="./img/deal4.jpg" alt="">
                    <span class="timer">2일 남음</span>
                    <strong class="bookmark"><img src="./img/bookmark_white.png" alt=""></strong>
                  </a>
                  <div class="content">
                    <h1>데스커</h1>
                    <h2>[오늘의딜][5천원쿠폰] 오피스 서재가구BEST 모음전(책상/책장)</h2>
                    <h3><em>19%</em><strong>87,900 외</strong></h3>
                    <h4><img src="./img/star.png" alt=""><strong>4.6</strong>리뷰 21,750</h4>
                    <span class='bg-button'><h6>무료배송</h6><h5>특가</h5></span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section> <!-- 오늘의 딜 -->

      <section id="section4">
        <div class="title"><h3>카테고리별 상품 찾기</h3></div>
        <div class="s-container">
          <div class="s-view">
            <ul class="s-wrap">
              <li class="slide slide1">
                <a href="#">
                  <img src="./img/cate1.png" alt="">
                  <h4>가구</h4>
                </a>
              </li>
              <li class="slide slide2">
                <a href="#">
                  <img src="./img/cate2.png" alt="">
                  <h4>패브릭</h4>
                </a>
              </li>
              <li class="slide slide3">
                <a href="#">
                  <img src="./img/cate3.png" alt="">
                  <h4>가전</h4>
                </a>
              </li>
              <li class="slide slide4">
                <a href="#">
                  <img src="./img/cate4.png" alt="">
                  <h4>유아·아동</h4>
                </a>
              </li>
              <li class="slide slide5">
                <a href="#">
                  <img src="./img/cate5.png" alt="">
                  <h4>조명</h4>
                </a>
              </li>
              <li class="slide slide6">
                <a href="#">
                  <img src="./img/cate6.png" alt="">
                  <h4>주방용품</h4>
                </a>
              </li>
              <li class="slide slide7">
                <a href="#">
                  <img src="./img/cate7.png" alt="">
                  <h4>데코·식물</h4>
                </a>
              </li>
              <li class="slide slide8">
                <a href="#">
                  <img src="./img/cate8.png" alt="">
                  <h4>수납·정리</h4>
                </a>
              </li>
              <li class="slide slide9">
                <a href="#">
                  <img src="./img/cate9.png" alt="">
                  <h4>생활용품</h4>
                </a>
              </li>
              <li class="slide slide10">
                <a href="#">
                  <img src="./img/cate10.png" alt="">
                  <h4>생필품</h4>
                </a>
              </li>
              <li class="slide slide11">
                <a href="#">
                  <img src="./img/cate11.png" alt="">
                  <h4>공구·DIY</h4>
                </a>
              </li>
              <li class="slide slide12">
                <a href="#">
                  <img src="./img/cate12.png" alt="">
                  <h4>인테리어시공</h4>
                </a>
              </li>
              <li class="slide slide13">
                <a href="#">
                  <img src="./img/cate13.png" alt="">
                  <h4>반려동물</h4>
                </a>
              </li>
              <li class="slide slide14">
                <a href="#">
                  <img src="./img/cate14.png" alt="">
                  <h4>캠핑용품</h4>
                </a>
              </li>
              <li class="slide slide15">
                <a href="#">
                  <img src="./img/cate15.png" alt="">
                  <h4>실내운동</h4>
                </a>
              </li>
              <li class="slide slide16">
                <a href="#">
                  <img src="./img/cate16.png" alt="">
                  <h4>렌탈</h4>
                </a>
              </li>
            </ul>
          </div>
          <a href="#" class="s-prev"><img src="./img/s-next.svg" alt=""></a>
          <a href="#" class="s-next"><img src="./img/s-next.svg" alt=""></a>
        </div>
      </section> <!-- 카테고리별 상품 찾기 -->

      <section id="section5">
        <div class="title"><h3>인기 상품</h3></div>
        <div class="container">
          <div class="gap">
            <div class="content">
              <div class="gallery-head">
                <span class='left'>배송<img src="./img/deliver_down.png" alt=""></span>
                <span class='right'>
                  <a href="#" class='on'>인기순<img src="./img/ico_down.png" alt=""></a>
                </span>
              </div>

              <ul class="gallery-wrap">

              </ul>

            </div>
          </div>
        </div>
 
      </section>

      
    </main>
    <!-- 셀프 - 메인영역 -->


    <!-- 푸터 -->
    <?
      include_once($path.'footer.php');
    ?>
    <!-- 푸터 -->

  </div>
  
  <!-- 셀프 -->
  <script src="./script/script.js"></script>
  <!-- 공용 -->
  <script src="<?=$path?>script/header.js"></script>
</body>
</html>