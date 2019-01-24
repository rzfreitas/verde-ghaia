<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'vg-novo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1uUV9+R`a+Ny/cq8w3362H #lrg8d#K+td:~a/fAujk(sH*oaY.JzoDc%4,b{BU,');
define('SECURE_AUTH_KEY',  'U@dB/{7w}g|us=9Rgaf}#eBVO!UI!5ufWM&P/{ZH$arXnT0`52#^@6,MkwTMyOZ+');
define('LOGGED_IN_KEY',    ')W2n)^4-Lg<)R)4G`jd,|j^-~_]cVk,,uelrVr e;[Wv^ |lf$SdFy$7dS=|/9:H');
define('NONCE_KEY',        'w>NV&&~tdV1r/I^~[`3$?<Z.@R J*G#8?%r|WX5(Vu]7L_[Bnt,5*sJx4B.oL5ec');
define('AUTH_SALT',        'O-&EE?q~.{R%)7vz) ItX[-uWl}p((JHO^}6%CG*A6Onuy*4&|^=mX+X]mTs<8-t');
define('SECURE_AUTH_SALT', '}<k)7@Cw^x?@k2S?[FEZ7##hJjHyW-G=UUo3ll#:TwvT(2dmmAY9`qHh&u@c~@Si');
define('LOGGED_IN_SALT',   'L*Fr7.]0+^aH0Qc(+0h^5vCqfx.Iovd@mjdxNm{Bzk0+!{R}z}lmgimee]6A9>/M');
define('NONCE_SALT',       'A5&Xut5`?jM!C.$`d.,NE8]<0+}jfv(n7TKjZA[+]Q()m[EY#W!^.M7%k^LA<)A}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'vgwp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
