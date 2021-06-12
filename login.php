<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bengkel Anwar</title>
        <link rel="stylesheet" href="css/sb-admin-2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="showpw.js"></script>

        <style>
        .imgcontainer {
        text-align: center;
        margin: 2px 0 12px 0;
            }

        img.avatar {
            width: 35%;
            border-radius: 50%;
        }
        </style>
    </head>
    <body style="background-color: turquoise;">
        <div class="container animate__animated animate__fadeindown">
            <?php
            include 'alert.php';
            ?>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5 mx-auto">
                        <div class="card-body p-0">
                            <div class="card-header o-hidden border-0 shadow-lg my-1 bg-primary" 
                            style="height: 200; width: auto;">
                            <div class="imgcontainer">
                                <img src="person.jpg" alt="avatar" class="rounded-circle avatar">
                            </div>
                            </div>
                            <form class="user" action="proseslogin.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" 
                                    placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" 
                                    placeholder="Password" id="password" required>
                                    <input type="checkbox" id="checkbox"> Show Password
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.php">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" 
        fill-opacity="1" 
        d="M0,224L30,218.7C60,213,120,203,180,186.7C240,171,300,149,360,165.3C420,181,480,235,540,250.7C600,267,660,245,720,218.7C780,192,840,160,900,176C960,192,1020,256,1080,266.7C1140,277,1200,235,1260,229.3C1320,224,1380,256,1410,272L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
        </path></svg>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </body>
</html>