    <!-- PHP Starts -->
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



    ?>
    <!-- PHP Ends -->



    <!-- Html Start -->


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blood Donation</title>
        <link rel="icon" href="path_to_favicon.ico">
        <style>
        </style>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
        .bg-custom {
            background-image: url('https://www.cancer.ie/sites/default/files/styles/manual_crop_16_9_scale_crop_16_9_1024w/public/2020-01/BLOOD%20CELLS.png?h=920929c4&itok=XZfZ0Fbf');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        html,
        body,
        .intro {
            height: 100%;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        thead th {
            color: #ff0000;
        }

        .card {
            border-radius: .5rem;
        }

        .table-scroll {
            border-radius: .5rem;
        }

        .table-scroll table thead th {
            font-size: 1.25rem;
        }

        thead {
            top: 0;
            position: sticky;
        }
        </style>
    </head>

    <body class="bg-custom">


        <!-- NavBar Starts -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <a class="navbar-brand text-danger fw-bold" href="#"> <img
                        src="data:image/png;base64,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">
                    Blood Donation
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  align-items-end justify-content-end " id="navbarSupportedContent">
                    <div class="justify-content-center  align-items-center ">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-end justify-content-end d-flex">
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="landing.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="index.php">Donate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- NavBar Ends -->

        <section class="intro">
            <div class="bg-image h-100" style="background-color: #f9020255;">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container p-3">
                        <div class="row justify-5content-center">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                            style="position: relative; height: 700px">
                                            <!-- Table Starts -->
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr class="table-dark">
                                                        <th scope="col">Name</th>
                                                        <th scope="col"> Blood Group</th>
                                                        <th scope="col">City</th>
                                                        <th scope="col">Phone Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                
                                                    
                                                    $state=$_SESSION['state'];
                                                    $city=$_SESSION['city'];
                                                    $bloodgroup=$_SESSION['bloodgroup'];

                                                        
                                                            




                                                    
                                                    $sql = "SELECT * FROM donar_details WHERE city='$city' AND bloodgroup='$bloodgroup'   ORDER BY name ASC";
                                                    $result=mysqli_query($conn,$sql);
                                                    $i=0;                                            
                                                    if ($result->num_rows>0)
                                                    {
                                                        while($row=mysqli_fetch_assoc($result))
                                                        {
                                                            echo "<tr>";
                                                            echo "<td>" . $row['name'] . "</td>";
                                                            echo "<td>" . $row['bloodgroup'] . "</td>";
                                                            echo "<td>" . $row['city'] . "</td>";
                                                            echo "<td>" . $row['phonenumber'] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                    echo "<tr>
                                                        <td colspan='4'>No donors found</td>
                                                    </tr>";
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                            <!-- Table Ends -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>

    </html>