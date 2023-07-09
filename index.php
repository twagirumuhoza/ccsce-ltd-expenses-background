<?php
include 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="#" method="POST">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) {
            ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php
        }?>  
        <label>User Name</label>
        <input type="text" name="uname" placeholder="user name" required><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="enter password" required><br>
<button type="submit" name = 'login'>Login</button>
    </form>
    <?php
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
</body>
</html>