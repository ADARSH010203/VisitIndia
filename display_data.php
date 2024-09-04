<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-link {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .action-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registered Users</h2>

    <div class="data-box">
        <?php
        // Include the database connection file
        include('function.php');

        // Check connection
        if ($cn->connect_error) {
            die("Connection failed: " . $cn->connect_error);
        }

        // SQL to select data from register table
        $sql = "SELECT * FROM register";
        $result = $cn->query($sql);

        if ($result->num_rows > 0) { ?>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row["username"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                            <td><?php echo $row["number"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><a class="action-link" href="update.php?id=<?php echo $row["password"]; ?>"><i class="fas fa-edit"></i> Update Password</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else {
            echo "0 results";
        }

        // Close connection
        $cn->close();
        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Add hover effect on table rows
        $('.table tbody tr').hover(
            function() {
                $(this).css('background-color', '#f0f0f0');
            },
            function() {
                $(this).css('background-color', 'pink');
            }
        );
    });
</script>

</body>
</html>
``
