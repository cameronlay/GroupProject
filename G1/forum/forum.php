<?php
    include '../php/functions.php';
    require_once('../php/config.php');
    session_start();

    // Connect to server and select database.
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    $tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MKM Reviews</title>
    <link rel="icon" href="../images/titleimg2.ico"/>
    <style></style>
    <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <link rel="stylesheet" href="../styles/base.css" />
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
    <nav>
        <div id="navwrapper">
            <ul>
                <li>
                    <!-- Button is seperate from the div -->
                    <div class="dropdown"><a href="../products/mouse.php" class="dropdown">Mouse</a>
                        <div class="dropdown_content">
                            <p><a href="../products/mouse.php#pricebracketlow">$</a></p>
                            <p><a href="../products/mouse.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/mouse.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/keyboard.php" class="dropdown">Keyboard</a>
                        <div class="dropdown_content">
                            <p><a href="../products/keyboard.php#pricebracketlow">$</a></p>
                            <p><a href="../products/keyboard.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/keyboard.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown"><a href="../products/monitor.php" class="dropdown">Monitor</a>
                        <div class="dropdown_content">
                            <p><a href="../products/monitor.php#pricebracketlow">$</a></p>
                            <p><a href="../products/monitor.php#pricebracketmid">$$</a></p>
                            <p><a href="../products/monitor.php#pricebrackethigh">$$$</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="../index/index.php"><img id="imgid" src="../images/logonew.PNG" alt="Logo"></a>
                </li>
                <li><div class="dropdown"><a href="../information/info.php" class="dropdown">About Us</a></div></li>
                <li><div class="dropdown"><a href="../information/info.php#contactheader" class="dropdown">Contact</a></div></li>
                <li><div class="dropdown"><a href="./forum.php" class="dropdown">Forum</a></div></li>
            </ul>
        </div>
    </nav>
    
    <?php
    
        if (isLoggedIn()) {
            echo '
            <div class="indexSignUp_LogIn">
                <span>Hi '.$_SESSION['SESS_FIRST_NAME'].
                '</span>
                <a href="../index/logout.php"><span>Log Out</span></a>
            </div>';
        } else {
            echo '
                <div class="indexSignUp_LogIn">
                    <a href="../index/register_form.php"><span>Sign Up</span></a>
                    <a href="../index/login_form.php"><span>Log In</span></a>
                </div>';
          }
    ?>

    <!-- Main Page Content -->
    <main id="signupmain">

        <?php
            require_once('../php/config.php');
            
            // Connect to server and select database.
            ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,DB_USER,  DB_PASSWORD))or die("cannot connect");
            ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
            $tbl_name="topic"; // Table name
            
            $sql="SELECT * FROM $tbl_name JOIN members ON members.member_id = topic.member_id";
                // ORDER BY id DESC is order result by descending
            $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
        
        ?>
        
        <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
                <td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
                <td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
                <td width="7%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
				<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
            </tr>
                
            <?php
                while($rows=mysqli_fetch_array($result)) { // Start looping table row
            ?>
                
            <tr>
                <td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
                <td bgcolor="#FFFFFF"><a href="./view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
                <td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
            </tr>
                
            <?php
                // Exit looping and close connection
                }
                
                ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
            ?>
            <tr>
                <td colspan="5" align="right" bgcolor="#E6E6E6"><a href="./add_topic_form.php"><strong>Create New Topic</strong> </a></td>
            </tr>
        </table>
    </main>
    <!-- Footer -->
    <footer>
        <div class="footerconstraint">
            <div class="bottomleftcolumn">
                <ul>
                    <li><a href="../index/index.php">Home</a></li>
                    <li><a href="../information/info.php#contactheader">Contact</a></li>
                    <li><a href="../information/info.php">About Us</a></li>
                </ul>
            </div>
            <div class="middleleftcolumn">
                <ul>
                    <li><a href="../products/mouse.php">Mice</a></li>
                    <li><a href="../products/keyboard.php">Keyboard</a></li>
                    <li><a href="../products/monitor.php">Monitor</a></li>
                </ul>
            </div>
            <div class="middlerightcolumn">
                <ul>
                    <li><a href="./forum.php">Forum</a></li>
                </ul>
            </div>
            <div class="bottomrightcolumn">
                <ul>
                    <li>
                        <?php
                            if (!isLoggedIn()) {
                                echo '<a href="../index/register_form.php">Sign-Up</a>';
                            } else {
                                echo '<a href="../index/logout.php">Log-Out</a>';
                            }
                        ?>
                    </li>
                    <li><a href="../information/sitemap.php">Sitemap</a></li>
                </ul>
            </div>
            <p>&copy; Copyright 2017 | lol </p>
        </div>
    </footer>
   
</body>
</html>


    