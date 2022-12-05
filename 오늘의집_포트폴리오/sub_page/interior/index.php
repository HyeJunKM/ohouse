<?
  include_once('./_config.php');
?> 

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>인테리어 무료견적 | 오늘의집 인테리어 시공</title>
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
        <div class="row1">
          <div class="left">
            <div class="box1">
              <a href="#">
                <h1>인테리어시공</h1>
                <p>종합리모델링,<br>부분시공, 카페공간 등<br>분야별 업체찾기</p>
                <img src="./img/icon1.png" alt="">
              </a>
            </div>
          </div>
          <div class="right">
            <div class="box2">
              <a href="#">
                <h1>이사</h1>
                <p>투명한 업체 정보 제공 및 빠른견적</p>
                <img src="./img/icon2.png" alt="">
              </a>
            </div>
            <div class="box3">
              <a href="#">
                <h1>설치/수리</h1>
                <p>커튼, 조명 등 설치<br>전문기사 바로예약</p>
                <img src="./img/icon3.png" alt="">
              </a>
            </div>
          </div>
        </div>

        <div class="row2">
          <div class="box4">
            <a href="#">
              <h1>우리동네 아파트<span class='new'>N</span></h1>
              <p>살고있는, 살고싶은 아파트<br>라이프스타일 살펴보기</p>
              <img src="./img/icon4.png" alt="">
            </a>
          </div>
        </div>

        <div class="row3">
          <div class="box5">
            <a href="#">
              <h1>에어컨청소<span class='new'>N</span></h1>
              <p>항상 깨끗하고<br>건강한 바람</p>
              <img src="./img/icon5.png" alt="">
            </a>
          </div>
          <div class="box6">
            <a href="#">
              <h1>세탁기청소<span class='new'>N</span></h1>
              <p>새것처럼<br>완벽 클리닝</p>
              <img src="./img/icon6.png" alt="">
            </a>
          </div>
        </div>
      </section>

      <section id="section2">
        <div class="s-container">
          <div class="s-view">
            <ul class="s-wrap">
              <li class="slide slide6 last"><a href="#"><img src="./img/slide6.png" alt=""></a></li>
              <li class="slide slide1"><a href="#"><img src="./img/slide1.png" alt=""></a></li>
              <li class="slide slide2"><a href="#"><img src="./img/slide2.png" alt=""></a></li>
              <li class="slide slide3"><a href="#"><img src="./img/slide3.png" alt=""></a></li>
              <li class="slide slide4"><a href="#"><img src="./img/slide4.png" alt=""></a></li>
              <li class="slide slide5"><a href="#"><img src="./img/slide5.png" alt=""></a></li>
              <li class="slide slide6"><a href="#"><img src="./img/slide6.png" alt=""></a></li>
              <li class="slide slide1 first"><a href="#"><img src="./img/slide1.png" alt=""></a></li>
            </ul>
          </div>

          <a href="#" class="s-prev"><img src="./img/arrow.svg" alt=""></a>
          <a href="#" class="s-next"><img src="./img/arrow.svg" alt=""></a>
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