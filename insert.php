<!DOCTYPE html>

<html lang="ko">
<head>
    <meta charset="utf-8" />
</head>
<body>
    <?php
		$conn = mysqli_connect("localhost", "root", 751943826, "Oweb_test");
		$word = $_POST["word"];
		$meaning = $_POST["meaning"];
		mysqli_query($conn, "INSERT INTO word (word) VALUES('$word')");
		mysqli_query($conn, "INSERT INTO meaning (meaning) VALUES('$meaning')");

		mysqli_query($conn,"SET @C = 0");
        mysqli_query($conn,"UPDATE word SET word.id = @C:=@C+1");
        mysqli_query($conn,"SET @CNT = 0");
        mysqli_query($conn,"UPDATE meaning SET meaning.id = @CNT:=@CNT+1");

		//mysqli_close($conn);

        header("location:index.php");
	?>
</body>
</html>