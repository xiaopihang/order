<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#tabtest1" data-toggle="tab">火热推荐</a></li>
        <li role="presentation"><a href="#tabtest2" data-toggle="tab">汤与拉面</a></li>
        <li role="presentation"><a href="#tabtest3" data-toggle="tab">甜点</a></li>
    </ul>

    <!-- タブのコンテンツ部分 -->
    <div class="tab-content">
        <div class="tab-pane active" id="tabtest1">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="<?= base_url('assets/images/sushi_1.jpg');?>" width='350px' height='350px' />
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="<?= base_url('assets/images/sushi_1.jpg');?>" width='350px' height='350px' />
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tabtest2">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="<?= base_url('assets/images/sushi_2.jpg');?>" width='350px' height='350px' />
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="<?= base_url('assets/images/sushi_2.jpg');?>" width='350px' height='350px' />
                </div>
            </div></div>
        <div class="tab-pane" id="tabtest3">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <img src="<?= base_url('assets/images/sushi_3.jpg');?>" width='350px' height='350px' />
                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="<?= base_url('assets/images/sushi_3.jpg');?>" width='350px' height='350px' />
                </div>
            </div></div>
    </div>
</div><!-- .container -->