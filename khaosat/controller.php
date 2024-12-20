<?php
    require "../config/config.php";
    if(isset($_POST['submit']))
    {
        $contact = $conn->real_escape_string($_POST['contact']);
        $source = $conn->real_escape_string($_POST['source']);
        $usage = $conn->real_escape_string($_POST['usage']);
        $purposes = isset($_POST['purpose']) ? $_POST['purpose'] : [];
        $purpose = implode(", ", $purposes);

        $concerns = isset($_POST['concerns']) ? $_POST['concerns'] : [];
        $concern = implode(", ", $concerns);
        $feedback = $conn->real_escape_string($_POST['feedback']);
        $conn->set_charset("utf8");
        $sql = "INSERT INTO khaosat (contact, source, used, purpose, concerns, feedback)
            VALUES ('$contact', '$source', '$usage', '$purpose', '$concern', '$feedback')";
        mysqli_query($conn,$sql);
        session_start();
        $_SESSION['flag']=true;
        header('Location:'.$line.'/khaosat/khuyenmai.php');
    }
?>