<?
echo $html->css('/themes/blue/style.css');
echo $html->css('/js/pager/jquery.tablesorter.pager.css');
echo $javascript->link('/jquery-1.4.1.js');
echo $javascript->link('jquery.tablesorter.min.js');
echo $javascript->link('pager/jquery.tablesorter.pager.js');
?>

<script type="text/javascript">
$(document).ready(function() { 
    $("#slideTable") 
    .tablesorter({widthFixed: true}) 
    .tablesorterPager({container: $("#pager")}); 
}); 

function editSlideWindow(slide_id) {
	if (slide_id) {
		window.open ("slideshow_edit?slide_id=" + slide_id,"mywindow","status=1,width=800,height=530");
	}
	else {
		window.open ("slideshow_edit","mywindow","status=1,width=800,height=530");
	}
}

</script>
<p>Slideshow Maintance</p>


<br /><br />
<input type="button" onClick="editSlideWindow()" value="+" />
<div id="hint">* double click to edit</div>
<div id="pager" class="tablesorterPager">
<form>
    <img src="../js/pager/icons/first.png" class="first"/>
    <img src="../js/pager/icons/prev.png" class="prev"/>
    <input type="text" class="pagedisplay"/>
    <img src="../js/pager/icons/next.png" class="next"/>
    <img src="../js/pager/icons/last.png" class="last"/>
    <select class="pagesize">
        <option selected="selected"  value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option  value="40">40</option>
    </select>
    <input type="text" id="page_num" value="1"/><img src="../js/pager/icons/jump.png" class="jump"/>
</form>
</div>

    <table id="slideTable" class="tablesorter"> 
    <thead> 
        <tr> 
            <th width="30">ID</th>
            
            <th>Jpg</th>
            <th>Url</th>
        </tr>
    </thead>
        <tbody>
        <? foreach($slide_list as $slideshows):
        $slideshow = $slideshows['Slideshow'];
	      ?>
        <tr onDblClick="editSlideWindow('<?=$slideshow['id']?>')">
            <td><?=$slideshow['id']?></td>
           
            <td><?=$slideshow['jpg']?></td>
           <td><?=$slideshow['url']?></td>
        </tr>
        <? endforeach; ?>
        </tbody> 
    </table>
<br><br>