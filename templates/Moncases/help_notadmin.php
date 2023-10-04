<?php ?>

<style>
    .pricing-block-one .pricing-table .table-content ul li i {
        position: inherit;
        padding-right: 5px;
    }

    .pricing-block-one .pricing-table .table-content {
        padding-top:15px;
    }

    .pricing-block-one .pricing-table .table-header {
        padding-bottom: 5px;

    }

    .pricing-block-one {
        padding-bottom: 30px;
    }

    @media (min-width: 992px) {
        .auto-container {
            padding: 200px 180px 0px 200px;
        }
        .sidebar-page-container {
            width: 60%;
        }
        .pricing-section .upper-box .text {
            max-width: 75%;
        }
    }

    @media (max-width: 991px) {
        .auto-container {
            padding-top: 100px;
        }

        .pricing-block-one {
            padding-bottom: 0px;
        }
        .sidebar-page-container {
            width: 100%;
        }
        .pricing-section .upper-box .text {
            max-width: 100%;
        }
    }



</style>


<section class="pricing-section bg-color-1 sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <p>SUPPORT CENTER<p>
            <h2>Support Center</h2>
        </div>
        <div class="tabs-box">
            <div class="row">
                <div class="upper-box" style="margin-bottom: 0px; margin-left: 15px;">
                    <div class="text pull-left" style="margin-bottom: 0px">
                        <p>Browse through our frequently asked questions, tutorials, and other self-help resources to find the answers you need.</p>
                    </div>
                </div>
            </div>
            <div class="sidebar-page-container" style="padding: 10px 0px 30px 0px;">
                <div class="sidebar" style="margin-left: 0px; margin-top:0px;">
                    <div class="sidebar-widget sidebar-search" style="margin-bottom: 0px;">
                        <div class="widget-content">
                            <form action="blog-grid.html" method="post">
                                <div class="form-group">
                                    <input type="search" name="search-field" placeholder="Search" required="">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-content">
            <div class="tab active-tab" id="tab-1">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="pattern-box" style="background-image: url(assets/images/shape/pattern-5.png);"></div>
                                <div class="table-header">
                                    <h5>Account Information</h5>
                                </div>
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa-regular fa-file-lines"></i>How to login?</li>
                                        <li><i class="fa-regular fa-file-lines"></i>How to change password?</li>
                                        <li><i class="fa-regular fa-file-lines"></i>How to create new case?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="pattern-box" style="background-image: url(assets/images/shape/pattern-5.png);"></div>
                                <div class="table-header">
                                    <h5>Case Management</h5>
                                </div>
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa-regular fa-file-lines"></i><a>How to view cases?</a></li>
                                        <li><i class="fa-regular fa-file-lines"></i>How to create a new case?</li>
                                        <li><i class="fa-regular fa-file-lines"></i>Case input formats</li>

                                    </ul>
                                </div>
                                <div class="table-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="pattern-box" style="background-image: url(assets/images/shape/pattern-5.png);"></div>
                                <div class="table-header">
                                    <h5>Saved Cases</h5>
                                </div>
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa-regular fa-file-lines"></i>How to save a case?</li>
                                        <li><i class="fa-regular fa-file-lines"></i>How to create a new folder?</li>
                                        <li><i class="fa-regular fa-file-lines"></i>How to view my case collection?</li>

                                    </ul>
                                </div>
                                <div class="table-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="pattern-box" style="background-image: url(assets/images/shape/pattern-5.png);"></div>
                                <div class="table-header">
                                    <h5>Error Handling</h5>
                                </div>
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa-regular fa-file-lines"></i>Account related errors</li>
                                        <li><i class="fa-regular fa-file-lines"></i>Case related errors</li>
                                        <li><i class="fa-regular fa-file-lines"></i>Saved cases errors</li>

                                    </ul>
                                </div>
                                <div class="table-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one">
                            <div class="pricing-table">
                                <div class="pattern-box" style="background-image: url(assets/images/shape/pattern-5.png);"></div>
                                <div class="table-header">
                                    <h5>Input Formatting</h5>
                                </div>
                                <div class="table-content">
                                    <ul>
                                        <li><i class="fa-regular fa-file-lines"></i>Case Input Formats</li>
                                        <li><i class="fa-regular fa-file-lines"></i>Uneditable Fields</li>

                                    </ul>
                                </div>
                                <div class="table-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
