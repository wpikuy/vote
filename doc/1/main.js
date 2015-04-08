//页面基本函数
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload !== 'function') {
        window.onload = func;
    } else {
        window.onload = function () {
            oldonload();
            func();
        };
    }
}

function showIndex() {
    setTimeout(function () {
        $(".sidepic").addClass("animation-out");
        $(".main").addClass("animation-in");
    }, 2000);
}

function setHeight() {
    var screenheight = document.documentElement.clientHeight;
    $(".content").css("min-height", screenheight + "px");
}

function changePage() {
    $("#toPage1").click(function () {
        $("#page1").addClass("showpage");
        $(".img-word").attr("src","images/word1.png");
        $("#page2,#page3").removeClass("showpage");
        $("#page2,#page3").addClass("hidepage");
    });
    $("#toPage2").click(function () {
        $("#page2").addClass("showpage");
        $(".img-word").attr("src","images/word2.png");
        $("#page1,#page3").removeClass("showpage");
        $("#page1,#page3").addClass("hidepage");
    });
    $("#toPage3").click(function () {
        $("#page3").addClass("showpage");
        $(".img-word").attr("src","images/word3.png");
        $("#page2,#page1").removeClass("showpage");
        $("#page2,#page1").addClass("hidepage");
    });
    $("#toPage1").click();
}

addLoadEvent(showIndex);
addLoadEvent(changePage);
addLoadEvent(setHeight);

//插入作品
function addPic(url, text) {
    var num=$("#page2 .works-show").length+1;
    $("#page2").append("<div class='works-show'></div>");
    $(".works-show:last").append("<img class='works-pic' alt='pic' src='"+url+"'>");
    $(".works-show:last").append("<img class='name-pic' src='images/fan.png' alt='fan'>");
    $(".works-show:last").append("<div class='works-name'>No."+num+ " "+text+"</div>");
    $(".works-show:last").append("<div class='works-votebtn'>投我一票</div>");
}
//如下调用
addPic("images/fan.png","张三");
addPic("images/fan.png","张三");
addPic("images/fan.png","张三");
addPic("images/fan.png","张三");
addPic("images/fan.png","张三");

//插入优秀作品
function addGoodpic(url, text) {
    $("#page3").append("<div class='good-show'></div>");
    $(".good-show:last").append("<img class='good-pic' alt='pic' src='"+url+"'>");
    $(".good-show:last").append("<div class='good-text'>获奖作品</div>");
    $(".good-show:last").append("<div class='good-name'>"+text+"</div>");
    $(".good-show:last").append("<img class='good-sidepic' alt='persons' src='images/persons.png'>");
}
//如下调用
addGoodpic("images/fan.png","张三");
addGoodpic("images/fan.png","张三");
addGoodpic("images/fan.png","张三");

//得票数显示
function voteNum(num_index, num_voted) {
    var index = num_index-1;
    $(".works-show:eq("+ index +") .works-votebtn").append("<span>("+ num_voted +")</span>");
}
//如下调用
voteNum(1, 2);
voteNum(2, 24);
voteNum(3, 1224);
voteNum(4, 224);

