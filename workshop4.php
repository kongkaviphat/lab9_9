<?php include "db.php"; ?>
<html>
<body>
<form>
<input type="text" name="username">
<input type="submit" value="ค้นหา">
</form>
    <div style="display:blockline">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        if (!empty($_GET))
        $value = '%' . $_GET["username"] . '%';
        $stmt->bindParam(1, $value);
        $stmt->execute();
    ?>
            <?php while($row=$stmt->fetch()):?>
                <div>
                    <?php  
                        echo "ชื่อสมาชิก:" . $row["name"] . "<br>";
                        echo "ที่อยู่:" . $row["address"] . "<br>";
                        echo "อีเมล:" . $row["email"] . "<br>";?>
                        <img src='member_photo/<?=$row["username"]?>.jpg' width="100px"><br>
                        <?php  echo "<hr>\n";?>
                </div>
            <?php endwhile; ?>
        </div>
</body>
</html>