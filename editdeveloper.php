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
	<?php $getDevById = getDevById($pdo, $_GET['ID']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="ID"></label> 
			<input type="hidden" name="ID" value="<?php echo $_GET['ID']; ?>">
		</p>

		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getDevById['firstName']; ?>">
		</p>

		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getDevById['lastName']; ?>">
		</p>

		<p>
			<label for="yearGraduated">Year Graduated</label>
			<input type="text" name="yearGraduated" value="<?php echo $getDevById['yearGraduated']; ?>">
		</p>

		<p>
			<label for="yearsOfExperience">Years of Experience</label>
			<input type="text" name="yearsOfExperience" value="<?php echo $getDevById['yearsOfExperience']; ?>">
		</p>

        <p>
			<label for="skills">Skills</label>
			<input type="text" name="skills" value="<?php echo $getDevById['skills']; ?>">
		</p>

        <p>
			<label for="projects">Projects</label>
			<input type="text" name="projects" value="<?php echo $getDevById['projects']; ?>">
		</p>

        <p>
			<label for="dateRegistered">Date Registered</label>
			<input type="text" name="dateRegistered" value="<?php echo $getDevById['dateRegistered']; ?>">
			<input type="submit" name="editBtn">
        </p>
	</form>
</body>
</html>