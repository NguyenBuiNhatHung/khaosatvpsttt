<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }

        .other-input {
            display: none;
            margin-top: 10px;
        }

        /* Căn trái cho các trường dữ liệu trong mục 3, 4, 5 */
        .radio-group,
        .checkbox-group {
            text-align: left;
            margin-bottom: 10px;
        }
    </style>
</head>

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

            <label for="feedback">Mục 6: Ghi ý kiến phản hồi hoặc đóng góp cho công ty:</label>
            <textarea id="feedback" name="feedback" placeholder="Ví dụ: Công ty nên nâng cấp phần mềm hay tốc độ mạng ..." required></textarea>

            <div class="error" id="error-message">Vui lòng điền đầy đủ thông tin.</div>
            <button type="submit" name="submit" id="submitBtn">Gửi khảo sát</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('surveyForm');
        const errorMessage = document.getElementById('error-message');
        const otherSourceInput = document.getElementById('otherSource');
        const sourceSelect = document.getElementById('source');
        const otherSourceOption = document.getElementById('otherSourceOption');
        const otherPurposeInput = document.getElementById('otherPurpose');
        const otherPurposeCheckbox = document.getElementById('otherPurposeCheckbox');
        const otherConcernsInput = document.getElementById('otherConcerns');
        const otherConcernsCheckbox = document.getElementById('otherConcernsCheckbox');

        // Hiển thị ô nhập "Nhập nguồn khác" khi chọn "Khác"
        sourceSelect.addEventListener('change', function () {
            if (this.value === 'Khác') {
                otherSourceInput.style.display = 'block'; // Hiện ô nhập
                otherSourceInput.value = ''; // Đặt lại giá trị nếu đã có
            } else {
                otherSourceInput.style.display = 'none'; // Ẩn ô nhập
                otherSourceInput.value = ''; // Đặt lại giá trị nếu không cần
            }
        });

        // Cập nhật giá trị của tùy chọn "Khác" khi người dùng nhập
        otherSourceInput.addEventListener('input', function () {
            otherSourceOption.value = this.value; // Cập nhật giá trị của tùy chọn "Khác"
        });

        // Hiển thị ô nhập cho "Khác" trong mục 4
        otherPurposeCheckbox.addEventListener('change', function () {
            otherPurposeInput.style.display = this.checked ? 'block' : 'none';
            if (!this.checked) otherPurposeInput.value = ''; // Đặt lại giá trị nếu không chọn
        });

        // Cập nhật giá trị của tùy chọn "Khác" trong mục 4
        otherPurposeInput.addEventListener('input', function () {
            otherPurposeCheckbox.value = this.value; // Cập nhật giá trị của tùy chọn "Khác"
        });

        // Hiển thị ô nhập cho "Khác" trong mục 5
        otherConcernsCheckbox.addEventListener('change', function () {
            otherConcernsInput.style.display = this.checked ? 'block' : 'none';
            if (!this.checked) otherConcernsInput.value = ''; // Đặt lại giá trị nếu không chọn
        });

        // Cập nhật giá trị của tùy chọn "Khác" trong mục 5
        otherConcernsInput.addEventListener('input', function () {
            otherConcernsCheckbox.value = this.value; // Cập nhật giá trị của tùy chọn "Khác"
        });

        function validateForm() {
            const contact = document.getElementById('contact').value;
            const source = document.getElementById('source').value;
            const usage = document.querySelector('input[name="usage"]:checked');
            const purpose = document.querySelectorAll('input[name="purpose[]"]:checked');
            const concerns = document.querySelectorAll('input[name="concerns[]"]:checked');
            const feedback = document.getElementById('feedback').value;

            if (!contact || !source || !usage || purpose.length === 0 || concerns.length === 0 || !feedback) {
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
            } else {
                const otherSourceValue = otherSourceInput.value.trim();
                const usage = document.querySelector('input[name="usage"]:checked');
                const purposeArray = Array.from(document.querySelectorAll('input[name="purpose[]"]:checked')).map(p => p.value);
                const concernsArray = Array.from(document.querySelectorAll('input[name="concerns[]"]:checked')).map(c => c.value);
                const otherPurposeValue = otherPurposeInput.value.trim();
                const otherConcernsValue = otherConcernsInput.value.trim();

                // Xử lý giá trị nguồn
                let source = (sourceSelect.value === 'Khác' && otherSourceValue) ? otherSourceValue : sourceSelect.value;

                // Thêm giá trị "Khác" vào mảng mục đích
                if (otherPurposeValue) {
                    purposeArray.push(otherPurposeValue); // Thêm giá trị từ ô "Khác"
                }

                // Thêm giá trị "Khác" vào mảng quan tâm
                if (otherConcernsValue) {
                    concernsArray.push(otherConcernsValue); // Thêm giá trị từ ô "Khác"
                }

                // Gửi dữ liệu hoặc xử lý thêm nếu cần
                console.log('Source:', source);
                console.log('Purpose:', purposeArray);
                console.log('Concerns:', concernsArray);
            }
        });

        form.addEventListener('input', validateForm);
    </script>
</body>

</html>