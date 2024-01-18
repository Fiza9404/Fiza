<?php

    $userName = $_POST['Username'];
    $userPassword = $_POST['userPassword'];

    $host = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "zootopia_songdb";
    
    $link = new mysqli($host, $username, $password, $dbname);
    
    if ($link->connect_error)
    {
        die("Connection failed: " . $link->connect_error); 
    }
    else
    {
        
        $queryCheck = "SELECT * FROM USER WHERE userName = '".$userName."' ";
        $resultCheck = $link->query($queryCheck);
        if ($resultCheck->num_rows == 0)
        {
            echo "<p style='color:red;'>User ID does not exists </p>";
            echo "<br>Click <a href='login.html'> here </a> to try again";
        }
        else
        {
            $row = $resultCheck->fetch_assoc();
            
            if( $row["userPassword"] == $userPassword )
            {
                if($row["status"] == "block")
                {
                    echo "<p style='color: red;'>You have been block </p>";
                    echo "Click <a href='login.html'>here</a> to leave";
                }
                else
                {
                    
                    session_start();
        
                    $_SESSION["userName"] = $userName ;
                    $_SESSION["userType"] = $row["userType"];
                    
                    header("Location:menu.php");
                }
            }
            else
            {    
                echo "<p style='color:red;'>Wrong password!!!</p>";
                echo "Click <a href='login.html'>here</a> to try again";
            }
        }
    }
    $link->close();
?>