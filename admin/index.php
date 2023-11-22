<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        redirect('dashboard.php');
    }
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <?php require('inc/links.php'); ?>   
</head>
<body class="bg-light">
    <div class="login-form">
        <h2>ADMIN LOGIN PANEL</h2>
        <form method="POST">
            <div>
                <i class="fa-solid fa-user"></i>
                <input name="admin_name" type="text" placeholder="Username" required>
            </div>
            <div>
                <i class="fa-solid fa-lock"></i>
                <input name="admin_pass" type="password" placeholder="Password" required>
            </div>
            <button name="login" type="submit">LOGIN</button>
            <div>
                <a href="../index.php" class="col-lg-12 text-center">Back to Home</a>
            </div>
        </form>
    </div>

    <?php
        
        if(isset($_POST['login']))
        {
            $frm_data = filteration($_POST);

            $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=? ";
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

            $res = select($query ,$values,"ss"); 
            if($res->num_rows == 1){
                $row = mysqli_fetch_assoc($res);

                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['sr_no'];
                redirect('dashboard.php');
            }
            else{
                alert('error','Login failed - Invalid Credentials!');
            }
        }
    
    ?>

    <?php require('inc/scripts.php'); ?>    
</body>
</html>