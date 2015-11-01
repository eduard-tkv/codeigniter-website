<html>
<head>
<style>

body {color: #fff;}
table {width: 100%; border-collapse: collapse;}
table th {text-align: left;}
table th:first-child {width: 20%;}
table th:nth-child(2) {width: 40%;}
table tr, th {border-bottom: 1px dotted white;}


</style>
</head>
<body>

<table>
<tr>
<th>Name</th>
<th>Price</th>
<th>Notes</th>
</tr>

<h2>Start of DB retrieved data</h2>

<?php foreach ($truelovemenu as $menu_item): ?>

<tr>
<td><?php echo $menu_item['name'] ?></td><td>
<?php 

$num_br = substr_count($menu_item['price'], "br"); 

$all_price_items = explode("×",$menu_item['price']); 
$price_br_indeces = array();

foreach ($all_price_items as $price_item)
{
    echo $price_item.'</br>';
}





?></td><td><?php echo $menu_item['notes'] ?></td>
</tr>


<?php endforeach ?>

<h2>Manual pages</h2>
<tr>
<td>Coffee</td>
<td>Small $1.20,</br> Medium $1.40,</br> Large $1.60,</br> Jumbo Love $2</br></td>
<td title=" Coffee syrups offered are Kahula, Caramel, French Vanilla, Hazelnut, Irish Cream, and English Toffee."><p>a blended Columbian brew served hot and to order. Add a flirt of flavour, free! Coffee syrups offered are Kahula, Caramel, French Vanilla, Hazelnut, Irish Cream, and English Toffee.</td>
</tr>

</table>


<p>Coffee, a blended Columbian brew served hot and to order.
Small $1.20, Medium $1.40, Large $1.60, Jumbo Love $2
Add a flirt of flavour, free!  Coffee syrups offered are Kahula, Caramel, French Vanilla, Hazelnut, Irish Cream, and English Toffee.</p>

<p>Espresso or Americano
$1.75
</p>
<p>French Cappuccino
$2.50</p>

<p>Icy Cappuccino
$3.50</p>

<p>Tea, a large selection taking up a wall and offering over 500 different varieties.
Any size $1.25!</p>

<p>Hot Chocolate, milky goodness.
Any size $1.25</p>

<p>Milkshake, old fashioned and simply delicious.
Vanilla, Strawberry, or Chocolate
$3</p>

<p>Cold Beverages in bottles and cans include fruit juices, spring water, and Coca Cola products.
$1</p>
</body>
</html>