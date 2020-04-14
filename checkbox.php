<!DOCTYPE html>

<html lang="ko">
<head>
    <meta charset="utf-8" />
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", 751943826, "Oweb_test");
		$query = "SELECT id FROM word";
		$result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result))
		{
			echo $row['id'];
		}
    ?>
	<form action="delete.php" method="post">
        <input type="checkbox" name="id[]" value="<?php echo $row['id']?>" />
		<input type="submit">
    </form>
</body>
</html>