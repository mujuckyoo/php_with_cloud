<!DOCTYPE html>
<meta charset="utf-8" /> 
<!--미리 셋팅을 읽는다 -->

<form method='post' action='login_ok.php'>
<!--button id pwd 등을 쉽게 만들어주는 UI -->
    <input type='text' name='user_id' />
    <input type='password' name='user_pw' />
    <input type='submit' value='로그인' />
    <!--button을 누르는즉시 action 으로 id pw를 넘긴다 -->
</form>