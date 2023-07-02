<style>
.loan-part {
    padding-top: 50px;
    padding-bottom: 50px;
}
.container.mt-5 {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
}
.install a span {
    background: #018142;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
}
.product-item.p-3 {
    margin-top: 15px !important;
    margin-bottom: 15px;
    padding:0!important;
}
.product-item {
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: unset;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

</style>

<div class="container mt-5">
    <div class="row">
<?php
$lang = Request::segment(1);
$myStorage = '/storage/app/uploads/';
$products = Helper::getProduts($lang);
foreach ($products as $value) {?>
        <div class="col-md-6">
            <div class="product-item p-3" style="padding:0;">
                <div class="col-md-6" style="padding:0;">
                    <div class="d-flex flex-row" style="padding:0;"><img src="<?php echo URL('').$myStorage.$value->thumbnail;?>" width="220px">
                        
                    </div>
                </div>
                <div class="col-md-6" style="padding:20px 10px;">
                    <h6 style="font-weight:600;"><?php echo $value->title;?></h6>
                    <p><?php echo $value->meta_description;?></p>
                    <div class="d-flex justify-content-between install mt-3"><a href="<?php echo URL('').'/'.$lang.'/'.$value->slug;?>"><span>Read More</span></a></div>
                </div>
            </div>
        </div>
  <?php }?>
    </div>
</div>