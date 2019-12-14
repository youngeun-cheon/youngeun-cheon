<? 
	session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/common.css">
<style>
		body{
			background-color: #D1E7E8;
		}
		body1>div{
		width:200px; height:200px;
		border:3px solid red;
		position:relative;
		}
		.box{
			width: 100px; height: 100px;
			position: absolute;
		}
		.box:nth-child(1) {
			background-color: red;
			left: 10px; top: 10px;
		}
		.box:nth-child(2) {
			background-color: green;
			left: 60px; top: 60px;
		}
		.box:nth-child(3) {
			background-color: yellow;
			left: 100px; top: 100px;
		}
</style> //box 3개가 겹치는 형태의 광고 디자인 및 삽입
<style>
	    h1 {
	           	color: green;
		text-shadow : 3px 3px 3px red;
		font-family:견고딕;
	        }
	</style>
	<style> 
		h2:active { color: red; } //멜론(벤치마킹)하트누르면좋아요반영(검은색->빨간색)색변함
	</style>
</head>
<body>
<div id="wrap">
	<div id="header">
    <? include "./lib/top_login1.php"; ?>
	</div>  <!-- end of header -->
	<div id="menu">
	<? include "./lib/top_menu1.php"; ?>
	</div>  <!-- end of menu --> 
  <div id="content">
		<center>
		<br/>
<p style="color:red;"><b>youtube </b></style></p><form name="searchForm" action="http://www.youtube.com/results/" method="get" >
	<p><input type="text" name="search_query" placeholder="검색어 입력"/>
		<button type="submit">검색</button></p>
</form>
<p style="color:green;"><b>melon </b></style></p><form name="searchForm" action="http://www.melon.com/search/total/index.htm" method="get" >
	<p><input type="text" name="search_query" placeholder="검색어 입력"/>
		<button type="submit">검색</button></p>
</form>
<head>
    <title>test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script>
        function selform_onsubmit(){
            var dept = document.getElementsByName("dept");
            if(dept.length==0)return;
            
            var idx = dept[0].options.selectedIndex;
            if(idx>0){ //"부서별 홈페이지"(맨첫번째 항목)를 클릭했을 때는 반응하지 않음.
                //새창에서 열기
                window.open(dept[0].options[idx].value); //기존창에서 열기
                //location = dept[0].options[idx].value;
            }
        }
   </script>
</head>
</center>
<center>
<body>
<form name="selform" onsubmit = "selform_onsubmit();return false;"> //selform_onsubmit()실행 태그선택후 확인누를 시 해당하는 사이트로 직접 연결 
   <fieldset style="width:300px;height:50px;">
    <legend>성별,연령대를 선택해주세요</legend>
    <label for="dept" style="display:none;">성별,연령대를 선택해주세요</label>
    <select name="dept" id="dept">
      <option>-- 성별,연령대 --</option>
      <option value='#10대 남성'>10대남성</option>
      <option value='#10대 여성'>10대여성</option>
      <option value='#20대 남성'>20대남성</option>
     <option value='#20대 여성'>20대여성</option>
     <option value='#30대 남성'>30대남성</option>
     <option value='#30대 여성'>30대여성</option>
     <option value='#40대~ 남성'>40대 이상 남성</option>
     <option value='#40대~ 여성'>40대 이상 여성</option>
    </select>
    <input type="submit" class="button" value="go" name="go"/>
    </fieldset>
</form>
</body>
</center>
<br/>
<br/>
<center><body1> //main 광고
	<h3 style="font-size:30px; font-family:휴먼굵은샘체;">♨HOT 이슈되는영상♨</h3>
	<div>
	<div class="box"><a href="https://www.youtube.com/watch?v=pAnK1y7qjuE"><img src="https://i.ytimg.com/vi/pAnK1y7qjuE/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLCui4_5n5WIoKBp6B15UYjayJgn8Q" width="100" height="100"/></a></div>
	<div class="box"><a href="https://www.youtube.com/watch?v=p5VoKYWISL0"><img src="https://i.ytimg.com/vi/p5VoKYWISL0/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLBAslzsxS62YlB0204d6WR4VT8XSg" width="100" height="100"/></a></div>
	<div class="box"><a href="https://www.youtube.com/watch?v=LYAfkjveHDo"><img src="https://i.ytimg.com/vi/LYAfkjveHDo/hqdefault.jpg?sqp=-oaymwEjCNACELwBSFryq4qpAxUIARUAAAAAGAElAADIQj0AgKJDeAE=&rs=AOn4CLAlENVgINXT6brVuDKKC7PajhSpog" width="100" height="100"/></a></div>
	<br/></div>
</body1></center>
<br/>
<br/>
<body>
	<div style="float:left;">
	<a href="https://www.melon.com/mymusic/dj/mymusicdjplaylistview_inform.htm?plylstSeq=100098263"><h2>@추억 소환 <br/> 2000년대 인기가요</h2></a></div>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div style="width:50px; height:50px; border:1px solid white; float:left;">
	<a href="https://www.melon.com/album/detail.htm?albumId=458355"><img src="https://musicmeta-phinf.pstatic.net/album/000/151/151661.jpg?type=r480Fll&v=20190820184228" width="150" height="150"/></a>
	<a href="https://www.melon.com/album/detail.htm?albumId=357386"><img src="https://musicmeta-phinf.pstatic.net/album/000/061/61549.jpg?type=r480Fll&v=20190402185727" width="150" height="150"/></a>
	<a href="https://www.melon.com/album/detail.htm?albumId=32544"><img src="https://musicmeta-phinf.pstatic.net/album/000/001/1145.jpg?type=r360Fll&v=20190812223102" width="150" height="150"/></a>
	<a href="https://www.melon.com/album/detail.htm?albumId=2393"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F000%2F002%2F2661.jpg%3Ftype%3Dr204Fll%26v%3D20190813083737&type=o220_220" width="150" height="150"/></a>
	</div>
	<div style="width:50px; height:50px; border:1px solid white; float:right;">
	<a href="https://front.wemakeprice.com/main"><img src="https://www.bing.com/th?id=OIP.b05EyxIRPsohBcK0X3HeHQAAAA&pid=Api&rs=1" width="100" height="100"/></a>
	<a href="https://www.tmon.co.kr/"><img src="http://imgnews.naver.net/image/5703/2018/12/17/0000000471_001_20181217223757601.jpg" width="100" height="100"/></a>
	<a href="https://tv.naver.com/"><img src="http://www.bloter.net/wp-content/uploads/2017/01/naverTV-1-1.png" width="100" height="100"/></a>
	<a href="https://www.netflix.com/kr/"><img src="http://post.phinf.naver.net/MjAxODExMjlfMTUw/MDAxNTQzNDg1NjUyNDcz.dfEe_ZCvyUcYpKb6BnQZxzKttUBzY1gg0UnkI7ug608g.D8joDmNpZ6yT0FrqO502oxAa_uta-zayoC_nShuB0ccg.JPEG/I95-vGjsXjjxG0CV_OG_hHUmYAtk.jpg" width="100" height="100"/></a>
	</div><div style="clear:both:"></div>
<br/>
<br/>
<center>
	<a id="10대 남성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<meta charset="UTF-8">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">10대 남성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">10대 남성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album6"><img src="https://musicmeta-phinf.pstatic.net/album/003/200/3200482.jpg?type=r480Fll&v=20191004180311" width="60" height="60"/></th>
		<th>1위</th>
		<th>임재현</th>
		<th><a href="#조금 취했어">조금 취했어</a></th>
		<th><a href="https://www.youtube.com/watch?v=1KFQdzSbbKA"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album7"><img src="https://vibe.naver.com/album/3189003" width="60" height="60"/></th>
		<th>2위</th>
		<th>전상근</th>
		<th><a href="#사랑이란 멜로는 없어">사랑이란 멜로는 없어</a></th>
		<th><a href="https://www.youtube.com/watch?v=txofagPZhnI"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album8"><img src="https://musicmeta-phinf.pstatic.net/album/003/204/3204558.jpg?type=r480Fll&v=20191002182201" width="60" height="60"/></th>
		<th>3위</th>
		<th>지코</th>
		<th><a href="#천둥벌거숭이">천둥벌거숭이</a></th>
		<th><a href="https://www.youtube.com/watch?v=yp26FJduCFc"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album9"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199865.jpg?type=r480Fll&v=20190925180903" width="60" height="60"/></th>
		<th>4위</th>
		<th>악동뮤지션</th>
		<th><a href="#어떻게 이별까지 사랑하겠어, 널 사랑하는 거지">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</a></th>
		<th><a href="https://www.youtube.com/watch?v=k-3ffgSKKSs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album10"><img src="https://musicmeta-phinf.pstatic.net/album/003/204/3204558.jpg?type=r480Fll&v=20191002182201" width="60" height="60"/></th>
		<th>5위</th>
		<th>지코</th>
		<th><a href="#사람">사람</a></th>
		<th><a href="https://www.youtube.com/watch?v=e_J64gYVqj4"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
