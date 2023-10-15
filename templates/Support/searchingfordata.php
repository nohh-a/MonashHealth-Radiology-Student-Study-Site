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
            <h1>Searching for data</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Searching for data</li>
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
                                    <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'searchingfordata'])?>">Search</a></li>
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
                            <p>Data exploration begins with finding the right cases for the user. Here’s how you can search for an filter data on the DIVALabs Monash Health website:
                            </p>
                        </div>
                        <ul class="clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li><i class="fa-solid fa-magnifying-glass list-icon"></i>Search bar: Utilise the search bar to enter <mark>accession numbers</mark>, <mark>diagnosis'</mark>, <mark>differential diagnosis’</mark>, <mark>authors</mark>, <mark>‘seen by’</mark> and <mark>teaching</mark>points to quickly find the data you need.
                            </li>
                            <br>
                            <li><i class="fa-solid fa-bars list-icon"></i>Filter Options: You will be able to filter cases by type, contributor, rating, speciality, or imaging. These filters can help narrow down the dataset to find the best suited case.
                            </li>
                            <br>
                            <li><i class="fa-solid fa-sort list-icon"></i>Sorting: You will be able to sort cases by different attributes such as date created, rating rack or alphabetical order. This makes it easier to locate the most relevant cases quickly</li>
                            <br>
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
                                    <li class="list-padding"><a href=" <?= $this->Url->build(['controller' => 'support', 'action' => 'archivingcases'])?>">Archive</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'newcases'])?>">Create</a></li>
                                    <li class="list-padding"><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'editcase'])?>">Edit</a></li>
                                    <li class="list-padding"><a class="list-current" href="<?= $this->Url->build(['controller' => 'support', 'action' => 'searchingfordata'])?>">Search</a></li>
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




