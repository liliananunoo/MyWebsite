<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link https://wordpress.org/support/article/editing-wp-config-php/ Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'liliananuno' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'liliananuno' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', 'darksoularry22' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'Xgk9]7Jn%VN*Hd$fF.3T7#0TLT:U NG)aOt.#c!=yT<<p1z3(q-/zI@ka5STWz(.' );
define( 'SECURE_AUTH_KEY', '=(LH>UgQA?/447$G<7]sw$<9P%^Mv1-tL0JxC51?sS9THL%lw5Tu{&{1*`4d;%[*' );
define( 'LOGGED_IN_KEY', 'yi/tx,{%X~r{H#IugF|*q7p17JKvdD5|6;7=$%Lg};an5_|BM8NzJ7pA?U-MCV2B' );
define( 'NONCE_KEY', '`uOlE=C;=UxF^2vFfG2j<ouTU#ysJ@8lA|; xCiJ,xKu!5rw9cdI8me!r|N,<8V%' );
define( 'AUTH_SALT', '+1:Jy7)nt945_?7i/u9HWZGq]$!x3jZf&d{3}8Y3:Tu99;7D4Ro^+Z%Kl38+YYyk' );
define( 'SECURE_AUTH_SALT', '8?!LtE&8][% _?Zi7X?HOUJ&m2+.c4rvv!u.EPD$#P[p `<^,]4uGmXT+xQ%BZUd' );
define( 'LOGGED_IN_SALT', '~r7UPsq6@*,b9,^j=uTpXD)I=O7MF1fEMXMZHtJ+.G2!(^XyQ<&cJc`s~E@3KK,Q' );
define( 'NONCE_SALT', 'uWhq79%F,+^09&F;9gI-Wi=vNBvvn.qDjIFTcY1Xos(hWFOlbO#=y!GiRzJ(&72G' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once ABSPATH . 'wp-settings.php';
