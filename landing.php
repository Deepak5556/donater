<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
$email=$_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <link rel="icon"
        href="data:image/png;base64,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">
    <style>
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .nav-link:hover {
        color: red;
    }

    .navbar-brand {
        font-family: "Outfit", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;
    }

    // <uniquifier>: Use a unique and descriptive class name
    // <weight>: Use a value from 100 to 800

   .fonts{
        font-family: "Sora", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
    </style>
</head>

<body>
    <div class="fonts">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-danger fw-bold" href="#"> <img
                    src="data:image/png;base64,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">
                Blood Donation
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  align-items-end justify-content-end " id="navbarSupportedContent">
                <div class="justify-content-center  align-items-center ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-end justify-content-end d-flex">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="index.php">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="donate.php">Check Donor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top  ">
        <div class="container">
            <a class="navbar-brand text-danger fw-bold" href="#"> <img
                    src="data:image/png;base64,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">
                Blood Donation
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  align-items-end justify-content-end " id="navbarSupportedContent">
                <div class="justify-content-center  align-items-center ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-end justify-content-end d-flex">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="index.php ">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="donate.php">Check Donor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#">Profile</a>
                        </li>
                        <li>

                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <div class="">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="m-5">
                        <div class="card h-75">
                            <div class="card-img ">
                                <div class="justify-content-center align-items-center ">
                                    <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1240w,f_auto,q_auto:best/newscms/2019_24/2895091/190613-donating-blood-cs-406p.jpg"
                                        alt="" class="img-fluid rounded-2">
                                </div>
                            </div>
                            <div class="card-body ">
                                <div>
                                    <center>
                                        <h1>
                                            Blood Donate
                                        </h1>
                                    </center>
                                    <div class="p-3">
                                        <p>Register your blood donation details now and be a hero in someone's
                                            story. Your simple act of kindness can give the gift of life to those in
                                            need. Join us in our mission to save lives, one donation at a time!</p>
                                    </div>
                                    <center>
                                        <div class="align-i">
                                            <a href="index.php"> <button type="button" class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                                        height="20" viewBox="0,0,256,256">
                                                        <g fill="#ffffff" fill-rule="evenodd" stroke="none"
                                                            stroke-width="1" stroke-linecap="butt"
                                                            stroke-linejoin="miter" stroke-miterlimit="10"
                                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                            font-weight="none" font-size="none" text-anchor="none"
                                                            style="mix-blend-mode: normal">
                                                            <g transform="scale(10.66667,10.66667)">
                                                                <path d="M11,2v9h-9v2h9v9h2v-9h9v-2h-9v-9z"></path>
                                                            </g>
                                                        </g>
                                                    </svg> Donate</button></a>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card   m-5">
                        <div class="card-img ">
                            <div class="">
                                <img src="http://content.health.harvard.edu/wp-content/uploads/2023/08/b0dc8f35-3126-4eae-b575-38285553c9a4.jpg"
                                    alt="" class="img-fluid rounded-1">
                            </div>
                        </div>
                        <div class="card-body">
                            <div>

                                <h1 class="text-center">
                                    Need Blood Donors
                                </h1>

                                <div class="p-3">
                                    <p>Looking for blood donors? Search our database of willing donors and
                                        connect with someone who can help. Your search for a blood donor ends
                                        here. Together, we can save lives!</p>
                                </div>
                                <center>
                                    <div class="button">
                                        <a href="donate.php"> <button type="button" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                                    height="20" viewBox="0,0,256,256">
                                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                        stroke-linecap="butt" stroke-linejoin="miter"
                                                        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                        font-family="none" font-weight="none" font-size="none"
                                                        text-anchor="none" style="mix-blend-mode: normal">
                                                        <g transform="scale(9.84615,9.84615)">
                                                            <path
                                                                d="M10,0.1875c-5.42187,0 -9.8125,4.39063 -9.8125,9.8125c0,5.42188 4.39063,9.8125 9.8125,9.8125c2.28906,0 4.39453,-0.80859 6.0625,-2.125l0.875,0.875c-0.36719,0.69141 -0.23828,1.57422 0.34375,2.15625l4.59375,4.625c0.71484,0.71484 1.87891,0.71484 2.59375,0l0.875,-0.875c0.71484,-0.71484 0.71484,-1.87891 0,-2.59375l-4.625,-4.59375c-0.58594,-0.58594 -1.46484,-0.6875 -2.15625,-0.3125l-0.875,-0.875c1.32422,-1.67187 2.125,-3.79297 2.125,-6.09375c0,-5.42187 -4.39062,-9.8125 -9.8125,-9.8125zM10,2c4.41797,0 8,3.58203 8,8c0,4.41797 -3.58203,8 -8,8c-4.41797,0 -8,-3.58203 -8,-8c0,-4.41797 3.58203,-8 8,-8zM4.9375,7.46875c-0.51562,0.83594 -0.8125,1.82031 -0.8125,2.875c0,3.02734 2.44141,5.46875 5.46875,5.46875c1.16797,0 2.26563,-0.37891 3.15625,-1c-0.23828,0.02734 -0.50391,0.03125 -0.75,0.03125c-3.91406,0 -7.0625,-3.14844 -7.0625,-7.0625c0,-0.10547 -0.00391,-0.20703 0,-0.3125z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg> <span> Check Donor</span></button></a>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer start -->
    <div class="footers bg-black ">
        <div class="container  ">
            <div class="row p-5 pb-2 text-white">
                <div class="col-sm-3 col-md-6 col-lg-3">
                    <a class="text-decoration-none text-white h3 paragraph" href="#">Blood Donation</a>

                    <p class="">Tamil Nadu</p>
                </div>
                <div class="col-sm-3 col-md-6 col-lg-3">
                    <p class="h5 mb-3 text-decoration-none text-white paragraph">Info</p>
                    <div class="mb-2">
                        <a href="index.php" class="footershref text-decoration-none  ">Donate</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="footershref text-decoration-none ">Check Donors</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="footershref text-decoration-none ">Founders</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="footershref text-decoration-none ">About</a>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-lg-3">
                    <p class="h5 mb-3 paragraph">Agreements</p>
                    <div class="mb-2">
                        <a href="#" class="footershref text-decoration-none">Terms & Conditions</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="footershref text-decoration-none">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 col-lg-3 ">
                    <p class="h5 mb-3 paragraph">Social Media</p>
                    <div class="mb-2">
                        <a href="#" class="social socialinstagram text-decoration-none "><i
                                class="fa-brands fa-instagram icons"></i> Instagram</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="social sociallinkedin text-decoration-none"><i
                                class="fa-brands fa-linkedin icons"></i> Linked in</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="social socialtwitter text-decoration-none"><i
                                class="fa-brands fa-square-twitter icons"></i> Twitter</a>
                    </div>
                    <div class="mb-2">
                        <a href="#" class="social socialfacebook text-decoration-none"><i
                                class="fa-brands fa-facebook icons"></i> Facebook</a>
                    </div>
                </div>

                <div class="col-sm-12 pt-4">
                    <p class="text-white text-center">Copyright - All rights reserved &copy; 2024</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
    < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity = "sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>