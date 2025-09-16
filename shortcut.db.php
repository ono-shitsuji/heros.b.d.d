 <?php
$servername = "localhost";
$username = "master";
$password = "ocean_drive";

// part 1 Create connection for your db
$conn = new mysqli($servername, $username, $password);
// part 2 Check connection on the db
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//part 3  Create database and so going forwards
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
//part 4 wrap up everything
$conn->close();
?> 


#------------------------------------------------------------
mariadb -u root -p
ps admin

#CREATE TABLE Folks_maker (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
power VARCHAR(150),
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

#CREATE TABLE made_in_heaven (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
type_of_hero VARCHAR(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

#CREATE TABLE strenght_of_will (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
strenght VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)
#------------------------------------------------------------
