;(function($){

  const header={
    init (){
      this.mainfn();
    },

    mainfn (){

      if(page==='intro'){
        $('.main-btn').removeClass('on');
        $('.main-btn').eq(0).addClass('on');
        $('.sub').stop().hide(0);
        $('.sub1').stop().show(0);
      }
      else if(page==='store'){
        $('.main-btn').removeClass('on');
        $('.main-btn').eq(1).addClass('on');
        $('.sub').stop().hide(0);
        $('.sub2').stop().show(0);
      }
      else if(page==='interior'){
        $('.main-btn').removeClass('on');
        $('.main-btn').eq(2).addClass('on');
        $('.sub').stop().hide(0);
        $('.sub3').stop().show(0);
      }


      //메인버튼 호버시 해당 서브메뉴 보이고 색상변경(on)
      $('.main-btn').on({
        click: function(){
          $('.sub').stop().hide(0);
          $(this).next().stop().show(0);
          $('.main-btn').removeClass('on');
          $(this).addClass('on');
        }
      });

     
      //내비게이션 벗어나면 기본상태로
/*       $('.nav').on({
        mouseleave: function(){
          $('.sub').stop().hide(0);
          $(this).next().stop().show(0);
        }
      }); */

    }
  }

  header.init();
  
})(jQuery);