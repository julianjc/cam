<? 
$product = $products[0]['Product'];
$make = $products[0]['Make'];

$product['desc']=str_replace( "\r\n", "</p><p>",$product['desc']);
$product['desc'] = "<p>" . $product['desc']. "</p>";

for ($j = 1; $j <= $product['photo_cnt']; $j++) {
?>
<div class="mb">
    <table width="980">
    <tr>
        <td width="600">
            <a href="<?=prodImagePath().$product['product_id'].'_l_'.$j.".jpg"?>" target="_blank">
            <img height="350" id="mbimg_<?=$j?>" class="mbimg" src="<?=prodImagePath().$product['product_id'].'_l_'.$j.".jpg"?>"/>
            </a>
        </td>
        <? if ($j == 1) {?>
        <td>
            <table>
            	<tr><td colspan="2" align="left"><? echo $html->image(IMG_ROOT."images/prod_info.gif", array("width" => "250", "height"=> "25")); ?></td></tr>
                <tr><th width="100">ID:</th><td><?=$product['product_id']?></td></tr>
                <tr><th>Name:</th><td><?=$product['name']?></td></tr>
                <tr><th>Company:</th><td><?=$make['make_name']?></td></tr>
                <tr><th>Description:</th><td><? if (!empty($product['desc'])) { echo $product['desc']; } else {echo "No description";}?></td></tr>
                <tr><th>Remark:</th><td><? if (!empty($product['remark'])) { echo $product['remark']; } else {echo "No remark";}?></td></tr>
            </table>
        </td>
        <? }?>
    </tr>
    </table>
</div>
<? }?>
