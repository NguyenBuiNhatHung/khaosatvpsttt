<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo256.png" type="image/png">
    <title>Khảo sát khách hàng VPSTTT</title>
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
            background: rgb(252, 236, 236);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 200px;
            display: block;
            margin: 0 auto;
        }

        h2 {
            color: #333;
            font-weight: 700;
            animation: colorChange 3s infinite;
            text-align: center;
        }

        @keyframes colorChange {
            0% { color: #ff0000; }
            25% { color: #ff7f00; }
            50% { color: rgb(163, 163, 13); }
            75% { color: #00ff00; }
            100% { color: #0000ff; }
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
            font-weight: bold;
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
            background-color: #6f42c1;
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
            font-size: 12px;
        }

        .other-input {
            display: none;
            margin-top: 10px;
        }

        .radio-group,
        .checkbox-group {
            text-align: left;
            margin-bottom: 10px;
        }
    </style>
</head>
<?php 
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<script>alert('" . addslashes($_SESSION['message']) . "');</script>";
        $_SESSION['message'] = null;
    }
?>
<body>
    <div class="container">
        <img src="images/logo.png" alt="Logo VPSTTT">
        <h2>KHẢO SÁT KHÁCH HÀNG</h2>

        <p class="greeting">
            Cảm ơn quý khách hàng đã sử dụng dịch vụ tại VPSTTT. VPSTTT hi vọng quý khách hàng sẽ có nhiều niềm vui và
            hài lòng khi tham gia buổi khảo sát này. Vui lòng điền vào khảo sát nhanh này và cho chúng tôi biết được suy nghĩ và nhận
            xét của quý khách hàng (câu trả lời sẽ được ẩn danh).
        </p>

        <form id="surveyForm" method="POST" action="controller.php">
            <label for="contact">Mục 1: Khách hàng vui lòng nhập email hoặc số điện thoại:</label>
            <input type="text" id="contact" name="contact" placeholder="Ví dụ: 0328812674 hoặc lienhe@vpsttt.com" required>
            <div class="error" id="contactError">Vui lòng nhập số điện thoại hợp lệ (bắt đầu bằng 0 và 9 chữ số tiếp theo) hoặc địa chỉ email hợp lệ.</div>

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
                <option value="Khác" id="otherSourceOption">Khác</option>
            </select>
            <input type="text" id="otherSource" class="other-input" placeholder="Nhập nguồn khác..." />

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
                <div><input type="checkbox" name="purpose[]" value="Chạy ứng dụng web"> Chạy ứng dụng web</div>
                <div><input type="checkbox" name="purpose[]" value="Bảo mật và riêng tư"> Bảo mật và riêng tư</div>
                <div><input type="checkbox" name="purpose[]" value="Chạy dịch vụ email"> Chạy dịch vụ email</div>
                <div><input type="checkbox" name="purpose[]" value="Virtual Desktop"> Virtual Desktop</div>
                <div><input type="checkbox" name="purpose[]" value="Chạy dịch vụ VPN"> Chạy dịch vụ VPN</div>
                <div><input type="checkbox" name="purpose[]" value="Giám sát và quản lý mạng"> Giám sát và quản lý mạng</div>
                <div><input type="checkbox" name="purpose[]" value="Chạy các dịch vụ IoT"> Chạy các dịch vụ IoT</div>
                <div><input type="checkbox" name="purpose[]" value="Chạy các dịch vụ streaming"> Chạy các dịch vụ streaming</div>
                <div><input type="checkbox" name="purpose[]" value="Phục vụ ứng dụng di động như API, BACKEND"> Phục vụ ứng dụng di động như API, BACKEND</div>
                <div><input type="checkbox" name="purpose[]" value="Khác" id="otherPurposeCheckbox"> Khác</div>
            </div>
            <input type="text" id="otherPurpose" class="other-input" placeholder="Nhập nhu cầu khác..." />

            <label for="concerns">Mục 5: Điều bạn quan tâm khi sử dụng dịch vụ ở VPSTTT?</label>
            <div class="checkbox-group">
                <div><input type="checkbox" name="concerns[]" value="Tốc độ mạng"> Tốc độ mạng</div>
                <div><input type="checkbox" name="concerns[]" value="Tốc độ CPU"> Tốc độ CPU</div>
                <div><input type="checkbox" name="concerns[]" value="Tốc độ RAM"> Tốc độ RAM</div>
                <div><input type="checkbox" name="concerns[]" value="An toàn dữ liệu"> An toàn dữ liệu</div>
                <div><input type="checkbox" name="concerns[]" value="Tốc độ xử lý và khả năng chịu tải"> Tốc độ xử lý và khả năng chịu tải</div>
                <div><input type="checkbox" name="concerns[]" value="Giá dịch vụ hợp lý"> Giá dịch vụ hợp lý</div>
                <div><input type="checkbox" name="concerns[]" value="Chương trình khuyến mãi và giảm giá"> Chương trình khuyến mãi và giảm giá</div>
                <div><input type="checkbox" name="concerns[]" value="Biện pháp bảo mật: tường lửa, mã hóa, bảo vệ DDoS"> Biện pháp bảo mật: tường lửa, mã hóa, bảo vệ DDoS</div>
                <div><input type="checkbox" name="concerns[]" value="Chính sách sao lưu và phục hồi dữ liệu"> Chính sách sao lưu và phục hồi dữ liệu</div>
                <div><input type="checkbox" name="concerns[]" value="Thời gian phản hồi và chất lượng hỗ trợ"> Thời gian phản hồi và chất lượng hỗ trợ</div>
                <div><input type="checkbox" name="concerns[]" value="Kênh hỗ trợ: chat, email, điện thoại"> Kênh hỗ trợ: chat, email, điện thoại</div>
                <div><input type="checkbox" name="concerns[]" value="Khả năng nâng/hạ cấp gói dịch vụ"> Khả năng nâng/hạ cấp gói dịch vụ</div>
                <div><input type="checkbox" name="concerns[]" value="Thêm tài nguyên: băng thông, RAM, dung lượng lưu trữ"> Thêm tài nguyên: băng thông, RAM, dung lượng lưu trữ</div>
                <div><input type="checkbox" name="concerns[]" value="Giao diện quản lý dễ sử dụng (cPanel, Plesk)"> Giao diện quản lý dễ sử dụng (cPanel, Plesk)</div>
                <div><input type="checkbox" name="concerns[]" value="Tính năng tự động hóa và quản lý dự án"> Tính năng tự động hóa và quản lý dự án</div>
                <div><input type="checkbox" name="concerns[]" value="Vị trí trung tâm dữ liệu và độ trễ"> Vị trí trung tâm dữ liệu và độ trễ</div>
                <div><input type="checkbox" name="concerns[]" value="Chính sách hoàn tiền"> Chính sách hoàn tiền</div>
                <div><input type="checkbox" name="concerns[]" value="Thời gian cam kết sử dụng dịch vụ"> Thời gian cam kết sử dụng dịch vụ</div>
                <div><input type="checkbox" name="concerns[]" value="Trải nghiệm người dùng trước đó"> Trải nghiệm người dùng trước đó</div>
                <div><input type="checkbox" name="concerns[]" value="Tính năng thân thiện với người dùng"> Tính năng thân thiện với người dùng</div>
                <div><input type="checkbox" name="concerns[]" value="Khác" id="otherConcernsCheckbox"> Khác</div>
            </div>
            <input type="text" id="otherConcerns" class="other-input" placeholder="Nhập điều bạn quan tâm khác..." />

            <label for="satisfaction">Mục 6: Mức độ hài lòng của khách hàng khi được nhân viên VPSTTT hỗ trợ:</label>
            <div class="radio-group">
                <div><input type="radio" name="satisfaction" value="1" required> 1 - Cực kỳ không hài lòng</div>
                <div><input type="radio" name="satisfaction" value="2" required> 2 - Không hài lòng</div>
                <div><input type="radio" name="satisfaction" value="3" required> 3 - Bình thường</div>
                <div><input type="radio" name="satisfaction" value="4" required> 4 - Hài lòng</div>
                <div><input type="radio" name="satisfaction" value="5" required> 5 - Cực kỳ hài lòng</div>
            </div>

            <label for="goalAchievement">Mục 7: Bạn có đạt được mục đích khi được hỗ trợ tại VPSTTT không?</label>
            <div class="radio-group">
                <div><input type="radio" name="goalAchievement" value="1" required> 1 - Không đạt được mục đích</div>
                <div><input type="radio" name="goalAchievement" value="2" required> 2 - Một phần</div>
                <div><input type="radio" name="goalAchievement" value="3" required> 3 - Đạt được</div>
                <div><input type="radio" name="goalAchievement" value="4" required> 4 - Hơn cả mong đợi</div>
            </div>

            <div class="error" id="error-message">Vui lòng điền đầy đủ thông tin.</div>
            <button type="submit" name="submit" id="submitBtn">Gửi khảo sát</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('surveyForm');
        const errorMessage = document.getElementById('error-message');
        const contactError = document.getElementById('contactError');
        const otherSourceInput = document.getElementById('otherSource');
        const sourceSelect = document.getElementById('source');
        const otherSourceOption = document.getElementById('otherSourceOption');
        const otherPurposeInput = document.getElementById('otherPurpose');
        const otherPurposeCheckbox = document.getElementById('otherPurposeCheckbox');
        const otherConcernsInput = document.getElementById('otherConcerns');
        const otherConcernsCheckbox = document.getElementById('otherConcernsCheckbox');

        function isValidPhoneNumber(phone) {
            const phoneRegex = /^0\d{9}$/; // Regex for phone: starts with 0 and followed by 9 digits
            return phoneRegex.test(phone);
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email format regex
            return emailRegex.test(email);
        }

        function validateContact() {
            const contact = document.getElementById('contact').value.trim();
            if (!isValidPhoneNumber(contact) && !isValidEmail(contact)) {
                contactError.style.display = 'block';
                return false;
            } else {
                contactError.style.display = 'none';
                return true;
            }
        }

        function validateForm() {
            const source = document.getElementById('source').value;
            const usage = document.querySelector('input[name="usage"]:checked');
            const purpose = document.querySelectorAll('input[name="purpose[]"]:checked');
            const concerns = document.querySelectorAll('input[name="concerns[]"]:checked');
            const satisfaction = document.querySelector('input[name="satisfaction"]:checked');
            const goalAchievement = document.querySelector('input[name="goalAchievement"]:checked');

            if (!source || !usage || purpose.length === 0 || concerns.length === 0 || !satisfaction || !goalAchievement) {
                errorMessage.style.display = 'block';
                return false;
            } else {
                errorMessage.style.display = 'none';
                return true;
            }
        }

        function validateAll() {
            const isContactValid = validateContact();
            const isFormValid = validateForm();
            return isContactValid && isFormValid;
        }

        form.addEventListener('input', validateAll);
        form.addEventListener('submit', function (event) {
            if (!validateAll()) {
                event.preventDefault();
            }
        });

        // Hiển thị ô nhập "Nhập nguồn khác" khi chọn "Khác"
        sourceSelect.addEventListener('change', function () {
            otherSourceInput.style.display = this.value === 'Khác' ? 'block' : 'none';
            if (this.value !== 'Khác') otherSourceInput.value = ''; // Đặt lại giá trị nếu không cần
        });

        // Hiển thị ô nhập cho "Khác" trong mục 4
        otherPurposeCheckbox.addEventListener('change', function () {
            otherPurposeInput.style.display = this.checked ? 'block' : 'none';
            if (!this.checked) otherPurposeInput.value = ''; // Đặt lại giá trị nếu không chọn
        });

        // Hiển thị ô nhập cho "Khác" trong mục 5
        otherConcernsCheckbox.addEventListener('change', function () {
            otherConcernsInput.style.display = this.checked ? 'block' : 'none';
            if (!this.checked) otherConcernsInput.value = ''; // Đặt lại giá trị nếu không chọn
        });
    </script>
</body>

</html>
