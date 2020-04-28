<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php";
secure_session();

$d = (object) get_user_details($_SESSION['full-name']);
?>
    <!-- Main Container -->
    <div class="container-fluid w_tintBg">
        <div id="drag-region">
            <h4 class="w_baseBlue center w_accentOrange_text" style="margin: 0 auto; padding: 0; position:absolute; top: 0; left: 0; right: 0;">

                <div class="section"></div>
                <?php echo $d->name;?>

                <i class="material-icons modal-close hide-on-small-only" style="float:right; margin-right: 65px; margin-left: -70px;">close</i>

                <div class="section"></div>
            </h4>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="container-fluid">
                <div class="section"></div>
                <div class="row">
                    <div class="section">&nbsp;</div>

                    <div class="col s12 user-data w_baseBlue_text">
                        <h5 class="center">Profile Info</h5>
                        <div class="divider"></div>

                        <!-- Username -->
                        <p class="col s5 m5" style="text-align:right;">
                            <b>Username:</b>
                        </p>
                        <p class="col s7 m7" style="text-align:left;">
                            <?php echo $_SESSION['user-name'];?>
                        </p>

                        <!-- Member ID Number -->
                        <p class="col s5 m5" style="text-align:right;">
                            <b>Member ID:</b>
                        </p>
                        <p class="col s7 m7" style="text-align:left;">
                            <?php echo $_SESSION['mem-id']; ?>
                        </p>

                        <!-- User Email -->
                        <p class="col s5 m5" style="text-align:right;">
                            <b>Current Email:</b>
                        </p>
                        <p class="col s7 m7" style="text-align:left;">
                            <?php echo $d->user_email;?>
                        </p>
                    </div>
                    <div class="col s12 last-login w_baseBlue_text">
                        <h5 class="center">Last Login</h5>
                        <div class="divider"></div>

                        <!-- Last Login Date -->
                        <p class="col s5 m5" style="text-align:right;">
                            <b>Time:</b>
                        </p>
                        <p class="col s7 m7" style="text-align:left;">
                            <?php echo $d->last_login_date;?>
                        </p>

                        <!-- Last Login Address -->
                        <p class="col s5 m5" style="text-align:right;">
                            <b>Last Address:</b>
                        </p>
                        <p class="col s7 m7" style="text-align:left;">
                            <?php echo $d->last_login_ip;?>
                        </p>

                        <div class="col s12 divider"></div>

                        <!-- Date Registered -->
                        <p class="col s10 offset-s1 m10 offset-m1" style="text-align:center;">
                            This Account was created <b>
                            <?php echo $d->date_registered; ?>
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
