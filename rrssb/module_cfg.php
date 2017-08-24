<?
$title='Left Social Bar'; //'Menu Title';
$version='1.0'; //'v1.0';
$launcher='hidden'; //'index.php or hidden';
$description='Setup left vertical share bar'; //"long description of module";



$doc_root = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: /var/www
include_once "$doc_root/modules/module_permissions.php";


if ($_GET['launch']) {
	verify($title,$launcher);
	
} else {
	// this must follow do_header
	$short_actual_link=short_actual_link;
	$ogtitle=ogtitleRRSSB;
	$ogdescription=ogdescriptionRRSSB;
	$ogurl=ogurlRRSSB;
	$ogkeywords=ogkeywordsRRSSB;
	$ogimage=ogimageRRSSB;

	$test="
	<div>$short_actual_link</div>
	<div>$ogtitle</div>
	<div>$ogdescription</div>
	<div>$ogurl</div>
	<div>$ogkeywords</div>
	<div>$ogimage</div>

	";
	
	if ($short_actual_link and $ogtitle and $ogdescription) {
		include "rrssb.php"; // gets $social_lineL if $social_url exists $social_lineL2
	}

	if ($social_lineL) {
		echo "<div id='lsbar' class='hugestuff fixedContainer' >$social_lineL$test</div>";
		echo "
		<style type=\"text/css\">
		.fixedContainer {
			background-color:yellow;
			position: fixed;
			width:600px;
			height:400px;
			left: -40px;
			top: 200px;
			//transform: translate(-50%, -50%);
			z-index: 999;
			//z-index: 16777271
			opacity: 0.5;
		}
		.fixedContainer:hover {
			z-index: 16777271;
			left: 0;
		}
		</style>
		<script>
			$( document ).ready(function() {
				$('#lsbar').appendTo(\"body\");
			});
		</script>
		";
	}
	
}
$module_setup_css="";
$menuline_item="";


?>
