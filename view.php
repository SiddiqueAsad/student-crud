<?php
require "connection.php";
$student = mysqli_query($conn, "SELECT * FROM students");
$total = mysqli_query($conn, "SELECT * FROM students;");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-secondary-subtle py-4">
        <div class="container-fluid">
            <div class="w-100 row">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-center gap-4">
                    <a class="navbar-brand h1 fs-4" href="#">Student Crud</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="view.php">View</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                    <a href="add-students.php">
                        <button type="button" class="btn btn-outline-primary">
                            Add Student
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Academic Year</th>
            <th>Photo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($student)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["course"]; ?></td>
                <td><?php echo $row["academic_year"]; ?></td>
                <td><img src="uploads/<?php echo $row["photo"]; ?>" alt="Photo" width="100"></td>
                <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <p><?php echo "Total Students : " . mysqli_num_rows($total); ?></p><br>






</body>

</html>