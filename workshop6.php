<?php include "db.php"?>
<html>
</script>
    <body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "ชื่อสมาชิก:". $row ["name"] . "<br>";
        echo "ที่อยู่:" . $row ["address"] . "<br>";
        echo "อีเมล:".$row["email"]."<br>";
        echo "<a href=workshop9.php?username=".$row["username"].">เเก้ไข</a> | ";
        echo "<a href=delete_wk6.php?username=".$row["username"].">ลบ</a>";
        echo "<hr>\n";
      } ?>
</body>
</html>