<?php
session_start();
// print_r($_SESSION['wishlist']);

foreach ($_SESSION['wishlist'] as $key=>$value)
{

    echo "<div class='table-wishlist'>
<table cellpadding='0' cellspacing='0' border='0' width='100%'>
    <thead>
        <tr>
            <th width='45%'>Product Name</th>
            <th width='15%''>Unit Price</th>
            <th width='15%''></th>
            <th width='10%'></th>
        </tr>
    </thead><tbody>";
    foreach($value as $k=>$v)
    {
echo "
    
<tr>
<td width='45%'>
<div class='display-flex align-center'>
<div class='img-product'>
<img src=".$v['image']." alt='' class='mCS_img_loaded'>
</div>
<div class='name-product'>
".$v['name']."
</div>
</div>
</td>
<td width='15%' class='price'>$".$v['price']."</td>
<td width='15%'><button class='round-black-btn small-btn' id=$v[id] onclick='addcart($v[id])'>Add to Cart</button></td>
<td width='15%'><button class='round-black-btn small-btn' id=$v[id] onclick='remove($v[id])'>Remove</button></td>
<td width='10%' class='text-center'><a href='#' class='trash-icon'><i class='far fa-trash-alt'></i></a></td>
</tr>";
    }}
    echo "</tbody></table>";
?>
<script src="./jS/products.js"></script>