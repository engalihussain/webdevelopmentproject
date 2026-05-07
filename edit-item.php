<?php
include 'db.php';

// Check if ID is set
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM menu_items WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("الصنف غير موجود.");
    }
} else {
    die("معرف الصنف غير محدد.");
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل صنف - مطعم بيشة</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1 style="color: white;">مطعم بيشة</h1>
    <nav>
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="add-item.php">إضافة صنف</a></li>
            <li><a href="menu-table.php">إدارة القائمة</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>تعديل صنف</h2>
    
    <form action="update-item.php" method="POST">
        <!-- Hidden ID field -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <div class="form-group">
            <label for="name">اسم الصنف:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
        </div>
        <div class="form-group">
            <label for="price">السعر:</label>
            <input type="number" id="price" name="price" step="0.01" value="<?php echo htmlspecialchars($row['price']); ?>" required>
        </div>
        <button type="submit" class="btn btn-edit">تحديث الصنف</button>
    </form>
</div>

</body>
</html>
