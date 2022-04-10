<?php
include 'header.php';


if(isset($_REQUEST['cart'])) 
 {
  $page=$_REQUEST['page'];
    if(isset($_SESSION['cart'])) //if defined
    {
      $my_item=array_column($_SESSION['cart'],'b_id');  // storing all book id in array
      if(in_array($_REQUEST['b_id'],$my_item)) // if already added
        //Searching                     
                             {
                               
                                    header("location:$page?added");
                                    
                             }
                             else
                             {   // if not already added

     $count=count($_SESSION['cart']);
     $_SESSION['cart'][$count]=array('b_id' =>$_REQUEST['b_id'],'b_name' =>$_REQUEST['b_name'],'price' =>$_REQUEST['price'],'disc' =>$_REQUEST['disc'],'f_price' =>$_REQUEST['f_price'],'quantity' =>$_REQUEST['quant'],'author' =>$_REQUEST['au_name']);
      
       $my_item=array_column($_SESSION['cart'],'b_id');
       $separ_id=implode(",",$my_item);
      header("location:$page");
                             }
    }
    else
    {                           //if no defined

        $_SESSION['cart'][0]=array('b_id' =>$_REQUEST['b_id'],'b_name' =>$_REQUEST['b_name'],'price' =>$_REQUEST['price'],'disc' =>$_REQUEST['disc'],'f_price' =>$_REQUEST['f_price'],'quantity' =>$_REQUEST['quant'],'author' =>$_REQUEST['au_name']);
        print_r($_SESSION['cart']);
        $my_item=array_column($_SESSION['cart'],'b_id');
        $separ_id=implode(",",$my_item);
          header("location:$page");

    }






  }
  //session_destroy();

  if(isset($_REQUEST['remove_cart'])) {
        foreach($_SESSION['cart'] as $key => $value) {
              if($value['b_id']==$_REQUEST['b_id']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);  // rearranging keys
                    header("location:my-cart.php");
              }
        }
  }
 
  
  


?>