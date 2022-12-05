;(function($){

  const Ohouse={
    init (){
      this.header();
      this.section1();
      this.section3();
      this.section4();
      this.section5();
      this.section6();
      this.section7();
      this.section8();
      this.section10();
      this.section11();
      this.section13();
      this.section14();
      this.footer();
    },

    header (){

      const $header = $('#header');
      const $headerTop = $('#header').offset().top; //header 스크롤 탑값 자동계산 /offset=간격
      //console.log('.header 오프셋 탑값 :' + $headerTop);

      //////////////////////////////////////스크롤 이벤트
      $(window).scroll(function(){
        //스크롤 탑 값이 header탑값 이상이면 header탭 고정 (on클래스 추가)
        if ( $(window).scrollTop()>=$headerTop){
          $header.addClass('on');
          $('#header .sub').hide();
          $('#header hr').hide();
        }
        else {
          $header.removeClass('on');
          $('#header .sub1').show();
          $('#header hr').show();
        }
      });
      //스크롤 시 .sub랑 hr 사라지기 

      const $icon = $('#header .icon-btn');

      $icon.eq(0).on({
        mouseenter: function(){
          $(this).children().attr('src','./img/cart_hover.png')
        },
        mouseleave: function (){
          $(this).children().attr('src','./img/cart.png')
        }
      });

    },

    section1 (){
      let cnt = 0; //let은 변수가 바뀔 때 사용
      let setId = 0; //타이머 할당 메모리번호 기억하는 변수

      const $slideContain = $('#section1 .s-container');
      const $slideWrap = $('#section1 .s-wrap');
      const $slide = $('#section1 .slide');
      const $countNum = $('#section1 .count-num');
      const $totalNum = $('#section1 .total-num');
      const $prevNext = $('#section1 .s-prev, #section1 .s-next');
      const $prev = $('#section1 .s-prev');
      const $next = $('#section1 .s-next');
      
      mainSlide(); //로딩시 바로 실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-100*cnt+'%'}, 600, function(){
          if (cnt>=10){cnt=0;}
          if (cnt<=-1){cnt=9;}
          $slideWrap.stop().animate({left:-100*cnt+'%'}, 0); //if 1,2의 결과일 경우 실행
        });

        $countNum.text(cnt>=10?1 : (cnt+1<=0?10:cnt+1));

        let totalNum = 0;
        totalNum = $slide.length-2; //전체번호 세기
        $totalNum.text(totalNum);
      } 

      function nextCount(){
        cnt++;
        mainSlide();
      }

      function prevCount(){
        cnt--;
        mainSlide();
      }

      function autoTimer(){
        setId = setInterval(nextCount,3000);
        //메모리 할당된 번호 입력
        console.log(setId);
      }

      autoTimer();

      ////////////슬라이드에 마우스 호버시 화살표 보이기(+일시정지) / 떠났을 때 숨기기
      $prevNext.stop().fadeOut(0);
      $slideContain.on({
        mouseenter: function(){
          $prevNext.stop().fadeIn(100);
          // 타이머 일시정지: clearInterval
          clearInterval(setId);
        },
        mouseleave: function(){
          $prevNext.stop().fadeOut(100);
          // 타이머 다시재생
          autoTimer();
        }
      });

      ///////////슬라이드 화살표 클릭 //슬라이드 애니메이션 진행중일때는 실행 안 함
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} //애니메이션 멈춘 상태에서 실행 ===false
        }
      });

      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();} //애니메이션 멈춘 상태에서 실행 ===false
        }
      });
    },

    section3 (){
      $('#section3 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section4 (){
      $('#section4 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section5 (){
      $('#section5 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section6 (){
      $('#section6 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section7 (){

      let cnt=0;
      const $slideWrap = $('#section7 .s-wrap');
      const $prev = $('#section7 .s-prev');
      const $next = $('#section7 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-210*cnt},600);

        if (cnt>=1){$next.stop().fadeOut(100);}
        else {$next.stop().fadeIn(100);}

        if (cnt<=0){$prev.stop().fadeOut(100);}
        else {$prev.stop().fadeIn(100);}
      }

      function nextCount(){
        cnt++;
        mainSlide();
      }
      function prevCount(){
        cnt--;
        mainSlide();
      }

      ///버튼클릭
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} 
        }
      });

      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();}
        }
      });
    },

    section8 (){

      let cnt=0;
      const $slideWrap = $('#section8 .s-wrap');
      const $prev = $('#section8 .s-prev');
      const $next = $('#section8 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-1136*cnt},600);

        if (cnt>=2){$next.stop().fadeOut(100);}
        else {$next.stop().fadeIn(100);}

        if (cnt<=0){$prev.stop().fadeOut(100);}
        else {$prev.stop().fadeIn(100);}
      }

      function nextCount(){
        cnt++;
        mainSlide();
      }
      function prevCount(){
        cnt--;
        mainSlide();
      }

      ///버튼클릭
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} 
        }
      });
      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();}
        }
      });

      $('#section8 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section10 (){

      let cnt=0;
      const $slideWrap = $('#section10 .s-wrap');
      const $prev = $('#section10 .s-prev');
      const $next = $('#section10 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-964*cnt},600);

        if (cnt>=1){$next.stop().fadeOut(100);}
        else {$next.stop().fadeIn(100);}

        if (cnt<=0){$prev.stop().fadeOut(100);}
        else {$prev.stop().fadeIn(100);}
      }

      function nextCount(){
        cnt++;
        mainSlide();
      }
      function prevCount(){
        cnt--;
        mainSlide();
      }

      ///버튼클릭
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} 
        }
      });
      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();}
        }
      });

      $('#section10 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section11 (){

      let cnt=0;
      const $slideWrap = $('#section11 .s-wrap');
      const $prev = $('#section11 .s-prev');
      const $next = $('#section11 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-964*cnt},600);

        if (cnt>=1){$next.stop().fadeOut(100);}
        else {$next.stop().fadeIn(100);}


        if (cnt<=0){$prev.stop().fadeOut(100);}
        else {$prev.stop().fadeIn(100);}
      }

      function nextCount(){
        cnt++;
        mainSlide();
      }
      function prevCount(){
        cnt--;
        mainSlide();
      }

      ///버튼클릭
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} 
        }
      });
      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();}
        }
      });

      $('#section11 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });
    },

    section13 (){

      let cnt=0;
      const $slideWrap = $('#section13 .s-wrap');
      const $prev = $('#section13 .s-prev');
      const $next = $('#section13 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-867*cnt},600);

        if (cnt>=1){$next.stop().fadeOut(100);}
        else {$next.stop().fadeIn(100);}

        if (cnt<=0){$prev.stop().fadeOut(100);}
        else {$prev.stop().fadeIn(100);}
      }

      function nextCount(){
        cnt++;
        mainSlide();
      }
      function prevCount(){
        cnt--;
        mainSlide();
      }

      ///버튼클릭
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} 
        }
      });
      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();}
        }
      });

    },

    section14 (){

      let cnt=0;
      const $slideWrap = $('#section14 .s-wrap');
      const $prev = $('#section14 .s-prev');
      const $next = $('#section14 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-148*cnt},600);

        if (cnt>=1){$next.stop().fadeOut(100);}
        else {$next.stop().fadeIn(100);}

        if (cnt<=0){$prev.stop().fadeOut(100);}
        else {$prev.stop().fadeIn(100);}
      }

      function nextCount(){
        cnt++;
        mainSlide();
      }
      function prevCount(){
        cnt--;
        mainSlide();
      }

      ///슬라이드버튼
      $prev.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){prevCount();} 
        }
      });

      $next.on({
        click: function(e){
          e.preventDefault();
          if($slideWrap.is(':animated')===false){nextCount();}
        }
      });

      ////북마크
      $('#section14 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).find('img').attr('src', function(index,attr){
            if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
            else {return attr.replace('_click.png', '_white.png');}
          });
        }
      });

      ////클릭이벤트
      $('#section14 .btn1').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn1, #section14 .gap1').addClass('on');
        }
      });

      $('#section14 .btn2').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn2, #section14 .gap2').addClass('on');
        }
      });

      $('#section14 .btn3').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn3, #section14 .gap3').addClass('on');
        }
      });

      $('#section14 .btn4').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn4, #section14 .gap4').addClass('on');
        }
      });

      $('#section14 .btn5').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn5, #section14 .gap5').addClass('on');
        }
      });

      $('#section14 .btn6').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn6, #section14 .gap6').addClass('on');
        }
      });

      $('#section14 .btn7').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn7, #section14 .gap7').addClass('on');
        }
      });

      $('#section14 .btn8').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn8, #section14 .gap8').addClass('on');
        }
      });

      $('#section14 .btn9').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn9, #section14 .gap9').addClass('on');
        }
      });

      $('#section14 .btn10').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn10, #section14 .gap10').addClass('on');
        }
      });

      $('#section14 .btn11').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn11, #section14 .gap11').addClass('on');
        }
      });

      $('#section14 .btn12').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn12, #section14 .gap12').addClass('on');
        }
      });

      $('#section14 .btn13').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn13, #section14 .gap13').addClass('on');
        }
      });

      $('#section14 .btn14').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn14, #section14 .gap14').addClass('on');
        }
      });

      $('#section14 .btn15').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn15, #section14 .gap15').addClass('on');
        }
      });

      $('#section14 .btn16').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn16, #section14 .gap16').addClass('on');
        }
      });

      $('#section14 .btn17').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn17, #section14 .gap17').addClass('on');
        }
      });

      $('#section14 .btn18').on({
        click: function(e){
          e.preventDefault(e);
          $('#section14 .btn, #section14 .gap').removeClass('on');
          $('#section14 .btn18, #section14 .gap18').addClass('on');
        }
      });
    },

    footer (){}
  }
  Ohouse.init();
  
})(jQuery);