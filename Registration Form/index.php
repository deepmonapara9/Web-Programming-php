<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Display</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Student Data</h1>

        <!-- Data Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include the connection file
                $con = mysqli_connect('localhost', 'admin', 'admin123', 'user');

                if (!$con) {
                    die('Connection Error: ' . mysqli_connect_error());
                }

                // Query to get the data
                $sql = "SELECT * FROM user_data";
                $result = mysqli_query($con, $sql);

                // Loop through the results and display each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "</tr>";
                }

                mysqli_close($con);
                ?>
            </tbody>
        </table>

        <!-- Input Form -->
        <div class="form-container">
            <h2>Add New Student</h2>
            <form id="studentForm" method="POST" action="regi.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required>

                <button type="submit" name="submit">Add Student</button>
            </form>

        </div>
    </div>
</body>

</html>
