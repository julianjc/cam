<? //echo $javascript->link('/mootools-1.2.4.js', false); ?>
<? echo $javascript->link('http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js', false); ?>
<?// echo $javascript->link('/jquery-1.4.2.min.js');
 echo $javascript->link('/ui/jquery.ui.core.js');
 echo $javascript->link('/ui/jquery.ui.widget.js');
 echo $javascript->link('/ui/jquery.ui.tabs.js'); ?>

<script type="text/javascript">
	$(function() {
		$("#tabs").tabs(
		{
		 selected: <?=$cid?>
		}
		);
		 
	});
	$(document).ready(function(){
    $(document).bind("contextmenu",function(e){
        return false;
    });
	});

</script>

<div id="tabs">
	<ul>
    	<? foreach($menus as $item): 
				$category = $item['Category'];
		?>
		<li><a href="sub_menus?cat_id=<?=$category['id']?>"><?=$category['cat_name']?></a></li>
        <? endforeach; ?>
	</ul>
</div>
