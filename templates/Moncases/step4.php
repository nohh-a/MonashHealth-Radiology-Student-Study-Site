<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>

<!-- Step 4 Form -->
<?= $this->Form->create($moncase) ?>
<?= $this->Form->input('field4') ?>
<button type="button" id="prev-step-button">Previous</button>
<button type="submit">Submit</button>
<?= $this->Form->end() ?>

<!-- Include Step 4 JavaScript -->
<script src="<?= $this->Url->webroot('js/step4.js') ?>"></script>
