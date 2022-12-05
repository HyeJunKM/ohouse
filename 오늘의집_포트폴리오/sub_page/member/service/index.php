<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>오늘의집</title>
   <!-- 공용 -->
   <link rel="shortcut icon" href="<?=$path?>img/favicon.png" type="image/x-icon">
   <meta name="publisher" content="hj">
   <!-- 셀프 -->
   <link rel="stylesheet" href="./css/style.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    <!-- 헤더 -->
    <?
      include_once($path.'header.php');
    ?>
    <!-- 헤더 -->


   <main id="main">
    <section id="section1">
      <div class="left">
        <h2>무엇을 도와드릴까요?</h2>
        <ul>
          <li><a href="#"><span><img src="./img/qna.png" alt="">배송은 얼마나 걸리나요?</span></a></li>
          <li><a href="#"><span><img src="./img/qna.png" alt="">주문 취소는 어떻게 하나요?</span></a></li>
          <li><a href="#"><span><img src="./img/qna.png" alt="">제품의 자세한 정보를 알고 싶어요.</span></a></li>
          <li><a href="#"><span><img src="./img/qna.png" alt="">제품이 불량일 때는?</span></a></li>
          <li><a href="#"><span><img src="./img/qna.png" alt="">카카오 계정으로 로그인하면 이미 가입되었다고 합니다.</span></a></li>
        </ul>
      </div>
      <div class="right">
        <h2>고객센터<strong>09:00 ~ 18:00</strong></h2>
        <ul>
          <li>평일 : 전체 문의 상담 가능</li>
          <li>주말/공휴일 : 오늘의집 직접배송 및 이사/시공/수리 문의에 한해 전화 상담 가능</li>
        </ul>
        <span><i class="material-icons">&#xe0b0;</i>1670-0876</span>
        <button class='kakao'>1:1 카톡 상담하기</button>
        <div class="email"><button class='email-help'>이메일 문의하기</button><button class='email-copy'>이메일 주소 복사하기</button></div>
      </div>
    </section>
    <section id="section2">
      <hr>
    </section>
    <section id="section3">
      <nav id="nav">
        <ul>
          <li><a href="#" class='nav-btn n-list on'><h4>전체</h4></a></li>
          <li><a href="#" class='nav-btn n-list1'><h4>주문/결제</h4></a></li>
          <li><a href="#" class='nav-btn n-list2'><h4>배송관련</h4></a></li>
          <li><a href="#" class='nav-btn n-list3'><h4>취소/환불</h4></a></li>
          <li><a href="#" class='nav-btn n-list4'><h4>반품/교환</h4></a></li>
          <li><a href="#" class='nav-btn n-list5'><h4>증빙서류발급</h4></a></li>
          <li><a href="#" class='nav-btn n-list6'><h4>로그인/회원정보</h4></a></li>
          <li><a href="#" class='nav-btn n-list7'><h4>서비스/기타</h4></a></li>
        </ul>
      </nav>
      <ul class="list-box">
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">주문 내역은 어떻게 확인할 수 있나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>우측 상단 프로필 사진을 클릭 후 [나의쇼핑]을 통해 확인 가능합니다</p>
          </div>
        </li>
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">결제 방법은 어떤 것이 있나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>신용카드 및 체크카드, 무통장 입금, 휴대폰 소액결제, 네이버페이를 이용해 결제 가능합니다.</p>
          </div>
        </li>
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">비회원주문 및 전화주문이 가능한가요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>전화주문은 준비중에 있습니다.<br> 비회원 주문은 가능하지만 일부 상품에 한해 제한되어있습니다.</p>
          </div>
        </li>
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">신용카드 무이자 할부가 되나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>각 카드사 별로 상이하며, 카드사를 통해 확인 가능합니다.</p>
          </div>
        </li>
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">신용카드 결제 후 할부 개월 수를 변경 가능한가요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>결제 후 결제 정보 변경은 불가능 합니다.<br>단, 결제 완료 단계에서는 취소 후 재주문을 통해 변경 가능합니다.</p>
          </div>
        </li>
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">가상계좌 은행을 변경 할 수 있나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>한번 발급 받은 계좌번호는 변경이 불가능합니다.<br>재주문을 통해 새로운 계좌를 발급 받으신 후 입금 부탁드립니다.</p>
          </div>
        </li>
        <li class="list list1">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">주문 후 결제 방법을 변경하고 싶은데 어떻게 해야 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>결제 후 결제 정보 변경은 불가능 합니다.<br>단, 입금 대기 및 결제 완료 단계에서는 취소 후 재주문을 통해 변경 가능합니다.</p>
          </div>
        </li>

        <li class="list list2">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">배송비는 얼마인가요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>오늘의집은 상품정보 중계 및 판매 매체이며, 판매 업체 별로 배송비 정책이 상이합니다.<br>각 상품 상세페이지에서 배송비를 확인하실 수 있습니다.</p>
          </div>
        </li>
        <li class="list list2">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">배송확인은 어떻게 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              우측 상단 프로필의 [나의쇼핑]을 통해 배송단계를 한눈에 보실 수 있습니다.<br>
              또한 배송이 시작되면 카카오톡 알림톡 또는 SMS로 안내메시지가 발송됩니다.
            </p>
          </div>
        </li>
        <li class="list list2">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">배송은 얼마나 걸리나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
            상품 배송 기간은 배송 유형에 따라 출고 일자 차이가 있습니다.<br>
            자세한 사항은 구매하신 상품의 상세 페이지에서 확인 가능하며, 배송 유형 별 기본 출고 기간은 아래와 같습니다.<br>
            ∙ 일반 택배 / 화물 택배 : 결제 후 1~3 영업일 이내 출고됩니다.<br>
            ∙ 업체 직접 배송 : 배송 지역에 따라 배송 일자가 상이할 수 있으므로 상품 상세 페이지에서 확인 해주세요.<br>
            ※ 영업일은 주말, 공휴일을 제외한 기간입니다.<br>
            ※ 제조사의 사정에 따라 출고일은 지연될 수 있는 점 양해 부탁드립니다.
            </p>
          </div>
        </li>
        <li class="list list2">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">여러 상품을 묶음 배송 받으려면 어떻게 해야하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              각 상품별로 배송처가 상이할 수 있기 때문에 묶음 배송은 어렵습니다.<br>
              단, 배송처가 같은 경우 배송처의 정책에 따라 가능 할 수 있습니다.
            </p>
          </div>
        </li>

        <li class="list list3">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">주문 취소는 어떻게 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              판매처에서 주문을 확인하기 전이라면 언제든 취소하실 수 있으며, [나의 쇼핑 > 주문배송내역 조회 > 주문상세보기]에서 직접 주문취소하실 수 있습니다.<br>
              ※ 이미 판매처에서 상품을 확인해 준비 중이라면, 직접 취소가 어렵습니다. 상세 페이지에 확인되는 판매자 연락처 또는 오늘의집 고객센터로 문의 부탁드립니다.
            </p>
          </div>
        </li>
        <li class="list list3">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">취소 후 환불은 언제되나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              신용카드 및 체크카드의 경우 카드사에서 확인 절차를 거치는 관계로 평균 3~7일 영업일 이내 환불처리가 완료됩니다.<br>
              무통장 입금의 경우 평균 3영업일 이내 요청 하신 계좌로 환불됩니다.<br>
              휴대폰 소액결제의 경우 평균 3영업일 이내 환불 또는 취소 처리가 완료됩니다.
            </p>
          </div>
        </li>
        <li class="list list3">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">여러 개의 상품을 주문했는데, 일부만 취소할 수도 있나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              신용카드 및 체크카드 또는 무통장 입금의 경우 배송 상태에 따라 결제후 부분 취소가 가능하며, 배송상태에 따른 취소 가능 여부는 아래와 같습니다.<br>
              - 입금대기 및 결제완료 단계: 우측 상단 프로필 사진을 클릭 후 [나의쇼핑 > 주문배송내역 조회]에서 즉시취소가능합니다.<br>
              - 배송준비중: 우측 상단 프로필 사진을 클릭 후 [나의쇼핑 > 고객센터 > 1:1 카톡 상담하기]로 취소 가능 여부 문의 부탁드립니다.<br>
              - 배송중 : 주문 취소가 불가능합니다. 수령후 반품 처리 부탁드립니다.<br>
              ※ 단, 가상계좌로 입금 전이라면 부분 취소처리가 불가능하므로 재주문 부탁드립니다.
            </p>
          </div>
        </li>

        <li class="list list4">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">제품이 불량입니다. 반품 혹은 교환은 어떻게 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              업체(브랜드)마다 발송처 및 반품절차가 다릅니다.<br>
              - 우측 상단 프로필 사진을 클릭 후 [나의쇼핑] 페이지에서 원하는 주문의 상세보기 버튼을 클릭 후 교환/반품 접수 후 진행 할 수 있습니다. 교환/반품 접수 없이 임의로 반송한 경우에는 처리가 늦어질 수 있습니다.<br>
              - 교환/반품 접수 시 원활한 처리를 위해 불량 사진이 필요하오니, 가급적 사진을 첨부하여 주시기 바랍니다.<br>
              단, 구매확정 이후 교환/반품을 원하시는 경우 판매 업체에 교환/반품 가능 여부를 먼저 문의 부탁드립니다.
            </p>
          </div>
        </li>

        <li class="list list5">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">세금계산서를 받고 싶은데 어떻게 해야 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              세금계산서 발급은 어려우며, 결제 시 지출증빙 또는 현금영수증 발행은 가능합니다.
            </p>
          </div>
        </li>
        <li class="list list5">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">주문 후 지출증빙/현금영수증 발행이 가능한가요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              주문 완료 후 지출증빙/현금영수증 발행은 불가능합니다.<br>
              지출증빙/현금영수증을 원하시는 경우 반드시 주문 시 "입금자 정보 입력"란에 지출증빙/소득공제 발행 신청을 선택 후 요청정보(주민등록번호/현금영수증 카드번호/휴대폰번호/사업자등록번호)를 입력하셔야 합니다.
            </p>
          </div>
        </li>

        <li class="list list6">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">카카오 계정으로 로그인 하면 '이미 카카오로 가입하신 이메일입니다' 라고 나오는데 어떻게 해야 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              휴대전화 번호를 변경하셨거나 카카오톡 계정을 탈퇴하고 새로 가입하신 경우 이런 문제가 발생할 수 있습니다.<br>
              이 경우 새로운 정보가 반영될 수 있도록 번거로우시더라도 고객센터로 문의 부탁드립니다.<br>
              오늘의집 고객센터 1670-0876 (운영 시간 : 평일 09:00~18:00) - 마이페이지 > 나의 쇼핑 > 고객센터 > 1:1 카톡 상담하기 - 카카오 플러스친구 '오늘의집 고객센터'로 문의
            </p>
          </div>
        </li>
        <li class="list list6">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">회원탈퇴는 어떻게 하나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>
              오늘의집 PC 웹사이트 또는 모바일 앱에서 가능합니다.<br>
              PC 웹사이트: 우측 상단 프로필 사진 클릭 후 [마이페이지 > 설정 > 회원정보수정] 상단의 탈퇴하기 버튼 클릭해주세요.<br>
              모바일 앱: [마이페이지 > 설정 > 프로필 수정] 하단의 탈퇴하기 버튼을 클릭해주세요.<br>
              전문가 회원은 이메일 pro@bucketplace.net으로 문의해주시면 감사하겠습니다.
            </p>
          </div>
        </li>

        <li class="list list7">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">"좋아요"를 누른 콘텐츠(사진/집들이/노하우/등)들은 어디서 볼 수 있나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>우측 상단 프로필 사진을 클릭 후 [마이홈 > 좋아요] 페이지에서 확인 가능합니다.</p>
          </div>
        </li>
        <li class="list list7">
          <div class="title">
            <span>
              <img id='qna' src="./img/qna.png" alt="">제품의 자세한 정보는 어떻게 알 수 있나요?
              <img id='more' src="./img/deliver_down.png" alt="">
            </span>
          </div>
          <div class="content">
            <p>각 제품의 상세 페이지에서 확인 가능하며, 더욱 자세한 정보는 제품상세페이지 내 문의하기를 통해 판매 업체에 문의 가능합니다.</p>
          </div>
        </li>
      </ul>
    </section2>
   </main>

    <!-- 푸터 -->
    <?
        include_once($path.'footer.php');
    ?>
    <!-- 푸터 -->

</div>

<script src="./script/service.js"></script>

</body>
</html>