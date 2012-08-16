<?
echo $html->css('/themes/blue/style.css');

echo $javascript->link('/jquery-1.4.1.js');
echo $javascript->link('jquery.tablesorter.min.js');
?>

<script type="text/javascript">
$(document).ready(function() 
	{ 
		$("#catTable").tablesorter();
	} 
);

function editCatWindow(cat_id) {
	if (cat_id) {
		window.open ("category_edit?cat_id=" + cat_id,"mywindow","status=1,width=400,height=400");
	}
	else {
		window.open ("category_edit","mywindow","status=1,width=400,height=400");
	}
}

</script>
<p>Category Maintance</p>
<input type="button" onClick="editCatWindow()" value="+" />
<div id="hint">* double click to edit</div>
<table id="catTable" class="tablesorter"> 
<thead> 
<tr> 
    <th>id</th>
    <th>Category Name</th>
    <th>Display Seq</th>
</tr>
</thead>
<tbody>
<? foreach($cat_list as $categorys):
$category = $categorys['Category'];
?>
<tr <? if ($category['sts'] != 'A') { ?> class="inactiveRow" <? }?> onDblClick="editCatWindow('<?=$category['id']?>')">
	<td><?=$category['id']?></td>
	<td><?=$category['cat_name']?></td>
	<td><?=$category['display_seq']?></td>
</tr>
<? endforeach; ?>
</tbody> 
</table> 