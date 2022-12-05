;(function(){
  const Obj = {
    init (){
      this.header();
      this.section2();
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
    section2 (){
      let cnt = 0; //let은 변수가 바뀔 때 사용

      const $slideWrap = $('#section2 .s-wrap');
      const $prev = $('#section2 .s-prev');
      const $next = $('#section2 .s-next');
      
      mainSlide(); //로딩시 바로 실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-100*cnt+'%'}, 600, function(){
          if (cnt>=6){cnt=0;}
          if (cnt<=-1){cnt=6;}
          $slideWrap.stop().animate({left:-100*cnt+'%'}, 0);
        });
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
      }

      autoTimer();

      
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
    }
  }
  Obj.init();
})(jQuery);