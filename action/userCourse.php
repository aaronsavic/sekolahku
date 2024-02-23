<?php 
    require_once('connection.php');

    date_default_timezone_set('Asia/Jakarta');
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");

    // Escape Quotes
    (isset($_POST['id'])) ? $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8') : $id = "";
    (isset($_POST['id_user'])) ? $id_user = htmlspecialchars($_POST['id_user'], ENT_QUOTES, 'UTF-8') : $id_user = "";
    (isset($_POST['id_course'])) ? $id_course = htmlspecialchars($_POST['id_course'], ENT_QUOTES, 'UTF-8') : $id_course = "";

    // ========== Create user ========== //
    if(isset($_POST['create_user_course'])) {
        $sql = "INSERT INTO usercourse (id_user, id_course)
        VALUES
        ('".$id_user."',
        '".$id_course."')";

        if (!mysqli_query($conn, $sql)) { 
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/user_course/?alert=1a");
        }
    } 
    // ========== Update user ========== //
    else if(isset($_POST['update_user_course'])) {
        $sql = "UPDATE usercourse SET 
            id_user = '".$id_user."', 
            id_course = '".$id_course."' WHERE id='$id'";

        if (!mysqli_query($conn, $sql)) { 
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/user_course/?alert=2a");
        }
    }
    // ========== Delete user ========== //
    else if (isset($_POST['delete_user_course'])) {
        $sql = "DELETE FROM usercourse WHERE id='$id'";
        $query_run = mysqli_query($conn, $sql);
    
        if (!mysqli_query($conn, $sql)) {
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/user_course/?alert=3a");
        }
    }
    else {
        header("location: ../pages/user_course/?alert=4a");
    }
?>