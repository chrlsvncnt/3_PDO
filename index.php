<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Dev Registration</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        h3 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            width: 96%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            margin-top: 50px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        td {
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <form action="core/handleForms.php" method="POST">
        <input type="hidden" name="ID" value="<?php echo isset($_POST['ID']) ? $_POST['ID'] : ''; ?>">
        <p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
        <p><label for="yearGraduated">Year Graduated</label> <input type="text" name="yearGraduated"></p>
        <p><label for="yearsOfExperience">Years of Experience</label> <input type="text" name="yearsOfExperience"></p>
        <p><label for="skills">Skills</label> <input type="text" name="skills"></p>
        <p><label for="projects">Projects</label> <input type="text" name="projects"></p>
        <input type="submit" name="insertBtn">
    </form>

    <table>
        <tr>
            <th>Developer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Year Graduated</th>
            <th>Years of Experience</th>
            <th>Skills</th>
            <th>Projects</th>
            <th>Date Registered</th>
            <th>Actions</th>
        </tr>

        <?php $seeAllDevsRecords = seeAllDevsRecords($pdo); ?>
        <?php foreach ($seeAllDevsRecords as $row) { ?>
        <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['yearGraduated']; ?></td>
            <td><?php echo $row['yearsOfExperience']; ?></td>
            <td><?php echo $row['skills']; ?></td>
            <td><?php echo $row['projects']; ?></td>
            <td><?php echo $row['dateRegistered']; ?></td>
            <td>
                <a href="editdeveloper.php?ID=<?php echo $row['ID']; ?>">Edit</a>
                <a style="color:red;" href="deletedeveloper.php?developerID=<?php echo $row['ID']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
