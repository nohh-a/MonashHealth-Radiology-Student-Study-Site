<?php ?>
<style>

    .list-icon {
        padding-right: 5px;
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
        </div>
</section>




