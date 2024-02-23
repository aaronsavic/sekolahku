<?php 
    require_once('connection.php');

    date_default_timezone_set('Asia/Jakarta');
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");

    // Escape Quotes
    (isset($_POST['id'])) ? $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8') : $id = "";
    (isset($_POST['username'])) ? $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') : $username = "";
    (isset($_POST['password'])) ? $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') : $password = "";
    (isset($_POST['email'])) ? $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : $email = "";

    // ========== Create user ========== //
    if(isset($_POST['create_user'])) {
        $sql = "INSERT INTO users (username, email, password, updated_at, created_at)
        VALUES
        ('".$username."',
        '".$email."',
        '".$password."',
        '".$updated_at."',
        '".$created_at."')";

        if (!mysqli_query($conn, $sql)) { 
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/user/?alert=1a");
        }
    } 
    // ========== Update user ========== //
    else if(isset($_POST['update_user'])) {
        $sql = "UPDATE users SET 
            username = '".$username."', 
            email = '".$email."',
            password = '".$password."',
            updated_at = '".$updated_at."' WHERE id='$id'";

        if (!mysqli_query($conn, $sql)) { 
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/user/?alert=2a");
        }
    }
    // ========== Delete user ========== //
    else if (isset($_POST['delete_user'])) {
        $sql = "DELETE FROM users WHERE id='$id'";
        $query_run = mysqli_query($conn, $sql);
    
        if (!mysqli_query($conn, $sql)) {
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/user/?alert=3a");
        }
    }
    else {
        header("location: ../pages/user/?alert=4a");
    }
?>