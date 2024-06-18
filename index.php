<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thương Mại Điện Tử</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .nav {
            display: flex;
            justify-content: center;
            background-color: #444;
        }
        .nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .main {
            padding: 20px;
        }
        .product {
            display: inline-block;
            width: 30%;
            margin: 1.5%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thương Mại Điện Tử</h1>
    </div>
    <div class="nav">
        <a href="#">Trang Chủ</a>
        <a href="#">Sản Phẩm</a>
        <a href="#">Liên Hệ</a>
        <a href="#">Giới Thiệu</a>
    </div>
    <div class="main">
        <h2>Sản Phẩm Mới Nhất</h2>
        <div class="product">
            <img src="path_to_image/product1.jpg" alt="Sản phẩm 1">
            <h3>Sản phẩm 1</h3>
            <p>Giá: 100,000 VND</p>
            <button>Mua Ngay</button>
        </div>
        <div class="product">
            <img src="path_to_image/product2.jpg" alt="Sản phẩm 2">
            <h3>Sản phẩm 2</h3>
            <p>Giá: 200,000 VND</p>
            <button>Mua Ngay</button>
        </div>
        <div class="product">
            <img src="path_to_image/product3.jpg" alt="Sản phẩm 3">
            <h3>Sản phẩm 3</h3>
            <p>Giá: 300,000 VND</p>
            <button>Mua Ngay</button>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Thương Mại Điện Tử. All Rights Reserved.</p>
    </div>
</body>
</html>
