<?php defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_snippets/head_resources'); ?>
</head>
<body>
<!-- .container-fluid start -->
<div class="container-fluid">
    <h1 class="page-header">Migration Script Generator</h1>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="<?=site_url('generate_migration/init');?>">Inital Setup</a></li>
        <li role="presentation" class="active"><a href="<?=site_url('generate_migration/generic');?>">Generic Script</a></li>
    </ul>
</div>
<!-- .container-fluid end -->

<!-- .container start -->
<div class="container">
    <h2 class="page-header">Generate <span class="text-info">Generic</span> Migration Script</h2>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h2 class="panel-title"><i class="fa fa-bolt fa-fw"></i> Generate Script Form</h2>
        </div>
        <div class="panel-body">
            
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><i class="fa fa-code fa-fw"></i> Script Preview</h2>
        </div>
        <div class="panel-body">
            
        </div>
    </div>
</div>
<!-- .container end -->
<?php $this->load->view('_snippets/body_resources'); ?>
</body>
</html>