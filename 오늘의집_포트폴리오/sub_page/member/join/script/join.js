;(($,window)=>{

  const SignUp = {
    데이터 : {
      이메일:'',
      이메일주소:'',
      이메일인증:false,
      비밀번호:'',
      비밀번호확인:'',
      닉네임:'',
      약관동의:[], // 전체 5개 중 필수 3개, 선택 2개
    },

    init(){
      this.emailFn();
      this.pwFn();
      this.nameFn();
      this.agreeFn();
    },
    emailFn(){
      let num = null; //인증번호 변수
      let m = 02; //2 min
      let s = 59; //59 sec 
      let setId = 0; //setInterval 변수

      $('#email').on({
        keyup: function(){
          const regExp = /\s/g; //스페이스바 금지
          let emailVal =$('#email').val();
          let result=emailVal.replace(regExp,'');
          $('#email').val(result); 

          if (emailVal===''){//빈칸;
            $('.email-input .error').removeClass('on');
            $('.email-input .email-error1').addClass('on');
          } //스페이스바
          else if (emailVal===''||emailVal.length<3){
            $('.email-input .error').removeClass('on');
            $('.email-input .email-error2').addClass('on');
          }
          else {
            $('.email-input .error').removeClass('on');
            $('.email-check').addClass('on').attr('disabled',false); //disabled 풀어주기
          }
        }
      });

      /////////인증하기 버튼
      $('.email-check').on({
        click: function(e){
          e.preventDefault();
          num = Math.floor(Math.random()*900000+100000);
          $(this).removeClass('on');
          $('.member-modal').show();
          $('.modal-message').html(`입력한 이메일로 인증 메일이 발송되었습니다.<br>이메일에 표시된 인증코드를 입력해주세요`);
          $('.email2-box').show();
            timerCount();
          }
        });

      //////////////3분 타이머 함수
      function timerCount(){
        m = 02; //02 min
        s = 59; //59 sec
        setId = setInterval(function(){
          s--;
          if (s<0){///60초 경과
            s=59; m--;
            if (m<0){
              s=0; m=0; clearInterval(setId); //초기화, 타이머 중지
              $('.member-modal').hide();
              $('.email2-box .email-check-error').addClass('on');
              $('.email-check-ok').removeClass('on').attr('disabled', true);
              return;
            }
          }

          $('.min').text(`${m<10 ? '0'+m : m}`);
          $('.sec').text(`${s<10 ? '0'+s : s}`);
        },1000);
      }

      //////이메일 인증코드
      $('#email2').on({
        keyup: function(){
          
          let emailVal2 =$('#email2').val();
          const regExp = /[^\d]/g;
          $('#email2').val(emailVal2.replace(regExp,'')); //숫자 제외는 입력과 동시에 삭제

          if (emailVal2.length >= 1){ //1글자이상 입력되면
            $('.email-check-ok').addClass('on');
            $('.email-check-ok').attr('disabled', false);
          }
          else {
            $('.email-check-ok').removeClass('on');
            $('.email-check-ok').attr('disabled', true);
          }
        }
      });

    },
    pwFn(){

      const that = this;
      let pwValue ='';

      //최소 8자 이상 입력 / 영문/숫자/특수문자 2개 이상 조합 / 공백 금지
      $('#pw').on({
        keyup: function(){
          const regExp1 = /.{8,}/g; 
          const regExp2 = /((?=.*[A-Z])+(?=.*[0-9])+)+|((?=.*[0-9])+(?=.*[`~!@#$%^&*()\-_=+|\\\{\}\[\]'";:?.,<>])+)+|((?=.*[A-Z])+(?=.*[`~!@#$%^&*()\-_=+|\\\{\}\[\]'";:?.,<>])+)+/gi;
          const regExp3 = /\s/g;

          pwValue =$('#pw').val();
          if (pwValue===''){$('.pw-input .pw-error').removeClass('on');}
          else {
            if (regExp1.test(pwValue)===false){
              $('.pw-input .error').removeClass('on'); 
              $('.pw-input .pw-error1').addClass('on');
            }
            else if (regExp2.test(pwValue)===false){
              $('.pw-input .error').removeClass('on'); 
              $('.pw-input .pw-error2').addClass('on');
            }
            else if (regExp3.test(pwValue)===true){
              $('.pw-input .error').removeClass('on'); 
              $('.pw-input .pw-error3').addClass('on');
            }
            else {$('.pw-input .error').removeClass('on');}
          }

        }
      });

      //////////////비밀번호 확인
      $('#pw2').on({
        keyup: function(){
          let pw2Val = $('#pw2').val();
          let pw1Val = $('#pw').val();
          if (pw2Val==='' || pw2Val!==pw1Val){
            $('.pw2-input .error').addClass('on');
          }
          else {
            $('.pw2-input .error').removeClass('on');
          }
        }
      });
    },
    nameFn(){

      $('#name').on({
        keyup:function(){
          let nameVal =$('#name').val();
          if (nameVal===''){
            $('.name-input .error').removeClass('on');
            $('.name-input .name-error1').addClass('on');
          }
          else if (nameVal.length<2){
            $('.name-input .error').removeClass('on');
            $('.name-input .name-error2').addClass('on');
          }
          else {$('.name-input .error').removeClass('on');}
        }
      });

    },
    agreeFn(){

      const that = this;

      $('.check').each(function(){
        $(this).on({
          change: function(){
            checkState();
          }
        });
      });
      
      function checkState (){ //체크 갯수 카운트, 집계(피봇)
        let cnt = 0;
        let arr = []; //임시 배열 보관장소
        $('.check').each(function(idx, item){
          if ($(this).is(':checked')===true){
            cnt++;
            //체크한 항목 value값 배열에 추가하기
            arr = [...that.데이터.약관동의,item.value]; // 이전 데이터에 새로운 데이터를 누적
          }
          else {
            //체크해제시 배열에서 삭제
            //재배열 arr = arr.filter((배열값)=> 배열값 !== 선택 취소한 값); 
            arr = arr.filter((val)=>val!==item.value); 
          } 
        });

        arr=[...new Set(arr)]; ///중복된 데이터 제거
        that.데이터.약관동의 = arr; //최종 정리된 데이터 저장

        //5개 선택되었을 때 전체동의 자동선택
        if (cnt===5){$('#checkAll').prop('checked', true);}
        else {$('#checkAll').prop('checked', false);}
      }

      let 전체동의 = [
        '만 14세 이상입니다(필수)', 
        '이용약관(필수)', 
        '개인정보수집 및 이용동의(필수)', 
        '개인정보 마케팅 활용 동의(선택)', 
        '이벤트, 쿠폰, 특가 알림 메일 및 SMS 등 수신(선택)', 
      ]
      
      //전체동의 클릭시 전체 체크
      $('#checkAll').on({
        change: function(){

          let {약관동의} = that.데이터;

          if ($(this).is(':checked')===true){
            $('.check').prop('checked', true);
            약관동의 = [...약관동의, 전체동의]; //배열 누적 추가
          }
          else {
            $('.check').prop('checked', false);
            약관동의 = []; //빈칸으로 두면 배열 삭제
          }
        }
      });
    },
    submitFn(){

      const that = this;
      let cnt = 0;
      let 데이터 = {
        이메일:'',
        이메일주소:'',
        이메일인증:false,
        비밀번호:'',
        비밀번호확인:'',
        닉네임:'',
        약관동의:[],
      }

      //////////전송버튼 클릭
      $('.submit').on({
        click: function(e){
          e.preventDefault();

          데이터.이메일 = $('#email').val(),
          데이터.이메일주소 = $('#emailAdd').val(),
          데이터.이메일인증 = false,
          데이터.비밀번호 = $('#pw').val(),
          데이터.비밀번호확인 = $('#pw2').val(),
          데이터.닉네임 = $('#name').val(),

          //이용약관 필수 3개 반드시 선택
          $('.check').each(function(idx, item){
            if ($(this).is(':checked')){ //선택자 객체
              데이터.이용약관 = [...데이터.이용약관, item.value];
              console.log(item.value.indexOf('필수'));
              if (item.value.indexOf('필수')>=0){ 
                //item.value 값 안에 필수항목 갯수 카운트 
                cnt++;
              }
              else {}
            }
          });

          if (데이터.이메일===''||데이터.이메일주소===''||데이터.비밀번호===''||데이터.비밀번호확인===''||데이터.닉네임===''){
            $('.member-modal').show();
            $('.modal-message').html(`모든 항목을 빈칸없이 입력해주세요.`);
            return;
          }
          else {
            $('.member-modal').hide();
            $('.modal-message').html(``);
          }

          if (cnt<3){
            $('.member-modal').show();
            $('.modal-message').html(`이용약관의 필수 항목을 선택해주세요.`);
            return;
          }
          else {
            $('.member-modal').hide();
            $('.modal-message').html(``);
          }

          localStorage.setItem(데이터.이메일, JSON.stringify(데이터));
          $('.member-modal').show();
          $('.modal-message').html(`${데이터.닉네임}님 반갑습니다!`);
        }
      });
    }
  }
  SignUp.init();

})(jQuery,window);

