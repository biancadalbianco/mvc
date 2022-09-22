<?php
/**
 * Configuração geral
 */

# Caminho para a raiz
define( 'DIR_BASE', dirname( __FILE__ ) );

# Caminho para a pasta de uploads
define( 'UP_DIR_BASE', DIR_BASE . '/app/uploads' );

# URL da home
define( 'URL_BASE', 'http://localhost/mvc-2022/' );


# Caminho para a view
define( 'VIEW',DIR_BASE.'/app/views/'  );

/**INFORMAÇÃO REFERENTE AO TEMA A SER UTILIZADO */
#Pasta contendo os temas
define("DIR_TEMPLATES", DIR_BASE."/public/templates/");
#define o TEMPLATE
define('TEMPLATE','default');
#define a pasta do template
define('DIR_TEMPLATE',DIR_TEMPLATES.TEMPLATE);
# URL do tema
define( 'URL_TEMPLATE', URL_BASE.'public/templates/'.TEMPLATE."/" );



/**INFORMAÇÕES PARA CONEXAO COM O BANCO DE DADOS */

# Banco ultilizado
define("DB", "mysql");
# Nome do host do banco
define("DB_HOST", "localhost");
# Porta do host do banco
define("DB_PORT","3306");
# Nome do usuário do banco
define("DB_USER", "root");
# Senha do banco
define("DB_USER_PASS", "");
# Nome do banco
define("DB_DATABASE", "cash_book");

/*-------------------------*/

# Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );


?>