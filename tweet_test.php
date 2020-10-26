<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html;charset=shift_jis" />
<title>RTP[ループツイートプログラム]</title>
	<link type="text/css" href="http://photon-shockwave.sakura.ne.jp/css/jquery.ui.core.css" rel="stylesheet" />
	<link type="text/css" href="http://photon-shockwave.sakura.ne.jp/css/jquery.ui.theme.css" rel="stylesheet" />
	<link type="text/css" href="http://photon-shockwave.sakura.ne.jp/css/jquery.ui.selectmenu.css" rel="stylesheet" />
	
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery.ui.core.js"></script>
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery.ui.position.js"></script>
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery.ui.selectmenu.js"></script>
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="http://photon-shockwave.sakura.ne.jp/js/jquery.jsonp.js"></script>


<script type="text/javascript">

jQuery(function(){

$(function(){
//#newtweetcheckをクリック時に値をクッキーに格納
$(document).on("click","#newtweetcheck", function(){
     var cheaked=$("#newtweetcheck").get(0).checked;
     $.cookie("newtweet", cheaked,{ expires: 730 });
});
//ページを読み込んだ時に#newtweetcheckの値を設定
     var _newtweet=$.cookie("newtweet");
     if(_newtweet != "false"){
     $("#newtweetcheck").attr("checked",true);
     }
   
});

$(function(){
//#newtweetcheckをクリック時に値をクッキーに格納
$(document).on("click","#newtweetcheck1", function(){
     var cheaked=$("#newtweetcheck1").get(0).checked;
     $.cookie("newtweet1", cheaked,{ expires: 730 });
});
//ページを読み込んだ時に#newtweetcheckの値を設定
     var _newtweet=$.cookie("newtweet1");
     if(_newtweet != "false"){
     $("#newtweetcheck1").attr("checked",true);
     }
   
});

 $("#tweet_del").submit(function() {
  if (window.confirm('選択した保存済みのRTを削除しますか？')) {
     
   var str2 = $('#data3 option:selected').val();
   var str3 = $('#data3 option:selected').text();
   var screen_name =  $("#screen_name").val();
   if(str2==""){alert("この項目は削除できません。");return;};
$.ajax({
        type: "POST",
        url: "/roop_tweet_del.php",
        data: {data1:  str2, data2: str3 , data3: screen_name },
        success: function() {
               // window.location.reload();
               location.replace('http://photon-shockwave.sakura.ne.jp/index_t.php');
                
    }
   });
  }
  return false;
 });
});
</script>

    <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

 
