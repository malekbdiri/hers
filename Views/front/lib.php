<?php
session_start();
$conn = new mysqli("localhost", "root", "", "projet");
if ($conn->connect_error) {
    $error = "Connection failed: " . $conn->connect_error;
}

function Select($table, $query = "1")
{
    global $conn;
    $sql = "SELECT * FROM " . $table . " WHERE " . $query;
    $res = $conn->query($sql);
    if ($res) {
        if ($res->num_rows > 0) {
            $data = [];
            while ($x = $res->fetch_assoc()) {
                $data[] = $x;
            }
            return $data;
        }
    }
    return [];
}

?>
