<?php ?>

<style>

    .list-icon {
        padding-right: 5px;
    }

</style>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('/img/detox/shape/shap-3.png') ?>);"></div>
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
        </div>
</section>







