<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Delete item requirement
    $sql = "DELETE FROM menu_items WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('تم الحذف بنجاح!'); window.location.href='menu-table.php';</script>";
    } else {
        echo "خطأ في الحذف: " . $conn->error;
    }
} else {
    echo "معرف الصنف غير محدد.";
}

$conn->close();
?>
