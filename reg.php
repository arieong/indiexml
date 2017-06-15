<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db.php");

$id = $_POST['id1'];
$pw = $_POST['pw1'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null)
{
        //新增資料進資料庫語法
        $sql = "INSERT INTO 'user' ('username','password') VALUES ('$id','$pw')";
        $result = mysql_query($sql);
        if($result)
        {
                echo '注冊成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '注冊失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '請填寫帳號或密碼!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>