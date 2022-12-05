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
   <main id="main">
    <section id="join">
        <div class="container">
          <div class="head">
              <a href="../../../index.php"><img src="./img/logo.png" alt=""></a>
              <h2>회원가입</h2>
          </div>
          <div class="content">
            <form autocomplete='off' id='signUp' name='sign_up' method='post' action="./response.php">
              <ul>
                <li><p>SNS계정으로 간편하게 회원가입</p></li>
                <li><div class="img-box"><img src="./img/sns_facebook.png" alt=""><img src="./img/sns_kakao.png" alt=""><img src="./img/sns_naver.png" alt=""></div></li>
                <li class="email-box">
                  <div class="title"><label for="email">이메일</label></div>
                  <div class="email-input">
                    <input type="text" name="email" id="email" value="" placeholder="이메일">
                    <i>@</i>
                    <select name="emailAdd" id="emailAdd">
                      <option value="">선택해주세요</option>
                      <option value="naver">naver.com</option>
                      <option value="hanmail">hanmail.net</option>
                      <option value="daum">daum.net</option>
                      <option value="gmail">gmail.com</option>
                      <option value="nate">nate.com</option>
                      <option value="hotmail">hotmail.com</option>
                      <option value="outlook">outlook.com</option>
                      <option value="icloud">icloud.com</option>
                      <option value="직접입력">직접입력</option>
                    </select>
                    <p class='error email-error1'>필수 입력 항목입니다.</p>
                    <p class='error email-error2'>이메일 형식이 올바르지 않습니다.</p>
                    <p class='error email-error3'>이메일 인증을 완료해주세요.</p>
                    <button type="button" class='email-check' disabled>이메일 인증하기</button>
                  </div>
                </li>
                <li class="email2-box">
                  <h4>이메일로 전송된 인증코드를 입력해주세요.</h4>
                  <input maxlength='6' type="text" id='email2' name='email2' placeholder='인증코드 6자리 입력'>
                  <span class='email-time'><em class='min'>02</em>:<em class='sec'>59</em></span>
                  <button type="button" class='email-check-ok' disabled>확인</button>
                  <p class='error email-check-error'>인증코드가 만료되었습니다.</p>
                  <span class='info'><img src="./img/information.png" alt="">이메일을 받지 못하셨나요?<strong>이메일 재전송하기</strong></span>
                </li>
                <li class="pw-box">
                  <div class="title">
                    <label for="pw">비밀번호</label>
                    <p>영문, 숫자를 포함한 8자 이상의 비밀번호를 입력해주세요.</p>
                  </div>
                  <div class="pw-input">
                    <input type="password" name="pw" id="pw" value="" placeholder="비밀번호">
                    <p class='error pw-error1'>비밀번호는 영문, 숫자를 포함하여 8자 이상이어야 합니다.</p>
                    <p class='error pw-error2'>필수 입력 항목입니다.</p>
                    <p class='error pw-error3'>공백은 사용할 수 없습니다.</p>
                  </div>
                </li>
                <li class="pw2-box">
                  <div class="title">
                    <label for="pw2">비밀번호 확인</label>
                  </div>
                  <div class="pw2-input">
                    <input type="password" name="pw2" id="pw2" value="" placeholder="비밀번호 확인">
                    <p class='error pw2-error'>비밀번호가 일치하지 않습니다.</p>
                  </div>
                </li>
                <li class="name-box">
                  <div class="title">
                    <label for="name">닉네임</label>
                    <p>다른 유저와 겹치지 않도록 입력해주세요. (2~15자)</p>
                  </div>
                  <div class="name-input">
                    <input type="text" name="name" id="name" value="" placeholder="별명 (2~15자)">
                    <p class='error name-error1'>필수 입력 항목입니다.</p>
                    <p class='error name-error2'>2자 이상 입력해주세요.</p>
                    <p class='error name-error3'>사용 중인 별명입니다.</p>
                  </div>
                </li>
                <li class="agree-box">
                  <div class="title"><label for="agree">약관동의</label></div>
                  <div class="agree">
                    <ul>
                      <li>
                        <label class='check-all'><input type="checkbox" id='checkAll' name='check_all' value='전체동의'>전체동의</label>
                        <h6>선택항목에 대한 동의 포함</h6>
                      </li>
                      <li>
                        <label class='after'><input type="checkbox" id='check1' name='check1' class='check' value='만 14세 이상입니다(필수)'>만 14세 이상입니다</label>
                        <em class='on'>(필수)</em>
                      </li>
                      <li>
                        <label class='after'><input type="checkbox" id='check2' name='check2' class='check' value='이용약관(필수)'>이용약관</label>
                        <em class='on'>(필수)</em>
                        <span class='agree-view'><img src="./img/arrow.png" alt=""></span>
                      </li>
                      <li>
                        <label class='after'><input type="checkbox" id='check3' name='check3' class='check' value='개인정보수집 및 이용동의(필수)'>개인정보수집 및 이용동의</label>
                        <em class='on'>(필수)</em>
                        <span class='agree-view'><img src="./img/arrow.png" alt=""></span>
                      </li>
                      <li>
                        <label class='after'><input type="checkbox" id='check4' name='check4' class='check' value='개인정보 마케팅 활용 동의(선택)'>개인정보 마케팅 활용 동의</label>
                        <em>(선택)</em>
                        <span class='agree-view'><img src="./img/arrow.png" alt=""></span>
                      </li>
                      <li>
                        <label class='after'><input type="checkbox" id='check5' name='check5' class='check' value='이벤트, 쿠폰, 특가 알림 메일 및 SMS 등 수신(선택)'>이벤트, 쿠폰, 특가 알림 메일 및 SMS 등 수신</label>
                        <em>(선택)</em>
                      </li>
                    </ul>
                  </div>
                  <p class='error agree-error'>필수 항목에 동의해주세요.</p>
                </li>
                <li><button type="submit" class="submit on">회원가입하기</button></li>
                <li><h5>이미 아이디가 있으신가요?<a href="../login/index.php">로그인</a></h5></li>
              </ul>
            </form>
          </div>
        </div>
    </section>
   </main>

  <div class="member-modal">
    <div class="wrap">
      <div class="container">
          <div class="content">
              <p class='modal-message'></p>
          </div>
      </div>
  </div>
</div>

</div>

<script src="./script/join.js"></script>

</body>
</html>