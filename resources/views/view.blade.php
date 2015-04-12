<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>第三届手绘配色大赛</title>
    <link rel="stylesheet" href="main.css" />
	<link href="./images/favicon.ico" type="image/x-icon" rel=icon>
</head>

<body>
    <div id="wrapper">
        <a class="admin" href="http://westudio.us/" target="_blank"></a>
        <img class="sidepic" src="images/side.png" alt="side">
        <div class="main">
            <img class="img-word" src="images/word1.png" alt="word1">
            <img class="img-person" src="images/person.png" alt="person">

            <div class="content">
                <div id="page1">
                    <h1>越罗衫袂迎春风" ——第三届手绘配色大赛</h1>
                    <div class="title"><img src="images/fan.png" alt="fan">主题</div>
                    <p>中国文化，源远流长，五千年的灿烂文明，是每一个炎黄子孙的骄傲！如今，各国文化，百家争鸣，中国文化在天地间脉动，巨龙的心跳如此沉稳有力！作为新时代的优秀大学生，历史的辉煌与屈辱，科技的发展与差距，鞭笞着我们朝着辉煌进发!忆往昔峥嵘，奏青春华章，数风流人物，还看今朝！乘着发展的浪潮，光明的时代推动这所名校岿然崛起。值此校文化节之际，愿众华中大师生学子共执绘笔，为青春梦想增色，描绘出华科学子心中那瑰丽多彩的中国文化！</p>
                    <div class="title"><img src="images/fan.png" alt="fan">形式与内容</div>
                    <p>作为校文化节的众多活动之一，本次活动通过路演现场对一定主题的图片自由配色，增强广大师生对于色彩搭配以及图形设计的兴趣，使自身进一步受到文化艺术的熏陶，并提升师生的自豪感、自我认同感与对华中大的热爱；同时也在活动过程中引导参赛者作为一名新时代的大学生对于青春的思考与诠释，提高对梦想的理解。</p>
                    <div class="title"><img src="images/fan.png" alt="fan">评选规则</div>
                    <p>一个IP地址职能投一次票；人气奖不包含在决赛名单内，决赛共6名，进行文化衫的制作；网站主要用于初赛作品投票、人气奖与进入决赛名单、获奖作品展示</p>
                    <h2>主办方：生命科学与技术学院学联会</h2>
                    <h3>Designed By <img id="logo" src="images/logo.png" alt="logo"></h3>
                </div>
                <div id="page2"></div>
                <div id="page3"></div>
            </div>

            <div id="sidebar">
                <div id="toPage1">禮</div>
                <div id="toPage2">科舉</div>
                <div id="toPage3">狀元榜</div>
            </div>
        </div>
    </div>
    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <script src="main.js"></script>
    <script type="text/javascript">
    @for ($i = 0; $i < count($candidates); $i++)
    	addPic('./admin/{{$candidates[$i]["pic"]}}', '{{$candidates[$i]["name"]}}', '{{$candidates[$i]["info"]}}', {{$candidates[$i]["id"]}})
    	voteNum({{$i + 1}}, {{$candidates[$i]["vote"]}}, {{$candidates[$i]["id"]}})
	@endfor
	@foreach ($wins as $win)
		addGoodpic('./admin/{{$win["pic"]}}', '{{$win["name"]}}')
	@endforeach
    </script>
</body>

</html>