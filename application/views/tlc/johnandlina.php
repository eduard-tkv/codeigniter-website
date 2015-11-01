

            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>True Love Cafe</h2>
                                <span>CMS<a href="about-us"></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="timeline-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <!--<h2>Our Menu</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
            <h4><a href="breakfast">Breakfast | </a>
            <a href="beverages">Beverages &amp; Specials | </a>
            <a href="lunch">Lunch</a></h4>      -->                          
                            </div>
                        </div>
                    </div>
                    
  <div class="row">
  
  <!--CSRF protection hidden field, values will be collected by js function-->
  <input id="hdn" type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
  <div><?php $session_ret = $this->session->all_userdata(); echo 'the environment is '.ENVIRONMENT.' and the server remote address is '.$_SERVER['REMOTE_ADDR']." and session id is ".$session_ret['session_id']." and session username is=".$this->session->userdata('username');?></div>
  <!--<div class="col-md-4 col-sm-6">-->
                        
   <div id="coffee"><!--coffee is the table name--->
<!--retrieve coffee items from the database-->
<h5>Coffee </h5>

<!--<iframe seamless="seamless" src="<?php echo base_url().'index.php/tlc/view/coffee'; ?>"></iframe>-->

<p id="ajaxSuccess">&nbsp;</p>
<!--cafe_menu_item($value = '', $html_tag = '', $type='', $class_name = '', $id_name='', $name=''-->

<?php foreach ($coffee as $menu_item): ?>

<?php 


    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'].$menu_item['list_name'], $menu_item['list_name']).'<br>';

 ?>

<?php endforeach ?>




<!--for textarea calcualte number of characters and set cols accordingly-->
<!--Just retrieve all entries from the corresponding table and display them all
if it's a list entry then just indent them with a class name in css-->


   </div>
   
   <div id="teas">
   <h5>Teas</h5>
   <?php foreach ($teas as $menu_item): ?>

<?php 

    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'].$menu_item['list_name'], $menu_item['list_name']).'<br>';
 ?>

<?php endforeach ?>
   
   
   </div>
   
   
                           <!--</div>end div md4 md 6-->
                        
                        
<!--<div class="col-md-4 col-sm-6">-->
                        
 
                        <!--</div>end col md 4 6-->
                        
                        
<!--<div class="col-md-4 col-sm-6">-->
 <div id="specials">
 <h5>Specials</h5>
 
    <?php foreach ($specials as $menu_item): ?>

<?php 

    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'].$menu_item['list_name'], $menu_item['list_name']).'<br>';
 ?>

<?php endforeach ?>
 
 </div>                       

 <div id="breakfast">
 <h5>Breakfast</h5>
 
    <?php foreach ($breakfast as $menu_item): ?>

<?php 

    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'].$menu_item['list_name'], $menu_item['list_name']).'<br>';
 ?>

<?php endforeach ?>
 
 </div> 
 
  <div id="lunch">
 <h5>Lunch</h5>
 
    <?php foreach ($lunch as $menu_item): ?>

<?php 

    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'].$menu_item['list_name'], $menu_item['list_name']).'<br>';
 ?>

<?php endforeach ?>
 
 </div> 
    
                        <!--</div>end col md 4 6-->                                                

<!--<div id="inserts">
   <h4>Perform inserts into database</h4>
   Description<br>
   <p id="ajaxSuccess"></p>
   <input type="text" id="description" /><br>
   id_tag<br>
   <input type="text" id="id_tag" /><br>
   list_name<br>
   <input type="text" id="list_name">
   table name<br>
   <input type="text" id="tableName">
   <input type="button" value="Submit" onclick="doInsert()">
   </div>-->
                        
                        
  </div><!--end of row div-->
  
  
  
  
  
  
 