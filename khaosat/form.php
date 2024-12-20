<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khảo sát khách hàng vpsttt</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: rgb(252, 236, 236); /* Màu nền hồng nhạt của container */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        img {
            width: 200px;
        }

        h2 {
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

        .greeting {
            margin: 10px 0;
            font-size: 13px;
            color: #555;
            text-align: justify;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
            font-weight: bold; /* In đậm câu hỏi */
        }

        .radio-group,
        .checkbox-group {
            text-align: left; /* Căn trái cho radio và checkbox */
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="tel"],
        select,
        textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            background-color: #6f42c1; /* Màu tím lịm */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:disabled {
            background-color: #ccc;
        }

        .error {
            color: red;
            margin: 10px 0;
            display: none;
        }
    </style>
</head>
<?php 
    session_start();
    

?>
<body>
    <div class="container">
        <img src="../images/logo.png" alt="Logo VPSTTT">
        <h2>KHẢO SÁT KHÁCH HÀNG</h2>

        <p class="greeting">
            Cảm ơn quý khách hàng đã sử dụng dịch vụ tại VPSTTT. VPSTTT hi vọng quý khách hàng sẽ có nhiều niềm vui và
            hài lòng khi tham gia buổi khảo sát này. Vui lòng điền vào khảo sát nhanh này và cho chúng tôi biết được suy nghĩ và nhận
            xét của quý khách hàng (câu trả lời sẽ được ẩn danh).
        </p>

        <form id="surveyForm" method="POST" action="controller.php">
            <label for="contact">Mục 1: Xin email hoặc số điện thoại của khách hàng:</label>
            <input type="text" id="contact" name="contact" placeholder="Ví dụ: 0328812674 hoặc lienhe@vpsttt.com" required>

            <label for="source">Mục 2: Bạn biết VPSTTT qua nguồn nào?</label>
            <select id="source" name="source" required>
                <option value="">Chọn nguồn</option>
                <option value="QC Facebook">QC Facebook</option>
                <option value="QC Google">QC Google</option>
                <option value="Tìm kiếm Trên Facebook">Tìm kiếm Trên Facebook</option>
                <option value="Tìm kiếm Trên Google">Tìm kiếm Trên Google</option>
                <option value="Người quen giới thiệu">Người quen giới thiệu</option>
                <option value="Các video hướng dẫn trên YouTube">Các video hướng dẫn trên YouTube</option>
                <option value="Các sự kiện kết nối doanh nghiệp và chuyên gia trong ngành">Các sự kiện kết nối doanh nghiệp và chuyên gia trong ngành</option>
                <option value="Tham gia các diễn đàn liên quan đến công nghệ">Tham gia các diễn đàn liên quan đến công nghệ</option>
                <option value="Thông tin qua các chương trình khuyến mãi trên các diễn đàn">Thông tin qua các chương trình khuyến mãi trên các diễn đàn</option>
                <option value="Khác">Khác</option>
            </select>

            <label>Mục 3: Bạn đã từng sử dụng dịch vụ VPS/Proxy?</label>
            <div class="radio-group">
                <div><input type="radio" name="usage" value="Đã từng sử dụng" required> Đã từng sử dụng</div>
                <div><input type="radio" name="usage" value="Dùng lần đầu" required> Dùng lần đầu</div>
            </div>

            <label for="purpose">Mục 4: Bạn dùng VPS/Proxy để phục vụ nhu cầu nào?</label>
            <div class="checkbox-group">
                <div><input type="checkbox" name="purpose[]" value="Treo auto Game 24/24"> Treo auto Game 24/24</div>
                <div><input type="checkbox" name="purpose[]" value="Mở Server Game/App"> Mở Server Game/App</div>
                <div><input type="checkbox" name="purpose[]" value="Thiết kế Website"> Thiết kế Website</div>
                <div><input type="checkbox" name="purpose[]" value="Lưu trữ dữ liệu"> Lưu trữ dữ liệu</div>
                <div><input type="checkbox" name="purpose[]" value="Đổi IP truy cập web/app"> Đổi IP truy cập web/app</div>
                <div><input type="checkbox" name="purpose[]" value="Treo Tool/Phần mềm tự động"> Treo Tool/Phần mềm tự động</div>
                <div><input type="checkbox" name="purpose[]" value="Startup (Khởi nghiệp)"> Startup (Khởi nghiệp)</div>
            </div>

            <label for="concerns">Mục 5: Điều bạn quan tâm khi sử dụng dịch vụ ở VPSTTT?</label>
            <select id="concerns" name="concerns" required>
                <option value="">Chọn điều bạn quan tâm</option>
                <option value="Tốc độ mạng">Tốc độ mạng</option>
                <option value="Tốc độ CPU">Tốc độ CPU</option>
                <option value="Tốc độ RAM">Tốc độ RAM</option>
                <option value="An toàn dữ liệu">An toàn dữ liệu</option>
                <option value="Khác">Khác</option>
            </select>

            <label for="feedback">Mục 6: Ghi ý kiến phản hồi hoặc đóng góp cho công ty:</label>
            <textarea id="feedback" name="feedback" placeholder="Ví dụ: Công ty nên nâng cấp phần mềm hay tốc độ mạng ..." required></textarea>

            <div class="error" id="error-message">Vui lòng điền đầy đủ thông tin.</div>
            <button type="submit" name="submit" id="submitBtn">Gửi khảo sát</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('surveyForm');
        const submitBtn = document.getElementById('submitBtn');
        const errorMessage = document.getElementById('error-message');

        function validateForm() {
            const contact = document.getElementById('contact').value;
            const source = document.getElementById('source').value;
            const usage = document.querySelector('input[name="usage"]:checked');
            const purpose = document.querySelectorAll('input[name="purpose[]"]:checked');
            const concerns = document.getElementById('concerns').value;
            const feedback = document.getElementById('feedback').value;

            if (!contact || !source || !usage || purpose.length === 0 || !concerns || !feedback) {
                errorMessage.style.display = 'block';
                return false;
            } else {
                errorMessage.style.display = 'none';
                return true;
            }
        }

        form.addEventListener('submit', function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        form.addEventListener('input', validateForm);
    </script>
</body>

</html>