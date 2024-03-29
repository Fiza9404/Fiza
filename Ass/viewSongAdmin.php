<?php
    session_start();
    
    //check if session exists
    if(isset($_SESSION["userName"]))
    {
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="reference.css">
        <title>Zootopia Song Collection</title>
    </head>
    <body>
        <div id="container">
            <h2>Song List</h2>

            <?php
            
                //declare DB connection variables
                $host = "localhost"; //hostname
                $user = "root"; //database userid
                $pass = ""; //database pwd
                $db = "zootopia_songdb"; //please write your DB name

                //Create connection
                $conn = new mysqli($host,$user,$pass,$db);
                
                //Check connection
                if($conn->connect_error) //to check if DB connection IS NOT OK
                {
                    die("Connection failed : ".$conn->connect_error); //display MYSQL error
                }
                else
                {
                    //connection OK - Query to get records from a database table
                    $queryView = "SELECT * FROM SONG ORDER BY songTitle";
                

                    //to execute $queryView query & assign query result to $resultQ
                    $resultQ = $conn->query($queryView);
                }

            ?>

            <table border="2" style="border-collapse: collapse;">
                <tr style="color: yellow;">
                    <th id="smallPadding">Song Title</th>
                    <th id="smallPadding">Artist / Band Name</th>
                    <th id="smallPadding">Audio / Video Link</th>
                    <th id="smallPadding">Genre</th>
                    <th id="smallPadding">Language</th>
                    <th id="smallPadding">Release Date</th>
                    <th id="smallPadding">Status</th>
                    <th id="smallPadding">Owner</th>
                </tr>
            

            <?php
            
                if($resultQ->num_rows > 0)
                    {
                        while($row = $resultQ->fetch_assoc())
                    {
            ?>
                        <tr>
                            <td id="smallPadding"><?php echo $row["songTitle"];?></td>
                            <td id="smallPadding"><?php echo $row["artistBandName"];?></td>
                            <td id="smallPadding"><a href="<?php echo $row["audioVideoLink"];?>" target="_blank"><?php echo $row["audioVideoLink"];?></a></td>
                            <td id="smallPadding"><?php echo $row["genre"];?></td>
                            <td id="smallPadding"><?php echo $row["language"];?></td>
                            <td id="smallPadding"><?php echo $row["releaseDate"];?></td>
                            <td id="smallPadding"><?php echo $row['status'];?>
                            <td id="smallPadding"><?php echo $row["uploader"];?></td>
                        </tr>
                <?php
                    }
                }
                    else
                {
                    echo "<tr>
                            <td colspan='9' align='center' id='smallPadding'>NO data selected</td>
                        </tr>";
                }
                ?>
            </table>

            <?php
                $conn->close();
            ?>
            <br>
            <a href="menu.php"><button>Menu</button></a>
        </div>
    </body>
</html>

<?php
    }
    else
    {
        echo "No session exists or session has expired. Please log in again.<br>";
        echo "<a href=login.html> Login </a>";
    }
?>