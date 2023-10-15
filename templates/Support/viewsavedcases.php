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
            <h1>View or remove a case</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>View or remove cases</li>
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
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newfolder'])?>">New Folder</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'viewsavedcases'])?>">View/Remove Case</a></li>
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
                        <div class="sec-title wow slideInUp" >
                            <div class="btn-group d-flex justify-content-center" style="" role="group" aria-label="Basic example">
                                <button type="button" class="butgroup btn btn-outline-primary" data-view="butgroup1">View Saved Cases</button>
                                <button type="button" class="butgroup btn btn-outline-primary" data-view="butgroup2">Removed Saved Cases</button>
                            </div>
                        </div>
                        <div id="but1">
                            <ul class="clearfix wow"  data-wow-duration="1500ms">
                                <li>If you wish to view the cases located in a folder, follow these steps:
                                </li>
                                <br>
                                <li><strong>1. Locate Folder:</strong> From the dashboard, click on ‘My Favourites’ located on the top bar.
                                </li>
                                <br>
                                <li><strong> 2. View Folder:</strong>  Locate the folder with the desired case and click the ‘View’ button.</li>
                                <br>
                                <li><strong>3. View Cases:</strong> Filter through all cases and find specific cases you want to view, pressing the ‘View’ button </li>
                                <br>
                                <img src="<?= $this->Url->image('/img/support/5_viewcase.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                                <br>
                                <li><strong>4. Specific Case</strong> The page will refresh and you can now see specific details of desired case.You have now successfully viewed and accessed details of case.
                                </li>
                            </ul>
                        </div>
                        <div id="but2">
                            <ul class="clearfix wow"  data-wow-duration="1500ms">
                                <li>If you wish to delete a favourite folder, follow these steps:
                                </li>
                                <br>
                                <li><strong>1. Locate Folder:</strong> From the dashboard, click on ‘My Favourites’ located on the top bar. Here, you can browse through folders until you have found your desired folder.
                                </li>
                                <br>
                                <li><strong> 2. Delete Option:</strong>   Once you have found the folder you want to delete, press the ‘Delete’ button associated with it.
                                </li>
                                <br>
                                <li><strong>3. Confirm Deletion:</strong> Press “OK” on the pop up box that occurs. Message saying “The collection has been deleted” indicates successful deletion of the folder.</li>
                                <br>
                                <li>You have now successfully deleted a  folder.
                                </li>
                                <br>
                                <li><strong> NOTE: </strong> This action is not reversible.
                                </li>
                                <br>
                                <li style="padding-left: 50px;"><strong>Cases in the Deleted Folder:</strong> Any cases that were previously in the deleted folder will be unassigned from the folder but will remain accessible in your overall collection unless you choose to delete them individually.
                                </li>
                            </ul>
                        </div>
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
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newfolder'])?>">New Folder</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'viewsavedcases'])?>">View/Remove Case</a></li>
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





