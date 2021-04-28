<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form>

<?php
$search_value=$_POST["search"];
$con= new mysqli("localhost","root","","userlogout");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="SELECT * FROM user WHERE username LIKE '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'username:  '.$row["email"];


            }       
  
        }
?>