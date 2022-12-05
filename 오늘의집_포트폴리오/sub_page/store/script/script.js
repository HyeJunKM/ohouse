;(function(){
  const Obj = {
    init (){
      this.header();
      this.section1();
      this.section3();
      this.section4();
      this.section5();
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

      const $slideContain = $('#section1 .s-container, #section1 .nav');
      const $slideWrap = $('#section1 .s-wrap');
      const $slide = $('#section1 .slide');
      const $countNum = $('#section1 .count-num');
      const $totalNum = $('#section1 .total-num');
      const $prevNext = $('#section1 .s-prev, #section1 .s-next');
      const $prev = $('#section1 .s-prev');
      const $Nprev = $('.nav .prev');
      const $next = $('#section1 .s-next');
      const $Nnext = $('.nav .next');
      
      mainSlide(); //로딩시 바로 실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-100*cnt+'%'}, 600, function(){
          if (cnt>=9){cnt=0;}
          if (cnt<=-1){cnt=8;}
          $slideWrap.stop().animate({left:-100*cnt+'%'}, 0); //if 1,2의 결과일 경우 실행
        });

        $countNum.text(cnt>=9?1 : (cnt+1<=0?9:cnt+1));

        let totalNum = 0;
        totalNum = $slide.length-2; //전체번호 세기
        $totalNum.text(totalNum);

        pageBtnEvent(cnt);
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
      
      $prev.on({
        click: function(){if($slideWrap.is(':animated')===false){prevCount();}}
      });
      $next.on({
        click: function(){if($slideWrap.is(':animated')===false){nextCount();}}
      });

      $Nprev.on({
        click: function(){if($slideWrap.is(':animated')===false){prevCount();}}
      });
      $Nnext.on({
        click: function(){if($slideWrap.is(':animated')===false){nextCount();}}
      });

      // 페이지버튼 이벤트 함수
      function pageBtnEvent(z){
        $('.nav-btn').removeClass('on');
        $('.nav-btn').eq(z===9?0:z).addClass('on');
      }        

      ////내비게이션 연결
      $('.nav-btn').each(function(idx){
        $(this).on({
          click: function(e){
            e.preventDefault();
            cnt=idx;
            mainSlide();
          }
        });
      });
    },
    section3 (){
/*       $('#section3 .bookmark').on({
        click: function(e){
          e.preventDefault();
          $(this).children().attr('src','./img/bookmark_click.png')
        }
      }); */

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
      let cnt=0;
      const $slideWrap = $('#section4 .s-wrap');
      const $prev = $('#section4 .s-prev');
      const $next = $('#section4 .s-next');
      mainSlide(); //화면 로딩시 바로실행

      function mainSlide(){
        $slideWrap.stop().animate({left:-875*cnt},600);

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
    section5 (){

      ///////////// JSON 데이터 불러오기
      $.ajax({
        url:"../../data_json/store.json",
        dataType:"JSON",
        success:function(res){
          let txt='';

          $.each(res.store_best, function(idx,item){
            txt+= `<li class="slide slide${idx+1}">`;
            txt+= ` <div class="gap">`;
            txt+= `   <a href="#">`;
            txt+= `     <img src="./img/${item.상품이미지}" alt="">`;
            txt+= `     <strong class="bookmark"><img src="./img/bookmark_white.png" alt=""></strong>`;
            txt+= `   </a>`;
            txt+= `   <div class="content">`;
            txt+= `     <h1>${item.제조사}</h1>`;
            txt+= `     <h2>${item.상품명}</h2>`;
            txt+= `     <h3>
                          ${item.할인율>0?`<em>${item.할인율}%</em><strong>${commaEvent(item.가격)}</strong>`:`<strong>${commaEvent(item.가격)}</strong>`}
                        </h3>`;
            txt+= `     <h4><img src="./img/star.png" alt=""><strong>${item.별점}</strong>리뷰 ${commaEvent(item.리뷰수)}</h4>`;
            txt+= `     <span class='bg-button'> 
                        ${
                          item.무료배송!=='' ? (`<h6>${item.무료배송}</h6>`) :``
                        }
                        ${
                          item.특가!=='' ? (`<h5>${item.특가}</h5>`) :``
                        }</span>`;
            txt+= `   </div>`;
            txt+= ` </div>`;
            txt+= `</li>`;
          });

          function commaEvent(z){
            let price = z.toString(); //문자형식으로 변경
            const reg = /(^\d+)(\d{3})/g;
            while(reg.test(price)){
              price=price.replace(reg,'$1,$2');
            }
            return price;
          }

          $('.gallery-wrap').html(txt);
        },
        error:function(){}
      });

      $(document).on('mouseenter', function(){
        $('#section5 .bookmark').on({
          click: function(e){
            e.preventDefault();
            $(this).find('img').attr('src', function(index,attr){
              if (attr.match('_white')){return attr.replace('_white.png', '_click.png');}
              else {return attr.replace('_click.png', '_white.png');}
            });
          }
        });
      });
    }
  }
  Obj.init();
})(jQuery);