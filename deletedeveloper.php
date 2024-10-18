<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getDevById = getDevById($pdo, $_GET['developerID']); ?>
	<form action="core/handleForms.php?ID=<?php echo $_GET['developerID']; ?>" method="POST">

		<div class="DevsContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getDevById['firstName']; ?></p>
			<p>Last Name: <?php echo $getDevById['lastName']; ?></p>
			<p>Year Graduated: <?php echo $getDevById['yearGraduated']; ?></p>
			<p>Years of Experience: <?php echo $getDevById['yearsOfExperience']; ?></p>
            <p>Skills: <?php echo $getDevById['skills']; ?></p>
            <p>Projects: <?php echo $getDevById['projects']; ?></p>
            <p>Date Registered: <?php echo $getDevById['dateRegistered']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>