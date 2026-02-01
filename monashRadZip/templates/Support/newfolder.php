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
            <h1>Create a New Folder</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Create a New Folder</li>
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
                                    <?php if ($access_role === 'ADMIN'): ?>
                                        <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <?php endif; ?>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'searchingfordata'])?>">Search</a></li>
                                </div>
                                <button class="dropdown-btn list-current">SAVED CASES
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'savecase'])?>">Save</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newfolder'])?>">New Folder</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'viewsavedcases'])?>">View/Remove Case</a></li>
                                </div>
                                <?php if ($access_role === 'ADMIN'): ?>
                                    <button class="dropdown-btn">USER MANAGEMENT
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-container dropdown-hidden">
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editusers'])?>">Edit User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newuser'])?>">Add User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'removeuser'])?>">Remove User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'changeuserpassword'])?>">Change User Password</a></li>
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
                            <li>Data exploration begins with finding the right cases for the user. Here’s how you can search for an filter data on the DIVALabs Monash Health website:
                            </li>
                        </div>
                        <ul class="clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li><strong>1. Access your collections:</strong> From your user dashboard, navigate to the “My Favourites” tab.  This is where you can manage your cases and folders. </li>
                            <br>
                            <li><strong>2. Viewing Existing Folders:</strong> If you have already created folders, you will see them listed here.</li>
                                <br>
                            <li><strong>3. Create a new folder:</strong> To create a new folder, look and select the “New Folder” button.</li>
                            <br>
                            <li><strong>4. Name your folder:</strong> A text box will appear, prompting you to name your new folder. Choose a descriptive and meaningful name that reflects the purpose of the folders (e.g. Cardiology Case” or” Emergency Radiology”  </li>
                            <br>
                            <li><strong>5. Create:</strong> After naming your folder, click the “Create” button to create the folder.
                            </li>
                            <br>
                            <img src="<?= $this->Url->image('/img/support/5_newfolder.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                            <br>
                            <li><strong>6. Confirmation:</strong> You should receive a confirmation message like below, indicating that the folders have been successfully created.
                            </li>
                            <br>
                            <li>
                                <strong>7. Access and Manage:</strong> Your new folder will now be listed among your collections. You can access and manage it from this point onwards.
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
                                    <?php if ($access_role === 'ADMIN'): ?>
                                        <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <?php endif; ?>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'searchingfordata'])?>">Search</a></li>
                                </div>
                                <button class="dropdown-btn list-current">SAVED CASES
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'savecase'])?>">Save</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newfolder'])?>">New Folder</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'viewsavedcases'])?>">View/Remove Case</a></li>
                                </div>
                                <?php if ($access_role === 'ADMIN'): ?>
                                    <button class="dropdown-btn">USER MANAGEMENT
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-container dropdown-hidden">
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editusers'])?>">Edit User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newuser'])?>">Add User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'removeuser'])?>">Remove User</a></li>
                                        <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'changeuserpassword'])?>">Change User Password</a></li>
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







