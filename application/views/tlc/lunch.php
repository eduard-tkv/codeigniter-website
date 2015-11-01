
            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <!--<h2>About Us</h2>
                                <span>Home / <a href="about-us">About us</a></span>-->
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
                                <h2>Our Menu</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
            <h4><a href="breakfast">Breakfast | </a>
            <a href="beverages">Beverages &amp; Specials | </a>
            <a href="lunch" class="hilite">Lunch</a></h4>                                
                            </div>
                        </div>
                    </div>
                    
  <div class="row">
  
  <div class="col-md-4 col-sm-6">
  
 <?php foreach ($lunch1 as $menu_item): ?>

<?php 

if($menu_item['id_tag']=='h5')
{
    echo cafe_menu_item($menu_item['description'],$menu_item['id_tag'],'button', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']);
}
else 
{
    echo cafe_menu_item($menu_item['description'],'li',' ', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']);
}
 ?>

<?php endforeach ?>

                        </div>
                        
                        
<div class="col-md-4 col-sm-6">
                        
<?php foreach ($lunch2 as $menu_item): ?>

<?php 

if($menu_item['id_tag']=='h5')
{
    echo cafe_menu_item($menu_item['description'],$menu_item['id_tag'],'button', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']);
}
else 
{
    echo cafe_menu_item($menu_item['description'],'li',' ', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']);
}
 ?>

<?php endforeach ?>
                        </div>
                        
                        
<div class="col-md-4 col-sm-6">
                        
 <?php foreach ($lunch3 as $menu_item): ?>

<?php 

if($menu_item['id_tag']=='h5')
{
    echo cafe_menu_item($menu_item['description'],$menu_item['id_tag'],'button', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']);
}
else 
{
    echo cafe_menu_item($menu_item['description'],'li',' ', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']);
}
 ?>

<?php endforeach ?>
                        </div>                                                
                        
                        
  </div><!--end of row div-->
  
  
  
 