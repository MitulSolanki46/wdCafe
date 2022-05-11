<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view order</title>
    <!-- bootstrap css and js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5 table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Food</th>
            <th>Address</th>
        </thead>
        <tbody>
            <tr>
            <?php
            include('config.php');
            $sql = "SELECT * FROM `orderlist`";
            $result = mysqli_query($conn,$sql);
            if (!$result) 
            {
		    die ("Database access failed: " . mysqli_connect_error());
            }
	        $rows= mysqli_num_rows($result);
	        while($row = mysqli_fetch_assoc($result)) 
	        {
		    echo "<tr>";
		    echo '<td>' . $row["id"] . '</td>';
	    	echo '<td>' . $row["name"] . '</td>';
		    echo '<td>' . $row["email"] . '</td>';
	    	echo '<td>' . $row["phone"]. '</td>';
            echo '<td>' . $row["foodName"] . '</td>';
            echo '<td>' . $row["address"] . '</td>';
		    echo "</tr>";
                }
                mysqli_close($conn);
                ?>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>