<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>

<!-- Step 3 Form -->
<?= $this->Form->create($moncase) ?>
<?= $this->Form->input('field3') ?>
<button type="button" id="prev-step-button">Previous</button>
<button type="submit">Submit</button>
<?= $this->Form->end() ?>

<!-- Include Step 3 JavaScript -->
<script src="<?= $this->Url->webroot('js/step3.js') ?>"></script>
