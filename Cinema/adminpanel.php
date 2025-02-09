<?php
    session_start();
    unset($_SESSION['isfilmselected']);
    unset($_SESSION['film']);
    unset($_SESSION['deletescreeninginfo']);
?>
<head>
    <title>Cinema</title>
    <link rel="stylesheet" href="./style/style.css"><!--we link our css style-->
   
</head>

<body>
    <div class="top-panel">
        <?php
            if ($_SESSION["admin"] == 1) {//if the user is an admin he has access to the admin panel
                echo '<a href="adminpanel.php" class="adminpanel">ADMIN PANEL</a>';
            }
        ?>
        <a href="index.php">PointOfView</a>
        <a href="logout.php" class="logout">Log out</a><!--lnk to log out-->
    </div>
    <div class="bottom-panel">
        <h3>Movies management</h3>
        <div id="options"><!--links that lead to movie management pages that use php-->
            <a href="movie_management/addfilmimage.php">Add film image</a>
            <a href="movie_management/addnewfilm.php">Add new film</a>
            <a href="movie_management/addnewscreening.php">Add new screening date</a>
            <a href="movie_management/deletescreening.php">Delete screening date</a>
            <a href="movie_management/deletefilm.php">Delete film</a>
            <a href="movie_management/deletefilmimage.php">Delete film image</a>
            <a href="movie_management/delete_all_reservations.php">Delete reservations</a>
            <a href="index.php" class="gotofilms">Check films</a>
        </div>

        <h3>Users management</h3>
        <div id="options"><!--links that lead to user management pages that use php-->
            <a href="user_management/viewusers.php">View All Users</a>
            <a href="user_management/adduser.php">Add User</a>
            <a href="user_management/deleteuser.php">Delete User</a>
            <a href="user_management/user_to_admin.php">User to admin</a>
          
        </div>
    </div>

    
  
     <?php
    // check if user is logged in 
    if (!isset($_SESSION["username"])) {
        header("Location: login_check.php");
        $_SESSION["logged"] = false;
        exit();
    } else {
        $_SESSION["logged"] = true;
        exit();
    }
    
    ?>
</body>

</html>