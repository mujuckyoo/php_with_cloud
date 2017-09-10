<!DOCTYPE hyml>
<meta charset = "utf-8"/>
<?php
    if (!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_pw']) ) {
        echo "<meta http-equiv ='refresh' content='0;url=login.php'>";
        exit;
    }


$user_id = $_COOKIE['user_id'];
$user_pw = $_COOKIE['user_pw'];

echo "안녕하세요, $user_name님";
echo "당신의 비밀번호는" + strlen($user_pw) + "자리입니다";
echo "<a href='logout.php'>로그아웃</a>";

?>