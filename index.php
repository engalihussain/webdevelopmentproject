<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مطعم بيشة - القائمة</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<header>
    <h1>مطعم بيشة</h1>
    <nav>
        <!-- Link to another page requirement -->
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="add-item.php">إضافة صنف</a></li>
            <li><a href="menu-table.php">إدارة القائمة</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    
    <!-- ID Selector requirement & Dynamic Content target -->
    <div id="dynamic-text">مرحباً بك في مطعم بيشة، أشهى المأكولات بانتظارك!</div>
    <button class="btn" onclick="changeContent()">تحديث النص الديناميكي</button>
    <br><br>

    <h2>قائمة الطعام</h2>
    <!-- List requirement -->
    <ul>
        <?php
        // Select items requirement
        $sql = "SELECT * FROM menu_items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row["name"]) . " - " . htmlspecialchars($row["price"]) . " ريال</li>";
            }
        } else {
            echo "<li>لا توجد أصناف في القائمة.</li>";
        }
        ?>
    </ul>

    <!-- Media Requirements -->
    <div class="media-section">
        
        <!-- Image requirement -->
        <h3>صورة المطعم:</h3>
        <img src="images.jpg" alt="صورة المطعم" width="300"><br><br>
        
        <!-- Audio requirement -->
        <h3>مقطع صوتي</h3>
        <audio controls>
            <source src="voice.mp3" type="audio/mpeg">
        </audio><br><br>

        <!-- Video requirement -->
        <h3>فيديو المطعم:</h3>
        <video width="300" controls>
            <source src="resturant.mp4" type="video/mp4">
        </video>
    </div>
</div>

<script>
    // JavaScript Requirements
    
    // Simple function requirement
    function showWelcomeAlert() {
        // Welcome alert requirement
        alert("مرحباً بك في موقع مطعم بيشة!");
    }

    // Change content & Events requirement
    function changeContent() {
        var el = document.getElementById("dynamic-text");
        el.innerHTML = "تم تغيير النص بنجاح باستخدام الجافاسكربت! شكراً لزيارتك."; // Change content requirement
        el.style.color = "green";
    }

    // Call function on page load
    window.onload = showWelcomeAlert;
</script>

</body>
</html>
