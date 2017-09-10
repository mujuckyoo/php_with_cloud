<!DOCTYPE hyml>
<meta charset = "utf-8"/>
<?php
    if (!isset($_COOKIE['user_id']) || !isset($_COOKIE['user_pw']) ) {
        echo "<script>
        alert('세션이 만료되거나 없습니다');
        history.back();
        </script>
        ";
        echo "<meta http-equiv ='refresh' content='0;url=login.php'>";
        exit;
    }


$user_id = $_COOKIE['user_id'];
$user_pw = $_COOKIE['user_pw'];

echo "안녕하세요, $user_id 님";
echo "당신의 비밀번호는 ";
echo strlen($user_pw);
echo " 자리입니다";
echo "<a href='logout.php'>로그아웃</a>";

?>