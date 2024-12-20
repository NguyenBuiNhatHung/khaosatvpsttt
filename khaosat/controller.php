<?php
    require "../config/config.php";
    if(isset($_POST['submit']))
    {
        $contact = $conn->real_escape_string($_POST['contact']);
        $source = $conn->real_escape_string($_POST['source']);
        $usage = $conn->real_escape_string($_POST['usage']);
        $purposes = isset($_POST['purpose']) ? $_POST['purpose'] : [];
        $purpose = implode(", ", $purposes);
        $concerns = $conn->real_escape_string($_POST['concerns']);
        $feedback = $conn->real_escape_string($_POST['feedback']);

        $sql = "INSERT INTO khaosat (contact, source, used, purpose, concerns, feedback)
            VALUES ('$contact', '$source', '$usage', '$purpose', '$concerns', '$feedback')";
        mysqli_query($conn,$sql);
        session_start();
        $_SESSION['flag']=true;
        header('Location:/khaosatvpsttt/khaosat/khuyenmai.php');
    }
?>