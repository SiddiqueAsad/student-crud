<?php
require "connection.php";
$message = "";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $academic_year = $_POST["academic_year"];
    $phone_num = $_POST["phone_num"];
    $photo = time() . "_" . $_FILES["photo"]["name"];
    $temp = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];
    $size = $_FILES["photo"]["size"];
    if (empty($name) || empty($email) || empty($course) || empty($academic_year) || empty($phone_num)) {
        $message = "Please fill all the fields.";
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    } else if (strlen($phone_num) != 10) {
        $message = "Please enter a valid phone number.";
    }
    if (!file_exists("uploads")) {
        mkdir("uploads", 0777, true);
    }
    if ($type != "image/jpeg" && $type != "image/png") {
        $message = "Only JPEG and PNG files are allowed.";
    } else if ($size > 2097512) {
        $message = "Maximum File Size is 2MB";
    } else {
        move_uploaded_file($temp, "uploads/" . $photo);
        $stmt = mysqli_prepare($conn, "INSERT INTO students(name, email, course, academic_year, phone_num, photo) VALUES(?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $course, $academic_year, $phone_num, $photo);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: http://localhost/Student-Crud/view.php");
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Add Student Details</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-secondary-subtle py-4">
        <div class="container-fluid">
            <div class="w-100 row">
                <div class="col-lg-6 col-12 col-sm-12 d-flex align-center gap-4">
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
                            <a class="nav-link" href="view.php">View</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                    <a href="create.php">
                        <button type="button" class="btn btn-primary">
                            Add Student
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                        <img class="img-fluid rounded-circle mx-3" src="crud-img1.png" alt="Add student" width="30%" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="fs-1 fw-bold mx-3">Add Student</p>
                    </div>
                </div>
                <div class=""><?php echo $message ?></div>
                <form class="add-student row g-3 needs-validation" novalidate method="post"
                    enctype="multipart/form-data">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="validationCustom01" class="form-label">Name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="name"
                            placeholder="Enter your full name..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter your Email..."
                            id="validationCustom02" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="validationCustom03" class="form-label">Course</label>
                        <input type="text" class="form-control" name="course" placeholder="Enter your Course..."
                            id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid Course.
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="validationCustom04" class="form-label">Academic Year</label>

                        <select class="form-select" id="validationCustom04" name="academic_year" required>

                            <option selected disabled value="">Select your Year</option>
                            <option value="FY">FY</option>
                            <option value="SY">SY</option>
                            <option value="TY">TY</option>

                        </select>

                        <div class="invalid-feedback">
                            Please select a valid year.
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="validationCustom05" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" name="phone_num" placeholder="Enter your Number..."
                            id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid Phone Number.
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="" class="form-label">Upload your Photo</label>
                        <input type="file" name="photo" accept="image/jpeg,image/png" class="form-control" required>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                        <button class="btn btn-primary btn-lg mt-2 mb-4" type="submit" name="submit">Submit
                            form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid  bg-secondary-subtle">
        <div class="row">
            <div class="col-12">
                <p class="w-100 text-center my-auto p-4">&copy 2026 Student Management System. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
    <script src="bootstrap.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>