<?php   
 $id =$_POST['id1'];
 $pw = $_POST['pw1'];

 
 $conn = mysqli_connect("localhost", "root", "") or die('Error with MySQL connection');
  
  mysqli_query($conn,"SET NAMES 'utf8'");
  mysqli_select_db($conn,"test"); 
  $sql_insert = "INSERT INTO user(username,password) VALUES ('$id','$pw')";
  $result = mysqli_query($conn,$sql_insert) or die('MySQL insert error');  

  if($id != null && $pw != null)
{

        if($result)
        {
                echo ("注冊成功");
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
  