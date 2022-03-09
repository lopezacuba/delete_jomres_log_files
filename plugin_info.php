<?php
/**
 *
 * @version Jomres 9.23.x
 *
 * @copyright	2021 Mark the Shark
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 *
 **/
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_delete_jomres_log_files
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"delete_jomres_log_files",
			"category"=>"System",
			"marketing"=>"This Plugin will Delete ALL Jomres Log files. To use this plugin. Go to Tools -> Delete Log Files.",
			"version"=>"1.01",
			"description"=> "This Plugin will Delete ALL Jomres Log Files. To use this plugin. Go to Tools -> Delete Log Files.",
			"lastupdate"=>"03/09/2022",
			"min_jomres_ver"=>"9.23.0",
			'third_party_plugin_latest_available_version' => "http://www.fixmycomputermark.com/jomrespluginsinfo/delete_log_files.json",
			"manual_link"=>'',
			'change_log'=>'None.',
			'highlight'=>'',
			'image'=>'https://snippets.jomres.net/plugin_screenshots/2017-08-02_4tti8.png',
			'demo_url'=>'',
			 "developer_page" => "http://www.fixmycomputermark.com/free-downloads/file/125-delete_log_files.html",
			"author"=>"Mark",
			"authoremail"=>"<a href=mailto:info@fixmycomputermark.com?subject=delete_log_files>Email_Me</a>"
			);
		}
	}
?>