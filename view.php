<html>

<head>
    <title> CRUD Application - READ </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
require_once('database.php');
$res = $database->read();
?>
    <div class="container">
        <div class="row">
            <h2>Read - CRUD </h2>
            <table class="table ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>E-Mail</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Extras</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> <?php
while($r = mysqli_fetch_assoc($res)){
?>
                    <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['firstname'] . " " . $r['lastname']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo $r['gender']; ?></td>
                        <td><?php echo $r['age']; ?></td>
                        <td><a href="update.php?id=<?php echo $r['id']; ?>">Edit</a> <a
                                href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
</tbody>
</table>
</div>
</div>
<?php
require_once('database.php');
$res = $database->read();
?>
</body>

</html>