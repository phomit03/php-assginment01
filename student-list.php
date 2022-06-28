<?php
    require ("students.php");
    $students_list = getAllStudents();
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Students</title>

</head>
<body>
    <h1>List Students: </h1>
    <div class="form-group" style="text-align: end; margin-right: 20px;">
        <button class="btn btn-primary" type="button">
            <a style="text-decoration: none; color: white;" href="student-add.php">Add Student</a>
        </button>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
        <tr style="background-color: #ccc">
            <th scope="col">ID</th>
            <th scope="col">FullName</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students_list as $item): ?>
            <tr>
                <td><?php echo $item['student_id']; ?></td>
                <td><?php echo $item['student_email']; ?></td>
                <td><?php echo $item['student_name']; ?></td>
                <td><?php echo $item['student_pass']; ?></td>
                <td>
                    <form method="post" action="student-delete.php">
                        <!--input lưu trữ id cần xoá-->
                        <input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id"/>
                        <!--confirm-->
                        <input onclick="return confirm('Do you want to remove this student from the list?');"
                               type="submit" value="Delete Students" name="delete"/>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>