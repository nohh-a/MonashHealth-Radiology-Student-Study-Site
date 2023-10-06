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
            padding: 200px 180px 0px 180px;
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
        }s
    }
    .sidebar-page-container .sidebar .sidebar-search .form-group .fake-button {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 18px;
        font-weight: 700;
        color: #848484;
        background: transparent;
        cursor: pointer;
        transition: all 500ms ease;
    }

    a {
        color: #0a0a0a;
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
                            <div class="form-group">
                                <input type="search" id="mySearch" placeholder="Enter what you're looking for here to filter our documents!" onkeyup="supportCenter()">
                                <div class="fake-button"><i class="fas fa-search"></i></div>
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
                                    <div class="pattern-box"></div>
                                    <div class="table-header">
                                        <h5>Account Information</h5>
                                    </div>
                                    <div class="table-content">
                                        <ul id="results">
                                            <li><a href="<?= $this->Url->build(['controller' => 'support', 'action' => 'howtologin'])?>"><i class="fa-regular fa-file-lines"></i>How to login?</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to change password?</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to create new case?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                            <div class="pricing-block-one">
                                <div class="pricing-table">
                                    <div class="pattern-box"></div>
                                    <div class="table-header">
                                        <h5>Case Management</h5>
                                    </div>
                                    <div class="table-content">
                                        <ul id="results">
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to view cases?</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to create a new case?</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>Case input formats</a></li>
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
                                    <div class="pattern-box"></div>
                                    <div class="table-header">
                                        <h5>Saved Cases</h5>
                                    </div>
                                    <div class="table-content">
                                        <ul id="results">
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to save a case?</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to create a new folder?</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>How to view my case collection?</a></li>

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
                                    <div class="pattern-box"></div>
                                    <div class="table-header">
                                        <h5>Error Handling</h5>
                                    </div>
                                    <div class="table-content">
                                        <ul id="results">
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>Account related errors</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>Case related errors</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>Saved cases errors</a></li>
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
                                    <div class="pattern-box"></div>
                                    <div class="table-header">
                                        <h5>Input Formatting</h5>
                                    </div>
                                    <div class="table-content">
                                        <ul id="results">
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>Case Input Formats</a></li>
                                            <li><a href="#"><i class="fa-regular fa-file-lines"></i>Uneditable Fields</a></li>
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


<script>
    function supportCenter() {
        var input, filter;
        input = $("#mySearch");
        filter = input.val().toUpperCase();

        $(".pricing-block-one").each(function () {
            var ul = $(this).find('#results');
            var li = ul.find("li");
            var anyVisible = false;

            li.each(function () {
                var a = $(this).find("a");
                if (a.text().toUpperCase().indexOf(filter) > -1) {
                    $(this).show();
                    anyVisible = true;
                } else {
                    $(this).hide();
                }
            });

            if (!anyVisible) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    }
</script>

