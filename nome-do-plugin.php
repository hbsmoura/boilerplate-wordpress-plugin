<?php

/**
 *
 * Plugin Name:       Nome do plugin
 * Description:       Descrição do plugin.
 * Version:           1.0.0
 * Requires at least: 5.6
 * Requires PHP: 	  7.0
 * Author:            hbsmoura
 * Author URI:        https://github.com/hbsmoura
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nome-do-plugin
 * Domain Path:       /languages
 */

// Aborta quando chamado diretamente.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Define as constantes do plugin
 */
define ( 'NOME_DO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define ( 'NOME_DO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define ( 'NOME_DO_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'NOME_DO_PLUGIN_VERSION', get_file_data(__FILE__, ['Version'], 'plugin') );

// Carrega o textdomain
load_plugin_textdomain('nome-do-plugin', false, dirname(NOME_DO_PLUGIN_BASENAME) . '/languages');

// Registra a função para o hook de ativação do plugin
register_activation_hook(__FILE__, 'nome_do_plugin_activate');
function nome_do_plugin_activate() {
}

// Registra a função para o hook de desativação do plugin
register_deactivation_hook(__FILE__, 'nome_do_plugin_deactivate');
function nome_do_plugin_deactivate() {
}

// Chama o autoloader.php
require_once NOME_DO_PLUGIN_PATH . 'autoloader.php';

// Cria o objeto principal
// O root namespace deve ser alterado no autoloader
$plugin = new NomeDoPlugin\NomeDoPlugin();
