
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../css/cssstyle.css" />
</head>
<body>
<h1 style="text-align:center">Hello <?php echo $_SESSION["username"];?></h1>
<button><a href="logout.php">Logout</a></button>

<h2>Book Case</h2>

<a href="bookcaseform.php"><button> Add New Book Case</button></a>

<table>
  <tr>
    <th>Id</th>
    <th>Book Case Name</th>
    <th>Shelves No.</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Maria Anders</td>
    <td>1c</td>
    <td>delete</td>
  </tr>
</table>



</body>
</html>