<!DOCTYPE html>
<html>

<head>
    <?php include("title.php"); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require("flforms/fbtstyles.php"); ?>
    <?php require("flforms/logincss.php");
    ?>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }


        .submenu {
            height: 80%;
            width: 0;
            position: fixed;
            z-index: 12;
            top: 115px;
            left: 8px;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 5px;
            font-family: arial;
            font-size: 15px;
            border-style: none;
            border-width: medium;
            border-color: teal;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 10;
            top: 80px;
            left: 8px;
            background-color: darkseagreen;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 5px;
            font-family: arial;
            font-size: 15px;
        }

        .aboutMn {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 11;
            top: 155px;
            left: 15px;
            /* background-color: #111; */
            background-color: darkseagreen;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 45px;
            font-family: arial;
            font-size: 15px;
        }


        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 15px;
            /*  color: #818181; */
            color: black;
            display: block;
            transition: 0.3s;
            font-family: arial;
            font-size: 15px;
        }

        .sidenav a:hover {
            color: red;
            background-color: white;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 5px;
            font-size: 15px;
            margin-left: 50px;
        }

        .aboutMn a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 15px;
            /*  color: #818181; */
            color: black;
            display: block;
            transition: 0.3s;
            font-family: arial;
            font-size: 15px;
        }

        .aboutMn a:hover {
            color: #f1f1f1;
        }

        .aboutMn .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 25px;
            margin-left: 50px;
        }


        .sidenav .title {
            position: absolute;
            top: 0;
            right: 5px;
            font-size: 25px;
            margin-left: 25px;
        }

        .submenu a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 13px;
            color: black;
            display: block;
            transition: 0.5s;
            font-family: arial;
            font-size: 15px;
        }

        .submenu a:hover {
            color: darkred;
            background-color: khaki;
        }

        .submenu .closebtn {
            position: absolute;
            top: 0px;
            right: 5px;
            font-size: 15px;
            margin-left: 50px;
        }


        .popup {
            height: 55%;
            width: 0;
            position: absolute;
            z-index: 9;
            top: 75px;
            left: 50px;
            /* background-color: #111; */
            background-color: black;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 0px;
            font-family: arial;
            font-size: 15px;
            border-style: none;
            border-width: thin;
            border-color: gray;
        }

        .popup a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 13px;
            color: black;
            display: block;
            transition: 0.3s;
            font-family: arial;
            font-size: 15px;
        }

        .popup a:hover {
            color: #f1f1f1;
        }

        .popup .closebtn {
            position: absolute;
            top: 10px;
            right: 25px;
            border-width: thin;
            border-color: gray;
            font-family: arial;
            font-size: 25px;
            margin-left: 50px;
            padding: 0.5% 2%;
            box-shadow: 2px 2px gold;
        }

        .popupheader {
            padding: 10px;
            cursor: move;
            z-index: 9;
            background-color: #2196F3;
            color: #fff;
        }

        @media screen and (max-height: 450px) {


            .popup {
                padding-top: 15px;
                font-family: arial;
                font-size: 26px;
            }

            .popup a {
                font-size: 26px;
            }

            .sidenav {
                padding-top: 15px;
                font-family: arial;
                font-size: 26px;
            }

            .sidenav a {
                font-size: 26px;
            }

            .submenu {
                padding-top: 15px;
                font-family: arial;
                font-size: 26px;
            }

            .submenu a {
                font-size: 26px;
            }


        }
    </style>
</head>

