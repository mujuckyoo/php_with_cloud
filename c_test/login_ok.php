<meta charset = "utf-8"/>
<?php
$member = array(
    'user1' => array('pw' => 'ppp1', 'name' => 'NO1'),
    'user2' => array('pw' => 'ppp2', 'name' => 'NO2'),
    'user3' => array('pw' => 'ppp3', 'name' => 'NO3')
);
$user_id = $_GET['user_id'];
$user_pw = $_GET['user_pw'];

if (!isset($member[$user_id])) {

    echo "<script>
        alert('아이디가 존재하지 않습니다');
        history.back();
        </script>
        ";
        exit;
}
if ($member[$user_id]['pw']!=$_GET['user_pw']) {
    
    echo "<script>
    alert('비밀번호가 일치하지 않습니다');
    history.back();
    </script>
    ";
    exit;
    }

setcookie('user_id', $user_id, time() + 600);
setcookie('user_pw', $user_pw, time() + 600);

    if (isset($_GET['user_id']) && isset($_GET['user_pw'])) {
        echo 'ID : ';
        echo $_GET['user_id'];
        echo 'PW : ';
        echo $_GET['user_pw'];
    }
//<!-- isset은 자료가 있느냐 -->
?>