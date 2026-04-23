<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin thẻ nhân viên</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .id-card {
            background-color: #fff;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            overflow: hidden;
            text-align: center;
            border-top: 10px solid #0056b3;
        }
        .header {
            background-color: #0056b3;
            color: white;
            padding: 20px;
        }
        .header h2 {
            margin: 0;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .photo-area {
            margin: 20px auto;
            width: 100px;
            height: 100px;
            background-color: #e4e6eb;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 4px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .photo-area img {
            width: 60px;
            opacity: 0.5;
        }
        .info-group {
            padding: 10px 30px 30px;
            text-align: left;
        }
        .info-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        .label {
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
        }
        .value {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            display: block;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            font-size: 11px;
            color: #aaa;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            color: #0056b3;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $gender = htmlspecialchars($_POST['gender']);
    $job = htmlspecialchars($_POST['job']);
    
    // Icon giả định cho giới tính
    $photo_icon = ($gender == "Nam") ? "https://cdn-icons-png.flaticon.com/512/3135/3135715.png" : "https://cdn-icons-png.flaticon.com/512/3135/3135789.png";
?>

    <div class="card-container">
        <div class="id-card">
            <div class="header">
                <h2>IDENTIFICATION CARD</h2>
            </div>
            
            <div class="photo-area">
                <img src="<?php echo $photo_icon; ?>" style="opacity: 1; width: 80px;">
            </div>

            <div class="info-group">
                <div class="info-item">
                    <span class="label">Full Name</span>
                    <span class="value"><?php echo $fullname; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Gender</span>
                    <span class="value"><?php echo $gender; ?></span>
                </div>
                <div class="info-item">
                    <span class="label">Occupation</span>
                    <span class="value"><?php echo $job; ?></span>
                </div>
            </div>

            <div class="footer">
                VALID UNTIL: 12/2026 | KALI LINUX SERVER
            </div>
        </div>
        <center><a href="form.html" class="back-btn">← Quay lại nhập form</a></center>
    </div>

<?php
} else {
    echo "<h2>Vui lòng nhập form trước!</h2>";
    echo "<a href='form.html'>Quay lại</a>";
}
?>

</body>
</html>