.tabs {
  width: 100%;
  float: none;
  list-style: none;
  position: relative;
  
  text-align: left;
}
.tabs li {
  float: left;
  display: block;
}
.tabs input[type="radio"] {
  position: absolute;
  top: -9999px;
  left: -9999px;
}
.tabs label {
  display: block;
  padding: 14px 21px;
  border-radius: 2px 2px 0 0;
  font-size: 20px;
  font-weight: normal;
  text-transform: uppercase;
  background: #F4C504;
  cursor: pointer;
  position: relative;
  top: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.tabs label:hover {
  background: #F9E281;
}
.tabs .tab-content {
  z-index: 2;
  display: none;
  overflow: hidden;
  width: 100%;
  font-size: 17px;

  position: absolute;
  top: 48px;
  left: 0;
  
}
.tabs [id^="tab"]:checked + label {
  top: 0;
  padding-top: 17px;
  background: #F9E281;
}
.tabs [id^="tab"]:checked ~ [id^="tab-content"] {
  display: block;
}

.menuLineDoubleLightW {
	margin:0 0 10px 0;
	padding:2px 8px;
	border-width:5px 5px;
	border-color:#F4C504;
	border-style:solid;
	background:#F9E281;
	color:#A78603;
	line-height:140%;
	font-weight:bold;
	text-align:center;
}
table{
	width:100%;
    font-size:14px;
    border-collapse:separate;
    border-spacing:0px;
    border-left:#4B4B4B 2px solid;
    border-top:#4B4B4B 2px solid;
}
table tr th{
    background-color:#D0D0FF;
    padding:10px;
    border:#4B4B4B 2px solid;
    border-left:#fff 2px solid;
    border-top:#fff 2px solid;
}
table tr td{
    background-color:#F9E281;
    padding:10px;
    border:#4B4B4B 2px solid;
    border-left:#fff 2px solid;
    border-top:#fff 2px solid;
}

</style>
</head>
 <body background="twitteroauth/test.png">
  <?php
 echo '<br><p align=center  class="menuLineDoubleLightW">RTP[ループツイートプログラム]ver.プロトタイプ</p>';
  ?>

<ul class="tabs">
<li>
<input type="radio" name="tabs" id="tab1" checked />
<label for="tab1">自動ツイート</label>
<div id="tab-content1" class="tab-content">

<table bordercolorlight="white" bordercolordark="#696969" border="5">
 
<tr>
<td>

<div id="res">
<?php

$twObjret = $connection;
//$vret = $twObjret->OAuthRequest("https://api.twitter.com/1.1/application/rate_limit_status.json?resources=statuses,users","GET");
//echo $vret ;
//echo '<br><br>';

$objret = json_decode($vret);

//print_r($objret);
//print_r(json_decode($vret,true));
//echo '<br>改行<br>';
//print_r($objret->resources->users->{'/users/report_spam'}->reset);

//echo '<br><br>'.$result;

  ?>

</div>


<form method="post" action="" style="display:inline;">
<select id="data1" name="data">
<?php
 $twObj=$connection;
 $vret = $twObj->OAuthRequest('https://api.twitter.com/1.1/lists/list.json','GET',
array(
'screen_name' => $screen_name
));
$objret = json_decode($vret);
echo '<option value="">リストを選択してください</option>';

$fp = fopen("./screen_name/@".$screen_name."_list_temp.txt", "r");
while ($line = fgets($fp)) {

echo '<option value="'.$line.'">'.$line.'</option>';

}
fclose($fp);


?>
</select>
<input type="hidden" id="abc" name="num" value="1"></input>
<input name="submit" type="submit"value="　PUSH　"></input>
</form>

<form method="post" action="" style="display:inline;">
<input type="hidden" id="abc" name="numnum" value="11234"></input>
<input name="submit" type="submit"value="　リスト更新　"></input>
<br />
</form>

<?php
$numnum = $_POST['numnum'] ;
if(is_numeric($numnum)){

$twObj=$connection;
 $vret = $twObj->OAuthRequest('https://api.twitter.com/1.1/lists/list.json','GET',
array(
'screen_name' => $screen_name
));
$objret = json_decode($vret);

unlink("./screen_name/@".$screen_name."_list_temp.txt");

foreach($objret as $item){
	$id = mb_convert_encoding($item->slug,"SJIS","UTF-8");
	
	$fp = fopen("./screen_name/@".$screen_name."_list_temp.txt", "a");
	fwrite($fp, $id."\n");
	fclose($fp);

}


}
?>

<?php
$data = $_POST['data'] ;
$num = $_POST['num'] ;
if(is_numeric($num)){
unlink("./screen_name/@".$screen_name."_list.txt");
 $slug_name = mb_convert_encoding($data,"UTF-8","SJIS");
 
$req = $twObj->OAuthRequest('https://api.twitter.com/1.1/lists/members.json','GET',
array(
'owner_screen_name' => $screen_name,
'slug' => $slug_name,
'count'=>'100'
));

 $i = 0; 
    $objret = json_decode($req);
    
    echo '【'.$data.'リスト追加ユーザーを表示】<br>';
    
    foreach($objret->users as $item){
    
    $list_name = mb_convert_encoding($item->name,"SJIS","UTF-8");
    
    $screen = $item->screen_name;
	echo 'ユーザー名:'.$list_name.'@'.$screen.'<br/>';    
    $i = $i+1;
    
    // ファイル書き込み
    $fp = fopen("./screen_name/@".$screen_name."_list.txt", "a");
	fwrite($fp, $screen."\n");
	fclose($fp);
    
}
echo '【リスト追加者】'.$i.'名<br>';

?>
<form method="post" action="">
ループ回数：
<select name="loop">

<?php
echo '<option value="1">1</option>';
echo '<option value="2">2</option>';
echo '<option value="3">3</option>';
echo '<option value="4">4</option>';
echo '<option value="5">5</option>';
echo '<option value="10">10</option>';
echo '<option value="15">15</option>';
echo '<option value="20">20</option>';
echo '<option value="30">30</option>';
echo '<option value="100">100</option>';
?>

</select>
<br><br>
<input name="hoge" type="checkbox" id="newtweetcheck" value="1"/>連番tweetする / チェック入っている間は登録文ツイートはされません<br>
<input name="hoge1" type="checkbox" id="newtweetcheck1" value="2"/>メンションtweetする / チェック入っている間はメンションツイート<br>
<input type="hidden" id="abc" name="num1" value="1"></input>
<input name="submit" type="submit"value="ツイートする"></input>
</form>

<?php
}

$check = $_POST['hoge'];
$check1 = $_POST['hoge1'];
$loop = $_POST['loop'];
$num1 = $_POST['num1'];

if(is_numeric($num1)){

for ($count = 0; $count < $loop; $count++){
$twObjret = $connection;

$fp = fopen("./screen_name/@".$screen_name."_list.txt", "r");

while ($line = fgets($fp)) {

$fpt = fopen("./screen_name/@".$screen_name."_storage.txt", "r");

while ($lines = fgets($fpt)) {

$lines=split(",",$lines,2);

$temp=$lines[1];

$lines="@$line $lines[1](".date('H:i:s').")";

$counter++;

if($check==1 && $counter>$loop){exit;}
if($check==1){$lines="@$line $counter(".date('H:i:s').")";}
if($check1==2){

$replaceText = str_replace("[Z]", " @".$line, $temp);

$lines="$replaceText(".date('H:i:s').")";

}

$sTweet = "$lines";
$sTweet = mb_convert_encoding($sTweet,  "UTF-8","SJIS");
$sTweet = html_entity_decode($sTweet);
$vRequest = $twObjret->OAuthRequest("https://api.twitter.com/1.1/statuses/update.json","POST",array("status" => $sTweet));
//Jsonデータをオブジェクトに変更
$oObj = json_decode($vRequest);
//エラー
if(isset($oObj->{'errors'}) && $oObj->{'errors'} != ''){
?>
<h3>エラー</h3>
<pre>
<?php var_dump($oObj); ?>
</pre>
<?php
//投稿内容
}else{
?>
<?php
echo ''.$counter.'回ツイート<br>';

}
sleep(mt_rand(1)+1);}

}
} // while終端
}
?>
</td>
</tr>
</table>
</div>
</li>

<li>
<input type="radio" name="tabs" id="tab2" />
<label for="tab2">ツイート設定</label>
<div id="tab-content2" class="tab-content">

<table bordercolorlight="white" bordercolordark="#696969" border="5">
<tr>
<td>
【ツイート文登録】/ 多分、改行とかできません。/ 文中に[Z]を入れることで、メンションツイートが可能
<form method="post" action="" name="text">
<INPUT type="text" name="textarea" size="141" onKeyup="
o=document.getElementById('slen');
n=this.value.length;
o.value=n;
o.innerHTML=n;
o.style.color=(n>110)?'red':'blue';
document.text.change_btn.disabled = (n>110);

document.getElementById('mes1').innerHTML=(n>110)?'文字　文字制限を越えました':'文字';
document.getElementById('mes2').innerHTML=(n>110)?'':'　あと'+(110-n)+'文字です。';
">
<input type="hidden" id="abc" name="num2" value="99"></input>
<input name="submit" type="submit"value="PUSH" id="change_btn"></input>
<br />
</input>
</form>

<?php
$textarea = $_POST['textarea'] ;
$num = $_POST['num2'] ;
if(is_numeric($num)){

	$last_m = file("./screen_name/@".$screen_name."_storage.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if(!$last_m[0]){$tuika=1;}
	else if($last_m[0]){
	$tuika_mae=split(",",$last_m[count($last_m)-1],2);
	$tuika=$tuika_mae[0];
	$tuika++;
	}

    // ファイル書き込み
    $fp = fopen("./screen_name/@".$screen_name."_storage.txt", "a");
	fwrite($fp, $tuika.",".$textarea."\n");
	fclose($fp);
}

?>


<span id="slen"></span>
<span id="mes1" style="font-size:12px">　</span>
<span id="mes2" style="font-size:12px"></span>
<br /><br />
【ツイート文リスト】/ 多分、改行で表示されません。<br>
<form name="select" style="display:inline;">
<select id="data3" name="data">

<?php
echo '<option value="">登録したツイート一覧</option>';
$fp = fopen("./screen_name/@".$screen_name."_storage.txt", "r");
while ($line = fgets($fp)) {
$line=split(",",$line,2);
 echo '<option value="'.$line[0].'">'.$line[1].'</option>';
}
fclose($fp);

?>
</select>
</form>
<form id="tweet_del" method="post" action="" style="display:inline;">
<input name="screen_name" id="screen_name" type="hidden" value= "<?php echo $screen_name; ?>">
<input name="submit" type="submit"value="　×　" id="form">
保存ツイート削除
</input>
</form>

</td>
</tr>
</table>

</div>
</li>

<li>
<input type="radio" name="tabs" id="tab3" />
<label for="tab3">使い方</label>
<div id="tab-content3" class="tab-content">

<table bordercolorlight="white" bordercolordark="#696969" border="5">
<tr>
<td>
《ツイート設定》タブ<br>
・ツイート文登録：110文字まで。入力後⇒PUSH<br>
・ツイート文リスト：保存されているツイート。選択したツイートを[×]ボタン⇒削除<br>
<br>
《自動ツイート》タブ<br>
・リストを選択⇒PUSH<br>
・確認の為のリスト追加ユーザー表示<br>
・呟くループ回数を選択<br>
　※[連番tweet]にチェックが入っている間は、登録したツイート文は呟かれません。１～連番<br>
　　1回チェック入れると、チェックON、再びチェック入れるとチェックOFF<br>
　※登録したツイート×ループ回数(例：登録したツイート2つ×30ループ＝60回分2種類の登録文が交互にツイート）<br>
　※[メンションtweet]にチェックが入っている間は、リプライツイートはされません。<br>
　　1回チェック入れると、チェックON、再びチェック入れるとチェックOFF<br>
　　文中に[Z]を入れ、登録することで、メンションツイートが可能<br>
　　[Z]が入っていないツイートは、普通の呟きとしてツイートされます。<br>
<br>
《Q & A》<br>
Q.リスト選択したいけど、表示されていない<br>
A.リストを呼び出す回数に制限がある為、一定時間経つと再び表示されます（体感15分程度待つ）<br>
<br>
Q.登録するツイートは改行やAAは使えるの？<br>
A.現時点では使えません(使えない仕様かもしれません)<br>
<br>
Q.ツイート文登録で、4文字程度入力したら、あと106文字です。って140文字までじゃないの？<br>
A.このアプリを通じて呟いたツイートに[呟いた時間]が付与され、実質入力文字数が減ることと<br>
ツイート先の相手のtwitterIDの長さによって入力可能文字数が変動する為、少し余裕を持って制限を掛けています。<br>
<br>
Q.このアプリを使って呟いて、ループの途中からエラーになった<br>
A.短時間の連続投稿によるスパム判定 や 呟き規制掛かった可能性があります。<br>
　目安：3時間毎300ツイートまで<br>
<br>
<hr>
<font size=4>
■■■□□□注意□□□■■■<br>
■<font color=red>このアプリを通じて発生したトラブル(リムーブ、ブロック等)については、一切責任を負いません！</font><br>
■■■□□□□□□□□■■■<br>
</font>
</td>
</tr>
</table>

</div>
</li>

<li>
<input type="radio" name="tabs" id="tab4" />
<label for="tab4">特定ユーザーツイ取得</label>
<div id="tab-content4" class="tab-content">
<table bordercolorlight="white" bordercolordark="#696969" border="5">
<tr>
<td>

<?php
print "↓".$name."のタイムラインだけ最新200件<br>";
?>

<form action="" method="post">
<input type="text" name="search">
<input type="submit"value="　検索　">
</form>

----------------------------------------------------------<br>

<?php
$search = $_POST['search'] ;
$count=0;

if ( empty($search) ) {
	print "検索したいキーワードを入力後、検索ボタンを押してください";
} else {
$twObj=$connection; 
$user = $screen_name;

$timeline = $twObj->get('statuses/user_timeline', array('screen_name' => $user,'count' => 200));

foreach ($timeline as $i => $tweet) {

    $name = mb_convert_encoding($tweet->text,"SJIS","UTF-8");
    
    if (strstr($name, $search)) {
    $i++;
    echo "".$i."ツイート目: $name<br>" . PHP_EOL;
    $count++;
    }
}
	if($count==0){
		print "$search はヒットしませんでした<br>";
	}
	echo "----------------------------------------------------------<br>";
	echo "200件中[$search]を含むツイート[$count]件<br>" . PHP_EOL;
	
}

?>

</td>
</tr>
</table>
</div>
</li>

</ul>
</body>
</html>
