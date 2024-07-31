session_start();
$token = filter_input(INPUT_POST, 'token');
if (empty($_SESSION['token']) || $token !== $_SESSION['token']) {
	die('正規の画面からご使用ください');
}
 
