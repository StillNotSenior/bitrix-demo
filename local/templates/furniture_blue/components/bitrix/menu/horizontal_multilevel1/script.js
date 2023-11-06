$(document).ready(function(){
    lis = $(".nv_topnav>ul>li");
    LastSumm = 0;

    for(var i = 1; i < lis.length; i++) {
        LastSumm=LastSumm+$(lis[i]).width()
    }

    if(LastSumm>600){
        FreeSpace=931-LastSumm;
        k=FreeSpace/(lis.length-1);
        kp=k/2+28;
        $(".nv_topnav>ul>li:nth-child(1n+2)>a>span").css({"padding":"0 "+kp+"px"})
    }


    $(".nv_topnav .current").next("li").find("span").css({"border-left":"none"})
    $(".nv_topnav .current").prev("li").find("span").css({"border-right":"none"})

    setEqualHeight($(".il_li_itemlistgallery > li"));
    setEqualHeight($("#foo1 > li"));

});

function setEqualHeight(columns){
    var tallestcolumn = 0;
    columns.each(function(){
        currentHeight = $(this).height();
        if(currentHeight > tallestcolumn){
            tallestcolumn = currentHeight;
        }
    });
    columns.height(tallestcolumn);
}