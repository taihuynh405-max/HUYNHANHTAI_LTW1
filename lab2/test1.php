
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

</body>
</html>
