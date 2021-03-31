<!--y1DPKeYQRznM3oGx-->
<?php
$query = '';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $query = $_REQUEST['query'];
}

$db = new PDO('mysql:host=localhost;dbname=world', 'admin', 'y1DPKeYQRznM3oGx');
$stmt = $db->prepare('SELECT * FROM cities WHERE name LIKE ?');
//    execute query
$stmt->execute(array($query . '%'));
//    fetch rows
$rows = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cities</title>
    <style>
        body {
            margin: 10px auto;
            max-width: 50em;
            font-family: Arial, sans-serif;

            display: flex;
            flex-flow: column nowrap;
            justify-content: start;
            align-items: stretch;
        }

        fieldset {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Cities of the World</h1>

    <form action="index.php" method="post">
        <fieldset>
            <legend>Search Cities</legend>
            <input type="text" name="query" value="<?= $query ?>" placeholder="City name...">
            <input type="submit" value="Search">
        </fieldset>
    </form>
    <table>
        <tr>
            <th>Name</th>
            <th>Country Code</th>
            <th>Population</th>
        </tr>

        <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['country_code'] ?></td>
            <td><?= $row['population'] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
