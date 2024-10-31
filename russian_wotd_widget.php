<?php
/*
Plugin Name: Russian Word of the Day Widget
Plugin URI: http://www.innovativelanguage.com/
Description: Adds a daily Russian Word of the Day (with audio) widget to the WordPress sidebar.
Author: Innovative Language Learning
Version: 1.0
Author URI: http://www.innovativelanguage.com/
Notes:  Adobe Flash required
*/

function russian_widget_wotd_set_options() {
	add_option('russian_widget_wotd_size', 1);
}
function russian_widget_wotd_unset_options() {
	delete_option('russian_widget_wotd_size');
}

function russian_widget_wotd_init() 
{
	if ( !function_exists('register_sidebar_widget') )
	{
		return;
	}
		
	function russian_widget_wotd($args) 
        {
		extract($args);
		$size = get_option('russian_widget_wotd_size');
		$link = "yes";
		switch ($size) {
			case 1:
				$wotd = "<div style=\"text-align:center; width:160px\">";
			$wotd .= " 		
				<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\" width=\"160\" height=\"190\" id=\"language\" align=\"middle\">
				<param name=\"allowScriptAccess\" value=\"always\" />
				<param name=\"allowFullScreen\" value=\"false\" />
				<param name=\"movie\" value=\"http://assets.languagepod101.com/igoogle/swf/small_language.swf\" />
				<param name=\"quality\" value=\"high\" />
				<param name=\"bgcolor\" value=\"#ffffff\" />
				<param name=\"wmode\" value=\"transparent\" />
				<param name=\"flashVars\" value=\"languageName=Russian&languageCode=rpod&lifetimeAccount=$link&webServiceUrl=http://www.russianpod101.com/russian-phrases/&bgimgfill=stretch&bgcolor=#2b2b2b&bgimgfile=back_07.png&bgimgfill=stretch&bgimgalpha=0.25&bordercolor=#000000&boxbgcolor=#ffffff&headerText=#ffffff&genderText=#ffffff&partOfSpeechText=#ffffff&nativeText=#ffffff&targetText=#f9bd4d&iconcolor=#ffffff&basePath=http://assets.languagepod101.com/igoogle/images/\" />
				<embed src=\"http://assets.languagepod101.com/igoogle/swf/small_language.swf\" quality=\"high\" bgcolor=\"#dd0000\" width=\"160\" height=\"190\" name=\"language\" align=\"middle\" allowScriptAccess=\"always\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashVars=\"languageName=Russian&languageCode=rpod&lifetimeAccount=$link&webServiceUrl=http://www.russianpod101.com/russian-phrases/&bgimgfill=stretch&bgcolor=#2b2b2b&bgimgfile=back_07.png&bgimgfill=stretch&bgimgalpha=0.25&bordercolor=#000000&boxbgcolor=#ffffff&headerText=#ffffff&genderText=#ffffff&partOfSpeechText=#ffffff&nativeText=#ffffff&targetText=#f9bd4d&iconcolor=#ffffff&basePath=http://assets.languagepod101.com/igoogle/images/\" wmode=\"transparent\" />
				</object>
			";		
			break;
			case 2:
				$wotd = "<div style=\"text-align:center;width:280px\">";
			$wotd .= " 		
				<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\" width=\"280\" height=\"333\" id=\"language\" align=\"middle\">
				<param name=\"allowScriptAccess\" value=\"always\" />
				<param name=\"allowFullScreen\" value=\"false\" />
				<param name=\"movie\" value=\"http://assets.languagepod101.com/igoogle/swf/small_language.swf\" />
				<param name=\"quality\" value=\"high\" />
				<param name=\"bgcolor\" value=\"#ffffff\" />
				<param name=\"wmode\" value=\"transparent\" />
				<param name=\"flashVars\" value=\"languageName=Russian&languageCode=rpod&lifetimeAccount=$link&webServiceUrl=http://www.russianpod101.com/russian-phrases/&bgimgfill=stretch&bgcolor=#2b2b2b&bgimgfile=back_07.png&bgimgfill=stretch&bgimgalpha=0.25&bordercolor=#000000&boxbgcolor=#ffffff&headerText=#ffffff&genderText=#ffffff&partOfSpeechText=#ffffff&nativeText=#ffffff&targetText=#f9bd4d&iconcolor=#ffffff&basePath=http://assets.languagepod101.com/igoogle/images/\" />
				<embed src=\"http://assets.languagepod101.com/igoogle/swf/small_language.swf\" quality=\"high\" bgcolor=\"#dd0000\" width=\"280\" height=\"333\" name=\"language\" align=\"middle\" allowScriptAccess=\"always\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashVars=\"languageName=Russian&languageCode=rpod&lifetimeAccount=$link&webServiceUrl=http://www.russianpod101.com/russian-phrases/&bgimgfill=stretch&bgcolor=#2b2b2b&bgimgfile=back_07.png&bgimgfill=stretch&bgimgalpha=0.25&bordercolor=#000000&boxbgcolor=#ffffff&headerText=#ffffff&genderText=#ffffff&partOfSpeechText=#ffffff&nativeText=#ffffff&targetText=#f9bd4d&iconcolor=#ffffff&basePath=http://assets.languagepod101.com/igoogle/images/\" wmode=\"transparent\" />
				</object>
			";
			break;
			case 3:
				$wotd = "<div style=\"text-align:center;width:540px\">";
			$wotd .= " 		
				<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\" width=\"540\" height=\"450\" id=\"language\" align=\"middle\">
				<param name=\"allowScriptAccess\" value=\"always\" />
				<param name=\"allowFullScreen\" value=\"false\" />
				<param name=\"movie\" value=\"http://assets.languagepod101.com/igoogle/swf/language.swf\" />
				<param name=\"quality\" value=\"high\" />
				<param name=\"bgcolor\" value=\"#ffffff\" />
				<param name=\"wmode\" value=\"transparent\" />
				<param name=\"flashVars\" value=\"languageName=Russian&languageCode=rpod&lifetimeAccount=$link&webServiceUrl=http://www.russianpod101.com/russian-phrases/&bgimgfill=stretch&bgcolor=#2b2b2b&bgimgfile=back_02.png&bgimgfill=stretch&bgimgalpha=0.25&bordercolor=#000000&boxbgcolor=#ffffff&headerText=#ffffff&newsText=#ffffff&genderText=#ffffff&partOfSpeechText=#ffffff&nativeText=#ffffff&targetText=#f9bd4d&targetText=#f9bd4d&nativePhraseText=#ffffff&targetPhaseText=#f9bd4d&iconcolor=#ffffff&basePath=http://assets.languagepod101.com/igoogle/images/\" />
				<embed src=\"http://assets.languagepod101.com/igoogle/swf/language.swf\" quality=\"high\" bgcolor=\"#dd0000\" width=\"540\" height=\"450\" name=\"language\" align=\"middle\" allowScriptAccess=\"always\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashVars=\"languageName=Russian&languageCode=rpod&lifetimeAccount=$link&webServiceUrl=http://www.russianpod101.com/russian-phrases/&bgimgfill=stretch&bgcolor=#2b2b2b&bgimgfile=back_02.png&bgimgfill=stretch&bgimgalpha=0.25&bordercolor=#000000&boxbgcolor=#ffffff&headerText=#ffffff&newsText=#ffffff&genderText=#ffffff&partOfSpeechText=#ffffff&nativeText=#ffffff&targetText=#f9bd4d&targetText=#f9bd4d&nativePhraseText=#ffffff&targetPhaseText=#f9bd4d&iconcolor=#ffffff&basePath=http://assets.languagepod101.com/igoogle/images/\" wmode=\"transparent\" />
				</object>
			";	
			break;
		}
		$wotd .= "
		<div style=\"font:bold 9px/16px Verdana; padding:0; height:16px;\"><div style=\"float:left; margin:0;\"><a href=\"http://www.russianpod101.com/russian-phrases/\" target=\"_parent\" title=\"Get Widget\">Get Widget</a></div><div style=\"float:right; margin:0;\"><a href=\"http://www.russianpod101.com\" target=\"_parent\" title=\"Learn Russian\">Learn Russian</a></div></div></div>		
		</div>";
		echo $wotd;
	}

	
	function russian_widget_wotd_control() 
	{
		echo '<p style="text-align:left;">Russian Word of the Day Widget</p>';
	}
	register_widget_control(array('Russian Word of the Day', 'widgets'), 'russian_widget_wotd_control', 190, 160);
	register_sidebar_widget(array('Russian Word of the Day', 'widgets'), 'russian_widget_wotd');
}


