<?php
$conn   = mysqli_connect("localhost", "root", "rajkumar21", "test");
$output = array();
$query  = "SELECT * FROM student_info";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 