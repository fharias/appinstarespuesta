<?php
/**
 * footer.php
 *
 * Author: pixelcave
 *
 * The footer of the page
 * Jquery library as well as all other scripts are included here
 *
 */
?>
    <!-- Footer -->
    <footer>
        <div class="pull-right">
            Crafted with <i class="icon-heart"></i> by <strong><a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a></strong>
        </div>
        <div class="pull-left">
            <span id="year-copy"></span> &copy; <strong><a href="http://goo.gl/mssAH" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a></strong>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Scroll to top link, check main.js - scrollToTop() -->
<a href="#" id="to-top"><i class="icon-chevron-up"></i></a>

<!-- User Modal Account, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
<div id="modal-user-account" class="modal fade">
    <!-- Modal Dialog -->
    <div class="modal-dialog">
        <!-- Modal Content -->
        <div class="modal-content">
            <!-- Modal Body -->
            <div class="modal-body remove-padding">
                <!-- Modal Tabs -->
                <div class="block-tabs block-themed">
                    <div class="block-options">
                        <a href="javascript:void(0)" class="btn btn-option" data-dismiss="modal">×</a>
                    </div>
                    <ul class="nav nav-tabs" data-toggle="tabs">
                        <li class="active"><a href="#modal-user-account-account"><i class="icon-cog"></i> Account</a></li>
                        <li><a href="#modal-user-account-profile"><i class="icon-user"></i> Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- Account Tab Content -->
                        <div class="tab-pane active" id="modal-user-account-account">
                            <form action="index.php" method="post" class="form-horizontal" onsubmit="return false;">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Username</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">admin</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-account-email">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" id="modal-account-email" name="modal-account-email" class="form-control" value="admin@exampleapp.com">
                                    </div>
                                </div>
                                <h4 class="sub-header">Change Password</h4>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-account-pass">Current Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="modal-account-pass" name="modal-account-pass" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-account-newpass">New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="modal-account-newpass" name="modal-account-newpass" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-account-newrepass">Retype New Password</label>
                                    <div class="col-md-8">
                                        <input type="password" id="modal-account-newrepass" name="modal-account-newrepass" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Account Tab Content -->

                        <!-- Profile Tab Content -->
                        <div class="tab-pane" id="modal-user-account-profile">
                            <form action="index.php" method="post" class="form-horizontal" onsubmit="return false;">
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-profile-name">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" id="modal-profile-name" name="modal-profile-name" class="form-control" value="John Doe">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-profile-gender">Gender</label>
                                    <div class="col-md-4">
                                        <select id="modal-profile-gender" name="modal-profile-name" class="form-control">
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-profile-birthdate">Birthdate</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" id="modal-profile-birthdate" name="modal-profile-birthdate" class="form-control input-datepicker-close">
                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4" for="modal-profile-bio">Bio</label>
                                    <div class="col-md-8">
                                        <textarea id="modal-profile-bio" name="modal-profile-bio" class="form-control" rows="3" placeholder="Bio Information.."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Profile Tab Content -->
                    </div>
                </div>
                <!-- END Modal Tabs -->
            </div>
            <!-- END Modal Body -->

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal"><i class="icon-save"></i> Save</button>
            </div>
            <!-- END Modal footer -->
        </div>
        <!-- END Modal Content -->
    </div>
    <!-- END Modal Dialog -->
</div>
<!-- END User Modal Settings -->

<!-- Excanvas for Flot (Charts plugin) support on IE8 -->
<!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<!-- Get Jquery library from Google but if something goes wrong get Jquery from local file - Remove 'http:' if you have SSL -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js -->
<script src="js/vendor/bootstrap.min.js"></script>

<!-- Jquery plugins and custom javascript code -->
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>