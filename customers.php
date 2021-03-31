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
				<form action="customer.php" method="post">
					<label for="txtName">Name:</label>
					<input type="text" name="txtName" id="txtName">
					<label for="txtEmail">Email:</label>
					<input type="text" name="txtEmail" id="txtEmail">
					<input type="submit" value="Add" name="btnAdd" id="btnAdd">
				</form>
			</div>
			<h2>Customers</h2>
			<div class="customers">
				<div class="customer">
					<dl>
						<dt>Name:</dt>
						<dd>Gofur Gulom</dd>
						<dt>Email:</dt>
						<dd>g.gulom@gmail.com</dd>
					</dl>
				</div>
				<div class="customer">
					<dl>
						<dt>Name:</dt>
						<dd>Gofur Gulom</dd>
						<dt>Email:</dt>
						<dd>g.gulom@gmail.com</dd>
					</dl>
				</div>
				<div class="customer">
					<dl>
						<dt>Name:</dt>
						<dd>Gofur Gulom</dd>
						<dt>Email:</dt>
						<dd>g.gulom@gmail.com</dd>
					</dl>
				</div>
				<div class="customer">
					<dl>
						<dt>Name:</dt>
						<dd>Gofur Gulom</dd>
						<dt>Email:</dt>
						<dd>g.gulom@gmail.com</dd>
					</dl>
				</div>
				<div class="customer">
					<dl>
						<dt>Name:</dt>
						<dd>Gofur Gulom</dd>
						<dt>Email:</dt>
						<dd>g.gulom@gmail.com</dd>
					</dl>
				</div>
				<div class="customer">
					<dl>
						<dt>Name:</dt>
						<dd>Gofur Gulom</dd>
						<dt>Email:</dt>
						<dd>g.gulom@gmail.com</dd>
					</dl>
				</div>
				<!-- more similar customer divs -->
			</div>
		</div>
	</body>
</html>