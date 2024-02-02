<?php

namespace NomeDoPlugin;

use NomeDoPlugin\Admin\NomeDoPluginAdmin;
use NomeDoPlugin\Public\NomeDoPluginPublic;

class NomeDoPlugin {

	public function __construct() {
		$nome_do_plugin_admin = new NomeDoPluginAdmin();
		$nome_do_plugin_public = new NomeDoPluginPublic();
	}
}
