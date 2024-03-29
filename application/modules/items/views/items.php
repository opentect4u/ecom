<style>
.item{
    border: 2px solid black;
    padding: 18px;
    margin-top: 20px;
}

img{
    height: 250px;
}

.sm-imgs{
    border: 2px solid black;
    padding: 5px;
    margin-top: 10px;
    margin: 10px;
}

.sm-imgs > img {
    height: 50px;
    width: 50px;
}

.center{
    margin-left: 22%;
}

.hidden{
    display: none;
}
</style>

<div class="col-lg-9">
    
    <div class="row ">

        <div class="row item">
                <span class="hidden category"><?php echo $catgId; ?></span>
                <span class="hidden product"><?php echo $prodId; ?></span>
            <img class="card-img-top" src="http://placehold.it/700x400" alt="">
        </div>
        
        <div class="row center">
            <div class="col-xs-3 sm-imgs"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></div>
            <div class="col-xs-3 sm-imgs"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></div>
            <div class="col-xs-3 sm-imgs"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></div>
            <div class="col-xs-3 sm-imgs"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></div>
        </div>
        
    </div>
    <div class="row">
        <button type="button" class="btn btn-warning" id="addtocart">Add To Cart</button>
        <button type="button" style="margin-left: 65%;" class="btn btn-success" id="buynow">Buy Now</button>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#addtocart').click(function(){
        <?php if($this->session->userdata('ecmo-loggedin')){ ?>
            $.post('<?php echo site_url('checkout/addtocart'); ?>', {
                catgId: $('span.category').text(),
                prodId: $('span.product').text()
            });
        <?php
        }
        ?>
        window.location = "<?php echo site_url('checkout/viewcart?catg_id='.$catgId.'&prod_id='.$prodId.''); ?>";
    });

    $('#buynow').click(function(){
        window.location = "<?php echo site_url('checkout'); ?>";
    });
});
</script>