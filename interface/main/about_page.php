<?php

/**
 * OpenEMR About Page
 *
 * This Displays an About page for OpenEMR Displaying Version Number, Support Phone Number
 * If it have been entered in Globals along with the Manual and On Line Support Links
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Terry Hill <terry@lilysystems.com>
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2016 Terry Hill <terry@lillysystems.com>
 * @copyright Copyright (c) 2017 Brady Miller <brady.g.miller@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

// TODO: jQuery UI Removal


require_once("../globals.php");

use OpenEMR\Core\Header;
use OpenEMR\Services\VersionService;

?>
<html>
<head>

    <?php Header::setupHeader(); ?>
    <title><?php echo xlt("About");?> Apium Healthcare</title>
    <style>
        .donations-needed {
            margin-top: 25px;
            margin-bottom: 25px;
            color: #c9302c;
        }
        .donations-needed a, .donations-needed a:visited,
        .donations-needed a:active {
            color: #c9302c;
        }
        .donations-needed a.btn {
            color: #c9302c;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
            animation: all 2s;
        }
        .donations-needed a.btn:hover {
            background-color: #c9302c;
            color: #fff;
        }
        .donations-needed .btn {
            border-radius: 8px;
            border: 2px solid #c9302c;
            color: #c9302c;
            background-color: transparent;
        }
    </style>

    <script type="text/javascript">

    </script>
</head>
<?php
$versionService = new VersionService();
$version = $versionService->fetch();
?>
<body class="body_top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <div class="page-header">
                <style type="text/css">
                        #element1 {display:inline-block;margin-right:10px;}
                        #element2 {display:inline-block; color:#FF0000;} 
                    </style>
                    <div  style="text-align: center;">
                    <div id="element1">
                       <h1>About Apium</h1>
                    </div>
                    <div id="element2">
                        <h1>Healthcare</h1>
                    </div>
                    </div>
                </div>
                <img src="./tabs/Apium_helth_logo.png" height="100" width="100" >
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>




</body>
</html>
