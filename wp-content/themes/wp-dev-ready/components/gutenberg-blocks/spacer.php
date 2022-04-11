<?php

/**
 * Block Name: Spacer
 *
 * This is the template that displays the spacer block.
 */

?>

<?php $spacer = get_field('spacer'); ?>
<?php if ($spacer == 5) { ?>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
<?php } ?>
<?php if ($spacer == 4) { ?>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
<?php } ?>
<?php if ($spacer == 3) { ?>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
<?php } ?>
<?php if ($spacer == 2) { ?>
    <div class="section-spacer"></div>
    <div class="section-spacer"></div>
<?php } else { ?>
    <div class="section-spacer"></div>
<?php } ?>