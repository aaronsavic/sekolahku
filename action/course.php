<?php 
    require_once('connection.php');

    date_default_timezone_set('Asia/Jakarta');
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");

    // Escape Quotes
    (isset($_POST['id'])) ? $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8') : $id = "";
    (isset($_POST['course'])) ? $course = htmlspecialchars($_POST['course'], ENT_QUOTES, 'UTF-8') : $course = "";
    (isset($_POST['mentor'])) ? $mentor = htmlspecialchars($_POST['mentor'], ENT_QUOTES, 'UTF-8') : $mentor = "";
    (isset($_POST['title'])) ? $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8') : $title = "";

    // ========== Create course ========== //
    if(isset($_POST['create_course'])) {
        $sql = "INSERT INTO courses (course, mentor, title)
        VALUES
        ('".$course."',
        '".$mentor."',
        '".$title."')";

        if (!mysqli_query($conn, $sql)) { 
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/course/?alert=1a");
        }
    } 
    // ========== Update course ========== //
    else if(isset($_POST['update_course'])) {
        $sql = "UPDATE courses SET 
            course = '".$course."', 
            mentor = '".$mentor."',
            title = '".$title."' WHERE id='$id'";

        if (!mysqli_query($conn, $sql)) { 
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/course/?alert=2a");
        }
    }
    // ========== Delete course ========== //
    else if (isset($_POST['delete_course'])) {
        $sql = "DELETE FROM courses WHERE id='$id'";
        $query_run = mysqli_query($conn, $sql);
    
        if (!mysqli_query($conn, $sql)) {
            echo "Error : ".$sql.". ".mysqli_error($conn);
        } else {
            header("location: ../pages/course/?alert=3a");
        }
    }
    else {
        header("location: ../pages/course/?alert=4a");
    }
?>