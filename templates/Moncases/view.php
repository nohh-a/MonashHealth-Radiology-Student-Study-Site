<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>
<section class="content">

    <center><h1 style="color: black; font-weight: bold;">Accession Number <?= h($moncase->accession_no) ?></h1></center>

    <center><table>
            <tr>
                <td><a class="btn btn-info" href="JavaScript:newPopup('https://monashimaging.monashhealth.org/portal/Login.aspx');">Open Monash Health Imaging</a></td>
                <td><a class="btn btn-info" href="JavaScript:newPostDICOM('https://www.postdicom.com/en/login');">Open PostDICOM</a></td>
            </tr>
        </table></center>

    <br>

    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8 row">
            <table>
                <tr>
                    <td><button class="btn btn-primary" onclick="goBack()">Go Back</button></td>

                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>

                    <td><button onclick="copyText()" class='btn btn-link'>Copy Accession Number</button></td>
                </tr>
            </table>
            <table class="table table-bordered table-hover dataTable">
                <tr>
                    <th><?= __('Case Type') ?></th>
                    <td><?= h($moncase->case_type) ?></td>

                </tr>
                <tr>
                    <th><?= __('Contributer') ?></th>
                    <td><?= h($moncase->contributer) ?></td>

                </tr>
                <tr>
                    <th><?= __('Accession No') ?></th>
                    <td><?= h($moncase->accession_no) ?></td>

                </tr>
                <tr>
                    <th><?= __('Max Marks') ?></th>
                    <td><?= $moncase->max_marks === null ? '' : $this->Number->format($moncase->max_marks) ?></td>

                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($moncase->date) ?></td>

                </tr>
                <tr>
                    <th><?= __('History') ?></th>
                    <td><?= h($moncase->history) ?></td>

                </tr>
                <tr>
                    <th><?= __('Imaging') ?></th>
                    <td><?= h($moncase->imaging) ?></td>
                </tr>

                <tr>
                    <th><?= __('Observation') ?></th>
                    <td><?= h($moncase->observation) ?></td>
                </tr>

                <tr>
                    <th><?= __('Intepretation') ?></th>
                    <td><?= h($moncase->intepretation) ?></td>
                </tr>

                <tr>
                    <th><?= __('Safety') ?></th>
                    <td><?= h($moncase->safety) ?></td>
                </tr>

                <tr>
                    <th><?= __('Intrinsic Roles') ?></th>
                    <td><?= h($moncase->intrinsic_roles) ?></td>
                </tr>


                <tr>
                    <th><?= __('Management') ?></th>
                    <td><?= h($moncase->management) ?></td>
                </tr>

                <tr>
                    <th><?= __('Anatomy') ?></th>
                    <td><?= h($moncase->anatomy) ?></td>
                </tr>

                <tr>
                    <th><?= __('Pathology') ?></th>
                    <td><?= h($moncase->pathology) ?></td>
                </tr>

                <tr>
                    <th><?= __('Findings') ?></th>
                    <td><?= h($moncase->findings) ?></td>
                </tr>

                <tr>
                    <th><?= __('Differential Diagnosis') ?></th>
                    <td><?= h($moncase->differential_diagnosis) ?></td>
                </tr>

                <tr>
                    <th><?= __('Further Investigation ') ?></th>
                    <td><?= h($moncase->further_investigation) ?></td>
                </tr>

                <tr>
                    <th><?= __('Teaching Points') ?></th>
                    <td><?= h($moncase->teaching_points) ?></td>
                </tr>

                <tr>
                    <th><?= __('Seen By') ?></th>
                    <td><?= h($moncase->seen_by) ?></td>
                </tr>

                <tr>
                    <th><?= __('Tags') ?></th>
                    <td><?= h($moncase->tags) ?></td>
                </tr>
                <tr>
                    <th><?= __('Speciality') ?></th>
                    <td><?= h($moncase->speciality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= h($moncase->rating) ?></td>
                </tr>
            </table>

            <!-- <iframe src="https://www.postdicom.com/en/login" target='_top' width="100%" height="100%"></iframe>
            <iframe src="iframe.php?https://monashimaging.monashhealth.org/portal/Login.aspx" target='_top'></iframe> -->

        </div>
    </div>

</section>

<script>
    // Popup window code
    function newPopup(url) {
        popupWindow = window.open(url,'popUpWindow','height=600,width=1000,left=200,top=60,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes');
    }

    function newPostDICOM(url) {
        popupPostDICOM = window.open(url,'popupPostDICOM','height=600,width=1000,left=200,top=60,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes');
    }
</script>

<!-- For copy to clipboard -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>

<script>
    /* Copy to clipboard */
    function copyText() {
        navigator.clipboard.writeText("<?=h($moncase->accession_no) ?>");
    }
</script>
