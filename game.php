<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

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
                    <a class="nav-link js-scroll-trigger" href="#account">Account</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#mychar">My Characters</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#newchar">Create A Character</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#myentr">My Entries</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#newentr">Create An Entry</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#myreq">My Requests</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#newreq">Create A Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex d-column" id="account">
            <div class="account">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
                <?php endif ?>

                <h1 class="mb-0">
                    The Witch's Wood and the Wandering Wharf
                    <span class="text-primary"></span>
                </h1>
                <div class="subheading mb-5">
                    Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                </div>

                <!-- logged in user information -->
                <?php  if (isset($_SESSION['username'])) : ?>
                <p> <a href="game.php?logout='1'" style="color: blue;">logout</a> </p>
                <?php endif ?>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="mychar">
            <div class="my-auto">
                <h2 class="mb-5">My Characters</h2>
                <ul class="fa-ul mb-0">
                    
                </ul>
            </div>
        </section>

		<hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="newchar">
            <div class="my-auto">
                <h2 class="mb-5">Create A Character</h2>
                <ul class="fa-ul mb-0">
                    <form action="game.php" method="post">
                    <?php include('errors.php'); ?>
					<p>General Traits</p>
                    <div class="input-group">
                        <label>Character Name</label>
                        <input type="text" name="charName">
                    </div>
					<div class="input-group">
                        <label>Race</label>
                        <input type="text" name="charRace">
                    </div>
					<div class="input-group">
                        <label>Class</label>
                        <input type="text" name="charClass">
                    </div>
                    <div class="input-group">
                        <label>Age</label>
                        <input type="number" name="charAge">
                    </div>
                    <div class="input-group">
                        <label>Gender</label>
                        <input type="text" name="charGender">
                    </div>
                    <div class="input-group">
                        <label>Height</label>
                        <input type="text" name="charHeight">
                    </div>
					<div class="input-group">
                        <label>Weight</label>
                        <input type="text" name="charWeight">
                    </div>
					<div class="input-group">
                        <label>Eye Color</label>
                        <input type="text" name="charEye">
                    </div>
					<div class="input-group">
                        <label>Hair Color</label>
                        <input type="text" name="charHair">
                    </div>
					<div class="input-group">
                        <label>Skin Tone</label>
                        <input type="text" name="charSkin">
                    </div>
					<p>Attributes</p>
					<div class="input-group">
                        <label>Strength</label>
                        <input type="number" name="charSTR">
                    </div>
					<div class="input-group">
                        <label>Endurance</label>
                        <input type="number" name="charEND">
                    </div>
					<div class="input-group">
                        <label>Finesse</label>
                        <input type="number" name="charFIN">
                    </div>
					<div class="input-group">
                        <label>Speed</label>
                        <input type="number" name="charSPE">
                    </div>
					<div class="input-group">
                        <label>Concentration</label>
                        <input type="number" name="charCON">
                    </div>
					<div class="input-group">
                        <label>Charisma</label>
                        <input type="number" name="charCHA">
                    </div>
					<div class="input-group">
                        <label>Intelligence</label>
                        <input type="number" name="charINT">
                    </div>
					<div class="input-group">
                        <label>Magic</label>
                        <input type="number" name="charMAG">
                    </div>
					<div class="input-group">
                        <label>Faith</label>
                        <input type="number" name="charFAI">
                    </div>
					<div class="input-group">
                        <label>Luck</label>
                        <input type="number" name="charLUC">
                    </div>
					<p>Extras</p>
					<div class="input-group">
                        <label>Sellect a Bonus Skill</label>
                        <input type="text" name="charSkill">
                    </div>
					<div class="input-group">
                        <label>Sellect a Feat</label>
                        <input type="text" name="charFeat">
                    </div>
					<p>Character History</p>
					<div class="input-group">
                        <label>Organization</label>
                        <input type="text" name="charOrg">
                    </div>
					<div class="input-group">
                        <label>Alignment</label>
                        <input type="text" name="charAlign">
                    </div>
					<div class="input-group">
                        <label>Background</label>
                        <input type="text" name="charBack">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn" name="create_char">Create</button>
                    </div>
                </form>
                </ul>
            </div>
        </section>

		<hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="myentr">
            <div class="my-auto">
                <h2 class="mb-5">My Entries</h2>
                <ul class="fa-ul mb-0">
                    
                </ul>
            </div>
        </section>

		<hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="newentr">
            <div class="my-auto">
                <h2 class="mb-5">Create An Entry</h2>
                <ul class="fa-ul mb-0">
                    
                </ul>
            </div>
        </section>

		<hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="myreq">
            <div class="my-auto">
                <h2 class="mb-5">My Requests</h2>
                <ul class="fa-ul mb-0">
                    
                </ul>
            </div>
        </section>

		<hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="newreq">
            <div class="my-auto">
                <h2 class="mb-5">Create A Request</h2>
                <ul class="fa-ul mb-0">
                    
                </ul>
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