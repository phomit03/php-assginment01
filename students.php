<?php
session_start();

// Lấy danh sach sinh viên trong session
function getAllStudents()
{
    //sử dụng isset để kiểm tra 1 biến đã được khởi tạo hay chưa
    return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}

//Function delete theo ID
function deleteStudent($student_id)
{
    // Lấy danh sách sinh viên để tìm
    $students = getAllStudents();

    /// Duyệt qua từng phần tử để tìm ID trùng nhau
    foreach ($students as $key => $item)
    {
        // Đã tìm thấy thì dùng hàm unset để xóa
        if ($item['student_id'] == $student_id){
            unset($students[$key]);
        }
    }

    // Cập nhật lại Session
    $_SESSION['students'] = $students;

    return $students;
}

//Function add students
function updateStudent($student_id, $student_name, $student_email, $student_pass)
{
    // Lấy ra danh sách sinh viên
    $students = getAllStudents();

    //Khai báo mảng lưu trữ một sinh viên mới
    $new_student = array(
        'student_id' => $student_id,
        'student_name' => $student_name,
        'student_email' => $student_email,
        'student_pass' => $student_pass
    );

    $update_action = true;
    //bắt sự kiện update
    if ($update_action){
        $students[] = $new_student; //nếu lấy dữ liệu thành công từ add, sẽ nhảy vào hàm -> mảng sẽ lưu một sv mới
    }

    // Cập nhật dữ liệu trong Session
    $_SESSION['students'] = $students;
    return $students;
}

