<!-- Upload and display multiple images using PHP (Thapa Technical) -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "imagehandling";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $desc = $_POST['desc'];
        $file = $_FILES['photo'];
        // print_r($file);

        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if ($fileerror == 0)     //No Error Exists = 0, Error Exists = 1.
        {
            $destFile = 'images/' . $filename;
            move_uploaded_file($filepath, $destFile);

            $sql = "INSERT INTO `imagehandling` (`description`, `photo`) VALUES ('$desc', '$destFile');";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo "Record Inserted";
            } else {
                echo "Record Not Inserted";
            }
        } else {
            echo "Error in uploading file.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Hnadling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar bg-dark text-light mb-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>

    <!-- FORM -->
    <div class="container ">
        <h2 class="text-center text-primary">Upload Your Image</h2>
        <form action="ImageHandling.php" method="post" enctype="multipart/form-data">
            <label class="mt-3 mb-1 text-primary" for="desc">Description:</label>
            <input class="form-control " type="text" id="desc" name="desc">
            <label class="mt-3 mb-1 text-primary" for="photo">Upload Image:</label>
            <input class="form-control " type="file" id="photo" name="photo">
            <button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
        </form>
    </div>

    <!-- TABLE -->
    <div class="container ">
        <table>
            <thead>
                <tr>
                    <th>SrNo</th>
                    <th>Description</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mySr = 0;
                $sql = "SELECT * FROM `imagehandling`";
                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($query)) {
                    $mySr++;
                ?>

                <tr>
                    <td><?php echo $mySr ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td>
                    <?php
                        $file_ext = pathinfo($row['photo'], PATHINFO_EXTENSION);
                        if (in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                            echo "<img src='" . $row['photo'] . "' width='100' height='50'>";
                        } elseif ($file_ext == 'pdf') {
                            echo "<a href='" . $row['photo'] . "' target='_blank'><img src='images/pdf-icon.png' width='50' height='50'></a>";
                        } elseif ($file_ext == 'docx') {
                            echo "<a href='" . $row['photo'] . "' target='_blank'><img src='images/docx-icon.png' width='50' height='50'></a>";
                        } elseif (in_array($file_ext, ['xls', 'xlsx'])) {
                            echo "<a href='" . $row['photo'] . "' target='_blank'><img src='images/xlsx-icon.png' width='50' height='50'></a>";
                        } else {
                            echo "Unsupported file format";
                        }
                        ?>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>