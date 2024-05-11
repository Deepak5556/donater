<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="login";

$sucess=0;
$user=0;
 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     echo $name;
//     echo $email;
//     echo $password; 
//     $stmt = $conn->prepare("INSERT INTO signup (name,email,password) VALUES (?,?,?)");
//     $stmt->bind_param("sss", $name,$email,$password);
//     $stmt->execute();
    
//         header("Location:Signup.php");
    
//     $stmt->close();
// }

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // Check if email already exists
    $check_stmt = $conn->prepare("SELECT COUNT(*) FROM signup WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->bind_result($count);
    $check_stmt->fetch();
    $check_stmt->close();
   
   
    if ($count > 0) {
        // Email already exists
        echo "<div id='custom-alert' class='custom-alert'>Email already exists!</div>";
        echo "<script>document.getElementById('custom-alert').classList.add('show');</script>";
    } else {
        // Email doesn't exist, proceed with insertion
        $stmt = $conn->prepare("INSERT INTO signup (name,email,password) VALUES (?,?,?)");
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();
        $stmt->close();
        header("Location:Signup.php");
        exit(); // Ensure that no code is executed after the redirection
    }
    
}




// if(isset($_POST['check'])){
//     $email=$_POST['Email'];
//     $password=$_POST['Password'];
//     $sql="select * from signup where email='$email' and password='$password'";
//     $result=mysqli_query($conn,$sql);

    
//     if(mysqli_num_rows($result)>0){
//         while($row=mysqli_fetch_assoc($result)){
//             $_SESSION['email']=$row["email"];
//         }
//         header("Location:landing.php");
        
//     }
// }

if(isset($_POST['check'])){
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $sql="SELECT * FROM signup WHERE email='$email'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        if($row['password'] == $password){
            $_SESSION['email']=$row["email"];
            header("Location:landing.php");
            exit; // Ensure that no further code is executed after redirection
        } else {
            echo "<div id='custom-alert' class='custom-alert'>password Incorrect</div>";
        }
    } else {
        echo "<div id='custom-alert' class='custom-alert'>No Account Found!  Please Signup</div>";
    }
}

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
    .btn:hover {
        background-color: red;
        color: rgb(255, 255, 255);
    }

    /* Custom alert box styles */
    .custom-alert {
        background-color: #f44336;
        /* Red background */
        color: white;
        /* White text color */
        padding: 10px 15px;
        /* Padding */
        border-radius: 5px;
        /* Rounded corners */
        position: fixed;
        /* Fixed position */
        bottom: 30px;
        /* 30px from the bottom */
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        /* Center horizontally */
        z-index: 999;
        /* Set z-index to ensure it's on top of other elements */
    }

    custom-alert-1{
        background-color: #008000;
        /* Red background */
        color: white;
        /* White text color */
        padding: 10px 15px;
        /* Padding */
        border-radius: 5px;
        /* Rounded corners */
        position: fixed;
        /* Fixed position */
        bottom: 30px;
        /* 30px from the bottom */
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        /* Center horizontally */
        z-index: 999;
        /* Set z-index to ensure it's on top of other elements */
    }



    </style>

</head>

<body>

    <section class="vh-100" style="background-color: #e2e0e0;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block ">
                                <img src="https://img.freepik.com/premium-photo/image-red-blood-cells-blue-background-image-erythrocytes_168171-1961.jpg?w=360"
                                    alt="login form" class="img-fluid h-100 w-100 "
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form id="loginForm" style="display:block;" method="post">
                                        <div class="align-items-center pb-4 text-center ">
                                            <a class="navbar-brand text-danger fw-bold fs-5 " href="#"> <img
                                                    src="data:image/png;base64,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">
                                                <h4 class="pt-3 ">LogIn</h4>
                                            </a>
                                        </div>
                                        <div data-mdb-input-init class="form-floating   mb-4">
                                            <input type="email" placeholder="" required id="emailInput" name="Email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label " for="emailInput">Email address</label>
                                        </div>

                                        <div data-mdb-input-init class="form-floating  mb-4">
                                            <input type="password" id="passwordInput" required placeholder=""
                                                name="Password" class="form-control form-control-lg" />
                                            <label class="form-label" for="passwordInput">Password</label>
                                        </div>
                                        <center>
                                            <div class="pt-1 mt-5">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-dark btn-lg btn-block" name="check"
                                                    type="Submit">Login</button>
                                            </div>
                                            <h6 class="m-5 pb-lg-2 accordion" style="color: #000000;">Don't have an
                                                account? <a href="#" style="color: #393f81;" id="Sign-up">Sign-Up</a>
                                            </h6>
                                        </center>
                                    </form>
                                    <!-- form end -->

                                    <div style="display: none;" id="sign-in">
                                        <form method="post">
                                            <div class="align-items-center pb-4 text-center ">
                                                <a class="navbar-brand text-danger fw-bold fs-5 " href="#"> <img
                                                        src="data:image/png;base64,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">
                                                    <h4 class="pt-3 ">Sign-Up</h4>
                                                </a>
                                            </div>


                                            <div data-mdb-input-init class="form-floating  mb-4">
                                                <input type="text" name="name" required placeholder=""
                                                    id="form2Example17" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Enter Name</label>
                                            </div>

                                            <div data-mdb-input-init class="form-floating   mb-4">
                                                <input type="email" placeholder="" required id="emailInput" name="email"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label " for="emailInput">Enter Email address</label>
                                            </div>

                                            <div data-mdb-input-init class="form-floating  mb-4">
                                                <input type="password" required name="password" id="form2Example27"
                                                    placeholder="" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example27">Set Password</label>
                                            </div>
                                            <center>
                                                <div class="pt-1 mt-5">
                                                    <button data-mdb-button-init data-mdb-ripple-init
                                                        class="btn btn-dark btn-lg btn-block " type="Submit"
                                                        name="submit">Sign-Up</button>
                                                </div>
                                                <h6 class="m-5 pb-lg-2 accordion " style="color: #000000;">Already have
                                                    an
                                                    account? <a href="Signup.php" style="color: #393f81;">Login</a></h6>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/index.js"></script>


    <script>
    // Function to remove the alert after 3 seconds
    setTimeout(function() {
        var element = document.getElementById('custom-alert');
        element.parentNode.removeChild(element); 
    }, 3000); // 3000 milliseconds = 3 seconds
    </script>

    



</body>

</html>