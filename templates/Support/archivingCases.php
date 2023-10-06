<style>

    .list-icon {
        padding-right: 5px;
    }

</style>
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: url(<?= $this->Url->image('/img/detox/shape/shap-3.png') ?>);"></div>
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
        </div>
    </div>
</section>






