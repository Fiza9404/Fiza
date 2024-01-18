<div id="container">

<?php
    session_start();
    
    //check if session exists
    if(isset($_SESSION["userName"]))
    {
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="reference.css">
        <style></style>
        <title>Zootopia Song Collection</title>
    </head>
    <body>
        <h2>Song Registration Form</h2>
        <b>Enter song details :</b>
        <p id="important">ALL fields are required <br><br></p>

        <form name="songForm" action="songRegister.php" method="POST">
            
            <label for="songTitle">Song Title : </label>
            <input type="text" id="songTitle" name="song_Title" maxlength="100" size="80" required>
            <br><br>

            <label for="artistBandName">Artist / Band Name :</label>
            <input type="text" id="artistBandName" name="artistBandName" maxlength="45" size="45" required>
            <br><br>

            <label for="audioVideoLink">Song URL : </label>
            <input type="url" id="audioVideoLink" name="audioVideoLink" maxlength="100" size="100" required>
            <br><br>

            <label for="genre">Genre : </label>
            <select id="genre" name="genre" required>
                <option value=""> - Choose Genre - </option>
                <option value="pop">Pop</option>
                <option value="Ost Tamil">Ost Tamil</option>
                <option value="rock">Rock</option>
                <option value="jazz">Jazz</option>
                <option value="disco">Disco</option>
                <option value="classical">Classical</option>
                <option value="other">Other</option>
            </select>
            <br><br>

            <label for="language">Language : </label>
            <select id="language" name="language" required>
                <option value=""> - Choose Language - </option>
                <option value="english" required>English</option>
                <option value="tamil">Tamil</option>
                <option value="chinese">Chinese</option>
                <option value="korean">Korean</option>
                <option value="malay">Malay</option>
                <option value="hindi">Hindi</option>
                <option value="other">Other</option>
            </select>
            <br><br>

            <label for="releaseDate">Release Date : </label>
            <input type="date" id="releaseDate" name="releaseDate" max="" required>
            <br><br>

            <script>
                var today = new Date().toISOString().split('T')[0];
                document.getElementById("releaseDate").setAttribute("max",today)
            </script>

            <input type="checkbox" id="agree" name="agreement" value="waiting" required>
            <label for="agree"> By completion of this form, I consent to adhering to the regulations of the website.</label>
            <br><br>
            <br><br>

            
            
            <input type="submit" value="Register Song">

            <input type="reset" value="Cancel">
            <br><br><br><br>
            <br><br>
            <center>
        </form>
        <a href="menu.php"><button>Menu</button></a>
    </center>
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

</div>