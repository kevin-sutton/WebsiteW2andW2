<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Witch's Wood and the Wandering Wharf</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/lantern.png" alt="">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#register">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex d-column" id="register">
            <div class="my-auto">
                <h1 class="mb-0">
                    Sign Up
                    <span class="text-primary"></span>
                </h1>
                <form method="post" action="register.php">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_1">
                    </div>
                    <div class="input-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_2">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn" name="reg_user">Register</button>
                    </div>
                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                </form>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="about">
            <div class="my-auto">
                <h2 class="mb-5">About</h2>
                <ul class="fa-ul mb-0">
                    <p>I'm Kevin. I'm a writer and an avid player of Dungeons and Dragons. I've been a Dungeon Master for years now and this is a passion prject for me. I've always loved stories and running RPGs is one of my favorite things. Some of my favorite stories are those by Edgar Allen Poe and H.P. Lovecraft and they're both pretty big influences on me. In my spare time I love being outside in nature, taking hikes, camping, and fishing. Otherwise, stories of all sorts have been my passion, with reading, watching movies, and especially playing video games being big to me. I'm very excited to set out on this project and bring my passion as a Dungeon Master to the world.</p>
                    <p></p>
                    <p class="subheading mb-3">Contact Info</p>
                    <p><a href="mailto:kevin.sutton@waterloggedcreative.com">kevin.sutton@waterloggedcreative.com</a></p>
                </ul>
            </div>
        </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

</body>

</html>