</tbody>
</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead><tr>
		<th>
		<a id="조금 취했어" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">조금 취했어</style></a>
<p><small>
내가 망가지면 니가 나를 볼까 봐
나를 혹시나 걱정해줄까 봐
몸에 안 좋은 거 하러 왔어
시끄럽고 졸립다
그래 이제 집에 가야지
지금 뭐 해
밤에는 바람이 점점 차가운데
따뜻이 좀 입고 다녀 멋 부리지 말고
지금 이 순간
하고 싶은 말이 많은데
내가 가진 언어로 표현 못 해 알잖아
내가 좀 서툴지
술 한잔했어 너무 보고 싶어서
니가 싫어하는 담배도 피고 술도 했어
술이 깨면 내가 또 미워질까 봐
마시다 보니 조금 취했어
어디야 지금 뭐 해 빨리 와
너 올 것 같아 여기서 나 기다리는데
Xiyehn아 오늘따라 니가 보고 싶어서
그래 내가 좀 못났지 미안해
지금 뭐 해
의식은 점점 희미해가는데
니 얼굴은 더 또렷하게 생각이 나네
지금 이 순간 하고 싶은 말이 많은데
나란 놈이 그렇지 뭐 또
못해 말도 못 하는 내가 싫어
* * * *
</small></p>
</th>
</tr>
	<tr>
		<th>
		<a id="사랑이란 멜로는 없어" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">사랑이란 멜로는 없어</a>
<p><small>
다 끝이라고
우리 다신 마주하지 말자
내게 모질게도
대했던 그대에게
처음으로 내뱉은 말
아직 사랑하는데
더는 내 곁에 없단 걸 알아
너 먼저 떠나고
혼자 남겨진 나는
오늘도 한숨만 내쉬며 걷는다
사랑이란 멜로는 없어
그렇게 사랑했던 우리가 남이 되는 게
돌아오지 않을 네 뒷모습을 보며
아직 너를 사랑한다고
말하지 못했어
사랑이란 멜로는 없어
혹시 네가 다시 돌아오면
고백할게
거짓말이라고 보고 싶었다고
우연히라도 마주치길
바래왔었다고
오늘 하루가 참 길어
우리 그렇게 헤어지던 날
애써 웃음을 지었던
내가 참 바보 같죠
* * * *
</small></p>
</th>
</tr>
<tr>
<th>
		<a id="천둥벌거숭이" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">천둥벌거숭이</a>
<p><small>
그래서 어떻게 됐긴 어디도 안 가고
내가 차린 회사랑 도장 찍었지
빠른 페이스로
개체 수 불려나가 우린
치타보다 몇 배나 민첩한 코끼리
헛바람 든 것처럼 보여도
가만 내비 둬 그건 열풍을
만들겠단 소리
거드름 피우던 힙스터의 꿈은
아이돌 출신이 주는 합격 목걸이
자신감에는 근거가 넘쳐
과다 분비되고 있어 세로토닌
계산 잘 하고 테이크 다운 걸어
내게 손 뻗치면 결국 KOZ
Z 세대 이제 내 시대로
엔터 몇 군데는 셔터 내려
유명세는 삽시간에 fade out
스냅 댄스 테크토닉이 가까운 예야
사실 이번 트랙 좀 가볍게
풀어갈 생각이었는데
계획이 바뀌었네
한 음절도 허투루 쓸 수 없지
스윽스윽 지우고 고쳐쓰기를 반복해
아예 아예
Stop being a doormat
법인 대표답게 영리해야만 해
Saucin saucin
Remaking history
* * * *
</small></p>
</th>
</tr>
</th>
</tr>
		<tr>
		<th>
		<a id="어떻게 이별까지 사랑하겠어, 널 사랑하는 거지" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</a>
<p><small>
일부러 몇 발자국 물러나
내가 없이 혼자 걷는 널 바라본다
옆자리 허전한 너의 풍경
흑백 거리 가운데 넌 뒤돌아본다
그때 알게 되었어
난 널 떠날 수 없단 걸
우리 사이에 그 어떤 힘든 일도
이별보단 버틸 수 있는 것들이었죠
어떻게 이별까지 사랑하겠어
널 사랑하는 거지
사랑이라는 이유로 서로를 포기하고
찢어질 것같이 아파할 수 없어 난 
두세 번 더 길을 돌아갈까
적막 짙은 도로 위에 걸음을 포갠다
아무 말 없는 대화 나누며
주마등이 길을 비춘 먼 곳을 본다
***
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="사람" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">사람</a>
<p><small>
다를 거 없이 하찮은 하루
유독 좋은 일만 피해 갔구나
어릴 적 그림 속 어른이 된 난
분명 기쁜 표정이었는데
한 평생이 오늘까지면
발길을 돌릴 곳이 있나요
멋쩍다는 이유로 미루었던 
사랑해란 말을
너에게 건네줘 right now
고개를 자꾸 떨구게 돼 요즘엔
마지막으로 하늘을 본 게 언젠지
흐릿해진 세상은 먼지투성이네
나 같은 사람들이 
발버둥 쳤기 때문에 yeah
We always say 
나중에 그 나중에를 위해
건너뛴 생일을 빼면 여태 난 십 대
철들수록 부쩍 상상이 두려워
미끄럼틀도 서서히 비탈길로 보여
낯선 친절은 의심 가
뻔한 위로가 더 기운 빠져
* * * *
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
	<tr>
		<th>
		<a id="Album6"><b style="color:brown;">조금 취했어</b></a>
<p><small>
<b>아티스트</b> 임재현 <b>작사</b> 2soo <b>작곡</b> 2soo <b>편곡</b> 2soo <br/>
<b >앨범</b>
조금 취했어
<b>발매일</b>
2019.9.24
<b>장르</b>
발라드/인디음악
<b>기획사</b> 
㈜ 엔에스씨컴퍼니, 디원미디어
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album7"><b style="color:brown;">사랑이란 멜로는 없어</b></a>
<p><small>
<b>아티스트</b> 전상근 <b>작사</b> DOKO <b>작곡</b> DOKO,레넌(LNNN),GiiANA <b>편곡</b> 사승호,레넌(LNNN),GiiANA<br/>
<b>앨범</b>
사랑이란 멜로는 없어
<b>발매일</b>
2019.09.08
<b>장르</b>
발라드
<b>기획사</b> 
㈜ 스튜디오 오드리
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album8"><b style="color:brown;">천둥벌거숭이</b></a>
<p><small>
<b>아티스트</b> 지코 <b>작사</b> 지코(ZICO),Jvcki Wai,염따 <b>작곡</b> 지코(ZICO),PEEJAY,Jvcki Wai,염따 <b>편곡</b> 이우민 PEEJAY<br/>
<b>앨범</b>
THINKING Part.1
<b>발매일</b>
2019.09.30
<b>장르</b>
랩/힙합
<b>기획사</b> 
KOZ 엔터테인먼트
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album9"><b style="color:brown;">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</b></a>
<p><small>
<b>아티스트</b> 악동뮤지션 <b>작사</b> 이찬혁 <b>작곡</b> 이찬혁 <b>편곡</b> 이현영<br/>
<b>앨범</b>
항해
<b>발매일</b>
2019.09.25
<b>장르</b>
발라드, 록/메탈, 포크/블루스
<b>기획사</b> 
(주)YG엔터테인먼트	
<b>Flac </b>
flac 16bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album10"><b style="color:brown;">사람</b></a>
<p><small>
<b>아티스트</b> 지코 <b>작사</b> 지코 <b>작곡</b> 지코(ZICO),Poptime <b>편곡</b> 지코(ZICO),Poptime <br/>
<b>앨범</b>
THINKING Part.1
<b>발매일</b>
2019.09.30
<b>장르</b>
랩/힙합
<b>기획사</b>
KOZ 엔터테인먼트
<b>FLAC</b>
Flac 16bit/24bit
</center>
</small></p>
</th>
</tr>