<body>


    <section class="section-pc">
        <div class="tr-div width-100 navigation" style='display:flex;justify-content:flex-start;padding:0. 0;align-items:center;background-color:rgb(76, 76, 76)'>

            <!--   <div class="tr-div width-100 navigation" style='display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:flex-start;align-items:center;background-color:lightblue'>  -->

            <div class='width-10'>
                <div style="cursor:pointer;background-color:rgb(76, 76, 76)"><a href="http://www.flexyasset.com/index.php"><img src="http://www.flexyasset.com/images/flexy-asset-logo.png" class='logo-image'></a></div>
            </div>

            <div class="tr-div width-90" style='display:flex;flex-direction:column;justify-content:space-evenly'> <!-- start of right div -->
                <div class="tr-div" style='display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:space-evenly;align-items:center'> <!-- start of right div -->
                    <div class="menu-div"> <!-- Start of menu Items -->
                        <x width=15% id="topmenu4" class="topmenueffect">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="http://www.flexyasset.com/index.php" style="text-decoration:none;color:rgba(255,255,255,0.8)">Basic Data</a></button>
                                <div class="dropdown-content">
                                    <hr class="hr-menu-divider">

                                    <a href="http://www.flexyasset.com/flforms/addcountry.php" class='bg-menuitem'>Countries</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addregions.php">Regions</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addtowns.php" class='bg-menuitem'>Towns</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addsuburbs.php">Suburbs</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addsectors.php" class='bg-menuitem'>Sectors</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addjobtitles.php">Job Titles</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addroles.php" class='bg-menuitem'>Roles</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/adddept.php">Departments</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/adddivision.php" class='bg-menuitem'>Divisions</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addcompany.php">Companies</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addclient.php" class='bg-menuitem'>Clients</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addpartners.php">Business partners</a>
                                    <hr class="hr-menu-divider">
                                </div>
                            </div>
                        </x>
                    </div>

                    <div class="menu-div"> <!-- Start of menu Items -->
                        <x width=15% id="topmenu4" class="topmenueffect">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="http://www.flexyasset.com/index.php" style="text-decoration:none;color:rgba(255,255,255,0.8)">Asset Register</a></button>
                                <div class="dropdown-content">
                                    <hr class="hr-menu-divider">

                                    <a href="http://www.flexyasset.com/flforms/addassetHD.php" class='bg-menuitem'>Add Assets</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/assetregisterHD.php">Update Assets</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/assetclassHD.php" class='bg-menuitem'>Maintain Asset Classes</a>
                                    <hr class="hr-menu-divider">
                                </div>
                            </div>
                        </x>
                    </div>


                    <div class="menu-div">
                        <x width=15% id="topmenu4" class="topmenueffect">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="http://www.flexyasset.com/index.php" style="text-decoration:none;color:rgba(255,255,255,0.8)">Staff Accounts</a></button>
                                <div class="dropdown-content">
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/registerstaff.php" class='bg-menuitem'>Add New Employee</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/updatestaffHD.php">Update Employee Details</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addjobtitles.php" class='bg-menuitem'>Job Titles</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/adddept.php">Departments</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/accountupdate.php" class='bg-menuitem'>Update Own Account</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/passwordchange.php">Change Own Password</a>
                                    <hr class="hr-menu-divider">
                                </div>
                            </div>
                        </x>
                    </div>

                    <div class="menu-div">
                        <x width=15% id="topmenu4" class="topmenueffect">
                            <div class="dropdown">
                                <button class="dropbtn"><a href="http://www.flexyasset.com/flforms/contractsHD.php" style="text-decoration:none;color:rgba(255,255,255,0.8)">Contracts</button>
                                <div class="dropdown-content">
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/contractsHD.php" class='bg-menuitem'>Contract Maintenance</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/reportsPH.php">Management Reports</a>
                                    <hr class="hr-menu-divider">
                                </div>
                            </div>
                        </x>
                    </div>




                    <div class="menu-div">
                        <x width=15% id="topmenu4" class="topmenueffect">
                            <div class="dropdown">
                                <button class="dropbtn" style="color:gold"><a href="http://www.flexyasset.com/index.php" style="text-decoration:none;color:rgba(255,255,255,0.8)">Maintenance</a></button>
                                <div class="dropdown-content">
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/maintlogHD.php" class='bg-menuitem'>Create Maintenance Request</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/maintenanceHD.php">Update Job cards</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/maintrepPH.php" class='bg-menuitem'>Maintenance Reports</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/maintreppartsPH.php">Parts Usage & Labour Details</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addfaultcodes.php" class='bg-menuitem'>Fault Codes</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/adddiagcodes.php">Diagnosis Codes</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addfixcodes.php" class='bg-menuitem'>Fix Codes</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addcallcategory.php">Call Categories</a>
                                    <hr class="hr-menu-divider">
                                    <a href="http://www.flexyasset.com/flforms/addmainttype.php" class='bg-menuitem'>Maintenance Types</a>
                                    <hr class="hr-menu-divider">
                                </div>
                            </div>
                        </x>
                    </div>

                    <div class="menu-div">
                        <x width=15 id="topmenu4" class="topmenueffect">
                            <div class="dropdown">
                                <?php
                                if (isset($_SESSION['username'])) {
                                ?>
                                    <form action='http://www.flexyasset.com/index.php' method='POST'>

                                        <input type='submit' name='logout' value='LOGOUT' class="dropbtn" style="text-decoration:none;color:lightblue;letter-spacing:0.3rem">
                                    </form>
                                <?php
                                } else {
                                ?>
                                    <button class="dropbtn"><a href="http://www.flexyasset.com/loginstaff.php" style="text-decoration:none;color:lightblue;letter-spacing:0.3rem">LOGIN</a></button>
                                <?php
                                }
                                ?>

                            </div>
                        </x>
                    </div>

                </div> <!-- end of menu items -->

            </div> <!-- end of right div -->

        </div> <!-- end of black div -->
    </section>

    <section class="section-mob">
        <div class="tr-div width-100 navigation" style='display:flex;justify-content:flex-start;padding:0.5rem 0;align-items:center;background-color:rgb(76, 76, 76)'>

            <div class='width-45 td-left' style='display:flex;justify-content:space-evenly'>
                <div style="cursor:pointer;background-color:rgb(76, 76, 76)"><a href="http://www.flexyasset.com/index.php"><img src="https://www.flexyasset.com/images/flexy-asset-logo.png" class='logo-image td-left' Alt="flexyASSET logo" style='text-align:flex-start'></a></div>
            </div>

            <div class='width-55 td-left' style='display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:space-evenly;align-items:center'>

                <div class="menu-div">
                    <x width=15 id="topmenu4" class="topmenueffect">
                        <div class="dropdown">
                            <?php
                            if (isset($_SESSION['username'])) {
                            ?>

                                <form action='http://www.flexyasset.com/index.php' method='POST'>
                                    <input type='submit' name='logout' value='LOGOUT' class="dropbtn" style="text-decoration:none;color:lightblue;letter-spacing:0.3rem">
                                </form>

                            <?php
                            } else {
                            ?>
                                <button class="dropbtn"><a href="http://www.flexyasset.com/loginstaff.php" style="text-decoration:none;color:lightblue;letter-spacing:0.3rem">LOGIN</a></button>
                            <?php
                            }
                            ?>

                        </div>
                    </x>
                </div>

            </div>

        </div>
    </section>
    <!--   </div> -->



    <?php
    if (isset($_POST['logout'])) {
        unset($_SESSION['userref']);
        unset($_SESSION['username']);
        /*        unset($_SESSION['client']);
        unset($_SESSION['company']);
        unset($_SESSION['country']);
*/
        $_SESSION['client'] = 'ZIMGV';
        $_SESSION['company'] = 'MLGPW';
        $_SESSION['country'] = 'Zimbabwe';

        if (!headers_sent()) {
            header("Location: http://www.flexyasset.com/index.php");
        } else {
    ?>

            <script type="text/javascript">
                document.location.href = "http://www.flexyasset.com/index.php";
            </script>
            <!-- <a href="http://www.flexyasset.com/bctmain.php/">http://www.flexyasset.com/bctmain.php</a> -->

    <?php

        }
    }
    ?>

</body>

</html>