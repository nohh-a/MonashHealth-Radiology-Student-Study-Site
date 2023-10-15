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
            <h1>Edit Case</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Edit Case</li>
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
                                <button class="dropdown-btn list-current">CASE MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <?php if ($access_role === 'ADMIN'): ?>
                                        <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <?php endif; ?>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
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
                            <li>If you need to update or edit the details of a case you have previously created, following these steps:
                            </li>
                        </div>
                        <ul class="clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li><strong>1. Access your cases:</strong> In your user dashboard, navigate to the search bar and search by your name. You’ll be able to find all the cases you have created.
                            </li>
                            <br>
                            <li><strong>2. Select the case:</strong> Choose the case you want to edit and click on it to access the case details.</li>
                            <br>
                            <img src="<?= $this->Url->image('/img/support/4_editcase.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                            <br>
                            <li><strong>3. Edit Information: </strong> Select the ‘Edit’ button and make the necessary changes or additions to the case information.</li>
                            <br>
                            <li><strong>4. Save Changes: </strong> After making your edits, be sure to save the changes before exiting the editing mode.</li>
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
                                <button class="dropdown-btn list-current">CASE MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <?php if ($access_role === 'ADMIN'): ?>
                                        <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <?php endif; ?>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
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




