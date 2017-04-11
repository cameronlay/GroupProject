<?php
    // require_once('../php/auth.php');

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
    <style></style>
    <meta charset="utf-8">
    <meta name="description" content="Gaming Peripheral Reviews">
    <meta name="keywords" content="Monitor, Mouse, Keyboards">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
    <link rel="stylesheet" href="../styles/base.css"/> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="icon" href="../images/titleimg2.ico"/>
    <script src="../styles/script.js"></script>
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
                <li><div class="dropdown"><a href="info.php" class="dropdown">About Us</a></div></li>
                <li><div class="dropdown"><a href="info.php#contactheader" class="dropdown">Contact</a></div></li>
                <li><div class="dropdown"><a href="../forum/forum.php" class="dropdown">Forum</a></div></li>
            </ul>
        </div>
    </nav>

    <div id= "sitemaptop">
        <span>Site Map</span>
    </div>

    <main>
      
        <div id="sitemaptable">
            <table id="sitemaptablecontent">
                <tr>
                    <th><a href="../index/index.php">&#8649; HOME</a></th>
                    <th></th> 
                    <th></th>
                </tr>
                <tr class="col">
                    <td></td>
                    <td><a href="../products/mouse.php">&#8594; Mouse</a></td>
                    <td></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td><a href="../products/mouse.php#pricebracketlow">&#8627; Price1</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="mousecell"><a href="../products/mouse.php"><img src="../images/g500s.png" alt ="Mouse"/></a></td>
                    <td><a href="../products/mouse.php#pricebracketmid">&#8627; Price2</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td><a href="../products/mouse.php#pricebrackethigh">&#8627; Price3</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td><a href="../products/keyboard.php">&#8594; KeyBoard</a></td>
                    <td></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td><a href="../products/keyboard.php#pricebracketlow">&#8627; Price1</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="keyboardcell"><a href="../products/keyboard.php"><img src="../images/g213.png" alt ="Keyboard"/></a></td>
                    <td><a href="../products/keyboard.php#pricebracketmid">&#8627; Price2</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td><a href="../products/keyboard.php#pricebrackethigh">&#8627; Price3</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td><a href="../products/monitor.php">&#8594; Monitor</a></td>
                    <td></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td><a href="../products/monitor.php#pricebracketlow">&#8627; Price1</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="monitorcell"><a href="../products/monitor.php"><img src="../images/Acer.png" alt ="Monitor"/></a></td>
                    <td><a href="../products/monitor.php#pricebracketmid">&#8627; Price2</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td><a href="../products/monitor.php#pricebrackethigh">&#8627; Price3</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td>
                        <?php
                            if (!isLoggedIn()) {
                                echo '<a href="../index/register_form.php">Sign-Up</a>';
                            } else {
                                echo '<a href="../index/logout.php">Log-Out</a>';
                            }
                        ?>
                    </td>
                    <td></td>
                </tr>
                <tr class="col">
                    <th><a href="./info.php">&#8649; ABOUT US</a></th>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="cameron"> <a href="info.php#cameroninfo"><img src="../images/igloo.jpg"  alt ="Cameron"/></a></td>
                    <td><a href="info.php#cameroninfo">&#8627; Cameron</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="edmund"> <a href="info.php#edmundinfo"><img src="../images/SungukHam.JPG" alt ="Edmund"/></a></td>
                    <td><a href="info.php#edmundinfo">&#8627; Edmund</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="jason"> <a href="info.php#jasoninfo"><img src="../images/jason.jpg" alt ="Jason"/></a></td>
                    <td><a href="info.php#jasoninfo">&#8627; Jason</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="daniel"> <a href="info.php#danielinfo"><img src="../images/daniel.jpg" alt ="Daniel"/></a></td>
                    <td><a href="info.php#danielinfo">&#8627; Daniel</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td class="joseph"> <a href="info.php#josephinfo"><img src="../images/joseph.png" alt ="Joseph"/></a></td>
                    <td><a href="info.php#josephinfo">&#8627; Joseph</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td><a href="info.php#contactheader">&#8627; CONTACT US</a></td>
                    <td><a href="info.php#contactheader">&#8627; Contact Form</a></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td></td>
                    <td></td>
                <!-- <td>&#8594; Support</td> MAYBE USE?-->
                <!-- <td>&#8627; FAQ</td>MAYBE USE?-->
                </tr>
                <tr class="col">
                    <th><a href="../forum/forum.php">&#8649; FORUM</a></th>
                    <td></td>
                    <td></td>
                </tr>
                <tr class="col">
                    <td></td>
                    <td>
                    <?php if (isLoggedIn()) {
                            echo '<a href="../forum/add_topic_form.php">&#8594; Forum post</a></td>';
                        } ?>
                    <td></td>
                </tr>
            </table>
        </div>  
    </main>      
</body>
</html>