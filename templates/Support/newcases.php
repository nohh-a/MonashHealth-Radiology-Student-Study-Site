<?php ?>

<?php ?>

<style>

    .list-icon {
        padding-right: 5px;
    }
    .list-pad {
        padding-left: 50px;

    }

</style>

<section class="page-title bg-color-1 text-center">
    <div class="auto-container">
        <div class="content-box">
            <h1>Create a New Case</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'help'])?>">Support Center</a></li>
                <li>Create a New Case</li>
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
                            <li>If you are a trainee or a consultant and want to add a case, follow these steps:
                            </li>
                        </div>
                        <ul class="clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <li><strong>1. Create a New Case:</strong> From your user dashboard, navigate to the “My Favourites” tab.  This is where you can manage your cases and folders. </li>
                            <br>
                            <li><strong>2. Select Case Type:</strong> If you have already created folders, you will see them listed here.</li>
                            <br>
                            <li class="list-pad">
                                    <strong>OSCER (Objective Structured Clinical Examination in Radiology):</strong>  Case studies that are past trainee final examinations.
                            </li>
                            <br>
                            <li class="list-pad">
                                <strong>Long:</strong>  Case studies that fall between the extremes of simplicity and complexity.
                            </li>
                            <br>
                            <li class="list-pad">
                                <strong>Short:</strong>  Case studies are relatively simple and are ideal for quick practice, revision or initial exposure to a particular condition or concept.
                            </li>
                            <br>
                            <li class="list-pad">
                                <strong>General:</strong> Standard case that covers common and typical conditions.
                            </li>
                            <br>
                            <li><strong>3. Enter Mandatory Details:</strong>  Mandatory entries are identified by a red asterisk next to the field name.</li>
                            <br>
                            <li><strong>4. Upload Image:</strong> To upload a static image to the case follow the following steps:
                            </li>
                            <br>
                            <li class="list-pad">
                                Click “Choose File”
                            </li>
                            <br>
                            <li class="list-pad">
                                Select the image you would like to upload.
                            </li>
                            <br>
                            <li class="list-pad">
                                Confirm the image you have selected has been uploaded.
                            </li>
                            <br>
                            <img src="<?= $this->Url->image('/img/support/4_newcase1.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                            <br>
                            <li><strong>5. Add additional details:</strong> A If you want to add additional details, you can click the drop-down arrow to reveal other fields. These are not mandatory and can be added later.</li>
                            <br>
                            <img src="<?= $this->Url->image('/img/support/4_newcase2.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                            <br>
                            <li><strong>6. Submit Case:</strong> After you have entered all your data, select the “Create” button to add the case to the database.</li>
                            <br>
                            <img src="<?= $this->Url->image('/img/support/4_newcase3.png') ?>" style="object-fit: fill; display: flex; justify-content: center;">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>








