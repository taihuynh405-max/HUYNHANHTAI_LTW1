
<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [ 
    ["id"=>"SV001",
    "name"=>"Nguyễn Văn An",
    "gender"=>"Nam",
    "class" => "CNTT1"],
    ["id"=>"SV002",
    "name"=>"Trần Thị Bình",
    "gender"=>"Nữ",
    "class" => "CNTT2"], 
    ["id"=>"SV003",
    "name"=>"Lê Văn Cường",
    "gender"=>"Nam",
    "class" => "CNTT1"], 
    ["id"=>"SV004",
    "name"=>"Phạm Thị Dung",
    "gender"=>"Nữ",
    "class" => "CNTT3"], 
];
$faculties = [
"Công nghệ thông tin",
"Quản trị kinh doanh",
"Kế toán",
"Ngôn ngữ Anh"
];
$classes = [
"A1" => "CNTT1",
"A2" => "CNTT2",
"A3" => "CNTT3",
"A4" => "CNTT4"
];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = [
"LT" => "Lập trình",
"DS" => "Đọc sách",
"AN" => "Âm nhạc",
"DL" => "Du lịch",
"TT" => "Thể thao"
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test1</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background: rgb(4, 40, 94);
        }

        nav ul {
            list-style: none;
            display: flex;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }

        nav ul li:hover {
            background: red;
        }

        nav li {
            flex: 1;
        }

        body {
            padding: 20px;
        }

        .s1 {
            max-width: 500px;
            margin: 20px auto 0;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }

        .s1 h2 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }
        
.s2 {
    max-width: 500px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}

.s2 h3 {
    text-align: center;
    color: #0d6efd;
    margin-bottom: 20px;
}

.s2 table {
    width: 100%;
    border-collapse: collapse;
}

.s2 th, .s2 td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.s2 th {
    background-color: #0d6efd;
    color: white;
}

.s2 tbody tr:nth-child(odd) {
    background-color: #f5f6f7;
}

.s2 tbody tr:hover {
    background-color: #d9e7fa;
}

.s3 {
    max-width: 500px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}

.s3 h3 {
    text-align: center;
    color: #0d6efd;
    margin-bottom: 20px;
}

.s3 form div {
    margin-bottom: 15px;
}

.s3 label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.s3 input[type="text"],
.s3 select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.s3 input[type="radio"],
.s3 input[type="checkbox"] {
    margin-right: 5px;
}

.s3 button {
    background: #0d6efd;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.s3 button:hover {
    background: #084298;
}

    </style>
</head>

<body>

    <nav>
        <ul>
            <?php foreach ($menus as $menu) { ?>
                <li>
                    <a href="#"><?= $menu ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    <section class="s1">
        <h2>Danh sách ngôn ngữ sử dụng trong môn học</h2>

        <ul>
            <?php foreach ($subjects as $subject) { ?>
                <li><?= $subject ?></li>
            <?php } ?>
        </ul>
    </section>
    
<section class="s2">
    <h3>Danh sách sinh viên</h3>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $index => $student) { ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student["id"] ?></td>
                    <td><?= $student["name"] ?></td>
                    <td><?= $student["gender"] ?></td>
                    <td><?= $student["class"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<section class="s3">
    <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>

    <form action="#" method="post">

        <div>
            <label>Họ và tên</label>
            <input type="text" name="name" placeholder="Nhập họ và tên">
        </div>

        <div>
            <label>Khoa</label>
            <select name="faculty">
                <option value="">-- Chọn khoa --</option>
                <?php foreach ($faculties as $faculty) { ?>
                    <option value="<?= $faculty ?>">
                        <?= $faculty ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div>
            <label>Lớp</label>
            <select name="class">
                <option value="">-- Chọn lớp --</option>
                <?php foreach ($classes as $key => $class) { ?>
                    <option value="<?= $class ?>">
                        <?= $class ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div>
            <label>Giới tính</label>
            <?php foreach ($genders as $gender) { ?>
                <label>
                    <input type="radio" name="gender"
                           value="<?= $gender ?>">
                    <?= $gender ?>
                </label>
            <?php } ?>
        </div>

        <div>
            <label>Sở thích</label>
            <?php foreach ($hobbies as $key => $hobby) { ?>
                <label>
                    <input type="checkbox" name="hobbies[]"
                           value="<?= $key ?>">
                    <?= $hobby ?>
                </label>
            <?php } ?>
        </div>

        <div>
            <button type="submit" name="submit">
                Đăng ký
            </button>
            <button type="reset">
                Làm mới
            </button>
        </div>

    </form>
</section>

</body>
</html>
