<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة صنف - مطعم بيشة</title>
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
    <h2>إضافة صنف جديد</h2>
    
    <!-- Form requirement -->
    <form action="save-item.php" method="POST">
        <div class="form-group">
            <label for="name">اسم الصنف:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="price">السعر:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <button type="submit" class="btn">حفظ الصنف</button>
    </form>
</div>

</body>
</html>
