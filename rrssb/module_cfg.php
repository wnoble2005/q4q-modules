<?
$title='Left Social Bar'; //'Super Search';
$version='1.0'; //'v1.0';
$launcher='hidden'; //'super_search.php';
$description='Setup left vertical share bar'; //"Search various parts of our website";



$doc_root = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: /var/www
include_once "$doc_root/modules/module_permissions.php";


if ($_GET['launch']) {
	verify($title,$launcher);
	
} else {
	$short_actual_link=short_actual_link;  // this must follow do_header
	$ogtitle=ogtitleRRSSB;  // this must follow do_header
	$ogdescription=ogdescriptionRRSSB;  // this must follow do_header
	$ogurl=ogurlRRSSB;  // this must follow do_header
	$ogkeywords=ogkeywordsRRSSB;  // this must follow do_header
	$ogimage=ogimageRRSSB;  // this must follow do_header

	$test="
	<div>$short_actual_link</div>
	<div>$ogtitle</div>
	<div>$ogdescription</div>
	<div>$ogurl</div>
	<div>$ogkeywords</div>
	<div>$ogimage</div>

	";
	
	if ($short_actual_link and $ogtitle and $ogdescription) {
		//https://github.com/AdamPS/rrssb-plus
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
