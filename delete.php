<!DOCTYPE html>

<html lang="ko">
<head>
    <meta charset="utf-8" />
</head>
<body>
	<?php
        $conn = mysqli_connect("localhost","root",751943826,"Oweb_test") or die("DB 연결실패");

        $id = $_POST['id'];
		for($i=0; $i<=count($id);$i++)
		{
			mysqli_query($conn, "DELETE FROM word WHERE id = $id[$i]");
			mysqli_query($conn, "DELETE FROM meaning WHERE id = $id[$i]");
		}
        mysqli_query($conn,"SET @C = 0");
        mysqli_query($conn,"UPDATE word SET word.id = @C:=@C+1");
        mysqli_query($conn,"SET @CNT = 0");
        mysqli_query($conn,"UPDATE meaning SET meaning.id = @CNT:=@CNT+1");

        header("location:index.php");
    ?>
</body>
</html>