<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html;charset=shift_jis" />
<title>RTP[���[�v�c�C�[�g�v���O����]</title>
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
//#newtweetcheck���N���b�N���ɒl���N�b�L�[�Ɋi�[
$(document).on("click","#newtweetcheck", function(){
     var cheaked=$("#newtweetcheck").get(0).checked;
     $.cookie("newtweet", cheaked,{ expires: 730 });
});
//�y�[�W��ǂݍ��񂾎���#newtweetcheck�̒l��ݒ�
     var _newtweet=$.cookie("newtweet");
     if(_newtweet != "false"){
     $("#newtweetcheck").attr("checked",true);
     }
   
});

$(function(){
//#newtweetcheck���N���b�N���ɒl���N�b�L�[�Ɋi�[
$(document).on("click","#newtweetcheck1", function(){
     var cheaked=$("#newtweetcheck1").get(0).checked;
     $.cookie("newtweet1", cheaked,{ expires: 730 });
});
//�y�[�W��ǂݍ��񂾎���#newtweetcheck�̒l��ݒ�
     var _newtweet=$.cookie("newtweet1");
     if(_newtweet != "false"){
     $("#newtweetcheck1").attr("checked",true);
     }
   
});

 $("#tweet_del").submit(function() {
  if (window.confirm('�I�������ۑ��ς݂�RT���폜���܂����H')) {
     
   var str2 = $('#data3 option:selected').val();
   var str3 = $('#data3 option:selected').text();
   var screen_name =  $("#screen_name").val();
   if(str2==""){alert("���̍��ڂ͍폜�ł��܂���B");return;};
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
 echo '<br><p align=center  class="menuLineDoubleLightW">RTP[���[�v�c�C�[�g�v���O����]ver.�v���g�^�C�v</p>';
  ?>

<ul class="tabs">
<li>
<input type="radio" name="tabs" id="tab1" checked />
<label for="tab1">�����c�C�[�g</label>
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
//echo '<br>���s<br>';
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
echo '<option value="">���X�g��I�����Ă�������</option>';

$fp = fopen("./screen_name/@".$screen_name."_list_temp.txt", "r");
while ($line = fgets($fp)) {

echo '<option value="'.$line.'">'.$line.'</option>';

}
fclose($fp);


?>
</select>
<input type="hidden" id="abc" name="num" value="1"></input>
<input name="submit" type="submit"value="�@PUSH�@"></input>
</form>

<form method="post" action="" style="display:inline;">
<input type="hidden" id="abc" name="numnum" value="11234"></input>
<input name="submit" type="submit"value="�@���X�g�X�V�@"></input>
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
    
    echo '�y'.$data.'���X�g�ǉ����[�U�[��\���z<br>';
    
    foreach($objret->users as $item){
    
    $list_name = mb_convert_encoding($item->name,"SJIS","UTF-8");
    
    $screen = $item->screen_name;
	echo '���[�U�[��:'.$list_name.'@'.$screen.'<br/>';    
    $i = $i+1;
    
    // �t�@�C����������
    $fp = fopen("./screen_name/@".$screen_name."_list.txt", "a");
	fwrite($fp, $screen."\n");
	fclose($fp);
    
}
echo '�y���X�g�ǉ��ҁz'.$i.'��<br>';

?>
<form method="post" action="">
���[�v�񐔁F
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
<input name="hoge" type="checkbox" id="newtweetcheck" value="1"/>�A��tweet���� / �`�F�b�N�����Ă���Ԃ͓o�^���c�C�[�g�͂���܂���<br>
<input name="hoge1" type="checkbox" id="newtweetcheck1" value="2"/>�����V����tweet���� / �`�F�b�N�����Ă���Ԃ̓����V�����c�C�[�g<br>
<input type="hidden" id="abc" name="num1" value="1"></input>
<input name="submit" type="submit"value="�c�C�[�g����"></input>
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
//Json�f�[�^���I�u�W�F�N�g�ɕύX
$oObj = json_decode($vRequest);
//�G���[
if(isset($oObj->{'errors'}) && $oObj->{'errors'} != ''){
?>
<h3>�G���[</h3>
<pre>
<?php var_dump($oObj); ?>
</pre>
<?php
//���e���e
}else{
?>
<?php
echo ''.$counter.'��c�C�[�g<br>';

}
sleep(mt_rand(1)+1);}

}
} // while�I�[
}
?>
</td>
</tr>
</table>
</div>
</li>

<li>
<input type="radio" name="tabs" id="tab2" />
<label for="tab2">�c�C�[�g�ݒ�</label>
<div id="tab-content2" class="tab-content">

<table bordercolorlight="white" bordercolordark="#696969" border="5">
<tr>
<td>
�y�c�C�[�g���o�^�z/ �����A���s�Ƃ��ł��܂���B/ ������[Z]�����邱�ƂŁA�����V�����c�C�[�g���\
<form method="post" action="" name="text">
<INPUT type="text" name="textarea" size="141" onKeyup="
o=document.getElementById('slen');
n=this.value.length;
o.value=n;
o.innerHTML=n;
o.style.color=(n>110)?'red':'blue';
document.text.change_btn.disabled = (n>110);

document.getElementById('mes1').innerHTML=(n>110)?'�����@�����������z���܂���':'����';
document.getElementById('mes2').innerHTML=(n>110)?'':'�@����'+(110-n)+'�����ł��B';
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

    // �t�@�C����������
    $fp = fopen("./screen_name/@".$screen_name."_storage.txt", "a");
	fwrite($fp, $tuika.",".$textarea."\n");
	fclose($fp);
}

?>


<span id="slen"></span>
<span id="mes1" style="font-size:12px">�@</span>
<span id="mes2" style="font-size:12px"></span>
<br /><br />
�y�c�C�[�g�����X�g�z/ �����A���s�ŕ\������܂���B<br>
<form name="select" style="display:inline;">
<select id="data3" name="data">

<?php
echo '<option value="">�o�^�����c�C�[�g�ꗗ</option>';
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
<input name="submit" type="submit"value="�@�~�@" id="form">
�ۑ��c�C�[�g�폜
</input>
</form>

</td>
</tr>
</table>

</div>
</li>

<li>
<input type="radio" name="tabs" id="tab3" />
<label for="tab3">�g����</label>
<div id="tab-content3" class="tab-content">

<table bordercolorlight="white" bordercolordark="#696969" border="5">
<tr>
<td>
�s�c�C�[�g�ݒ�t�^�u<br>
�E�c�C�[�g���o�^�F110�����܂ŁB���͌��PUSH<br>
�E�c�C�[�g�����X�g�F�ۑ�����Ă���c�C�[�g�B�I�������c�C�[�g��[�~]�{�^���ˍ폜<br>
<br>
�s�����c�C�[�g�t�^�u<br>
�E���X�g��I����PUSH<br>
�E�m�F�ׂ̈̃��X�g�ǉ����[�U�[�\��<br>
�E�ꂭ���[�v�񐔂�I��<br>
�@��[�A��tweet]�Ƀ`�F�b�N�������Ă���Ԃ́A�o�^�����c�C�[�g���͙ꂩ��܂���B�P�`�A��<br>
�@�@1��`�F�b�N�����ƁA�`�F�b�NON�A�Ăу`�F�b�N�����ƃ`�F�b�NOFF<br>
�@���o�^�����c�C�[�g�~���[�v��(��F�o�^�����c�C�[�g2�~30���[�v��60��2��ނ̓o�^�������݂Ƀc�C�[�g�j<br>
�@��[�����V����tweet]�Ƀ`�F�b�N�������Ă���Ԃ́A���v���C�c�C�[�g�͂���܂���B<br>
�@�@1��`�F�b�N�����ƁA�`�F�b�NON�A�Ăу`�F�b�N�����ƃ`�F�b�NOFF<br>
�@�@������[Z]�����A�o�^���邱�ƂŁA�����V�����c�C�[�g���\<br>
�@�@[Z]�������Ă��Ȃ��c�C�[�g�́A���ʂ̙ꂫ�Ƃ��ăc�C�[�g����܂��B<br>
<br>
�sQ & A�t<br>
Q.���X�g�I�����������ǁA�\������Ă��Ȃ�<br>
A.���X�g���Ăяo���񐔂ɐ���������ׁA��莞�Ԍo�ƍĂѕ\������܂��i�̊�15�����x�҂j<br>
<br>
Q.�o�^����c�C�[�g�͉��s��AA�͎g����́H<br>
A.�����_�ł͎g���܂���(�g���Ȃ��d�l��������܂���)<br>
<br>
Q.�c�C�[�g���o�^�ŁA4�������x���͂�����A����106�����ł��B����140�����܂ł���Ȃ��́H<br>
A.���̃A�v����ʂ��ęꂢ���c�C�[�g��[�ꂢ������]���t�^����A�������͕����������邱�Ƃ�<br>
�c�C�[�g��̑����twitterID�̒����ɂ���ē��͉\���������ϓ�����ׁA�����]�T�������Đ������|���Ă��܂��B<br>
<br>
Q.���̃A�v�����g���ęꂢ�āA���[�v�̓r������G���[�ɂȂ���<br>
A.�Z���Ԃ̘A�����e�ɂ��X�p������ �� �ꂫ�K���|�������\��������܂��B<br>
�@�ڈ��F3���Ԗ�300�c�C�[�g�܂�<br>
<br>
<hr>
<font size=4>
���������������Ӂ�����������<br>
��<font color=red>���̃A�v����ʂ��Ĕ��������g���u��(�����[�u�A�u���b�N��)�ɂ��ẮA��ؐӔC�𕉂��܂���I</font><br>
����������������������������<br>
</font>
</td>
</tr>
</table>

</div>
</li>

<li>
<input type="radio" name="tabs" id="tab4" />
<label for="tab4">���胆�[�U�[�c�C�擾</label>
<div id="tab-content4" class="tab-content">
<table bordercolorlight="white" bordercolordark="#696969" border="5">
<tr>
<td>

<?php
print "��".$name."�̃^�C�����C�������ŐV200��<br>";
?>

<form action="" method="post">
<input type="text" name="search">
<input type="submit"value="�@�����@">
</form>

----------------------------------------------------------<br>

<?php
$search = $_POST['search'] ;
$count=0;

if ( empty($search) ) {
	print "�����������L�[���[�h����͌�A�����{�^���������Ă�������";
} else {
$twObj=$connection; 
$user = $screen_name;

$timeline = $twObj->get('statuses/user_timeline', array('screen_name' => $user,'count' => 200));

foreach ($timeline as $i => $tweet) {

    $name = mb_convert_encoding($tweet->text,"SJIS","UTF-8");
    
    if (strstr($name, $search)) {
    $i++;
    echo "".$i."�c�C�[�g��: $name<br>" . PHP_EOL;
    $count++;
    }
}
	if($count==0){
		print "$search �̓q�b�g���܂���ł���<br>";
	}
	echo "----------------------------------------------------------<br>";
	echo "200����[$search]���܂ރc�C�[�g[$count]��<br>" . PHP_EOL;
	
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
