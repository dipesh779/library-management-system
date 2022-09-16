
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

<h2>Collection of books</h2>

<a href="booksform.php"><button> Add New Book</button></a>

<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Author</th>
    <th>ISBN</th>
    <th>Genre</th>
    <th>List Price</th>
    <th>Book Case</th>
    <th>Shelf</th>
  </tr>
  <tr>
    <td>1</td>
    <td>harry Porter</td>
    <td>JK Rolling</td>
    <td>1443</td>
    <td>comedy</td>
    <td>$100</td>
    <td>case1</td>
    <td>1A</td>
  </tr>
</table>



</body>
</html>