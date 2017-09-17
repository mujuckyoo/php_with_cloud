
<?php

    //echo getenv('SERVER_IP');
    $link = mysqli_connect("localhost", "root", "dbwpdnr*6", "db");

    if(!$link) {
        echo "MySQL 접속 에러 : ";
        echo mysqli_connect_error();
        exit();

    //엑시트는 그만하고 나와 뒤에코드는 무시해
    }

    //echo "MySQL 접속 완료";
    mysqli_set_charset($link,"utf8");

    $sql_query = "select * from Person";

    $raw_result = mysqli_query($link, $sql_query);
    //link에 sql_quer를 던져라
    //string 변환은 (String)으로
    $result_array = array();
    if($raw_result) {

        while($row= mysqli_fetch_array($raw_result)) {
            array_push($result_array,
                        array(
                            'id'=>$row[0],
                            'name'=>$row[1],
                            'address'=>$row[2]
                        )
                        );

        }

        #echo "<pre>";
        #print_r($result_array);
        #echo "</pre>";

        header('Content-Type: application/json; charset=utf8');
        $json = json_encode(array("result"=>$result_array), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
        echo $json;
//pre를 붙임으로서 엔터와 스페이스를 정상적으로 출력
    } else {
        echo "SQL query run error";
        echo mysqli_error($link);
    }

    mysqli_close($link);
    
?>