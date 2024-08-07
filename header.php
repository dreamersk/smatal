<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?> || Smatal Computer Academy Chennai</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/slick-theme.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="fonts/font.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styles_header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>


   <div class="container">
   <header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="index.php" class="nav__logo"><img src="images/smatal_logo.png" alt="Logo"></a>
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>
        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="index.php" class="nav__link <?php if($page == 'index') { echo 'active'; } ?>">Home</a></li>
                <li><a href="about.php" class="nav__link <?php if($page == 'about') { echo 'active'; } ?>">About us</a></li>
                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link <?php if(in_array($page, ['cyber_security', 'ui_ux', 'fullstack', 'data_analytics', 'video_editing', 'gd', 'java', 'python', 'aws', 'tally', 'ms_office'])) { echo 'active'; } ?>">
                        Courses <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>
                    <ul class="dropdown__menu">
                        <li><a href="cyber_security.php" class="dropdown__sublink <?php if($page == 'cyber_security') { echo 'active'; } ?>">Cyber Security</a></li>
                        <li><a href="ui_ux.php" class="dropdown__sublink <?php if($page == 'ui_ux') { echo 'active'; } ?>">UI / UX</a></li>
                        <li><a href="fullstack.php" class="dropdown__sublink <?php if($page == 'fullstack') { echo 'active'; } ?>">Full Stack</a></li>
                        <li><a href="data_analytics.php" class="dropdown__sublink <?php if($page == 'data_analytics') { echo 'active'; } ?>">Data Science</a></li>
                        <li><a href="video_editing.php" class="dropdown__sublink <?php if($page == 'video_editing') { echo 'active'; } ?>">Video Editing</a></li>
                        <li><a href="gd.php" class="dropdown__sublink <?php if($page == 'gd') { echo 'active'; } ?>">Graphic Design</a></li>
                        <li><a href="java.php" class="dropdown__sublink <?php if($page == 'java') { echo 'active'; } ?>">Java</a></li>
                        <li><a href="python.php" class="dropdown__sublink <?php if($page == 'python') { echo 'active'; } ?>">Python</a></li>
                        <li><a href="aws.php" class="dropdown__sublink <?php if($page == 'aws') { echo 'active'; } ?>">AWS</a></li>
                        <li><a href="tally.php" class="dropdown__sublink <?php if($page == 'tally') { echo 'active'; } ?>">Tally/Accounting</a></li>
                        <li><a href="ms_office.php" class="dropdown__sublink <?php if($page == 'ms_office') { echo 'active'; } ?>">MS Office</a></li>
                    </ul>
                </li>
                <li><a href="corporate-training.php" class="nav__link <?php if($page == 'corporate_training') { echo 'active'; } ?>">Corporate Training</a></li>
                <li><a href="blog.php" class="nav__link <?php if($page == 'blog') { echo 'active'; } ?>">Blog</a></li>
                <li><a href="contact_us.php" class="nav__link <?php if($page == 'contact_us') { echo 'active'; } ?>">Contact us</a></li>
            </ul>
        </div>
    </nav>
</header>

   </div>