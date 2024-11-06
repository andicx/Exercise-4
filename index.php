<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>

    
    <h2>GET</h2>
    <form method="GET" action="">
        <label for="getName">Name:</label>
        <input type="text" id="getName" name="name" required><br>

        <label for="getEmail">Email:</label>
        <input type="email" id="getEmail" name="email" required><br>

        <label for="getAge">Age:</label>
        <input type="number" id="getAge" name="age" required><br>

        <button type="submit">CLICK HERE</button>
    </form>

    <div>
        <?php
        if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
            echo "<h3>WELCOME TO GET EXERICSE 4</h3>";
            echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
            echo "Email: " . htmlspecialchars($_GET['email']) . "<br>";
            echo "Age: " . htmlspecialchars($_GET['age']);
        }
        ?>
    </div>

</body>
</html>
