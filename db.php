<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "users";
    
    // get values form input text and number

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `utilisateur` (`Nom`, `Prenom`, `DateNaiss`, `Email`, `Adresse`, `Interets`, `MotDePasse`, `Gender`, `Connexion`) VALUES
('abs', 'lll', '1999-03-02', 'abb@gmail.com', 'Fes', 'football/anime/nature/HighTech/Art/Informatique/GameDev/Basketball/Gym/Musique/gamming', '1234', 'Male', 'offline')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <form action="db.php" method="post">

            <input type="text" name="fname" required placeholder="First Name"><br><br>

            <input type="text" name="lname" required placeholder="Last Name"><br><br>

            <input type="number" name="age" required placeholder="Age" min="10" max="100"><br><br>

            <input type="submit" name="insert" value="Add Data To Database">

        </form>

    </body>

</html>