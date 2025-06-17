<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Registration Form</div>
        <div class="form">
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="job">Job Description:</label>
                <input type="text" id="job" name="job" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
<!-- 
                <label for="id">ID :</label>
                <input type="text" id="id" name="id" required> -->

                <button type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>


<?php
    // if(isset($_POST['submit'])){
    //     $name  = $_POST['name'];
    //     $job   = $_POST['job'];
    //     $phone =$_POST['phone'];
    //     $query= "INSERT INTO form(name,job,phone) VALUES('$name','$job','$phone')";

    //     $data = mysqli_query($conn,$query);
    //     if($data){
    //         echo"done";

    //     }else{
    //         echo "faild";
    //     }
    // }


    if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $job   = $_POST['job'];
    $phone = $_POST['phone'];

    $stmt = mysqli_prepare($conn, "INSERT INTO form (name, job, phone) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $name, $job, $phone);

    if (mysqli_stmt_execute($stmt)) {
        echo "✅ Done";
    } else {
        echo "❌ Failed to insert data.";
    }
}

?>




