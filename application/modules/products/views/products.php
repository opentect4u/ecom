<div class="col-lg-9">
    
    <div class="row">
    <?php
        foreach($products as $product){
    ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="<?php echo site_url(''.$product->catg_desc.'/'.$product->prod_desc.'/'.$product->prod_id.''); ?>"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                <h4 class="card-title">
                    <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            </div>
        </div>
    <?php
        }
    ?>    
    </div>

</div>