<center>
	<a id="10대 여성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">10대 여성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">10대 여성</a></span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album1"><img src="https://musicmeta-phinf.pstatic.net/album/003/206/3206680.jpg?type=r720Fll&v=20191005175908" width="60" height="60"/></th>
		<th>1위</th>
		<th>하성운</th>
		<th><a href="#Dream of a dream">Dream of a dream</a></th>
		<th><a href="https://www.youtube.com/watch?v=F-c9hCHkIhc"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album9"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199865.jpg?type=r480Fll&v=20190925180903" width="60" height="60"/></th>
		<th>2위</th>
		<th>악동뮤지션</th>
		<th><a href="#어떻게 이별까지 사랑하겠어, 널 사랑하는 거지">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</a></th>
		<th><a href="https://www.youtube.com/watch?v=k-3ffgSKKSs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album3"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199901.jpg?type=r360Fll&v=20190923175902" width="60" height="60"/></th>
		<th>3위</th>
		<th>TWICE</th>
		<th><a href="#Feel special">Feel special</a></th>
		<th><a href="https://www.youtube.com/watch?v=3ymwOvzhwHs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album4"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199865.jpg?type=r480Fll&v=20190925180903" width="60" height="60"/></th>
		<th>4위</th>
		<th>악동뮤지션</th>
		<th><a href="#뱃노래">뱃노래</a></th>
		<th><a href="https://www.youtube.com/watch?v=oLnkmzt0thI"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album5"><img src="https://musicmeta-phinf.pstatic.net/album/003/192/3192546.jpg?type=r480Fll&v=20190910175902" width="60" height="60"/></th>
		<th>5위</th>
		<th>볼빨간사춘기</th>
		<th><a href="#워커홀릭">워커홀릭</a></th>
		<th><a href="https://www.youtube.com/watch?v=mrAIqeULUL0"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
	</tbody>
	</center>
	</table>
	

<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead><tr>
		<th>
		<a id="Dream of a dream" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">Dream of a dream</style></a>
<p><small>
때론 너무 멀게 느껴져도
우린 할 수 있어 oh
너는 안된다고
아직 멀었다고 해도
다시 일어나
내겐 이것밖에 없잖아
우린 이뤄낼 거야
그 이유는 너도 알아
If you gotta go
you gotta go yeah
이제는 버릴 수도
한편에 묻을 수도
없잖아 내겐 전부잖아
* * * *
</small></p>
</th>
</tr>
		<tr>
		<th>
		<a id="Feel special" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">Feel special</a>
<p><small>
그런 날이 있어
갑자기 혼자인 것만 같은 날
어딜 가도 내 자리가 아닌 것만 같고
고갠 떨궈지는 날
그럴 때마다 내게
얼마나 내가 소중한지
말해주는 너의 그 한마디에
Everything's alright
초라한 Nobody에서 다시 Somebody
특별한 나로 변해
You make me feel special
세상이 아무리 날 주저앉혀도
아프고 아픈 말들이 날 찔러도
네가 있어 난 다시 웃어
That's what you do
Again I feel special
아무것도 아닌 존재 같다가도
사라져도 모를 사람 같다가도
날 부르는 네 목소리에
I feel loved, I feel so special
***
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="뱃노래" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">뱃노래</a>
<p><small>
귓가에 넘치는 바다
눈을 감고 느낀다
난 자리에 가만히 앉아
항해하는 법을 알아
뱃노래 뱃노래
외로움을 던지는 노래
몇고개 몇고개의
파도를 넘어야 하나
소금기 머금은 바람
입술 겉을 적신다
난 손발이 모두 묶여도
자유하는 법을 알아
뱃노래 뱃노래
외로움을 던지는 노래
몇고개 몇고개의
파도를 넘어야 하나
</small></p>
</th>
</tr>
<tr>
<th>
		<a id="워커홀릭" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">워커홀릭</a>
<p><small>
머릴 질끈 묶고 안경을 벗어던져
난 지금 화가 났음 짜증이 났음
답장을 해주고 싶다가도 쏘아대는 말투들이
전혀 사랑스럽지 않아
시원한 맥주를 한 캔 마시다 yeah
문득 스쳐 지나가는 어제의 기억
지금 생각해 보니까 내가 왜
때려치웠어야 했는데
모두 손을 들어 Beer Cheers 우
아쉽지 않은 청춘답게 Face it
웃음밖에 나오지 않는 모든 상황에
눈 떠보니 벌써 아침이 왔음
우우우우우우우우우우
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
<meta charset="UTF-8">
	<tr>
		<th>
		<a id="Album1"><b style="color:brown;">Dream of a dream</b></a>
<p><small>
<b>아티스트</b> 하성운 <b>작사</b> 크록(CROQ) <b>작곡</b> 1Piece <b>편곡</b> 1Piece<br/>
<b >앨범</b>
Dream of a dream(Prod. By 윤상)
<b>발매일</b>
2019.10.05
<b>장르</b>
댄스
<b>FLAC</b>
Flac 16bit
<b>기획사</b>
엔씨소프트
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album3"><b style="color:brown;">Feel special</b></a>
<p><small>
<b>아티스트</b> 트와이스 <b>작사</b> 박진영 <b>작곡</b> 박진영,OLLIPOP,Hayley Aitken <b>편곡</b> 이우민 'Collapsedone'<br/>
<b>앨범</b>
Feel Special
<b>발매일</b>
2019.09.23
<b>장르</b>
댄스
<b>기획사</b>
(주)JYP	
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album4"><b style="color:brown;">뱃노래</b></a>
<p><small>
<b>아티스트</b> 악동뮤지션 <b>작사</b> 이찬혁 <b>작곡</b> 이찬혁 <b>편곡</b> 적재<br/>
<b>앨범</b>
항해
<b>발매일</b>
2019.09.25
<b>장르</b>
발라드
<b>기획사</b>
(주)YG엔터테인먼트
<b>FLAC</b>
Flac 16bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album5"><b style="color:brown;">워커홀릭</b></a>
<p><small>
<b>아티스트</b> 볼빨간사춘기 <b>작사</b> 안지영 <b>작곡</b> 안지영,바닐라맨 <b>편곡</b> 바닐라맨<br/>
<b>앨범</b>
Two Five
<b>발매일</b>
2019.09.10
<b>장르</b>
록/포크(국내)
<b>기획사</b>
(주)쇼파르뮤직 
<b>FLAC</b>
Flac 16bit/24bit
</small></p>
</th>
</tr>
</table>

<center>
	<a id="20대 남성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<meta charset="UTF-8">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">20대 남성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">20대 남성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album11"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F236%2F3236752.jpg%3Ftype%3Dr204Fll%26v%3D20191010175903&type=os32_32" width="60" height="60"/></th>
		<th>1위</th>
		<th>넬</th>
		<th><a href="#오분 뒤에 봐">오분 뒤에 봐</a></th>
		<th><a href="https://www.youtube.com/watch?v=RpdqfPcU1OY"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album12"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F210%2F3210444.jpg%3Ftype%3Dr204Fll%26v%3D20191011115605&type=os32_32" width="60" height="60"/></th>
		<th>2위</th>
		<th>장덕철</th>
		<th><a href="#있어줘요">있어줘요</a></th>
		<th><a href="https://www.youtube.com/watch?v=W0M8kn_Ex-4"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album13"><img src="https://musicmeta-phinf.pstatic.net/album/003/209/3209751.jpg?type=r480Fll&v=20191010175903" width="60" height="60"/></th>
		<th>3위</th>
		<th>안병웅,Chillin Homie,강현준,김승민</th>
		<th><a href="#Originals Cypher">Originals Cypher</a></th>
		<th></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album14"><img src="https://musicmeta-phinf.pstatic.net/album/003/200/3200482.jpg?type=r480Fll&v=20191004180311" width="60" height="60"/></th>
		<th>4위</th>
		<th>임재현</th>
		<th><a href="#조금 취했어">조금 취했어</a></th>
		<th><a href="https://www.youtube.com/watch?v=1KFQdzSbbKA"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album15"><img src="https://musicmeta-phinf.pstatic.net/album/003/157/3157040.jpg?type=r480Fll&v=20190827110236" width="60" height="60"/></th>
		<th>5위</th>
		<th>닐로</th>
		<th><a href="#벗">벗</a></th>
		<th><a href="https://www.youtube.com/watch?v=DW5j7YfP5Qs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
