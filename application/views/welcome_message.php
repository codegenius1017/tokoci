<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Toko Online</title>

    <!--Load bootstrap, jquery, datatables -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
    <script type="text/javascript" language="javascript"
            src="<?php echo base_url('assets/bootstrap/jquery-1.10.2.js') ?>"></script>
    <script type="text/javascript" language="javascript"
            src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>

    <!--holder js-->
    <!--<script src="holder.js"></script>-->

    <!--thumbnail fixed size css-->
    <!--http://stackoverflow.com/questions/23379318/have-thumbnails-with-different-images-sizes-bootstrap-->
    <style>
        .thumbnail img{
            width: 250px;
            height: 200px;
        }

        .thumbnail{
            width: 300px;
            height: 400px;
        }

        .thumbnail h3{
            height: 30px;
        }
    </style>

</head>
<body>
<?php $this->load->view('layout/top_menu') ; ?>
<div class="container">
    <div class="row">
        <!--looping product-->
        <?php foreach ($products as $product) : ?>
            <div class="col-sm-3 col-md-3">
                <div class="thumbnail">
                    <?php echo img([
                        'src'   => 'uploads/' . $product->image
                        //'style' => 'max-width:100%; min-height:100%; height:100px'
                    ]); ?>
                    <div class="caption">
                        <h3 style="min-height:50px;"><?php echo $product->name; ?></h3>
                        <p><?php echo $product->description; ?></p>
                        <h4 class="text-right"><?php echo $product->price ; ?></h4>
                        <p>
                            <?php echo anchor('welcome/add_to_cart/'. $product->id , 'Buy', [
                                'class' =>  'btn btn-primary btn-lg btn-block',
                                'role'  =>  'button'
                            ]) ;?>
                        </p>

                    </div>
                </div>
            </div>
            <!--end loop product-->
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>