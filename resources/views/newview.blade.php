<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="main.css" />
</head>

<body>
    <div id="wrapper">
        <img class="sidepic" src="images/showpage.jpg" alt="side">
        <div class="main">
            <a href="#"><img class="img-word" src="images/word1.png" alt="word1"></a>
            <img class="img-egg" src="images/egg.png" alt="egg">
            <img class="img-person" src="images/person.png" alt="person">
            
            <div class="content">
                <div id="page1">
                    <h1>华中科技大学<br/>第十五届校园文化节<br/>"摄食"手机摄影大赛</h1>
                    <div class="title"><img src="images/fan.png" alt="fan">主题</div>
                    <p>中华文化源远流长，博大精深，五千年的灿烂文明，是每一个炎黄子孙的骄傲。如今各国文化，百家争鸣，作为新时代的大学生，历史的辉煌与屈辱，科技的发展与差距，鞭笞着我们朝着辉煌进发。青春律动，数风流人物，还看今朝。从最初的茹毛饮血时期到现在各色的美味佳肴，饮食是贯穿整个人类历史的主题，有着辉煌的过去，新时期更赋予了它新的内涵。值此校文化节之际，愿众华中大师生学子拿起自己手中的相机，以饮食文化为契机，更加关注我们华夏的优秀文化。</p>
                    <div class="title"><img src="images/fan.png" alt="fan">形式与内容</div>
                    <p>本次活动旨在加强同学们对自己生活的关注，同时以拍照的方式让同学们更加重视中华饮食文化。通过对摄影结果的比较与公布，可以让全校师生更加了解学校的每一个食堂，用照片激发师生对饮食文化的探索热情。</p>
                    <div class="title"><img src="images/fan.png" alt="fan">评选规则</div>
                    <p>评选规则：一个IP地址可投五票，最终选出得票前20的作品于5月18号在韵苑路口路演进行现场投票。根据网上投票30%+生命学院新闻部内部成员评分30%+路演现场投票40%选出前三名。</p>
                    <h2>主办方：生命科学与技术学院分团委学生会</h2>
                    <h3>Designed By <img id="logo" src="images/logo.png" alt="logo"></h3>
                </div>
                <div id="page2"></div>
                <div id="page3"></div>

            </div>

            <div id="sidebar">
                <div id="toPage1">规则介绍</div>
                <div id="toPage2">投票</div>
                <div id="toPage3">优胜展示</div>
            </div>
        </div>
    </div>
    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <script src="main.js"></script>
    <script type="text/javascript">
		@for($i = 0; $i < count($candidates); $i++)
			addPic('./admin/{{$candidates[$i]['pic']}}', '{{$candidates[$i]['name']}}', '{{$candidates[$i]['info']}}', {{$candidates[$i]['id']}});
			voteNum({{$i + 1}}, {{$candidates[$i]['vote']}}, {{$candidates[$i]['id']}});
		@endfor
    </script>
</body>

</html>