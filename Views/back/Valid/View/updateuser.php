<?php


include "../Controller/UserC.php";

$clientC = new ClientC();

$client = $clientC->getClient($_POST['users_id']);
$client = $client->fetch();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inscription</title>
</head>
<body>
	<form name="f" action="update.php" method="POST">
		<input type="hidden" name="users_id" value ="<?php echo $_POST['users_id']; ?>">
        <table>
			<tr>
				<td>
					<label for="users_uid">Username:</label>
				</td>
				<td>
					<input type="text" name="users_uid" value = "<?php echo $client['users_uid'] ?>" >
				</td>
				<td>
					<div id="users_uid"></div>
				</td>
			</tr>
            
			<tr>
				<td>
					<label for="email">Email:</label>
				</td>
				<td>
					<textarea name="email"><?php echo $client['email'] ?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="pwd">Password:</label>
				</td>
				<td>
					<input type="password" name="users_pwd" value = "<?php echo $client['users_pwd'] ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" id="Sub" value="Submit">
				</td>
				<td>
					<input type="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>