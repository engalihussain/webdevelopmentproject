<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);

    // Update item requirement
    $sql = "UPDATE menu_items SET name='$name', price='$price' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('تم التحديث بنجاح!'); window.location.href='menu-table.php';</script>";
    } else {
        echo "خطأ في التحديث: " . $conn->error;
    }
}
$conn->close();
?>
