$(document).ready(function(){
    //banner滚动
    $('#next').click(function(){
        index=(index+1)%3;
        img.eq(index).fadeIn().siblings().fadeOut();
    });
    $('#prev').click(function(){
        index=(index+1)%3;
        img.eq(index).fadeIn().siblings().fadeOut();
    });
    //设置定时播放
    var playtime=5000;//banner播放间隔时间
    play = function(){
        img.eq(index).fadeIn().siblings().fadeOut();
        index = (index+1)%3;
        mytime = setTimeout(play,playtime);
    }
    mytime = setTimeout(play,playtime);
   
   /*班级图片点击hide显示*/
     
   $(".pic").on("click",function(e){
      //使隐藏的内容显示在中央
       var top = ($(window).height() - $("#hide").height())/2;
        var left = ($(window).width() - $("#hide").width())/2;   
        var scrollTop = $(document).scrollTop();   
        var scrollLeft = $(document).scrollLeft(); 
        $("#hide").css({"z-index":"10","top":top+scrollTop,"left":left+scrollLeft}).show();
        $(".close").css({"opacity":"1","z-index":"10"});
        document.documentElement.style.overflow='hidden';

         // 
         //  document.body.onkeydown=keyFunc;
         //  
   })
   /*点击关闭hide*/
   $(".close").on("click",function(e){
         $("#hide").hide();
         $(".close").css({"opacity":"0","z-index":"-1"});
         document.documentElement.style.overflow='visible';
        
   })
     $("#hide").hide();
   /*播放器大小*/
    var hide_width=$("#hide").width()-30;
    var hide_height=$("#hide").height()-30;
    $("video").width(hide_width);
    $("video").height(hide_height);

})