</tbody>
</table>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead><tr>
		<th>
		<a id="오분 뒤에 봐" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">오분 뒤에 봐</style></a>
<p><small>
뭐해 나 지금 근처에 와있는데
우리 잠깐 만날까
그때 마지막 본 게 언제였는지
너무 오래된 듯해
요즘엔 다 많이들 바쁜가 봐
보기 힘들다
한땐 정말 하루가 멀다 하고
본 것 같은데
오분 뒤에 봐
우리 자주 가던
그래 거기서 만나
정말 이러다 일 년에 몇 번도
못 볼 것 같아
그래 얼마 전 그곳에 갔었는데
우리 생각나더라
그땐 우리가 남들과는
좀 다르다고 생각했었는데
* * * *
</small></p>
</th>
</tr>
	<tr>
		<th>
		<a id="있어줘요" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">있어줘요</a>
<p><small>
나와 둘이 함께 늙어가자던
습관처럼 뱉던 말 아직 여전하니
뭐든 나와 함께 한다면
그저 좋다던 예쁜 얼굴 생각나는 밤
나에게 늘 맞춰주던 너
익숙함이 커 지키지 못했어 그땐
내 얘기에 귀 기울이던 너의
앳된 표정이 아직도 선명해
다시금 날 봐줘요
그대의 기나긴 투정도
모두 들어드릴게요
아직도 지키지 못한
약속을 기다린다면
그대여 다시금 내 곁에 있어줘요
머물러요
***
</small></p>
</th>
</tr>
<tr>
<th>
		<a id="Originals Cypher" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">Originals Cypher</a>
<p><small>
입은 통바지 tongue flippin
rap for life
왜 베껴 힙합은 k pop
you better act right
I said fuck polite 이건 태도
All-in or all-out this rap
like a gamble
난 뱉어 like 탱고 spit like a fire
누군간 이 말에 다쳐
총 같은 rhyme flow
밤새 만든 flow 안 메타포
ride wit me 이 밤 안에 갇혀
big l big papa 영향을 받어
만든 내 outcome으로
make it 원 옌 달러
태빈형과 난 달러
we make some flavor
잘 되도 난 지켜 내 table
boombap mixtape 이 판을 take 해
we called it msf 말대로
***
</small></p>
</th>
</tr>
</th>
</tr>
		<tr>
		<th>
		<a id="조금 취했어" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">조금 취했어</a>
<p><small>
내가 망가지면 니가 나를 볼까 봐
나를 혹시나 걱정해줄까 봐
몸에 안 좋은 거 하러 왔어
시끄럽고 졸립다
그래 이제 집에 가야지
지금 뭐 해
밤에는 바람이 점점 차가운데
따뜻이 좀 입고 다녀 멋 부리지 말고
지금 이 순간
하고 싶은 말이 많은데
내가 가진 언어로 표현 못 해 알잖아
내가 좀 서툴지
술 한잔했어 너무 보고 싶어서
니가 싫어하는 담배도 피고 술도 했어
술이 깨면 내가 또 미워질까 봐
마시다 보니 조금 취했어
***
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="벗" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">벗</a>
<p><small>
너를 만나고 세상이 모두 변했어
의미 없던 하루가 소중해졌으니
그냥 길을 걷다가도
괜히 웃음이 나와
나의 하루는 선물 같아
내게 다가왔던 그 순간부터
작은 기적을 안겨준
너에게 말할게
조금 서투른 고백일지라도
수많은 사람들 중에
내 곁을 지켜준 사람
넌 모든 순간을 꿈꾸게 하니까
언제나 너의 곁에서
세상 그 누구보다
소중한 사람이 되고 싶어
나의 세상은 너 하나로 가득해서
나의 계절은 항상 따뜻했어
더는 무엇도 바라지 않아
지금처럼만 우리
곁에 있으면 난 충분해
내게 다가왔던 그 순간부터
작은 기적을 안겨준
너에게 말할게
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
	<tr>
		<th>
		<a id="Album11"><b style="color:brown;">오분 뒤에 봐</b></a>
<p><small>
<b>아티스트</b> 넬 <b>작사</b> 김종완 of NELL <b>작곡</b> 김종완 of NELL <b>편곡</b> 넬 <br/>
<b >앨범</b>
COLORS IN BLACK
<b>발매일</b>
2019.10.10
<b>장르</b>
록/메탈
<b>FLAC</b>
Flac 16bit
<b>기획사</b>
스페이스보헤미안
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album12"><b style="color:brown;">있어줘요</b></a>
<p><small>
<b>아티스트</b> 장덕철 <b>작사</b> 덕인 <b>작곡</b> 덕인 <b>편곡</b> DOKO <br/>
<b>앨범</b>
있어줘요
<b>발매일</b>
2019.10.09
<b>장르</b>
발라드,인디음악
<b>FLAC</b>
Flac 16/24bit
<b>기획사</b>
리메즈
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album13"><b style="color:brown;">Originals Cypher</b></a>
<p><small>
<b>아티스트</b>안병웅, Chillin Homie, 강현준 (Lil tachi), 김승민  <b>작사</b> 안병웅, Chillin Homie, 강현준 (Lil tachi), 김승민  <b>작곡</b> BOYCOLD <b>편곡</b> BOYCOLD <br/>
<b>앨범</b>
Originals Cypher
<b>발매일</b>
2019.10.10
<b>장르</b>
랩/힙합
<b>기획사</b>
Sony Music
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album14"><b style="color:brown;">조금 취했어</b></a>
<p><small>
<b>아티스트</b> 임재현 <b>작사</b> 2soo <b>작곡</b> 2soo <b>편곡</b> 2soo <br/>
<b>앨범</b>
조금 취했어
<b>발매일</b>
2019.09.24
<b>장르</b>
발라드, 인디음악
<b>기획사</b>
엔에스씨컴퍼니, 디원미디어
<b>Flac </b>
flac 16bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album15"><b style="color:brown;">벗</b></a>
<p><small>
<b>아티스트</b>닐로 <b>작사</b> 닐로 <b>작곡</b> 닐로 <b>편곡</b>리베 피아노 <br/>
<b>앨범</b>
벗
<b>발매일</b>
2019.08.26
<b>장르</b>
발라드
<b>FLAC</b>
Flac 16bit/24bit
</center>
</small></p>
</th>
</tr>
</center>

<center>
	<a id="20대 여성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<span style=" font-size:20pt; font-family:궁서체;">20대 여성</span></a>
	<meta charset="UTF-8">
	<thead>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">20대 여성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album16"><img src="https://musicmeta-phinf.pstatic.net/album/003/236/3236058.jpg?type=r480Fll&v=20191010175903" width="60" height="60"/></th>
		<th>1위</th>
		<th>김필</th>
		<th><a href="#사랑 둘">사랑 둘</a></th>
		<th><a href="https://www.youtube.com/watch?v=laSzGftL4HU"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album11"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F236%2F3236752.jpg%3Ftype%3Dr204Fll%26v%3D20191010175903&type=os32_32" width="60" height="60"/></th>
		<th>2위</th>
		<th>넬</th>
		<th><a href="#오분 뒤에 봐">오분 뒤에 봐</a></th>
		<th><a href="https://www.youtube.com/watch?v=RpdqfPcU1OY"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album18"><img src="https://musicmeta-phinf.pstatic.net/album/003/233/3233650.jpg?type=r480Fll&v=20191010175905" width="60" height="60"/></th>
		<th>3위</th>
		<th>레이디스 코드</th>
		<th><a href="#SET ME FREE">SET ME FREE</a></th>
		<th><a href="https://www.youtube.com/watch?v=loHbu4m5YfQ"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album9"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199865.jpg?type=r480Fll&v=20190925180903" width="60" height="60"/></th>
		<th>4위</th>
		<th>악동뮤지션</th>
		<th><a href="#어떻게 이별까지 사랑하겠어, 널 사랑하는 거지">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</a></th>
		<th><a href="https://www.youtube.com/watch?v=k-3ffgSKKSs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album20"><img src="https://musicmeta-phinf.pstatic.net/album/003/211/3211913.jpg?type=r480Fll&v=20191010115912" width="60" height="60"/></th>
		<th>5위</th>
		<th>모트,용주</th>
		<th><a href="#너는 내게 비타민 같아">너는 내게 비타민 같아</a></th>
		<th></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
