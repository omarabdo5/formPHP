<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>

<body>
    <div class="container">
        <div class="title">
            registration Form
        </div>
        <br>
        <div class="form">
            <form action="submitForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br>
                <br>

                <label for="jop">jop Description:</label>
                <input type="text" id="jop" name="jop" required>
                <br>
                <br>
                <label for="phone">phone:</label>
                <input type="phone" id="phone" name="phone" required>
                <br>
                <br>
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
                <br>
                <button type="submit">Submit</button>
            </form>

        </div>
</body>

</html>