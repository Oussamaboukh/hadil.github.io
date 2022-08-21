<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'njg|Vt~t1{<DOSnxvE{=/PTtaLRWsi+T;U!S`,7h/rd%$>YV=bX[73Y:81S4NoaK' );
define( 'SECURE_AUTH_KEY',  'yAyw{N {)ZRklzwU|o&(Q[z*FEtuz|dmllI_*Mc|v=<)v!Rq8O{(de}(Y[3S1JX@' );
define( 'LOGGED_IN_KEY',    'Yzqenc?-$I)JLjktdS`3omN,7UlvFW<Oe2mZ^ox}su?.ojO`eQ{YGE~$:xh=&^?s' );
define( 'NONCE_KEY',        '?C%%`gRtR;we6V)M.%Eb?z-t!n/<WV<l#T]Ikzh$QEdOyDE_jg`dGO8]Ck_IDD^Q' );
define( 'AUTH_SALT',        ':w g4^J(Ey-W/X|qJ;!1T]4l2#ji]o>!U[RRVP+OC bFVYACwypt+rt:>6?Yunl1' );
define( 'SECURE_AUTH_SALT', 'm>5Yi~&[VvI/IeVrk[|mBVzi#tVB0QqdZ-+e0GdTWzyq%SN,*99dF~FB?tx/?W;2' );
define( 'LOGGED_IN_SALT',   'M6K5X-gy^:}L~mxwc@/#2/R4*_J^T#4$z(>=T=~|sfnqf2<HTkW>}4w@i@:_;Vl=' );
define( 'NONCE_SALT',       '2L-Z0=.mh(KZOW:5,2>}u[#wO[&ed>1MyU?mx|nTj`Cdma G+ 2.Vwdt!~Bx?pK)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
