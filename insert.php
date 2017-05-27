<?php
$conn = mysqli_connect("localhost", "root", "rajkumar21", "test");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
	
    $name     = mysqli_real_escape_string($conn, $info->name);
    $email    = mysqli_real_escape_string($conn, $info->email);
    $course      = mysqli_real_escape_string($conn, $info->course);
	$id    = mysqli_real_escape_string($conn, $info->id);
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO student_info(name, email, course,id) VALUES ('$name', '$email', '$course','$id')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $id    = $info->id;
        $query = "UPDATE student_info SET name = '$name', email = '$email', course = '$course' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>
