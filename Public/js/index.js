//获取班级信息并排版
function getClass() {
    $(".container").show();
    $.ajax({
        type: "get",
        url: getClassUrl,
        data: {},
        dataType: "json",
        success: function (res) {
            console.log(res);
            $("#classes").html('');
            /* str='<div id="class1" class="class">'+
             '<div class="pic">'
             <img  id="cover1" src="__PUBLIC__/image/pic.png" style="width:100%;height:100%;margin:0 auto;">
             </div>
             <div class="num"><span id="id2">14通信1班</span></div>
             </div>';*/
            var str = '';
            for (var i = 0; i < res.data.length; i++) {
                str += '<div id="class' + i + '" class="class">' +
                    '<div class="pic">' +
                    '<img id="cover' + i + '" src="' + res.data[i].cover + '" style="width:100%;height:100%;margin:0 auto;">' +
                    '</div>' +
                    '<div class="num"><span id="id"' + res.data[i].id + '>' + res.data[i].name + '</div>' +
                    '</div>';
            }
            $("#classes").html(str);
            $(".container").hide();
        }
    });
}
$(document).ready(function () {
    getClass();
    $("#hide").hide();
    $(".pic").on("click", function (e) {
        var top = ($(window).height() - $("#hide").height()) / 2;
        var left = ($(window).width() - $("#hide").width()) / 2;
        var scrollTop = $(document).scrollTop();
        var scrollLeft = $(document).scrollLeft();
        $("#hide").css({'top': top + scrollTop, "left": left + scrollLeft}).show();
    })
});