</tbody>
</table>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead><tr>
		<th>
		<a id="사랑 둘" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">사랑 둘</style></a>
<p><small>
응 잘 지내는거 같아 난
네게서 아주 조금씩
나를 비워내고 있으니
뭐 가끔은 네가 그리워
유난히 오늘 밤처럼
잠이 쉽게 들지 않는 날에는
늘 다퉜었고
늘 욕심내던 그런
아픈 일들만 생각나다가
왜 오늘따라
좋았던 일만 떠오르는지
사랑 참 못참았던
사랑 참 바보같던
사랑 네가 아니어도
될줄 알았던 사랑 사랑
뭐 더 달라진건 없어 난
늘 혼자라는 일상이
조금 낯설어진 것 밖에
뭐 가끔은 네가 그리워
전보다는 나은 날들에
점점 익숙해져 가는 날 보면
참 어렸었고 늘 부족해서
빨리 어른이 되길 난 바랬는데
왜 오늘따라 그때의 내가 참 그리운지
사랑 참 못참았던
사랑 참 바보같던
사랑 네가 아니어도
* * * *
</small></p>
</th>
</tr>
<tr>
<th>
		<a id="SET ME FREE" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">SET ME FREE</a>
<p><small>
새롭게 느껴지는 Groove
들리는 이끌림에 따라가 따라가 Move
이런 감정 나는 멈출 수 없어
그곳에 있을 물음 그 답을 나는 하고 싶은 걸
뭔가 다른 떨림을 원하는
내 앞에 어느새 나타나
그 미소가 따스히 날 부를 때
머뭇거림 없이 따라갈래
널 따라갈래
날 더 높게 던져 Set Me Free
자꾸 커져 네가 여기저기 너야
이 흐름의 끝에 내 모습이 Big Question?
Give me one more that
Give me one more that
Baby want you
날 깨워줘 눈 뜨게 알려줘 널
널 보여줘 네 맘을 알려줘 Boy
언제부턴지 모르게 이끌리는 맘에
***
</small></p>
</th>
</tr>
</th>
</tr>
<tr>
		<th>
		<a id="너는 내게 비타민 같아" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">너는 내게 비타민 같아</a>
<p><small>
아니 이게 무슨 일이야
거울 속 내 모습에 네가 보여
누군가가 내게 말했어
사랑하면 닮는데 그런가봐
내게 대체 무슨 짓을 한거야
자꾸만 네가 생각나잖아
차가운 바람이 부는데도
너 때문에 내 가슴이 뜨겁잖아
You are my sunshine in my heart
너를 보면 힘이 솟아나
피곤할 타이밍인데도
너는 내게 비타민 같아
두근두근 대는 내 심장이 터질 것만 같아
널 떠올리면 벅차올라 oh yeah
매일 반복되는 흔해 빠진
내 하루 속에서 그댄
판타지 속 마법 같아
사랑은 미쳐가는 건가봐
그럼 너로 미쳐서 살래
아니 너 대체 왜그래 내게
그럼 나는 파치며 살래
You are my sunshine in my heart
너를 보면 힘이 솟아나
피곤할 타이밍인데도
너는 내게 비타민 같아
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
	<tr>
		<th>
		<a id="Album16"><b style="color:brown;">사랑 둘</b></a>
