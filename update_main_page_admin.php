<?php
/*
Plugin Name: Alteração da pagina admin
Plugin URI:
Description: Primeiro plugin criado para realizar alterações no admin
Version: 1.0
Author: Vinícius Pereira de Oliveira
Author URI:
Text Domain:
License:
*/


//utilização do Design Pattern Sigleton

class SecondPlugin
{
    private static $instance;

    public static function getInstance()
    {
        if(self::$instance == NULL)
        {
            self::$instance = new self();
        }
    }

    private function __construct()
    {
        remove_action('welcome_panel', 'wp_welcome_panel');
        add_action('welcome_panel', array($this,'updateMainPage'));
        add_action('admin_enqueue_scripts', array($this,'addCss'));
    }

    public function updateMainPage()
    {
        ?>
            <div class="welcome-panel-content">
                <h3>Vinicius Pereira de oLiveira</h3>
            </div>
        <?php 
    }

    public function addCss()
    {
        wp_register_style('mySecondPlugin', plugin_dir_url(__FILE__)."css/style.css");
        wp_enqueue_style('mySecondPlugin');
    }
}

SecondPlugin::getInstance();

