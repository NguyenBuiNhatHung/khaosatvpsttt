<?php
    session_start();
    if(isset($_SESSION['flag']))
    {
        if($_SESSION['flag']==true)
        {
            echo '<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo256.png" type="image/png">
    <title>Cảm ơn Khách Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 600px;
            background: rgb(252, 236, 236);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 200px;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
            color: #555;
        }

        .discount-code {
            font-weight: bold;
            font-size: 20px;
            color: #28a745; /* Màu xanh cho mã giảm giá */
            margin: 10px 0;
        }

        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }
        .mgg {
            color: #333;
            font-weight: 700; /* Tăng độ dày chữ */
            animation: colorChange 3s infinite; /* Chuyển màu liên tục */
        }
        @keyframes colorChange {
            0% { color: #ff0000; } /* Đỏ */
            25% { color: #ff7f00; } /* Cam */
            50% { color:rgb(163, 163, 13); } /* Vàng */
            75% { color: #00ff00; } /* Xanh lá */
            100% { color: #0000ff; } /* Xanh dương */
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0.7; }
            100% { opacity: 1; }
        }

    </style>
</head>

<body>
    <div class="container">
        <img src="images/logo.png" alt="Logo VPSTTT"> <!-- Thay đổi đường dẫn logo -->
        <h2>Cảm ơn Quý khách hàng đã tham gia khảo sát!</h2>
        <p>VPSTTT gửi tặng khách hàng mã giảm giá 20% áp dụng cho tất cả các dịch vụ chỉ có ở <strong>vpsttt.com</strong></p>
        <h2 class="mgg">MÃ GIẢM GIÁ: " ';
        echo $_SESSION['code'];
        echo ' "</h2>
        <p>Chúng tôi cam kết sẽ tiếp tục lắng nghe và cải tiến để mang đến cho bạn trải nghiệm tốt hơn nữa.</p>
        <p>Một lần nữa, xin cảm ơn sự đóng góp của bạn!</p>
        <footer>
            Trân trọng,<br>
            Đội ngũ VPSTTT
        </footer>
    </div>
</body>

</html>';
        }
    }
?>
