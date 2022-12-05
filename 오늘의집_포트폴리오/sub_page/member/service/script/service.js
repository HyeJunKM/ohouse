;(($,window)=>{

  const service = {
    init(){
      this.mainFn();
    },
    mainFn(){
      $('#section3 .nav-btn').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .nav-btn').removeClass('on');
          $(this).addClass('on');
        }
      });

      $('#section3 .n-list').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').show();
        }
      });

      $('#section3 .n-list1').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list1').show();
        }
      });

      $('#section3 .n-list2').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list2').show();
        }
      });

      $('#section3 .n-list3').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list3').show();
        }
      });

      $('#section3 .n-list4').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list4').show();
        }
      });

      $('#section3 .n-list5').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list5').show();
        }
      });

      $('#section3 .n-list6').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list6').show();
        }
      });

      $('#section3 .n-list7').on({
        click: function(e){
          e.preventDefault();
          $('#section3 .list').hide();
          $('#section3 .list7').show();
        }
      });

      ////내용 슬라이드
      $('#section3 .title').on({
        click: function(e){
          e.preventDefault();
          $(this).next().slideToggle(100);
        }
      });
    }
  }
  service.init();

})(jQuery,window);

