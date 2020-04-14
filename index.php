<!DOCTYPE html>

<html lang="ko">
	<head>
		<meta charset="utf-8" />
		<title>Website</title>
		<style>
			table{
				border: 1px solid black;
				border-collapse: collapse;
			}
			td{
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php
			include "main.html";
		?>
		<form action="delete.php" method="post">
			<?php
				show_table();
			?>
			<input type="submit" value="삭제" />
		</form>
	</body>
</html>

<?php
	function show_table()
	{
		$conn = mysqli_connect("localhost", "root", 751943826, "Oweb_test");
		$query = "SELECT word.id, word, meaning FROM word LEFT JOIN meaning ON word.id = meaning.id";
		$result = mysqli_query($conn, $query);
		echo "<br>";
		echo "<table>";
		echo "<tr><td>선택</td> <td>id</td> <td>단어</td> <td>뜻</td> </tr>";
		if (!$result)
		{
			echo mysqli_error($conn);
			exit;
		}
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr> <td>";
			echo "<input type='checkbox' name='id[]' value=".$row['id'].">";
			echo "</td> <td>";
			echo $row['id'];
			echo "</td> <td>";
			echo $row['word'];
			echo "</td> <td>";
			echo $row['meaning'];
			echo "</td> </tr>";
		}
		echo "</table>";
	}
?>