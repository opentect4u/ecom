<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">e Commerce</a>
    </div>
  </nav>
  
  <div class="container">
    
    <?php
      if(!$this->session->userdata('ecmo-loggedin')){
    ?>

    <a href="javascript: void(0);" id="login" data-toggle="modal" data-target="#exampleModalCenter">Click Here to Login</a>
    <?php
      }
      else{
        $i = 1;
        foreach($viewcart as $cart){
    ?>

      <div class="row">
        
    <?php
        echo $cart->category_id.' '.$cart->product_id;
    ?>
        <button type="button" class="btn btn-success">Place Order</button>
        <button type="button" class="btn btn-danger">Remove Order</button>
      </div>

    <?php
          $i++;
        }
    
      }
    ?>
  </div>
  <login></login>