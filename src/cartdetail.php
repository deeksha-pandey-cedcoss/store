<?php
include "config.php";
// session_start();
// echo "<pre>";
// print_r($_SESSION['cart']);
// echo "</pre>";

// die();
foreach ($_SESSION['cart'] as $key=>$value)
{
   
        // print_r($v);die();
echo" <div class='card-body'>
    <div class='row'>
    <div class='col-lg-3 col-md-10 mb-4 mb-lg-0'>
    <div class='bg-image hover-overlay hover-zoom ripple rounded' data-mdb-ripple-color='light'>
    <img src='".$_SESSION['cart'][$key]['image']."'class='w-100' alt='Backpack' />
    <a href='#!'><div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div></a>
    </div>
    </div>
    <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>
    <p><strong>".$_SESSION['cart'][$key]['name']."</strong></p>
    <p class='text-start'>USD-
    <strong>".$_SESSION['cart'][$key]['price']."</strong>
    </p>
    <button type='button' class='btn btn-primary btn-sm me-1 mb-2' id='$key' onclick='removeitem(this.id)' data-mdb-toggle='tooltip'
    title='Remove item'>Remove
    <i class='fas fa-trash'></i>
    </button>
    
    <button type='button' class='btn btn-danger btn-sm mb-2' id='$key' onclick='wishlist(this.id)' data-mdb-toggle='tooltip'
    title='Move to the wish list'>Wishlist
    <i class='fas fa-heart'></i>
    </button>
    </div>
    </div>
    </div>";
    // die();
}
    ?>
    <!-- <a class=\"m-0 btn btn-secondary shadow-0 me-0 remove\"  id=\"$key[id]\" '>Remove</a>
    <button type='button' class='btn btn-primary btn-sm me-1 mb-2' id='$v[id]' onclick='removeitem($v[id])' data-mdb-toggle='tooltip'
    title='Remove item'>Remove
    <i class='fas fa-trash'></i>
    </button>
    <button type='button' class='btn btn-danger btn-sm mb-2' id=\"$v[id]\" onclick='wishlist($v[id])' data-mdb-toggle='tooltip'
    title='Move to the wish list'>Wishlist
    <i class='fas fa-heart'></i>
    </button> -->