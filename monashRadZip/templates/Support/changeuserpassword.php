<?php ?>

<style>

    .list-icon {
        padding-right: 5px;
    }

    .list-padding{
        padding-left: 20px;
    }

    .list-current, .sidebar-page-container .sidebar .sidebar-categories .widget-content li a.list-current    {
        color: #6377ee;
    }

    .dropdown-btn {
        display: block;
        border: none;
        background: none;
        width:100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    .dropdown-hidden {
        display: none;
    }

    /* mobile view */
    @media (max-width:991px) {

        .sidebar-mobile {
            display: block;
        }

        .sidebar-side {
            display: none;
        }


    }

    @media (min-width: 992px) {
        .sidebar-mobile {
            display: none;

        }
        .sidebar-side {
            display: block;
        }

    }

</style>

<section class="page-title bg-color-1 text-center">
    <div class="auto-container">
        <div class="content-box">
            <h1>Edit user profiles </h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Edit user profiles</li>
            </ul>
        </div>
    </div>
</section>


<section class="sidebar-page-container blog-grid">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>" >SUPPORT</a></h3>
                        </div>
                        <div class="widget-content side-nav">
                            <ul class="clearfix">
                                <button class="dropdown-btn">CASE MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container dropdown-hidden">
                                    <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'searchingfordata'])?>">Search</a></li>
                                </div>
                                <button class="dropdown-btn">SAVED CASES
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container dropdown-hidden">
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'savecase'])?>">Save</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newfolder'])?>">New Folder</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'viewsavedcases'])?>">View/Remove Case</a></li>
                                </div>
                                <?php if ($access_role === 'ADMIN') : ?>
                                <button class="dropdown-btn list-current">USER MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editusers'])?>">Edit User</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newuser'])?>">Add User</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'removeuser'])?>">Remove User</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'changeuserpassword'])?>">Change User Password</a></li>
                                </div>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 content-column" style="padding: 0px 50px 0px 50px;">
                <div id="content_block_01">
                    <div class="content-box">
                        <div class="sec-title wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        </div>
                        <div class="text wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <li>If the trainee or consultant requests a for their password to be changed, you can trigger a temporary password by follow these steps:</li>
                        </div>
                        <ul class="clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li><strong>1. Locate Users:</strong> From the dashboard, click on ‘User Management’ located on the top bar.</li>
                            <br>
                            <li><strong>2. Locate specific user:</strong> From the list of users, find the user you want to change the password of and press ‘Change Password’ button.</li>
                            <br>
                            <li><strong>3. Update Password: </strong> You will be re-directed to a page where you can type the new password and confirm it by re-typing it in the ‘New Password’ and ‘Retype Password’ field respectively.</li>
                            <br>
                            <li><strong>4. Confirmation: </strong> Click on ‘Save’ button. Message saying “The user has been saved” will occur.</li>
                            <br>
                            <li>
                                You have successfully changed the password for a user.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 sidebar-mobile">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>" >SUPPORT</a></h3>
                        </div>
                        <div class="widget-content side-nav">
                            <ul class="clearfix">
                                <button class="dropdown-btn">CASE MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container dropdown-hidden">
                                    <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'searchingfordata'])?>">Search</a></li>
                                </div>
                                <button class="dropdown-btn">SAVED CASES
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container dropdown-hidden">
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'savecase'])?>">Save</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newfolder'])?>">New Folder</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'viewsavedcases'])?>">View/Remove Case</a></li>
                                </div>
                                <?php if ($access_role === 'ADMIN') : ?>
                                    <button class="dropdown-btn list-current">USER MANAGEMENT
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-container">
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editusers'])?>">Edit User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newuser'])?>">Add User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'removeuser'])?>">Remove User</a></li>
                                        <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'changeuserpassword'])?>">Change User Password</a></li>
                                    </div>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>






