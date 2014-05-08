<?php
/**
 * Created by PhpStorm.
 * Project : My-Resume-PHP.
 * User: Hamza Alayed
 * Date: 5/8/14
 * Time: 5:45 PM
 */ ?>
<!DOCTYPE html>
<html lang="en-US">
    <?php $this->load->view("Head");?>
    <body>
        <div class="switherHead"></div>
        <div class="colored">
            <div class="blue"></div>
            <div class="aqua"></div>
            <div class="green"></div>
            <div class="yellow"></div>
            <div class="red"></div>
        </div>
        <div class="hfeed site" id="page">
            <?php $this->load->view("Header");?>
            <?php $this->load->view($selectPage);?>
            <?php $this->load->view("Footer");?>
        </div>
    </body>
    <?php $this->load->view("Script");?>
</html>