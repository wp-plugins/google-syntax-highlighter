<?php
/*
Plugin Name: Google Syntax Highlighter
Plugin URI: 
Description: 
Author: Peter Ryan 
Version: 1.0
Author URI: www.peterryan.net
*/

function insert_header() {
	$current_path = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	?>
	<link href="<?php echo $current_path; ?>Styles/SyntaxHighlighter.css" type="text/css" rel="stylesheet" />
	<?php
}

function insert_footer(){
$current_path = get_option('siteurl') .'/wp-content/plugins/' . basename(dirname(__FILE__)) .'/';
	?>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shCore.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushCSharp.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushPhp.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushJScript.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushJava.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushVb.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushSql.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushXml.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushDelphi.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushPython.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushRuby.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushCss.js"></script>
<script class="javascript" src="<?php echo $current_path; ?>Scripts/shBrushCpp.js"></script>
<script class="javascript">
dp.SyntaxHighlighter.ClipboardSwf = '<?php echo $current_path; ?>Scripts/clipboard.swf';
dp.SyntaxHighlighter.HighlightAll('code');
</script>
<?php
}
add_action('wp_head','insert_header');
add_action('wp_footer','insert_footer');
?>
