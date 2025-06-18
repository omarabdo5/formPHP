<!-- <?php
include 'connection.php';

$query="SELECT * FROM form ";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


echo "$total";


if($total != 0){
    echo " has record";
}else{
    echo " no has record";

};
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <a href="/crud/form.php">newClient</a>

    <table>
        <thead>
            <td>name</td>
            <td>job</td>
            <td>phone</td>
            <td>Id</td>
        </thead>
    </table>
</body>

</html> -->




<?php
include 'connection.php';

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

echo "$total";

if ($total != 0) {
    echo " has record";
} else {
    echo " no record";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <style>
    table {
        width: 60%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #333;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    a {
        display: inline-block;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>

    <a href="/crud/form.php">Add New Client</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Job</th>
                <th>Phone</th>
                <th>ID</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
        if ($total > 0) {
            while ($result = mysqli_fetch_assoc($data)) {
                echo "<tr>
                        <td>{$result['name']}</td>
                        <td>{$result['job']}</td>
                        <td>{$result['phone']}</td>
                        <td>{$result['ID']}</td>
                        <td>
                        <a href='edit.php?id={$id}'>Edit</a> 
                        <a href='delete.php?id={$id}'>delete</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        ?>
        </tbody>
    </table>

</body>

</html>