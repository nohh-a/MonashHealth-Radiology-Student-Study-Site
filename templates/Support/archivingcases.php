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
            <h1>Archiving Cases</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Archiving Cases</li>
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
                                <li class="list-padding"><a class="list-current" href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
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
                                <button type="button" class="butgroup btn btn-outline-primary" data-view="butgroup1">Remove Cases</button>
                                <button type="button" class="butgroup btn btn-outline-primary" data-view="butgroup2">View Archived Cases</button>
                                <button type="button" class="butgroup btn btn-outline-primary" data-view="butgroup3">Actions</button>
                                <button type="button" class="butgroup btn btn-outline-primary" data-view="butgroup4">Permanent Delete</button>
                            </div>
                        </div>
                        <div id="but1">
                        <ul class="clearfix wow"  data-wow-duration="1500ms">
                            <li>If you wish to remove a case study from the active environment. You can typically follow these steps:</li>
                            <br>
                            <li><strong>1. Select the Case:</strong> Choose the case you want to remove and access the case details.
                            </li>
                            <br>
                            <li><strong> 2. Remove:</strong> Scroll down to the bottom of the case profile page and select the ‘Archive’ Button </li>
                            <br>
                            <li><strong>3. Confirm removal:</strong> Confirm your decision to remove the case. Be aware that when a case is removed from the active environment, it is stored under the Archive Cases’ tab.</li>
                            <br>
                        </ul>
                        </div>
                        <div id="but2">
                        <ul class="clearfix wow"  data-wow-duration="1500ms">
                            <li>If you wish to view the case which have been removed from the active environment, you can click on select the <mark>“Archived  Cases”</mark> Tab on the top navigation bar.</li>
                        </ul>
                        </div>
                        <div id="but3">
                        <div class="clearfix wow" data-wow-duration="1500ms">
                            <div class="image-holder d-flex justify-content-center">
                                <figure class="image-box" style="height: fit-content;">
                                        <img src="<?= $this->Url->image('/img/support/4_actions.png') ?>" style="object-fit: fill;">
                                </figure>
                            </div>
                        </div>
                        </div>
                        <div id="but4">
                        <ul class="clearfix wow" data-wow-duration="1500ms">
                            <li>If you wish to delete all archived cases from the database, you can select the <mark>“Delete All Forever”</mark> Button.
                            </li>
                            <br>
                            <li>It is important to note that all cases that are on the <mark>“Archived Cases”</mark> page will be deleted. This action is final and cannot be reversed.
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
                                <button class="dropdown-btn list-current">CASE MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    <li class="list-padding"><a class="list-current" href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
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
                                <button class="dropdown-btn">USER MANAGEMENT
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container dropdown-hidden">
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editusers'])?>">Edit User</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newuser'])?>">Add User</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'removeuser'])?>">Remove User</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'changeuserpassword'])?>">Change User Password</a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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



<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;


