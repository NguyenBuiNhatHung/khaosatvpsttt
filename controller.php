<?php
    session_start();
    require "config/config.php";
    if(isset($_POST['submit']))
    {
        $contact = $conn->real_escape_string($_POST['contact']);
        $flag = false;
        $sql = "SELECT contact FROM contact";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result))
        {
            if($row['contact']==$contact)
            {
                $flag=true;
                break;
            }
            

        }
        if($flag==false)
        {
            
            $_SESSION['message'] = "khách hàng không nằm trong danh sách khảo sát, xin cảm ơn";
            header('Location:'.$line.'/khaosat');
            exit;
        }

        //kiểm tra khách hàng đã khảo sát chưa
        $sql = "SELECT contact FROM khaosat";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result))
            {
                if($row['contact']==$contact)
                {
                    $flag=false;
                    break;
                }
            }

        if($flag==true)
        {
            $sql = "SELECT code FROM code LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $code = mysqli_fetch_array($result);
            if($code==false) $code = "đã hết mã, xin cảm ơn";
            else 
            {
                $code = $code['code'];
                $deleteSql = "DELETE FROM code WHERE code = '$code'";
                mysqli_query($conn, $deleteSql);
            }

            $source = $conn->real_escape_string($_POST['source']);
            $usage = $conn->real_escape_string($_POST['usage']);
            $purposes = isset($_POST['purpose']) ? $_POST['purpose'] : [];
            $purpose = implode(", ", $purposes);

            $concerns = isset($_POST['concerns']) ? $_POST['concerns'] : [];
            $concern = implode(", ", $concerns);
            $feedback = $conn->real_escape_string($_POST['satisfaction']);
            $satis = $conn->real_escape_string($_POST['goalAchievement']);
            $conn->set_charset("utf8");
            $sql = "INSERT INTO khaosat (contact, source, used, purpose, concerns, feedback,satisfied,code)
                VALUES ('$contact', '$source', '$usage', '$purpose', '$concern', '$feedback','$satis','$code')";
            mysqli_query($conn,$sql);
            
            $_SESSION['flag']=true;
            $_SESSION['code']=$code;
            header('Location:'.$line.'/camon');
            exit;
        }
        else
        {
            $_SESSION['message'] = "khách hàng đã tham gia khảo sát trước đó, xin cảm ơn";
            header('Location:'.$line.'/khaosat');
            exit;
        }
    }
?>