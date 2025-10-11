<?php
session_start();
if (isset($_SESSION['client'])) {
    $clientdef = $_SESSION['client'];
} else {
    $clientdef = 'ZIMGV';
}
if (isset($_SESSION['company'])) {
    $companydef = $_SESSION['company'];
} else {
    $companydef = 'MLGPW';
}
if (isset($_SESSION['country'])) {
    $countrydef = $_SESSION['country'];
} else {
    $countrydef = 'Zimbabwe';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- <link rel="icon" href="https://www.flexyasset.com/images/ombu-icon.jpg">
<title>OMBU Capital Grant Management System</title> -->

    <?php include("title.php"); ?>

    <script type="text/javascript" src="animation.js"></script>
    <script type="text/javascript">
        function stopRKey(evt) {
            var evt = (evt) ? evt : ((event) ? event : null);
            var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
            if ((evt.keyCode == 13) && (node.type == "text")) {
                return false;
            }
        }

        document.onkeypress = stopRKey;
    </script>

    <script>
        function docprint() {
            alert("Did it print?");
            prompt("Do yo wish to continue");
        }
    </script>
    <?php

    //$country="";
    ?>


    <?php require("flforms/fbtstyles.php"); ?>
    <?php require("flforms/logincss.php"); ?>

    <?php // require("flforms/fbtpagestyles.php"); 
    ?>

    <?php require("flforms/fbtfunctions.php"); ?>
    <?php
    $today = new DateTime(date("Y-m-d"));
    $now_sec = date_timestamp_get($today);
    $fromdate_sec = $now_sec - (180 * 3600 * 24);
    ?>



</head>

<body style="color:grey">

    <?php include("navmenu.php"); ?>
    <form action="index.php" method="post">
        <?php
        if (isset($_POST['dashboard'])) {
            echo "
<section class='section-mob'>
";
            $title = 'Overall Dashboard';
            $dblink = 'dashboardcomp';
            $dblinkvalue = 'Switch to Company Dashboard';
            include('dashboard.php');
            echo "</section>";
        }
        ?>

        <?php
        if (isset($_POST['dashboardpbi'])) {
            echo "
<section class='section-mob'>
";
        ?>
            <div style="position: relative; width: 100%; height: 0; padding-bottom: 56.25%;margin-bottom:2rem">
                 <iframe title="Asset_Model_Tendayi"
                  src="https://app.powerbi.com/view?r=eyJrIjoiZDM0OGI5ODQtNThiNC00YjEwLWEzMGYtZjkxOGI4MDhmYzZiIiwidCI6ImJiNmVlMjIyLWUxZDQtNDc0NC1hNDU0LThlNDI0MjY1YjVjNCJ9"
                   frameborder="0" allowFullScreen="true"
                 style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                   </iframe>
            </div>

        <?php
            echo "</section>";
        }
        ?>




        <?php
        if (isset($_POST['dashboardcomp'])) {
            echo "
<section class='section-mob'>
";
            $title = $companydef . ' - ' . 'Company Dashboard';
            $dblink = 'dashboard';
            $dblinkvalue = 'Switch to Overall Dashboard';
            include('dashboard.php');
            echo "</section>";
        }
        ?>







    </form>
    <?php
    ?><form action="index.php" method="post">
        <div class="tr-div width-100" style="flex-direction:row;flex-wrap:nowrap">
            <div class="tr-div menu-ldiv" style="background-color:rgba(49,49,49);padding:1rem;flex-direction:column">
                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/db-icon.png" class="dbitem-icon"><span style="width:95%"><input type="submit" name="dashboard" value="Dashboard" class="dbmenu-link"></span></div>
                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/db-icon.png" class="dbitem-icon"><span style="width:95%"><input type="submit" name="dashboardpbi" value="Dashboard - Power BI" class="dbmenu-link"></span></div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/sysparam-icon.png" class="dbitem-icon"><span style="width:95%"><button type="button" class="dbmenu-link" onclick="openSysParams()"><span>System Parameters</span></button></span></div>
                <div id="SysParams" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">LOCATION DIMENSIONS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addcountry.php" class="dbsubmenu-link">Countries</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addregions.php" class="dbsubmenu-link">Regions</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addtowns.php" class="dbsubmenu-link">Towns</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addsuburbs.php" class="dbsubmenu-link">Suburbs</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">PEOPLE DIMENSIONS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addjobtitles.php" class="dbsubmenu-link">Job Titles</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addroles.php" class="dbsubmenu-link">Roles</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">COMPANY DIMENSIONS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/adddept.php" class="dbsubmenu-link">Departments</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/adddivision.php" class="dbsubmenu-link">Divisions</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addcompany.php" class="dbsubmenu-link">Companies</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addclient.php" class="dbsubmenu-link">Clients</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addsectors.php" class="dbsubmenu-link">Sectors</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">PARTNERS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addpartners.php" class="dbsubmenu-link">Business partners</a></li>
                    </ul>
                </div>
                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/assetreg-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openAssetReg()"><span>Asset Register</span></button></span></div>
                <div id="AssetReg" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">ASSET RECORDS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addassetHD.php" class="dbsubmenu-link">Add New Asset</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetregisterHD.php" class="dbsubmenu-link">Update Asset Details</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetregisterHD.php" class="dbsubmenu-link">View Asset Details</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">P A R A M E T E R S</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetclassHD.php" class="dbsubmenu-link">Maintain Asset Classes</a></li>
                    </ul>
                </div>



                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/inventory-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openAssetInventory()"><span>Inventory Reports</span></button></span></div>
                <div id="AssetInventory" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">ASSET INVENTORY</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/invAllHD.php" class="dbsubmenu-link">Overall Inventory</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/invLocHD.php" class="dbsubmenu-link">Inventory By Location</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/invCosHD.php" class="dbsubmenu-link">Inventory By Cost Center</a></li>
                    </ul>
                </div>


                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/verification-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openAssetVerification()"><span>Asset Verification</span></button></span></div>
                <div id="AssetVerification" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">T R A N S A C T I O N S</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/verificationHD.php" class="dbsubmenu-link">Enter Asset Verification</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/verificationVH.php" class="dbsubmenu-link">View Asset Verification</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                    </ul>
                </div>





                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/disposal-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openDepRepMenu()"><span>Depreciation Reports</span></button></span></div>
                <div id="DepRepMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">D E P R E C I A T I O N</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/depreportsHD.php" class="dbsubmenu-link">Depreciation Report</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">ASSET VALUATION</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/valuationHD.php" class="dbsubmenu-link">Valuation Reports</a></li>
                    </ul>
                </div>









                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/amo-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openArmoTization()"><span>Armotization Contracts</span></button></span></div>
                <div id="ArmoTization" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">CONTRACT MAINTENANCE</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/contractsHD.php" class="dbsubmenu-link">Create New Contract</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/contractsHD.php" class="dbsubmenu-link">Update Contract Details</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/contractsHD.php" class="dbsubmenu-link">Assign Contract Equipment</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/contractsHD.php" class="dbsubmenu-link">View Contract Details</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">T R A N S A C T I O N S</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Enter New Transaction</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Update Transactions</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">View Transactions</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">MANAGEMENT REPORTS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Transaction Reports</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Contract Status Reports</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Performance Reports</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">PARAMETERS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Contract Types</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Amortization Units</a></li>

                    </ul>
                </div>
                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/fsms-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openServiceDeskMenu()"><span>Field Service Management</span></button></span></div>
                <div id="ServiceDeskMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">SERVICE DESK</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintlogHD.php" class="dbsubmenu-link">Log New Call</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintenanceHD.php" class="dbsubmenu-link">Update Call</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintallocHD.php" class="dbsubmenu-link">Allocate Jobs</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/jobscheduleHD.php" class="dbsubmenu-link">Job Scheduling</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintenquiryHD.php" class="dbsubmenu-link">Job Enquiries</a></li>
                        <!--                        <li  class="listitem-div" style="background-color:lavender"><x class="dbsubmenu-link" style="color:black">FIELD SERVICE REPORTS</x></li>
                        <li  class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Call Reports</a></li>
                        <li  class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Performance Metrics</a></li> -->
                    </ul>
                </div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/mainticon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openMaintMenu()"><span>Maintenance</span></button></span></div>
                <div id="MaintMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">JOB CARD MAINTENANCE</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintlogHD.php" class="dbsubmenu-link">Create New Job Card</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintenanceHD.php" class="dbsubmenu-link">Update Job cards</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintenanceHD.php" class="dbsubmenu-link">View Job cards</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/fixjobdetails.php" class="dbsubmenu-link">Fix Job Stats</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">MAINTENANCE REPORTS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintrepPH.php" class="dbsubmenu-link">Job Allocation Reports</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintrepPH.php" class="dbsubmenu-link">Job Card Reports</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/maintrepPH.php" class="dbsubmenu-link">Maintenance History</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Parts Usage & Labour</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Failure Analysis Reports</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Performance Metrics</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">PARAMETERS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addfaultcodes.php" class="dbsubmenu-link">Fault Codes</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/adddiagcodes.php" class="dbsubmenu-link">Diagnosis Codes</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addfixcodes.php" class="dbsubmenu-link">Fix Codes</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addcallcategory.php" class="dbsubmenu-link">Call Categories</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/addmainttype.php" class="dbsubmenu-link">Maintenance Types</a></li>
                    </ul>
                </div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/schedule-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openMaintSchMenu()"><span>Maintenance Schedules</span></button></span></div>
                <div id="MaintSchMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">MAINTENANCE SCHEDLUES</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Automated Schedules</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Create Manual Schedules</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Update Manual Schedules</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">View Maintenance Schedules</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">PARAMETERS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Enable/ Disable Auto Scheduling</a></li>
                    </ul>
                </div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/utilisation-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openUtilisationMenu()"><span>Utilisation & Availability Status</span></button></span></div>
                <div id="UtilisationMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">UTILIZATION DATA</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/utilisationAH.php" class="dbsubmenu-link">Add Activity Details</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/utilisationHD.php" class="dbsubmenu-link">Update Activity Details</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/utilisationRH.php" class="dbsubmenu-link">Utilisation Reports</a></li>
                        <!--                        <li  class="listitem-div" style="background-color:lavender"><x class="dbsubmenu-link" style="color:black">AVAILABILITY STATUS</x></li>
                        <li  class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Update Availability Status</a></li>
                        <li  class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">View Availability Status</a></li>  -->
                    </ul>
                </div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/assmove-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openAssetMovement()"><span>Asset Movements</span></button></span></div>
                <div id="AssetMovement" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">T R A N S A C T I O N S</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/voucherassetHD.php" class="dbsubmenu-link">Create Asset Movement</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetmovementHD.php" class="dbsubmenu-link">Update Asset Movements</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetmovementVH.php" class="dbsubmenu-link">View Asset Movements</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">MOVEMENT REPORTS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assmovementrepPH.php" class="dbsubmenu-link">Asset Movement History</a></li>
                    </ul>
                </div>


                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/disposal-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openAssetDisposal()"><span>Asset Disposal</span></button></span></div>
                <div id="AssetDisposal" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">T R A N S A C T I O N S</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/voucherdisposalHD.php" class="dbsubmenu-link">Create Asset Disposal</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetdisposalHD.php" class="dbsubmenu-link">Update Asset Disposal</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assetdisposalVH.php" class="dbsubmenu-link">View Asset Disposal</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">DISPOSAL REPORTS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/assdisposalrepPH.php" class="dbsubmenu-link">Asset Disposal Reports</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">P A R A M E T E R S</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Disposal Methods</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Reasons For Disposal</a></li>
                    </ul>
                </div>


                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/staffac-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openStaffAccounts()"><span>Staff Accounts</span></button></span></div>
                <div id="StaffAccounts" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div"><a href="http://www.flexyasset.com/registerstaff.php" class="dbsubmenu-link">Add New Employee</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/updatestaffHD.php" class="dbsubmenu-link">Update Employee Details</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Job Titles</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/adddept.php" class="dbsubmenu-link">Departments</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/accountupdate.php" class="dbsubmenu-link">Update Own Account</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/passwordchange.php" class="dbsubmenu-link">Change Own Password</a></li>
                    </ul>
                </div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/bulletin-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openBulletinMenu()"><span>Bulletin Board</span></button></span></div>
                <div id="BulletinMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">BULLETIN MAINTENANCE</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Create Notices</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Update Notices</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">View Bulletin Board</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">PARAMETERS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Notice Categories</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Audience Codes</a></li>
                    </ul>
                </div>

                <div class="td-div menuitemdb-div" style="height:2rem"><img src="images/icons/todo-icon.png" class="dbitem-icon"><span style="width:90%"><button type="button" class="dbmenu-link" onclick="openToDoMenu()"><span>To-Do List</span></button></span></div>
                <div id="ToDoMenu" style="margin-left:8%">
                    <ul class="dbsubmenu-params" style="margin-top:0;padding-top:0">
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">ASSIGNED TASKS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">View My To-Do List</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Update Action Items</a></li>
                        <li class="listitem-div" style="background-color:lavender">
                            <x class="dbsubmenu-link" style="color:black">CREATE/ ASSIGN TASKS</x>
                        </li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Create To-Do Item</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">Update To-Do Item</a></li>
                        <li class="listitem-div"><a href="http://www.flexyasset.com/flforms/reportsPH.php" class="dbsubmenu-link">View To-Do Items</a></li>
                    </ul>
                </div>



                <div style="height:1rem;width:100%;background:none"></div>
                <section class="section-pc">
                    <div style="background:rgba(76,76,76);padding:0.5rem;text-align:center;margin-top:1rem;color:rgba(255,255,255,0.6)">
                        <small>
                            Foundation For Business Technology cc<br>
                            Email: fbt@iway.na<br>
                            Mobile: +264 81 255 0417
                        </small>
                    </div>
                </section>

            </div>

    </form>
    <div class="menu-rdiv">
<!-- LINK FOR SENDING https://app.powerbi.com/view?r=eyJrIjoiZDM0OGI5ODQtNThiNC00YjEwLWEzMGYtZjkxOGI4MDhmYzZiIiwidCI6ImJiNmVlMjIyLWUxZDQtNDc0NC1hNDU0LThlNDI0MjY1YjVjNCJ9   -->
        <?php
        if (isset($_POST['dashboard'])) {
            echo "
<section class='section-pc'>
";
            $title = 'Overall Dashboard';
            $dblink = 'dashboardcomp';
            $dblinkvalue = 'Switch to Company Dashboard';
            include('dashboardstaff.php');
            echo "</section>";
        }
        ?>


        <?php
        if (isset($_POST['dashboardpbi'])) {
            echo "
<section class='section-pc'>

<div width=100%>
";
        ?>

            
<!--   <iframe title="Asset_Model_Tendayi" width="1140" height="541.25" src="https://app.powerbi.com/view?r=eyJrIjoiZDM0OGI5ODQtNThiNC00YjEwLWEzMGYtZjkxOGI4MDhmYzZiIiwidCI6ImJiNmVlMjIyLWUxZDQtNDc0NC1hNDU0LThlNDI0MjY1YjVjNCJ9" frameborder="0" allowFullScreen="true"></iframe> -->
       <iframe title="Asset_Model_Tendayi" width="1140" height="541.25" src="https://app.powerbi.com/view?r=eyJrIjoiZDM0OGI5ODQtNThiNC00YjEwLWEzMGYtZjkxOGI4MDhmYzZiIiwidCI6ImJiNmVlMjIyLWUxZDQtNDc0NC1hNDU0LThlNDI0MjY1YjVjNCJ9" frameborder="0" allowFullScreen="true"></iframe>
    </div>
<?php
        }
?>





<?php
if (isset($_POST['dashboardcomp'])) {
    echo "
<section class='section-pc'>
";
    $title = $companydef . ' - ' . 'Company Dashboard';
    $dblink = 'dashboard';
    $dblinkvalue = 'Switch to Overall Dashboard';
    include('dashboardstaff.php');
    echo "</section>";
}
?>

<?php
if (!isset($_POST['dashboard'])) {
?>
    <section class="section-pc">
        <div class="landing-div">
            <div class="cardmaster">
                <div style="margin-bottom:2rem"><img src="images/flexy-asset-logo.png" style="width:25%;margin:1rem 0 0 1rem"></div>

                <h3 style="text-align:justify;margin-top:2rem;padding-left:2rem;color:darkslategrey">Introducing the Next-Generation Asset Lifecycle Management System</h3>
                <div>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-left:2rem;padding-left:2rem">
                        <li>Maximize Performance - Minimize Cost</li>
                        <li>Manage all operational aspects of Fixed Asset Management</li>
                        <li>Centralised, Accurate Asset Register</li>
                        <li>A Multidimensional, Hierarchical Asset Classification Model that can handle complex Asset Relationships</li>
                        <li>Unlimited visibility into Asset Performance and Lifecycle Costs</li>
                        <li>Proactive Maintenance Regime</li>
                        <li>Automated Financial Calculations (Depreciation, Amortization, Asset Valuation)</li>
                        <li>Manage Contract Hire, Amortization Contracts and Schedules</li>
                        <li>Warranty and Guarantee Management & Tracking</li>
                        <li>Record and keep track of all Asset Assignments/ Designation, Transfers and re-allocation</li>
                        <li>Asset Inventory by Location and Designation</li>
                        <li>Record Asset Utilization, Downtime/ Idle Time and obtain Utilization Metrics</li>
                    </ul>
                </div>

                <h5 style="text-align:center;font-weight:normal;color:(0,0,0,0.8)">This is a DEMO site of the Asset Management System. Feel Free to explore all the aspects of the system. Many more features are yet to be added as the site is still under development.</h5>
                <br>
            </div>


            <div class="cardmaster">
                <h3 style="text-align:justify;margin-top:2rem;color:gold;letter-spacing:0.2rem;padding-left:2rem">SYSTEM DEPLOYMENT OPTIONS</h3>
                <div style="line-height:150%;color:rgba(76,76,76);padding-left:2rem">The system is fully customisable to match your unique operational requirements. As a result, it can be deployed separately for each client <br>
                    on unique, private domain. This private installation gives you:</div>
                <div style="line-height:160%;color:rgba(76,76,76);margin-left:2rem;padding-left:2rem">
                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">ENHANCED DATA SECURITY</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>Full control over your data</li>
                        <li>No risk of cross-tenant data leakage as in shared environments.</li>
                        <li>Easier compliance with data protection regulations</li>
                    </ul>
                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">BRANDED EXPERIENCE</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>The system can reflect your corporate identity (logo, colors, domain)</li>
                        <li>Increases staff trust and adoption when the tool looks like it is part of the company.</li>
                    </ul>

                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">CUSTOMISATION FLEXIBILITY</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>You can request custom workflows, fields, or reports tailored to your internal processes—without affecting other clients.</li>
                        <li>Allows easier integration with your internal systems (e.g., HR, ERP).</li>
                    </ul>


                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">PERFORMANCE OPTIMIZATION</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>Dedicated resources can be allocated for each client, avoiding slowdowns due to other tenants' usage spikes.</li>
                        <li>Optimized for specific asset volumes, locations, or maintenance routines.</li>
                    </ul>


                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">INDEPENDENT DOMAIN ACCESS</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>You can register and use your own unique URLs</li>
                        <li>This gives a professional touch and integrates seamlessly with your IT ecosystem.</li>
                    </ul>


                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">SCALABILITY AND CONTROL</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>Each organization can scale storage, user access, and features at their own pace.</li>
                        <li>Admins have deeper control over user permissions, backups, and retention policies.</li>
                    </ul>


                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">FASTER SUPPORT AND MAINTENANCE</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>Issues can be debugged and patched without affecting other clients.</li>
                        <li>Easier to apply client-specific updates or modules.</li>
                        <li>We can train your own IT staff to provide first line support and perform basic maintenance tasks</li>
                    </ul>

                    <DIV style="background-color:rgba(76,76,76);color:white;width:45%;padding:0.2rem 0.5rem;margin-top:1rem">COMPLIANCE WITH INTERNAL IT POLICIES</DIV>
                    <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0">
                        <li>Some organizations (especially in finance, oil, or government sectors) require internal hosting or control over the software environment.</li>
                        <li>A private installation can satisfy audits or ISO requirements more easily.</li>
                    </ul>

                </div>
                <br>
                <div style="text-align:center;font-size:0.8rem;color:rgba(76,76,76)">Contact us today to discuss your options. <span style="margin:0 1rem">Email:</span><a href="mailto:fbt@iway.na" class='link-text' style="letter-spacing:0.2rem">fbt@iway.na</a><span style="letter-spacing:0.2rem;margin-left:2rem">Mobile: +264812550417</span></div>
                <br>
            </div>

        <?php } ?>

        </div>


    </section>

    </div>

    </div>


    <section class="section-mob">
        <div class="landing-div">
            <div class="cardmaster">
                <div><img src="images/flexy-asset-logo.png" style="width:40%;margin:1rem 0 0 1rem""></div>
        <h3  style=" text-align:justify;margin-top:2rem;padding:0 0.5rem;color:darkslategrey">Introducing the Next-Generation Asset Lifecycle Management System</h3>
                    <ul style="line-height:150%;color:rgba(76,76,76);margin-left:2rem;padding:0 0.5rem">
                        <li>Maximize Performance - Minimize Cost</li>
                        <li>Manage all operational aspects of Fixed Asset Management</li>
                        <li>Centralised, Accurate Asset Register</li>
                        <li>A Multidimensional, Hierarchical Asset Classification Model that can handle complex Asset Relationships</li>
                        <li>Unlimited visibility into Asset Performance and Lifecycle Costs</li>
                        <li>Proactive Maintenance Regime</li>
                        <li>Automated Financial Calculations (Depreciation, Amortization, Asset Valuation)</li>
                        <li>Manage Contract Hire, Amortization Contracts and Schedules</li>
                        <li>Warranty and Guarantee Management & Tracking</li>
                        <li>Record and keep track of all Asset Assignments/ Designation, Transfers and re-allocation</li>
                        <li>Asset Inventory by Location and Designation</li>
                        <li>Record Asset Utilization, Downtime/ Idle Time and obtain Utilization Metrics</li>
                    </ul>
                    <div style="line-height:150%;color:rgba(76,76,76);margin-left:2rem;padding:0 0.5rem">The system is fully customisable to match your unique operational requirements.</div>
                    <h5 style="text-align:justify;padding:0 0.5rem;margin-bottom:1rem">This is a DEMO site of the Asset Management System. Feel Free to explore all the aspects of the system. Many more features are yet to be added as the site is still under development.</h5>
                </div>



                <div class="cardmaster" style="margin-top:1rem">
                    <h3 style="text-align:left;margin-top:2rem;color:darkslategrey;letter-spacing:0.2rem;padding:0 0.5rem">SYSTEM DEPLOYMENT OPTIONS</h3>
                    <div style="line-height:150%;color:rgba(76,76,76);padding:0 0.5rem">The system is fully customisable to match your unique operational requirements. As a result, it can be deployed separately for each client <br>
                        on unique, private domain. This private installation gives you:</div>
                    <div>
                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">ENHANCED DATA SECURITY</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>Full control over your data</li>
                            <li>No risk of cross-tenant data leakage as in shared environments.</li>
                            <li>Easier compliance with data protection regulations</li>
                        </ul>
                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">BRANDED EXPERIENCE</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>The system can reflect your corporate identity (logo, colors, domain)</li>
                            <li>Increases staff trust and adoption when the tool looks like it is part of the company.</li>
                        </ul>

                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">CUSTOMISATION FLEXIBILITY</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>You can request custom workflows, fields, or reports tailored to your internal processes—without affecting other clients.</li>
                            <li>Allows easier integration with your internal systems (e.g., HR, ERP).</li>
                        </ul>



                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">PERFORMANCE OPTIMIZATION</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>Dedicated resources can be allocated for each client, avoiding slowdowns due to other tenants' usage spikes.</li>
                            <li>Optimized for specific asset volumes, locations, or maintenance routines.</li>
                        </ul>


                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">INDEPENDENT DOMAIN ACCESS</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>You can register and use your own unique URLs</li>
                            <li>This gives a professional touch and integrates seamlessly with your IT ecosystem.</li>
                        </ul>


                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">SCALABILITY AND CONTROL</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>Each organization can scale storage, user access, and features at their own pace.</li>
                            <li>Admins have deeper control over user permissions, backups, and retention policies.</li>
                        </ul>


                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">FASTER SUPPORT AND MAINTENANCE</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>Issues can be debugged and patched without affecting other clients.</li>
                            <li>Easier to apply client-specific updates or modules.</li>
                            <li>We can train your own IT staff to provide first line support and perform basic maintenance tasks</li>
                        </ul>

                        <DIV style="background-color:rgba(76,76,76);color:white;width:100%;padding:0.2rem 0.5rem;margin-top:1rem">COMPLIANCE WITH INTERNAL IT POLICIES</DIV>
                        <ul style="line-height:160%;color:rgba(76,76,76);margin-top:0;padding:0 0.5rem;margin-left:2rem">
                            <li>Some organizations (especially in finance, oil, or government sectors) require internal hosting or control over the software environment.</li>
                            <li>A private installation can satisfy audits or ISO requirements more easily.</li>
                        </ul>


                    </div>
                    <div style="text-align:center;font-size:0.8rem;color:rgba(76,76,76);letter-spacing:0.1rem;line-height:170%">Contact us today to discuss your options.</div>

                    <div style="text-align:center;font-size:0.8rem;color:rgba(76,76,76);letter-spacing:0.2rem;line-height:170%"><span style="margin-right:1rem">Email:</span><a href="mailto:fbt@iway.na" class='link-text' style="letter-spacing:0.2rem">fbt@iway.na</a></div>

                    <div style="text-align:center;font-size:0.8rem;color:rgba(76,76,76);letter-spacing:0.2rem;line-height:170%">Mobile: +264812550417</div>
                    <br>
                </div>

            </div>
    </section>



    <?php

    if (isset($_POST['add'])) {
        $conn = customstyles();


        $mission = $_POST['mission'];
        $subregion = $_POST['subregion'];


        $sql = "INSERT INTO mission " . "(mission, subregion) " . "
 VALUES('$mission', '$subregion')";


        if (!headers_sent()) {
            header("Location: http://www.flexyasset.com/index.php");
        } else {
    ?>

            <script>
                document.location.href = "http://www.flexyasset.com/index.php";
            </script>
            <!-- <a href="http://www.flexyasset.com/bctmain.php/">http://www.flexyasset.com/bctmain.php</a> -->
    <?php
        }
        $retval = mysqli_query($conn, $sql);
        if (! $retval) {
            die('Could not add the record : ' . mysqli_error($conn));
        } else {
            echo "Record Saved successfully\n";
        }




        mysqli_close($conn);
    }

    ?>





    <?php
    if (isset($_POST['saveassignment'])) {
        echo '<h1>SAVING ASSIHNMENT</h1>';
        $conn = customstyles();
        $appref = $_POST['appref'];
        //  $assignedto = $_POST['assignedto'];
        $userref = 'userref';

        $_SESSION['appref'] = $appref;

        $querycustomerud = mysqli_query($conn, "update applications set assignedto ='TINDO' ");


        if (!headers_sent()) {
            header("Location: http://www.flexyasset.com/flforms/index.php");
        } else {
    ?>

            <script type="text/javascript">
                document.location.href = "http://www.flexyasset.com/flforms/index.php";
            </script>
            <!-- <a href="http://www.flexyasset.com/bctmain.php/">http://www.flexyasset.com/bctmain.php</a> -->

    <?php

        }
    }
    ?>





    <script>
        function openSysParams() {
            document.getElementById("SysParams").style.display = "flex";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";

        }

        function openAssetReg() {
            document.getElementById("AssetReg").style.display = "flex";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }

        function openArmoTization() {
            document.getElementById("ArmoTization").style.display = "flex";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }

        function openMaintMenu() {
            document.getElementById("MaintMenu").style.display = "flex";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }

        function openAssetMovement() {
            document.getElementById("AssetMovement").style.display = "flex";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }

        function openStaffAccounts() {
            document.getElementById("StaffAccounts").style.display = "flex";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }

        function openAssetInventory() {
            document.getElementById("AssetInventory").style.display = "flex";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }

        function openAssetDisposal() {
            document.getElementById("AssetDisposal").style.display = "flex";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }



        function openServiceDeskMenu() {
            document.getElementById("ServiceDeskMenu").style.display = "flex";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }



        function openMaintSchMenu() {
            document.getElementById("MaintSchMenu").style.display = "flex";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }


        function openUtilisationMenu() {
            document.getElementById("UtilisationMenu").style.display = "flex";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }



        function openBulletinMenu() {
            document.getElementById("BulletinMenu").style.display = "flex";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }


        function openToDoMenu() {
            document.getElementById("ToDoMenu").style.display = "flex";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }




        function openDepRepMenu() {
            document.getElementById("DepRepMenu").style.display = "flex";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
            document.getElementById("AssetVerification").style.display = "none";
        }





        function openAssetVerification() {
            document.getElementById("AssetVerification").style.display = "flex";
            document.getElementById("DepRepMenu").style.display = "none";
            document.getElementById("ToDoMenu").style.display = "none";
            document.getElementById("BulletinMenu").style.display = "none";
            document.getElementById("UtilisationMenu").style.display = "none";
            document.getElementById("AssetDisposal").style.display = "none";
            document.getElementById("AssetInventory").style.display = "none";
            document.getElementById("StaffAccounts").style.display = "none";
            document.getElementById("AssetMovement").style.display = "none";
            document.getElementById("MaintMenu").style.display = "none";
            document.getElementById("ArmoTization").style.display = "none";
            document.getElementById("SysParams").style.display = "none";
            document.getElementById("AssetReg").style.display = "none";
            document.getElementById("ServiceDeskMenu").style.display = "none";
            document.getElementById("MaintSchMenu").style.display = "none";
        }






        <?php
        $conn = customstyles();

        if (isset($_POST['gohome'])) {

            if (!headers_sent()) {
                header("Location: http://www.flexyasset.com/index.php");
            } else {
        ?>

                    <
                    script type = "text/javascript" >
                    document.location.href = "http://www.flexyasset.com/index.php";
    </script>
    <!-- <a href="http://www.flexyasset.com/bctmain.php/">http://www.flexyasset.com/bctmain.php</a> -->
<?php
            }
        }
?>



<?php
$conn = customstyles();

if (isset($_POST['refreshutilisationHD'])) {

    if (!headers_sent()) {
        header("Location: http://www.flexyasset.com/flforms/utilisationHD.php");
    } else {
?>

        <script type="text/javascript">
            document.location.href = "http://www.flexyasset.com/flforms/utilisationHD.php";
        </script>
<?php
    }
}
?>

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
    session_destroy();

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


<?php

if (isset($_POST['addtowns'])) {
    $conn = customstyles();

    $city = $_POST['city'];
    $region = $_POST['region'];

    if ($city > '0') {
        $query2 = mysqli_query($conn, "select * from regions where region = '$region'");
        while ($row2 = mysqli_fetch_array($query2)) {
            $countrycode = $row2['country'];

            $sql = mysqli_query($conn, "INSERT INTO cities " . "(city, region, country) " . "
 VALUES('$city', '$region', '$countrycode')");


            if (!headers_sent()) {
                header("Location: http://www.flexyasset.com/flforms/addtowns.php");
            } else {
?>

                <script>
                    document.location.hregref = "http://www.flexyasset.com/flforms/addtowns.php";
                </script>
                <!-- <a hregref="http://www.flexyasset.com/bctmain.php/">http://www.flexyasset.com/bctmain.php</a> -->
<?php
            }
        }
    }
}
?>


<?php
$conn = customstyles();

if (isset($_POST['GTinvLocHD'])) {

    if (!headers_sent()) {
        header("Location: http://www.flexyasset.com/forms/invLocHD.php");
    } else {
?>

        <script type="text/javascript">
            document.location.href = "http://www.flexyasset.com/forms/invLocHD.php";
        </script>
        <!-- <a href="http://www.flexyasset.com/bctmain.php/">http://www.flexyasset.com/bctmain.php</a> -->
<?php
    }
}
?>


</script>
<section class="section-mob">
    <div style="background-color:rgba(76,76,76);padding:0.5rem;text-align:center;margin-top:1rem;color:rgba(255,255,255,0.6)">
        <small>
            Foundation For Business Technology cc<br>
            Email: fbt@iway.na<br>
            Mobile: +264 81 255 0417
        </small>
    </div>
</section>
</body>

</html>