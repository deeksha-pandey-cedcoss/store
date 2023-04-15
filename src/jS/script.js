$(document).ready(function(){
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
$.ajax({
    url:"../admin.php",
    type:"POST"
}).done(function(){
})
})
$("#product").click(function(){
    $.ajax({
        url:"../allproducts.php",
        type:"POST"
    }).done(function(){

        window.location="../allproducts.php";
    })
})
$(document).on('click','.btn',function(){
   let id= this.getAttribute("id");
    
   $(".inputtext"+id).prop("disabled",false);
    $("#" + id).html("Update");
    $("#" + id).attr("class","update");
    
})
$(document).on('click','.update',function(){ 
    let id= this.getAttribute("id");
    $name=$("#name"+id).prop("disabled",false).val();
    $category=$("#category"+id).prop("disabled",false).val();
    $price=$("#price"+id).prop("disabled",false).val();
    $quantity=$("#quantity"+id).prop("disabled",false).val();
    $description=$("#description"+id).prop("disabled",false).val();
$.ajax({
    url:"../update.php",
    type:"POST",
    data:{"id":id,"name":$name,"category":$category,"price":$price,"quantity":$quantity,"description":$description}

}).done(function(result){
    $("#name"+id).prop("disabled",true).val();
    $("#category"+id).prop("disabled",true).val();
    $("#price"+id).prop("disabled",true).val();
    $("#quantity"+id).prop("disabled",true).val();
    $("#description"+id).prop("disabled",true).val();
    $("#" + id).html("EDIT");
    console.log(result);
    
})

})
$(document).on('click','.delete_btn',function(){
    
    let id= this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../delete.php",
        type:"POST",
        data:{"id":id}
    }).done(function(result){
        console.log(result);
    })
 })
$(document).on('click','.btn_user',function(){
    // let id= this.getAttribute("id");
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(6);
    console.log(id);
     $(".inputtext"+id).prop("disabled",false);
     $("#update" + id).html("Update");
    $("#update" + id).attr("class","update_user");
     
     
 })
$(document).on('click','.update_user',function(){ 
    let id= this.getAttribute("id");
    $name=$("#name"+id).prop("disabled",false).val();
    $email=$("#email"+id).prop("disabled",false).val();
    $address=$("#address"+id).prop("disabled",false).val();
    $pincode=$("#pincode"+id).prop("disabled",false).val();
    $status=$("#status"+id).prop("disabled",false).val();
    $role=$("#role"+id).prop("disabled",false).val();

$.ajax({
    url:"../updateuser.php",
    type:"POST",
    data:{"id":id,"name":$name,"email":$email,"address":$address,"pincode":$pincode,
    "status":$status,"role":$role}

}).done(function(result){
    $("#name"+id).prop("disabled",true).val();
    $("#email"+id).prop("disabled",true).val();
    $("#address"+id).prop("disabled",true).val();
    $("#pincode"+id).prop("disabled",true).val();
    $("#status"+id).prop("disabled",true).val();
    $("#role"+id).prop("disabled",true).val();
    console.log(result);
    $("#" + id).html("EDIT");
  //  console.log(result);
    
})
})
$(document).on('click','.delete_btn_user',function(){
    // let id= this.getAttribute("id");
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(6);
    console.log(id);
    console.log(id);
    $.ajax({
        url:"../deleteuser.php",
        type:"POST",
        data:{"id":id}

    }).done(function(result){
        console.log(result);

    })
 })
$(document).on('click','.change_status',function(){
    let status=$("#user_status").val();
    let role=$("#user_role").val();
    let id=this.getAttribute("id");
    $.ajax({
        url:"changestatus.php",
        type:"POST",
        data:{"id":id,"role":role,"status":status}
    }).done(function(result){
        console.log(result);
    })
})
$(document).on('click','.btn_order',function(){
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(4);
    console.log(id);
    $(".input"+id).prop("disabled",false);
      $("#edit" + id).html("Update");
     $("#edit" + id).attr("class","update_user");
     
     
 })
$(document).on('click','.update_order',function(){ 
    let text= this.getAttribute("id");
    console.log(text);
    let id = text.substring(4);
    console.log(id);
    $name=$("#name"+id).prop("disabled",false).val();
    $address=$("#shipping_address"+id).prop("disabled",false).val();
    $order=$("#order_status"+id).prop("disabled",false).val();
    $total=$("#total"+id).prop("disabled",false).val();
    

$.ajax({
    url:"../updateorder.php",
    type:"POST",
    data:{"id":id,"name":$name,"address":$address,"order":$order,"total":$total}

}).done(function(result){
    $("#name"+id).prop("disabled",true).val();
    $("#shipping_address"+id).prop("disabled",true).val();
    $("#order_status"+id).prop("disabled",true).val();
    $("#total"+id).prop("disabled",true).val();
    console.log(result);
    $("#" + id).html("EDIT");
    console.log(result);
    
})
})
$(document).on('click','.delete_btn_order',function(){
    let id= this.getAttribute("id");
    console.log(id);
    $.ajax({
        url:"../deleteorder.php",
        type:"POST",
        data:{"id":id}

    }).done(function(result){
        console.log(result);

    })
 })