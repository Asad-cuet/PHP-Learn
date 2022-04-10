<?php

function show_book($row)
{

      global $s_r;
      global $sr;

      $book_id=show($row[0]);
           $book_pic=show($row[1]);
           $book_title=show($row[2]);
           $book_author=show($row[3]);
           $book_published=show($row[4]);
           $book_price=show($row[5]);
           $disc=show($row[6]);
           $f_price=show($row[7]);
           $cat_id=show($row[8]);
           $book_avail=show($row[9]);
           $book_ordered=show($row[10]);
           $del_charge=show($row[12]);
           $rating=show($row[13]);
           
           $cat_name=show($row[16]);
           $s_r++;
           $sr++;


           $list='';
           $list.='<div class="w3-row w3-border item" style="background-color:#C1D5D5">
           <div class="w3-col l1 m3 s6 "><div class="w3-panel"><a href="single.php?book_id='.$book_id.'"><img src="admin/uploads/'.$book_pic.'" alt="'.$book_title.'" title="'.$book_title.'" style="width:100%;"></a></div></div>
          <div class="w3-col l11"><div class="w3-container">
                                                     <div class="w3-row">
                                                                          <div class="w3-col l3">
                                                                         <h2 style="font-size:20px;">'.$book_title.'</h2>';

                                                                      
            if(!empty($book_author)) { $list.='<h2 style="font-size:16px;">Author:'.$book_author.'</h2>'; } 


            if($del_charge==2) { $list.='<p class="w3-text-red"><b>Delivery charge:Free</b></p>'; }


            if(!empty($book_published)) { $list.='                         </div>
                                                  <div class="w3-col  l3"><p><b>Published Year:</b>'.$book_published.'</p>'; } 


            $list.='<p><b>Category:</b>'.$cat_name.'</p>'; 


            if(!empty($rating)) { $list.='<p><b>Rating:</b>'.$rating.'</p>'; }   
            
            
            $list.='                              </div>
                  <div class="w3-col  l3">
                        <p><b>Price:</b>'.$book_price.'tk</p>
                        <p><b>Discount:</b>'.$disc.'%</p>
                        <p><b>Final Price:</b>'.$f_price.'tk</p>
                  </div>
           <div class="w3-col  l3">
           
           <p><b>Quantity:</b><input type="number" class="quant" value="1" min="1"></p>';
          
           $list.=' 
           <button onclick="add_to_cart('.$book_id.','.$sr-1.')" style="background-color:#6D87FF"  class="w3-margin-bottom w3-text-white w3-small w3-button  w3-round" >Add To Cart</button> <br> 
           </div>
                                                 </div>
                             </div>
</div>



</div><br>';

echo $list;
                                                                         
                                           
                                                                         
     
}