<?php
    //require('inc/essentials.php');
    require('inc/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 450px;            
        }
    </style>    
</head>
<body class="bg-light">
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST">
            <div>
                <i class="fa-solid fa-user"></i>
                <input name="admin_name" type="text" name="" placeholder="Username" required>
            </div>
            <div>
                <i class="fa-solid fa-lock"></i>
                <input name="admin_pass" type="password" placeholder="Password" required>
            </div>
            <button name="login" type="submit">LOGIN</button>
            <div>
                <a href="../index.php">Back to Home</a>
            </div>
        </form>
    </div>

    <?php
        
        if(isset($_POST['login']))
        {
            // $frm_data = filteration($_POST);

            // $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=? ";
            // $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

            // $res = select($query,$values,"ss");
            // if($res->num_rows==1){
            //     $row = mysqli_fetch_assoc($res);
            //     session_start();
            //     $_SESSION['adminLogin'] = true;
            //     $_SESSION['adminId'] = $row['sr_no'];
            //     redirect('dashboard.php');
            // }
            // else{
            //     alert('error','Login failed - Invalid Credentials!');
            // }
        }
    
    ?>

    <?php require('inc/scripts.php'); ?>    
</body>
</html>