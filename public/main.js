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

function showBigpic(){
	$(".works-pic").click(function(){
		window.open(this.src);
	});
}

showIndex();
changePage();
setHeight();
addLoadEvent(showBigpic);

//插入作品
$(function() {addPic});
function addPic(url, text, info, id) {
    var num=$("#page2 .works-show").length+1;
    $("#page2").append("<div class='works-show'></div>");
    $(".works-show:last").append("<img class='works-pic' alt='pic' src='"+url+"'>");
    $(".works-show:last").append("<img class='name-pic' src='images/fan.png' alt='fan'>");
    $(".works-show:last").append("<div class='works-name'>No."+num+ " "+text+"</div>");
    $(".works-show:last").append("<div class='class-name'>" + info + "</div>");
    $(".works-show:last").append("<div class='works-votebtn' onclick='actionVote(" + id + ")'>投我一票</div>");
}
//如下调用

//插入优秀作品
function addGoodpic(url, text) {
//    修改
    var num=$("#page3 .good-show").length+1;
    $("#page3").append("<div class='good-show'></div>");
    $(".good-show:last").append("<img class='good-pic' alt='pic' src='"+url+"'>");
    $(".good-show:last").append("<div class='good-text'>获奖作品</div>");
    $(".good-show:last").append("<div class='good-name'>"+text+"</div>");
//    修改
    $(".good-show:last").append("<img class='good-sidepic' alt='persons' src='images/person" + num + ".png'>");
}
//如下调用

//得票数显示
function voteNum(num_index, num_voted, id) {
    var index = num_index-1;
    $(".works-show:eq("+ index +") .works-votebtn").append("<span id='vn_" + id + "'>("+ num_voted +")</span>");
}
//如下调用

//投票
function actionVote(id){
    $.ajax({
        type:"GET",
        url:"./vote",
        data: { id : id },
		dataType: "json",
        success: function(data){
			if (data.vote != 0){
				$('#vn_' + id).html('(' + data.vote + ')');
			}
            alert(data.msg);
        },
        error: function(err){
            alert("投票没有成功，请过一会儿再试试吧~");
        }
    })
}