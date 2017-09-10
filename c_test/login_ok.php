<?php
$member = array(
    'user1' => array('pw' => 'ppp1', 'name' => 'NO1'),
    'user2' => array('pw' => 'ppp2', 'name' => 'NO2'),
    'user3' => array('pw' => 'ppp3', 'name' => 'NO3')
);

if (!isset($member[$_GET['user_id']])) {

    echo "<script>
        alert('아이디가 존재하지 않습니다');
        history.back();
        </script>
        ";
}

    if (isset($_GET['user_id']) && isset($_GET['user_pw'])) {
        echo 'ID : ';
        echo $_GET['user_id'];
        echo 'PW : ';
        echo $_GET['user_pw'];
    }
//<!-- isset은 자료가 있느냐 -->
?>