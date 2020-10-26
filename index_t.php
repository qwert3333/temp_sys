<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=shift_jis" />
<title>Twitter連携アプリ[RTP]</title>
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

// ログイン者の情報取得
// Twitter の user_id + screen_name(表示名)
$user_id     = $access_token['user_id'];
$screen_name = $access_token['screen_name'];

//（１）オプション設定
$option = array('user_id'=>$user_id,'screen_name'=>$screen_name);

//（２）twitterAPIのURL,メソッド,APIのオプション設定
$json = $connection->OAuthRequest(
    'https://api.twitter.com/1.1/users/show.json',//使用するAPI
    'GET', //GETかPOATか、APIごとに決まってるので、対応するものを
    $option //（１）で記述したオプションを指定
);

//（３）
$rogin = json_decode($json,true);//取得したjsonをデコードし、連想配列にする。

$icon ="<img width='32' height='32' src='".$rogin['profile_image_url']."'>";

$name = "【".mb_convert_encoding($rogin['name'], "SJIS", "UTF-8")."】";

$rogout = "<br>◆ログアウト <a href='./clearsessions.php'>ログアウトする</a>";

/* Include HTML to display on the page */
/*include('html.inc');*/
require_once("./tweet_test.php");

?>
 
</body>
</html>