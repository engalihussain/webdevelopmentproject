<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إدارة القائمة - مطعم بيشة</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>مطعم بيشة</h1>
    <nav>
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="add-item.php">إضافة صنف</a></li>
            <li><a href="menu-table.php">إدارة القائمة</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h2>جدول الأصناف</h2>
    
    <!-- Table requirement -->
    <table>
        <thead>
            <tr>
                <th>رقم الصنف (ID)</th>
                <th>اسم الصنف</th>
                <th>السعر</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Select items requirement
            $sql = "SELECT * FROM menu_items";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["price"]) . "</td>";
                    echo "<td>
                            <a href='edit-item.php?id=" . $row["id"] . "' class='btn btn-edit'>تعديل</a>
                            <a href='delete-item.php?id=" . $row["id"] . "' class='btn btn-danger' onclick='return confirm(\"هل أنت متأكد من الحذف؟\")'>حذف</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                // Apply colspan in table requirement
                echo "<tr><td colspan='4'>لا توجد بيانات في قاعدة البيانات</td></tr>"; 
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <!-- Apply colspan in table requirement -->
                <td colspan="4" style="text-align: center; font-weight: bold; background-color: #e9ecef;">
                    نهاية القائمة
                </td>
            </tr>
        </tfoot>
    </table>
</div>

</body>
</html>