function russian_widget_wotd_options_page() {		
	$russian_widget_wotd_size = get_option('russian_widget_wotd_size');
	
	$cmd = $_POST['cmd'];

	if ($cmd == "russian_widget_wotd_save_opt") { 
		$russian_widget_wotd_size = $_POST['russian_widget_wotd_size'];	

		update_option('russian_widget_wotd_size', $russian_widget_wotd_size);
	?>
		<div class="updated"><p><strong> <?php echo 'Settings saved' ?></strong></p></div>
	<?php
	}
?>
	<div class="wrap">
	<h2>Russian Word of the Day Widget Settings</h2>

	<form method="post" action="<? echo $_SERVER['REQUEST_URI'];?>">
	<table class="form-table">
	<tr>
	<th colspan=2 scope="row">
	Select widget size: 
		<select name='russian_widget_wotd_size'>
			<option value="1" <?if($russian_widget_wotd_size==1)echo " selected ";?>>Small</option>
			<option value="2" <?if($russian_widget_wotd_size==2)echo " selected ";?>>Medium</option>
			<option value="3" <?if($russian_widget_wotd_size==3)echo " selected ";?>>Big</option>
		</select>
	</th>
	</tr>
	</table>
	<input type="hidden" name="cmd" value="russian_widget_wotd_save_opt"> 
	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" />
	</p>
	</form>

	</div>

<?php

}
add_action('widgets_init', 'russian_widget_wotd_init');
add_action('admin_menu', 'russian_widget_wotd_admin_page');
register_activation_hook(__FILE__, 'russian_widget_wotd_set_options');
register_deactivation_hook(__FILE__, 'russian_widget_wotd_unset_options');

function russian_widget_wotd_admin_page() {
    add_options_page('Russian Word of the Day Widget', 'Russian Word of the Day Widget', 8, __FILE__, 'russian_widget_wotd_options_page');
}


?>