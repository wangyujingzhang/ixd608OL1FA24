<?php

function productListTemplate($r, $o){
    return $r . <<<HTML
<a class="col-xs-12 col-md-4" href="/wangyujingzhang_aau/aau/ixd608/parts/product_item.php?id=$o->id">
    <figure class="figure product disply-flex flex-column">
        <div class="flex-stretch">
        	
            <img src="/wangyujingzhang_aau/aau/ixd608/img/$o->thumbnail" alt="">
            
        </div>
        <figcaption class="flex-none">
            <div>$o->name</div>
            <div>&dollar;$o->price</div>
        </figcaption>
    </figure>
</a>
HTML;
}


function cartListTemplate($r,$o){
return $r . <<<HTML
<div class="display-flex">
    <div class="flex-none images-thumbs">
        <img src="../img/$o->thumbnail">
    </div>
    <div class="flex-stretch">
        <strong>$o->name</strong>
        <div>Delete</div>
    </div>
    <div class="flex-none">
        &dollar;$o->price
    </div>
</div>

HTML;
}