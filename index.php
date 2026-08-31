<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .carousel-item {
            height: 800px;
            object-fit: cover;
        }

        .carousel-item img {
            object-fit: cover;
            object-position: top;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Carousel-1.webp" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="fs-1 text-white">Student Management Made Simple</p>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Carousel-2.webp" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Carousel-3.jpg" class="d-block w-100 h-100" alt="..." style="object-position: center;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid">
        <div class="row my-5">
            <h1 class="text-center my-5 fw-bold fs-1">Student Management System</h1>
            <div class="col-12">
                <div class="card border-0">
                    <img src="students.png" class="mx-auto" alt="">
                </div>

                <p class="text-center fs-3 my-2">A Simple and efficient web application to manage student records. <br>
                    You can add, view, edit, and delete student information with ease.</p>
            </div>
        </div>
        <div class="row my-5 pb-5">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mx-auto my-3" style="width: 22rem;">
                    <a href="create.php">
                        <img src="Crud-img1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center fs-5">Add new student details to the system
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mx-auto my-3" style="width: 22rem;">
                    <a href="">
                        <img src="Crud-img2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center fs-5">View all students records in the system
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mx-auto my-3" style="width: 22rem;">
                    <a href="">
                        <img src="Crud-img3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center fs-5">Update and edit existing student information
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mx-auto my-3" style="width: 22rem;">
                    <a href="">
                        <img src="Crud-img4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center fs-5">Remove student records from the system
                            </p>
                        </div>
                    </a>
                </div>
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
</body>

</html>