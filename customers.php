<?php
    $db = new PDO('mysql:host=localhost;dbname=customers', 'desmond', 'qIYlszWWsWE2eGqN');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $add_account_stmt = $db->prepare('INSERT INTO accounts(username, fullname, email) VALUES(?,?,?)');
    $get_accounts_stmt = $db->prepare('SELECT * FROM accounts');

    $username = '';
    $fullname = '';
    $email = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_REQUEST['txtLogin'];
        $fullname = $_REQUEST['txtName'];
        $email = $_REQUEST['txtEmail'];
        $add_account_stmt->execute(array($username, $fullname, $email));
    }

    $get_accounts_stmt->execute();
    $rows = $get_accounts_stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Customers</title>
		<style>
			.container {
				margin: 20px auto;
				max-width: 50em;
				font-family: Arial, sans-serif;
			}
			.add, .customers {
				padding: 5px;
				margin: 5px;
				border: 1px solid grey;
			}
			dl {
				margin: 0;
			}
			dt {
				float: left;
				margin-right: 5px;
				font-weight: bold;
			}
			.customers {
				display: flex;
				flex-flow: row wrap;
				justify-content: space-evenly;
			}
			.customer {
				margin: 10px;
				padding: 20px 10px;
				width: 200px;
				border: 1px dashed lightgrey;
			}
			form, h2 {
				text-align: center;
				margin: 10px;
			}
			
		</style>
	</head>
	<body>
		<div class="container">
			<h2>Add Customer</h2>
			<div class="add">
				<form action="customers.php" method="post">
                    <label for="txtLogin">Login:</label>
                    <input type="text" name="txtLogin" value="<?= $username ?>" id="txtLogin">
					<label for="txtName">Name:</label>
					<input type="text" name="txtName"  value="<?= $fullname ?>" id="txtName">
					<label for="txtEmail">Email:</label>
					<input type="text" name="txtEmail"  value="<?= $email ?>" id="txtEmail">
					<input type="submit" value="Add" name="btnAdd" id="btnAdd">
				</form>
			</div>
			<h2>Customers</h2>
			<div class="customers">
                <?php foreach($rows as $row) { ?>
                    <div class="customer">
                        <dl>
                            <dt>Name:</dt>
                            <dd><?= $row['fullname'] ?></dd>
                            <dt>Email:</dt>
                            <dd><?= $row['email'] ?></dd>
                        </dl>
                    </div>
                <?php } ?>
				<!-- more similar customer divs -->
			</div>
		</div>
	</body>
</html>