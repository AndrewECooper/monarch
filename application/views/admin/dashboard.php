<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--<p><?php echo lang('admin dashboard text welcome'); ?></p> -->

<div class="container-fluid">
    <div class="row">
        <?php
            echo $websites_widget;

            echo $servers_widget; 

            echo $failovers_widget;
        ?>
    </div>
    
    <div class="row">
        <?php echo $current_events_widget; ?>
    </div>
    
    <div class="row">
        <?php echo $past_events_widget; ?>
    </div>
    
    <div class="row">
        <?php echo $current_status_widget; ?>
    </div>
</div>

