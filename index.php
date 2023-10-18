<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet/less" type="text/css" href="style.less" />
    <title>Document</title>
</head>

<body>
<div class="container">

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>data</th>
				<th>ship_type</th>
				<th>Capitan_name</th>
				<th>ship_carrying</th>
			</tr>
		</thead>
		<tbody>
		<?php	
			$conn = mysqli_init();
			$credentials_url = 'http://192.168.1.47:9090/get_credentials';
			$obj = json_decode(file_get_contents($credentials_url), true);
			$conn = mysqli_connect("212.233.88.28", $obj['user'], $obj['password'], "TexUrok", 3306);
			$sql = "SELECT id, date_unix, event_json FROM Morine_Events";
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['date_unix']."</td>";
			echo "<td>".$row['event_json']."</td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "</tr>";

		?>
			<!-- <tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr> -->
		</tbody>
	</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/less" ></script>
</body>
</html>