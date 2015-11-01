<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin.css">
    <script src="<?php echo base_url(); ?>assets/js/changeit.js"></script>

        
    </script>
</head>
<body>
<p id="ajaxSuccess">&nbsp;</p>
<!--cafe_menu_item($value = '', $html_tag = '', $type='', $class_name = '', $id_name='', $name=''-->
<input type="button" id="lol" name="haha" value="test me" onclick="testMe()">

<?php foreach ($truelovemenu as $menu_item): ?>

<?php 

if($menu_item['id_tag'] == 'list_')
{
    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']).'<br>';
    
}
else
{
    echo cafe_menu_item($menu_item['description'],'input','button', 'coffee', $menu_item['id_tag'].$menu_item['id'], $menu_item['list_name']).'<br>';
}
 ?>

<?php endforeach ?>

</body>
</html>