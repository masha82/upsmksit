
    <?php
    include_once("../conf/config.php");

    // Check If form submitted, insert form data into users table.
        $id = $_GET['id'];

        // Insert user data into table
        $result = mysqli_query($mysqli, "DELETE from kelulusan where id='$id'");

        // Show message when user added
/*         echo "User added successfully. <a href='index.php'>View Posts</a>"; */

        header("location: index.php");


    ?>

