<?php
    require ("students.php");

    // Biến này phải khai báo ở đây để ở dưới sử dụng sẽ không bị lỗi
    $data = array();

    // Nếu người dùng click vào nút submit không rỗng
    if (!empty($_POST['add_student']))
    {
        $data = [
            'student_id' => $_POST['id'],
            'student_name' => $_POST['name'],
            'student_email' => $_POST['email'],
            'student_password' => $_POST['pass'],
        ];
        updateStudent($data['student_id'], $data['student_name'], $data['student_email'], $data['student_password']);
        header("Location:student-list.php");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <style>
        .btn-primary {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Add students: </h1>
    <form method="post" style="width: 50%; margin:20px auto">
        <div class="form-group" style="text-align: start;">
            <button class="btn btn-primary" type="button">
                <a style="text-decoration: none; color: white" href="student-list.php">Back List</a>
            </button>
        </div>
        <div class="form-group">
            <label>ID *</label>
            <input required class="form-control" type="text" name="id" value=""/>
        </div>
        <div class="form-group">
            <label>FullName *</label>
            <input required class="form-control" type="text" name="name" value="" />
        </div>
        <div class="form-group">
            <label>Email *</label>
            <input required class="form-control" type="email" name="email" value="" />
        </div>
        <div class="form-group">
            <label>Password *</label>
           <input required class="form-control" type="password" name="pass" value=""/>
        </div>
        <div class="form-group" style="text-align: center;">
            <input class="btn btn-primary" type="submit" name="add_student" value="Register"/>
        </div>
    </form>
</body>
</html>

