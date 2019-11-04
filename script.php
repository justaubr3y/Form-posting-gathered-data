<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>PHP Demo</title>
</head>
<body>
    
    <div class="wrapper-info">
        <?php
            $staffName = $_POST['staffName'];
            $staffNo = $_POST['staffNo'];
            $designation = $_POST['designation'];

            echo "<h1>Agent Information</h1>";

            echo "Agent Name: " . $staffName .'<br/>' ;
            echo "Staff No: " . $staffNo .'<br/>';
            echo "Designation: " . $designation .'<br/>';
        ?>
        <button onclick="location.href='index.html'">BACK</button>
    </div>


</body>
</html>