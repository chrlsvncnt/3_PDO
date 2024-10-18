CREATE TABLE WebDev (
	ID  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	firstName VARCHAR(30),
	lastName VARCHAR(30),
    yearGraduated INT,
	yearsOfExperience INT,
	skills VARCHAR(100),
    projects VARCHAR (255),
	dateRegistered TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
