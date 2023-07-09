<?php
include 'db_conn.php';
if (isset($_POST['login'])){
      $uname = ($_POST['uname']); 
      $password = ($_POST['password']); 
       $_sql =mysqli_query($conn,"SELECT * FROM users WHERE user_name='$uname' AND password='$password'");  
       if (mysqli_num_rows($_sql) === 1){
        ?>
        <script>
            alert("well come director!!! ") ;
        </script>
        <?php
       }else
       {
        ?>
        <script>
            alert("failed!!! ") ;
            
        </script>
        <?php
        header("location:index.php");
       }
    }

?>