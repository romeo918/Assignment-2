<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
        <div>
                <form method="POST" action="add.php">
                        <label>Firstname:</label><input type="text" name="phonename">
                        <label>Lastname:</label><input type="text" name="price">
                        <input type="submit" name="add">
                </form>
        </div>
        <br>
        <div>
                <table border="1">
                        <thead>
                                <th>ID</th>
                                <th>Phone</th>
                                <th>Price</th>
                                <th></th>
                        </thead>
                        <tbody>
                                <?php
                                        include('conn.php');
                                        $query=mysqli_query($conn,"select * from `phones`");
                                        while($row=mysqli_fetch_array($query)){
                                                ?>
                                                <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['phonename']; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td>
                                                                   
                                                                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                                        </td>
                                                </tr>
                                                <?php
                                        }
                                ?>
                        </tbody>
                </table>
        </div>
</body>
</html>
