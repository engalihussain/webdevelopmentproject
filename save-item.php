<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);

    // Insert item requirement
    $sql = "INSERT INTO menu_items (name, price) VALUES ('$name', '$price')";

    if ($conn->query($sql) === TRUE) {
        // Use JS to redirect to avoid header issues and provide user feedback
        echo "<script>alert('تم إضافة الصنف بنجاح!'); window.location.href='menu-table.php';</script>";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
