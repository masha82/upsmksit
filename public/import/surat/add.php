
    <?php
    include_once("../conf/config.php");

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nomorsurat = $_POST['nomorsurat'];
        $perihal = $_POST['perihal'];
        $tte = $_POST['tte'];
        $paraf = $_POST['paraf'];

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO master_surat(nomorsurat,perihal,tte,paraf) VALUES('$nomorsurat','$perihal','$tte','$paraf')");

        // Show message when user added
/*         echo "User added successfully. <a href='index.php'>View Posts</a>"; */

        header("location: index.php");

    }
    ?>

