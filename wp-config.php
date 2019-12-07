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
define( 'DB_NAME', 'sociedade' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'K4UTUV3}a&oNIlSUZ&kU3yGGSRx<2KRlTUv$Tg&7f&oHc62+OE_ zUx]wMD{?L<(' );
define( 'SECURE_AUTH_KEY',  'W=eG#UIYb@pd3L]N=~4citxuRg.y-howTmh(X>bR]d#2q_X W=TcOjj($4m.UY0z' );
define( 'LOGGED_IN_KEY',    '.fH]6B{zod[znRn{dwp{(t+NV/khrSQYC{m>7yb29U#**=(v=Yjw;O+!wUhW1puo' );
define( 'NONCE_KEY',        'rNB!oJl*_M$,LJ*Yl0lY]ChmPiYp%n#~Gbu((ch. gtc3xSOd$B8`SL)#mte/{EO' );
define( 'AUTH_SALT',        '<):z>@YYX,XJY6JTs[yeg+r^B.LqQ3vXaB8`jfN>ay5_=y:?)EXaT3&*N=am]&kG' );
define( 'SECURE_AUTH_SALT', 'nG=#g7$U%XFT.l(/s5W9pb#d-.$$%1<PC|3!lDgh@jYZd&MW[]$3:>OZ|:=5>2$#' );
define( 'LOGGED_IN_SALT',   'rF %]I`Z`eT#w%jHCY<]EP/t%2m<LW `PL@/e9kex_1KFjG1{/n/uEyy!rY__|SV' );
define( 'NONCE_SALT',       'btaI{r#h?}Z?jfM^pZ&:?G^.NS]l>(9gHVu9orOu5DdK0rx^.ua/~]j%`mLZ2QUv' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
