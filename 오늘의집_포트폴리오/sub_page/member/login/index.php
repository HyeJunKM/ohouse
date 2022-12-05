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
    <section id="login">
        <div class="container">
            <div class="title">
                <a href="../../../index.php"><img src="./img/logo.png" alt=""></a>
            </div>
            <div class="content">
                <form name='sign_in' id='signIn' method='post' action="./response.php">
                    <ul>
                        <li><input type="email" name="email" id="email" value="" placeholder="이메일"></li>
                        <li><input type="password" name="pw" id="pw" value="" placeholder="비밀번호"></li>
                        <li><button type="submit" class="login-btn">로그인</button></li>
                        <li><span><a href="#" class="pw-reset">비밀번호 재설정</a><a href="#" class="join-btn">회원가입</a></span></li>
                        <li><p>SNS계정으로 간편 로그인/회원가입</p></li>
                        <li><div class="img-box"><img src="./img/sns_facebook.png" alt=""><img src="./img/sns_kakao.png" alt=""><img src="./img/sns_naver.png" alt=""></div></li>
                        <li><em>로그인에 문제가 있으신가요?</em></li>
                        <li><h5>비회원 주문 조회하기</h5></li>
                    </ul>
                </form>
            </div>
        </div>
    </section>
   </main>

   <footer id='footer'> <span>&copy; bucketplace, Co., Ltd. All Rights Reserved </span> </footer>

</div>

</body>
</html>