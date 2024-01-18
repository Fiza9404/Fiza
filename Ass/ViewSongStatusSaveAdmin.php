<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="reference.css">    
        <title>Zootopia Song Collection</title>
    </head>
    <body>
        <div id="container">
            <h3>Song Update Save</h3>

            <?php
            
                $songID = $_POST['songID'];
                $status = $_POST['status'];

                //Declare DB connection variables
                $host = "localhost"; //Hostname
                $user = "root"; //Database userid
                $pass = ""; //Database pwd
                $db = "zootopia_songdb"; //Please write your DB

                //Create connection
                $conn = new mysqli($host, $user, $pass, $db);

                //Check connection
                if($conn->connect_error) //To check if DB connection IS NOT OK
                {
                    die("Connection failed: ".$conn->connect_error); //Display MSQL error
                }
                else //Connection OK - update new form data into database
                {
                    //SOMETHING SOMEWHERE HERE IS GOOFY AH  //HONEST HTML/PHP STUDENT REACTION
                    $queryUpdate = "UPDATE SONG SET
                                    status = '".$status."'
                                    WHERE songID = '".$songID."'";

                    //To execute $queryUpdate query & assign query result to $resultUpdate
                    if($conn->query($queryUpdate) === TRUE)
                    {
                        echo "Successfully updated with new data";
                        echo "<br><br>";
                        echo "<a href='viewSongAdmin.php'><button>View Song List</button></a>";
                        echo "<br><br>";
                        echo "<a href='menu.php'><button>Menu</button></a>";
                    }
                    else
                    {
                        echo "Error updating record: ".$conn->error;
                    }
                }
                $conn->close();
            ?>
        </div>
    </body>
</html>