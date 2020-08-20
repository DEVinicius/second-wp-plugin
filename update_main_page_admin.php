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

/*Desativar plugin anterior (welcome_panel) */
remove_action('welcome_panel', 'wp_welcome_panel');

function updateMainPage()
{
    ?>
        <div class="welcome-panel-content">
            <h3>Vinicius Pereira de oLiveira</h3>
        </div>
    <?php 
}
 
add_action('welcome_panel', 'updateMainPage');
