<?php ?>
<style>

    .list-icon {
        padding-right: 5px;
    }

</style>
<section class="page-title bg-color-1 text-center">
    <div class="auto-container">
        <div class="content-box">
            <h1>Delete User</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Delete user</li>
            </ul>
        </div>
    </div>
</section>


<section class="sidebar-page-container blog-grid">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-2 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>SUPPORT</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="clearfix">
                                <li><a href="blog-grid.html">CASE MANAGEMENT</a></li>
                                <li><a href="blog-grid.html">SAVED CASES</a></li>
                                <li><a href="blog-grid.html">USER MANAGEMENT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 content-column" style="padding: 0px 50px 0px 50px;">
                <div id="content_block_01">
                    <div class="content-box">
                        <div class="sec-title wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        </div>
                        <div class="text wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <li>Admins can delete user profiles if the user no longer uses the system. To delete a user profile, follow these steps:</li>
                        </div>
                        <ul class="clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li><strong>1. Locate Users:</strong> From the dashboard, click on ‘User Management’ located on the top bar.</li>
                            <br>
                            <li><strong>2. Locate specific user:</strong> rom the list of users, find the user you want to delete and press the ‘Delete’ button.</li>
                            <br>
                            <li><strong>3. Update Password: </strong>Press ‘OK’ to pop up that occurs (see below). A message saying “The user has been deleted” will occur.</li>
                            <br>
                            <li><strong>4. Confirmation: </strong> Click on ‘Save’ button. Message saying “The user has been saved” will occur.</li>
                            <br>
                            <img src="<?= $this->Url->image('/img/support/3_deleteuser.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                            <br>
                            <li>
                                You have now successfully deleted a user.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>








