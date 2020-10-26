<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=shift_jis" />
<title>Twitter�A�g�A�v��[RTP]</title>
</head>
<body>
<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config_t.php');

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

// ���O�C���҂̏��擾
// Twitter �� user_id + screen_name(�\����)
$user_id     = $access_token['user_id'];
$screen_name = $access_token['screen_name'];

//�i�P�j�I�v�V�����ݒ�
$option = array('user_id'=>$user_id,'screen_name'=>$screen_name);

//�i�Q�jtwitterAPI��URL,���\�b�h,API�̃I�v�V�����ݒ�
$json = $connection->OAuthRequest(
    'https://api.twitter.com/1.1/users/show.json',//�g�p����API
    'GET', //GET��POAT���AAPI���ƂɌ��܂��Ă�̂ŁA�Ή�������̂�
    $option //�i�P�j�ŋL�q�����I�v�V�������w��
);

//�i�R�j
$rogin = json_decode($json,true);//�擾����json���f�R�[�h���A�A�z�z��ɂ���B

$icon ="<img width='32' height='32' src='".$rogin['profile_image_url']."'>";

$name = "�y".mb_convert_encoding($rogin['name'], "SJIS", "UTF-8")."�z";

$rogout = "<br>�����O�A�E�g <a href='./clearsessions.php'>���O�A�E�g����</a>";

/* Include HTML to display on the page */
/*include('html.inc');*/
require_once("./tweet_test.php");

?>
 
</body>
</html>