
<style type="text/css">
		.demo { width: 500px; height: 200px; }
		#button { padding: .5em 1em; text-decoration: none; }
		#resizableb {
	width: 750px;
	height: 420px;
	position: relative;
	font-style: normal;
	font-size: 18px;
	margin-left: 20px;
}
		#resizableb h3 {
	margin: 0;
	padding: 0.4em;
	text-align: left;
}
		.ui-effects-transfer { border: 2px dotted gray; } 
	</style>

<script type="text/javascript">
	$(function() {
		$("#companyinfo").show('clip');
		$("#resizableb").resizable();
});
</script>

<div>
	<div id="resizableb" class="ui-widget-content ui-corner-all">
        <div id="companymap">
            <iframe width="400" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=hong+kong&amp;sll=37.0625,-95.677068&amp;sspn=51.754532,67.675781&amp;ie=UTF8&amp;hq=&amp;hnear=Hong+Kong&amp;ll=22.277955,114.177499&amp;spn=0.000869,0.00114&amp;z=19&amp;output=embed"></iframe>
        </div>
    
        <div id="companyinfo">
    
            <u>Camport Camera Accessories</u><br />
            Shop 123A, 298 Computer Zone,<br />
            298 Hennessy Road, Wan Chai,<br />
            Hong Kong<br />
            <br />
            <u>Contact No / Fax No:</u><br />
            (852)-2838-3832<br />
            <br />
            <u>Email:</u><br /> 
            sales@camportco.com<br />
            <br />
            <u>Opening hours:</u><br />
            Mon - Sat 1:00pm - 9:00pm <br />
            Sun &amp; Public holiday 2:30pm - 8:00pm
        </div>

    </div>
</div>
