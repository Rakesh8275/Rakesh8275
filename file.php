<?php
session_start();
$conn = mysqli_connect("localhost", "root", "ta123@", "employee");
		
if($conn === false) {
    die("ERROR: Could not connect. ". mysqli_connect_error());
}
    
$sql = "SELECT * FROM `employee`";
// $fp = fopen('localhost/AJAX/', 'w');
$query = mysqli_query($conn, $sql);
$row = mysqli_num_rows($query);
if ($row > 0) {
    while ($res = mysqli_fetch_array($query)) {
        echo $res['name'];
        echo "<br>";
    };
};
 
$file_pointer = fopen('localhost/AJAX/local.txt', 'w');
 
// Writing on a file named gfg.txt
echo fwrite($file,"Hello World. Testing!");
fclose($file);

    // if ($fp && $result) {
        //     header('Content-Type: text/csv');
        //     header('Content-Disposition: attachment; filename="export.csv"');
        //     while ($row = $res) {
            //         fputcsv($fp, array_values($row));
            //     }
            //     die;
            // }
            ?>