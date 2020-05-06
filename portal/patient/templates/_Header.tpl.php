<?php

/**
 * _Header.tpl.php
 *
 * @package   OpenEMR
 * @link      https://www.open-emr.org
 * @author    Jerry Padgett <sjpadgett@gmail.com>
 * @copyright Copyright (c) 2016-2020 Jerry Padgett <sjpadgett@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

use OpenEMR\Core\Header;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title><?php $this->eprint($this->title); ?></title>
        <meta http-equiv="X-Frame-Options" content="deny" />
        <base href="<?php $this->eprint($this->ROOT_URL); ?>" />
        <meta name="description" content="Patient Portal" />
        <meta name="author" content="Form | sjpadgett@gmail.com" />
        <?php Header::setupHeader(['no_main-theme', 'patientportal-style', 'opener', 'fontawesome', 'datetime-picker']); ?>
        <script type="text/javascript" src="<?php echo $GLOBALS['web_root']; ?>/portal/patient/scripts/libs/LAB.min.js"></script>
        <script type="text/javascript">
            $LAB.script("<?php echo $GLOBALS['assets_static_relative']; ?>/jquery/dist/jquery.min.js").wait()
                .script("<?php echo $GLOBALS['assets_static_relative']; ?>/bootstrap/dist/js/bootstrap.bundle.min.js")
                .script("<?php echo $GLOBALS['assets_static_relative']; ?>/moment/moment.js")
                .script("<?php echo $GLOBALS['assets_static_relative']; ?>/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js")
                .script("<?php echo $GLOBALS['assets_static_relative']; ?>/underscore/underscore-min.js").wait()
                .script("<?php echo $GLOBALS['assets_static_relative']; ?>/backbone/backbone-min.js")
                .script("<?php echo $GLOBALS['web_root']; ?>/portal/patient/scripts/app.js?v=<?php echo $GLOBALS['v_js_includes']; ?>")
                .script("<?php echo $GLOBALS['web_root']; ?>/portal/patient/scripts/model.js?v=<?php echo $GLOBALS['v_js_includes']; ?>").wait()
                .script("<?php echo $GLOBALS['web_root']; ?>/portal/patient/scripts/view.js?v=<?php echo $GLOBALS['v_js_includes']; ?>").wait()
        </script>
    </head>

    <body>
        <div class="navbar navbar-default fixed-top">
            <div class="container">
                    <div class="navbar-header"><a class="navbar-brand" href="./"><?php echo xlt('Home'); ?></a>
                        <a class="navbar-toggler btn-secondary" data-toggle="collapse" data-target=".navbar-collapse"><span class="navbar-toggler-icon"></span></a>
                        </div>
                        <div class="container">
                        <div class="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <!-- reserved -->
                                </ul>
                            <ul class="nav float-right navbar-nav">
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i> <?php echo xlt('Login'); ?> <i class="caret"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./loginform"><?php echo xlt('Login'); ?></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="./secureuser"><?php echo xlt('Patient Dashboard'); ?><i class="icon-lock"></i></a></li>
                                    <li><a class="dropdown-item" href="./secureadmin"><?php echo xlt('Provider Dashboard'); ?><i class="icon-lock"></i></a></li>
                                </ul>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