<p><small>
<b>아티스트</b> 김필 <b>작사</b> 김필 <b>작곡</b> 김필 <b>편곡</b> 김현 <br/>
<b >앨범</b>
사랑 둘
<b>발매일</b>
2019.10.10
<b>장르</b>
발라드
<b>기획사</b>
Stone Music Entertainment, MMO Entertainment
<b>FLAC</b>
Flac 16bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album18"><b style="color:brown;">SET ME FREE</b></a>
<p><small>
<b>아티스트</b> 레이디스 코드(LADIES' CODE)  <b>작사</b> 원택(1 Take),탁(TAK)  <b>작곡</b> 원택(1 Take),탁(TAK) <b>편곡</b> 원택(1 Take),탁(TAK) <br/>
<b>앨범</b>
CODE#03 SET ME FREE
<b>발매일</b>
2019.10.10
<b>장르</b>
댄스
<b>기획사</b>
폴라리스 엔터테인먼트
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album20"><b style="color:brown;">너는 내게 비타민 같아</b></a>
<p><small>
<b>아티스트</b>모트(Motte), 용주(YONGZOO) <b>작사</b>라엘(Ra.L),나오미 <b>작곡</b> 라엘(Ra.L),나오미  <b>편곡</b>라엘(Ra.L),나오미  <br/>
<b>앨범</b>
동백꽃 필 무렵 (KBS2 수목드라마) OST - Part.3
<b>발매일</b>
2019.10.10
<b>장르</b>
포크.블루스,국내드라마
<b>기획사</b>
팬엔터테인먼트, 모스트콘텐츠
<b>FLAC</b>
Flac 16bit/24bit
</center>
</small></p>
</th>
</tr>

</center>

<center>
	<a id="30대 남성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">30대 남성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">30대 남성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album21"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F080%2F3080777.jpg%3Ftype%3Dr204Fll%26v%3D20190705114414&type=os32_32" width="60" height="60"/></th>
		<th>1위</th>
		<th>벤</th>
		<th><a href="#헤어져줘서 고마워">헤워져줘서 고마워</a></th>
		<th><a href="https://www.youtube.com/watch?v=7tO_eJek6D8"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album22"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F070%2F3070370.jpg%3Ftype%3Dr204Fll%26v%3D20190618175903&type=os32_32" width="60" height="60"/></th>
		<th>2위</th>
		<th>장혜진, 윤민수</th>
		<th><a href="#술이 문제야">술이 문제야</a></th>
		<th><a href=https://www.youtube.com/watch?v=gw4rUK4S0ew"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album23"><img src="https://musicmeta-phinf.pstatic.net/album/003/054/3054457.jpg?type=r480Fll&v=20190517175903" width="60" height="60"/></th>
		<th>3위</th>
		<th>다비치</th>
		<th><a href="#너에게 못했던 내 마지막 말은">너에게 못했던 내 마지막 말은</a></th>
		<th><a href="https://www.youtube.com/watch?v=84R5AS0tfkQ"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album24"><img src="https://musicmeta-phinf.pstatic.net/album/002/946/2946382.jpg?type=r480Fll&v=20190807151522" width="60" height="60"/></th>
		<th>4위</th>
		<th>장범준</th>
		<th><a href="#노래방에서">노래방에서</a></th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album25"><img src="https://musicmeta-phinf.pstatic.net/album/002/535/2535123.jpg?type=r480Fll&v=20181212201616" width="60" height="60"/></th>
		<th>5위</th>
		<th>임재현</th>
		<th><a href="#사랑에 연습이 있었다면">사랑에 연습이 있었다면</a></th>
		<th><a href="https://www.youtube.com/watch?v=kXAvbHPdTZ0"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
</tbody>
</table>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead><tr>
		<th>
		<a id="헤어져줘서 고마워" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">헤어져줘서 고마워</style></a>
<p><small>
헤어져줘서 고마워
나는 헤어진 게 아니야
정말 헤어져서 고마워
네 맘은 진심이 아니야
같은 말 하게 하지 마
더 미워하게 하지 마
난 안 바뀌니까
아니 내가 정말 잘할게
아냐 사람 마음 쉽게 안 변해
우린 안 봐도 뻔해
맨날 말로만 끝내자 말하면 뭐 해
질질 끌지 말고 헤어지자
그래 오늘은 꼭 헤어지자
그만 미워하고 더 후회하지 말고
그냥 미친 척하고 우리 헤어져 보자
사랑인척하지만 너와 나
이미 다 끝났잖아 되돌릴 수 없잖아
맨날 말로만 끝내자 말하면 뭐 해
질질 끌지 말고 헤어지자
진짜 사랑이 난 그리워
그래 네 마음 다 이해해
* * * *
</small></p>
</th>
</tr>
	<tr>
		<th>
		<a id="술이 문제야" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">술이 문제야</a>
<p><small>
그리워서 한 잔
생각나서 한 잔
내 눈물 섞어 한 잔
또 한 잔 마시다
우리 옛 추억에 취해
독한 네 사랑에 취해
너의 전화 번홀 누르게 돼
아마 받지 않겠지만
미안해
술이 문제야 문제
자꾸 너를 떠올리게 해
술이 문제야 문제
자꾸 네가 생각나게 해
정말 미친 듯이 보고 싶어 한 잔
정말 미친 듯이 그리워서 한 잔
한 잔 두 잔 기울이면
너의 기억 모두 끊어질까 봐
술 한잔했어요
잊어보려 한 잔
지워보려 한 잔
내 눈물 섞어 한 잔
또 한 잔 마시다
***
</small></p>
</th>
</tr>
<tr>
<th>
		<a id="너에게 못했던 내 마지막 말은" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">너에게 못했던 내 마지막 말은</a>
<p><small>
아직 남았을까
못 잊을 이유가 남아 있을까
나만 왜 이렇게
바보같이 혼자 널 기다릴까 음
애꿎은 바람들은
말도 안 되는 네 말을
또 믿고 싶게 해
달라질 게 없는데 끝인 걸 아는데
생각이 나 그 모든 게
나 어쩌면 너에게 하고 싶은 말은
긴 밤을 지새도
아직 너를 많이 사랑한다고
이 아픈 시간이 어서 지나가기를
조금만 더 버텨볼게
네가 없는 하루가 버겁긴 하지만
보고 싶은 마음 꾹 참고
하루에 하나씩 잊어볼게 그래 볼게
매일 이런 다짐을 해 습관처럼
생각보다 길어진
그리움이 익숙해져 가는 날들에
제법 웃기도 하다 또 괜찮다가도
생각이 나 네 모든 게
나 어쩌면 너에게 하고 싶은 말은
긴 밤을 지새도
아직 너를 많이 사랑한다고
이 아픈 시간이 어서 지나가기를
조금만 더 버텨볼게
네가 없는 하루가 버겁긴 하지만
보고 싶은 마음 꾹 참고
***
</small></p>
</th>
</tr>
</th>
</tr>
		<tr>
		<th>
		<a id="노래방에서" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">조금 취했어</a>
<p><small>
나는 사랑이
어떻게 이뤄지는 지 연구 했지
여러가지 상황의 수를 계산 해 봤지
그땐 내가 좀 못 생겨서 흑흑
니가 좋아하는 노랠
알아내는 것은 필수
가성이 많이 들어가서
마이크 조절이
굉장히 조심스러웠었지
그렇게 노래방으로 가서
그녀가 좋아하는 노랠해
무심한 척 준비안한 척
노랠 불렀네 어어
그렇게 내가 노랠 부른뒤
그녀의 반응을 상상하고
좀더 잘 불러볼걸 노랠 흥얼 거렸네
사랑때문에
노랠 연습하는 건 자연의 이치
***
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="사랑에 연습이 있었다면" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">사랑에 연습이 있었다면</a>
<p><small>
사랑에 연습이 있었다면
우리는 달라졌을까
내가 널 만난 시간 혹은 그 장소
상황이 달랐었다면 우린 맺어졌을까
하필 넌 왜 내가 그렇게 철없던 시절에
나타나서 그렇게 예뻤니
너처럼 좋은여자가 왜 날 만나서 그런
과분한 사랑 내게 줬는지
우리 다시 그때로 돌아가자는게
그게 미친말인가
정신나간 소린가
나는 더 잘할수있고 다신 울리지 않을
자신있는데 그게 왜 말이 안돼
시간이 너무 흘러 알게되었는데
너를 울리지 않고 아껴주는법
세월은 왜 철없는 날 기다려주지 않고 흘러갔는지 야속해
지금 너 만나는 그에게도 내게 그랬던 것처럼
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
	<tr>
		<th>
		<a id="Album21"><b style="color:brown;">헤어져줘서 고마워</b></a>
<p><small>
<b>아티스트</b> 벤 <b>작사</b> VIP <b>작곡</b> VIP <b>편곡</b> VIP <br/>
<b >앨범</b>
헤어져줘서 고마워
<b>발매일</b>
2019.07.03
<b>장르</b>
발라드
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album22"><b style="color:brown;">술이 문제야</b></a>
<p><small>
<b>아티스트</b> 장혜진, 윤민수 <b>작사</b> 류재현,민연재 <b>작곡</b> 류재현 <b>편곡</b> 류재현 <br/>
<b>앨범</b>
술이 문제야
<b>발매일</b>
2019.06.18
<b>장르</b>
발라드
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album23"><b style="color:brown;">너에게 못했던 내 마지막 말은</b></a>
<p><small>
<b>아티스트</b> 다비치 <b>작사</b> 이해리 (다비치),강민경,한경수,최한솔  <b>작곡</b> 한경수,최한솔 <b>편곡</b> 한경수,최한솔 <br/>
<b>앨범</b>
너에게 못했던 내 마지막 말은
<b>발매일</b>
2019.5.17
<b>장르</b>
발라드
<b>FLAC</b>
Flac 16bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album24"><b style="color:brown;">노래방에서</b></a>
<p><small>
<b>아티스트</b> 장범준 <b>작사</b> 장범준 <b>작곡</b> 장범준 <b>편곡</b> 장범준 <br/>
<b>앨범</b>
장범준 3집
<b>발매일</b>
2019.03.21
<b>장르</b>
록/메탈
<b>Flac </b>
flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album25"><b style="color:brown;">사랑에 연습이 있었다면</b></a>
<p><small>
<b>아티스트</b>임재현 <b>작사</b> 2soo <b>작곡</b> 2soo <b>편곡</b>2soo <br/>
<b>앨범</b>
사랑에 연습이 있었다면
<b>발매일</b>
2019.09.25
<b>장르</b>
발라드
<b>FLAC</b>
Flac 16bit
</center>
</small></p>
</th>
</tr>

</center>

<center>
	<a id="30대 여성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<meta charset="UTF-8">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">30대 여성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">30대 여성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album9"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199865.jpg?type=r480Fll&v=20190925180903" width="60" height="60"/></th>
		<th>1위</th>
		<th>악동뮤지션</th>
		<th><a href="#어떻게 이별까지 사랑하겠어, 널 사랑하는 거지">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</a></th>
		<th><a href="https://www.youtube.com/watch?v=k-3ffgSKKSs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album27"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F156%2F3156245.jpg%3Ftype%3Dr204Fll%26v%3D20190826145338&type=os32_32" width="60" height="60"/></th>
		<th>2위</th>
		<th>장범준</th>
		<th><a href="#흔들리는 꽃들 속에서 네 샴푸향이 느껴진거야">흔들리는 꽃들 속에서 네 샴푸향이 느껴진거야</a></th>
		<th><a href="https://www.youtube.com/watch?v=YBEUXfT7_48"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album28"><img src="https://musicmeta-phinf.pstatic.net/album/003/138/3138272.jpg?type=r480Fll&v=20190820124320" width="60" height="60"/></th>
		<th>3위</th>
		<th>폴킴</th>
		<th><a href="#안녕">안녕</a></th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album29"><img src="https://musicmeta-phinf.pstatic.net/album/003/135/3135198.jpg?type=r480Fll&v=20190820124149" width="60" height="60"/></th>
		<th>4위</th>
		<th>거미</th>
		<th><a href="#기억해줘요 내 모든 날과 그때를">기억해줘요 내 모든 날과 그때를</a></th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album30"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199216.jpg?type=r480Fll&v=20190922175906" width="60" height="60"/></th>
		<th>5위</th>
		<th>핑클</th>
		<th><a href="#남아있는 노래처럼">남아있는 노래처럼</a></th>
		<th><a href="https://www.youtube.com/watch?v=KphERZbm-Bk"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
</tbody>
</table>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead>
	<tr>
		<th>
		<a id="흔들리는 꽃들 속에서 네 샴푸향이 느껴진거야" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">흔들리는 꽃들 속에서 네 샴푸향이 느껴진거야</a>
<p><small>
흔들리는 꽃들 속에서
네 샴푸향이 느껴진거야
스쳐지나간건가 뒤돌아보지만
그냥 사람들만 보이는거야
다와가는 집근처에서
괜히 핸드폰만 만지는거야
한번 연락해 볼까 용기내 보지만
그냥 내 마음만 아쉬운 거야
걷다가 보면 항상 이렇게 너를
바라만 보던 너를
기다린다고 말할까
지금 집앞에 계속 이렇게 너를
아쉬워 하다 너를 연락했다 할까
지나치는 꽃들 속에서
네 샴푸향만 보이는거야
스쳐지나간건가 뒤 돌아보지만
그냥 내 마음만 바빠진거야
걷다가 보면 항상 이렇게 너를
바라만 보던 너를
기다린다고 말할까
지금 집앞에 계속 이렇게 너를
아쉬워 하다 너를 연락했다 할까
어떤 계절이 너를
우연히라도 너를 마주치게 할까
***
</small></p>
</th>
</tr>
<tr>
<th>
		<a id="안녕" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">안녕</a>
<p><small>
안녕 이라는 말을해
짧은 시간을 뒤로 한채로
여전히 아프겠지만
하룻밤 자고 나면 사라지는 꿈처럼
너를 oh 잊게될까 두려워져
무심히 널 떠올리게 되면
불안해지는 맘 어떻게 해야하니
안녕 이제는 안녕 이 말 도저히 할 수가 없어
너로 가득찬 내 마음
겨우 내가 할 수 있는 일 너를 사랑하는 거
다시 널 만날 수 있길
아주 오래 전부터 정해진 연일지도 
너밖에 모를 내가 되었던 그때가 
두려워져 널 안고 있으면
자꾸 욕심이나 어쩔 수 없는걸 안녕 이제는 안녕
이 말 도저히 할 수가 없어
너로 가득찬 내 마음 겨우 내가 할 수 있는 일
너를 사랑하는 거 다시 널 만날 수 있길
굳게 닫힌 저 문이 열리면
그때는 널 다시 볼 수 있을까
***
</small></p>
</th>
</tr>
</th>
</tr>
		<tr>
		<th>
		<a id="기억해줘요 내 모든 날과 그때를" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">기억해줘요 내 모든 날과 그때를</a>
<p><small>
듣고있나요 나의 이 모든 얘기를
그댈 향한 내 깊은 진심을
매일 그리움 속에 그대를 불러보지만
닿을 수 없는 마음을
나도 이젠 알 것 같아요
내 안의 그대를 놓을 수 없네요
애써도 그게 잘 안돼요
마음과 반대로 밀어내려 할수록
이토록 더 아파지네요
기억하나요 나의 이 모든 얘기를
그댈 향한 내 깊은 진심을
매일 그리움 속에 그대를 불러보지만
닿을 수 없는 마음을
나도 이젠 알 것 같아요
스쳐가는 이 계절을 지나
언젠가는 멀어질 걸 아니까
더 모질게 그댈 밀어냈어요 너무 가슴이 미칠 듯 아파도
듣고 있나요 나의 이 모든 얘기를
그댈 향한 내 깊은 진심을
매일 그리움 속에 그대를 불러보지만
닿을 수 없는 마음을 나도 이젠 알 것 같아요
***
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="남아있는 노래처럼" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">남아있는 노래처럼</a>
<p><small>
철이 없던 참 행복했던
찬란히 빛나던 아득한 시절에
우리 함께 부른 노래가
내 가슴에 빛나네
묻어둔 채 살아가다가
익숙한 멜로디 귓가에 들릴 때면
나도 몰래 멈춘 걸음이
또다시 날 그때 그 자리로
가만히 차오르는
그날의 너의 목소리
가득히 피어나는
예쁜 너의 얼굴이
그리워서
함께 부르던 우리들의 노래가
어깨를 맞춰 걸어가던
우리 꿈들이
소중했지
남아있는 노래처럼 늘 우리 그대로
기다려준 너의 마음
좋았던 기억을 소중히 간직해줘
때론 힘이 들고 지칠 때
기억해줘 우리가 있단 걸
빠르게 흘러가던
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
<tr>
		<th>
		<a id="Album27"><b style="color:brown;">흔들리는 꽃들 속에서 네 샴푸향이 느껴진거야</b></a>
<p><small>
<b>아티스트</b> 장범준 <b>작사</b> 장범준 <b>작곡</b> 장범준 <b>편곡</b> 장범준 <br/>
<b>앨범</b>
멜로가 체질 OST Part 3
<b>발매일</b>
2019.08.23
<b>장르</b>
록/메탈
<b>FLAC</b>
Flac 16bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album28"><b style="color:brown;">안녕</b></a>
<p><small>
<b>아티스트</b> 폴킴 <b>작사</b> 폴킴  <b>작곡</b> 로코베리,폴킴 <b>편곡</b> 로코베리 <br/>
<b>앨범</b>
호텔델루나 ost part.10
<b>발매일</b>
2019.8.12
<b>장르</b>
발라드,국내드라마
<b>FLAC</b>
Flac 16bit/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album29"><b style="color:brown;">기억해줘요 내 모든 날과 그때를</b></a>
<p><small>
<b>아티스트</b> 거미 <b>작사</b> 지훈,박세준 <b>작곡</b> 캥거루,로코베리 <b>편곡</b> 캥거루,로코베리 <br/>
<b>앨범</b>
호텔 델루나 ost part.7
<b>발매일</b>
2019.08.04
<b>장르</b>
발라드,국내드라마
<b>Flac </b>
flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album30"><b style="color:brown;">남아있는 노래처럼</b></a>
<p><small>
<b>아티스트</b>핑클 <b>작사</b> 이효리,옥주현,이진,성유리 <b>작곡</b> 김현철 <b>편곡</b>김현철 <br/>
<b>앨범</b>
핑클 싱글 앨범 "남아있는 노래처럼"
<b>발매일</b>
2019.09.22
<b>장르</b>
발라드
<b>FLAC</b>
Flac 16bit
</center>
</small></p>
</th>
</tr>

</center>

<center>
	<a id="40대~ 남성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1" cellspacing="0">
	<meta charset="UTF-8">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">40대~ 남성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">40대 남성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album29"><img src="https://musicmeta-phinf.pstatic.net/album/003/135/3135198.jpg?type=r480Fll&v=20190820124149" width="60" height="60"/></th>
		<th>1위</th>
		<th>거미</th>
		<th><a href="#기억해줘요 내 모든 날과 그때를">기억해줘요 내 모든 날과 그때를</a></th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Albu32"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F128%2F3128245.jpg%3Ftype%3Dr204Fll%26v%3D20190721175904&type=os32_32" width="60" height="60"/></th>
		<th>2위</th>
		<th>태연</th>
		<th><a href="#그대라는 시">그대라는 시</a></th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album22"><img src="https://search.pstatic.net/common/?src=https%3A%2F%2Fmusicmeta-phinf.pstatic.net%2Falbum%2F003%2F070%2F3070370.jpg%3Ftype%3Dr204Fll%26v%3D20190618175903&type=os32_32" width="60" height="60"/></th>
		<th>3위</th>
		<th>장혜진, 윤민수</th>
		<th><a href="#술이 문제야">술이 문제야</a></th>
		<th><a href="https://www.youtube.com/watch?v=XcbEM7j_ARQ"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album34"><img src="https://musicmeta-phinf.pstatic.net/album/003/048/3048745.jpg?type=r480Fll&v=20190826173807" width="60" height="60"/></th>
		<th>4위</th>
		<th>송하예</th>
		<th><a href="#니 소식">니 소식</a></th>
		<th><a href="https://www.youtube.com/watch?v=eMZmNisWFvM"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album35"><img src="https://musicmeta-phinf.pstatic.net/album/003/132/3132878.jpg?type=r480Fll&v=20190829145923" width="60" height="60"/></th>
		<th>5위</th>
		<th>ITZY</th>
		<th><a href="#ICY">ICY</a></th>
		<th><a href="https://www.youtube.com/watch?v=zndvqTc4P9I"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
	</tbody>
</table>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead>
	<tr>
		<th>
		<a id="그대라는 시" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">그대라는 시</a>
<p><small>
언제부터인지 그대를 보면
운명이라고 느꼈던 걸까
밤하늘의 별이 빛난 것처럼
오랫동안 내 곁에 있어요
그대라는 시가 난 떠오를 때마다
외워두고 싶어 그댈 기억할 수 있게
슬픈 밤이 오면 내가 그대를 지켜줄게
내 마음 들려오나요 잊지 말아요
지나가는 계절 속에 내 마음은
변하지 않는단 걸 아나요
그저 바라보는 눈빛 그 하나로
세상을 다 가진 것 같은데
그대라는 시가 난 떠오를 때마다
외워두고 싶어 그댈 기억할 수 있게
슬픈 밤이 오면 내가 그대를 지켜줄게
내 마음 들려오나요
잊지 말아요
꽃이 피고 지는 날이 와도
이것 하나만 기억해줘요
그댈 향한 마음을
언젠가는 우리
***
</small></p>
</th>
</tr>
		<tr>
		<th>
		<a id="니 소식" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">조금 취했어</a>
<p><small>
그때의 우리 사랑 뜨겁고 치열했는데
끝나보니 남는 건 미움뿐 
몇 번의 계절을 더 보내야 괜찮아질까
미련이 듬뿍 남은 하루를 보내
친구들과 통화에
우연히 들은 네 소식
다른 사랑을 시작해
잘 지낸다고
한땐 소중했었고 
많이 사랑했었던 
우리 둘은 이제 남이 됐고
모르는 사람이야
넌 완벽히 잊었나 봐
이렇게 넌 잘 사는데
괜한 걱정을 했나 봐
나만 힘든가 봐
너도 내 소식을 전해 들었으면 좋겠어
***
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="ICY" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">ICY</a>
<p><small>
Hey hey hey yass whoo
Beep beep
Hey hey hey hey hey hey
I see that I’m icy
Go rising up up
I see that I’m icy
차갑게 보여도 어떡해
Cool한 나니까 눈치 볼 마음 없어 Oh
Come on
당당하게 Let it go
Here we go
길거리를 누비고
On a roll
Background music이 깔려
Bomb bomb bomb bomb
Icy but I'm on fire
내 안에 있는 Dream 난 자신 있어
날 봐 I'm not a liar
너의 틀에 날 맞출 맘은 없어 (Dance)
다들 Blah blah
참 말 많아 난 괜찮아
계속 Blah blah
They keep talkin', I keep walkin'
Ring ring ring 울려 All day long
모두 날 찾느라 바빠
이 노래가 Your favorite song
그렇게 될 걸 잘 알아
Hey 이 맛은 마치
딱 살얼음같이
Bling bling bling 반짝이는 걸
별빛같이 Icy
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
<tr>
		<th>
		<a id="Album32"><b style="color:brown;">그대라는 시</b></a>
<p><small>
<b>아티스트</b> 태연 <b>작사</b> 지훈,박세준 <b>작곡</b> 밍지션 <b>편곡</b> 밍지션 <br/>
<b>앨범</b>
호텔 델루나 OST Part.3
<b>발매일</b>
2019.07.21
<b>장르</b>
발라드,국내드라마
<b>FLAC</b>
Flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album34"><b style="color:brown;">니 소식</b></a>
<p><small>
<b>아티스트</b> 송하예 <b>작사</b> 미친기집애 <b>작곡</b> Krazy Park,미친기집애<b>편곡</b> 미친기집애 <br/>
<b>앨범</b>
니소식
<b>발매일</b>
2019.05.11
<b>장르</b>
발라드
<b>Flac </b>
flac 16/24bit
</small></p>
</th>
</tr>
<tr>
		<th>
		<a id="Album35"><b style="color:brown;">ICY</b></a>
<p><small>
<b>아티스트</b>ITZY(있지)  <b>작사</b> 박진영,페노메코(PENOMECO) <b>작곡</b> 박진영 <b>편곡</b> 박진영,이해솔<br/>
<b>앨범</b>
IT'z ICY
<b>발매일</b>
2019.07.29
<b>장르</b>
댄스
<b>FLAC</b>
Flac 16/32bit
</center>
</small></p>
</th>
</tr>

</center>



<center>
	<a id="40대~ 여성"></a>
	<h1><b>이 노래 어떠신가요?</b></h1>
	<table border="1"  cellspacing="0">
	<meta charset="UTF-8">
	<thead>
	<span style=" font-size:20pt; font-family:궁서체;">40대~ 여성</span></a>
		<tr>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">40대 여성</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">순위</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">가수</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">노래</span></th>
		<th><span style="font-size:15pt; font-family:맑은 고딕;">영상</span></th>
		<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th><a href="#Album9"><img src="https://musicmeta-phinf.pstatic.net/album/003/199/3199865.jpg?type=r480Fll&v=20190925180903" width="60" height="60"/></th>
		<th>1위</th>
		<th>악동뮤지션</th>
		<th><a href="#어떻게 이별까지 사랑하겠어, 널 사랑하는 거지">어떻게 이별까지 사랑하겠어, 널 사랑하는 거지</th>
		<th><a href="https://www.youtube.com/watch?v=k-3ffgSKKSs"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
		
		<tr>
		<th><a href="#Album28"><img src="https://musicmeta-phinf.pstatic.net/album/003/138/3138272.jpg?type=r480Fll&v=20190820124320" width="60" height="60"/></th>
		<th>2위</th>
		<th>폴킴</th>
		<th><a href="#안녕">안녕</th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>


		<tr>
		<th><a href="#Album29"><img src="https://musicmeta-phinf.pstatic.net/album/003/135/3135198.jpg?type=r480Fll&v=20190820124149" width="60" height="60"/></th>
		<th>3위</th>
		<th>거미</th>
		<th><a href="#기억해줘요 내 모든 날과 그때를">기억해줘요 내 모든 날과 그때를</a></th>
		<th> </th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album5"><img src="https://musicmeta-phinf.pstatic.net/album/003/192/3192546.jpg?type=r480Fll&v=20190910175902" width="60" height="60"/></th>
		<th>4위</th>
		<th>볼빨간사춘기</th>
		<th><a href="#워커홀릭">워커홀릭</th>
		<th><a href="https://www.youtube.com/watch?v=mrAIqeULUL0"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>

		<tr>
		<th><a href="#Album40"><img src="https://musicmeta-phinf.pstatic.net/album/003/205/3205484.jpg?type=r480Fll&v=20191003175902" width="60" height="60"/></th>
		<th>5위</th>
		<th>존박</th>
		<th><a href="#이상한 사람">이상한 사람</th>
		<th><a href="https://www.youtube.com/watch?v=lf33txEmocA"><img src="http://post.phinf.naver.net/MjAxNzA4MzBfMjE5/MDAxNTA0MDk1Nzg3MzMy.yPvRMVNtZsQZ3_NSb2vQLg4wZ-I_X61oLGK1PbyiH2cg.II6aZF4hqLyGn_PxCpaZ5p3Rybrotd9nKcnd0K1jSokg.JPEG/IWvQCDBYvYDNJoHnksYcgm5nvB8I.jpg"width="90" height="60"/></a></th>
		<th><h2><span style="font-size:15pt;">♥</span></h2></th>
		</tr>
	</tbody>
</table>
<p><b><span style= font-family:궁서체;">*가사*</b></p>
 <table border="1" cellspacing="0">
	<thead>
<tr>
		<th>
		<a id="이상한 사람" style="font-size:20px; font-family:휴먼굵은샘체; color:#E05B6B;">이상한 사람</a>
<p><small>
잊으려고 애써왔던 것들
잊고 살아왔던 말들
소용없다 믿던 것들
너무 많은데
그댄 그런 모든 걸
한가득 안고서
나를 보며 웃고 있어
그댄 나를 또 한 번
설레게 만드는
이상한 사람
내가 알던 세상은 모든 게
어려웠는데
몰랐었던 모든 곳이
아름다웠다
그댄 그런 모든 걸
한가득 안고서
나를 보며 웃고 있어요
그댄 나를 또 한 번
설레게 만드는
이상한 사람
우리 둘은
얼마나 오래
같이 걷게 될까
이런 것이 궁금해지면
사랑인걸까
그댄 나를 또 한 번
긴 꿈을 꾸게 해
안 다쳤던 어린 날처럼
***
</small></p>
</th>
</tr>
</table>
<p><b><span style= font-family:궁서체;">*Album*</b></p> 
<tr>
		<th>
		<a id="Album40"><b style="color:brown;">이상한 사람</b></a>
<p><small>
<b>아티스트</b>존박 <b>작사</b> 존박 <b>작곡</b> 존박 <b>편곡</b>존박 <br/>
<b>앨범</b>
동백꽃 필 무렵 (KBS2 수목드라마) OST - Part.1
<b>발매일</b>
2019.10.03
<b>장르</b>
포크/블루스, 국내드라마
<b>FLAC</b>
Flac 16/24bit
</center>
</small></p>
</th>
</tr>

</center>

</br>
  </div> <!-- end of content -->
</div> <!-- end of wrap -->
</body>
</html>
