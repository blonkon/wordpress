<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'lonpo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3310' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/`<}1`8$T?XuB.R6&PyLz0M}UGpVcn)>^TJ!!dF(k,cm-xP-q=Z=s-ky0zt}2DMi' );
define( 'SECURE_AUTH_KEY',  'c~yqY}L>6].T|vuvYdK sU7tunmJjCA ?PZ!&xG4Ir;R1jDp65b}<qd3DmFg`T0G' );
define( 'LOGGED_IN_KEY',    '+L.ST=]z_gkxy tmRpj#N/2r|7D&6yUtpN6YB~62>),Wi5]3tBM%4Lsp(ERGptSK' );
define( 'NONCE_KEY',        '>*DvSoD3WtzRI#|y<!6hou`CQn#!zs]3<InL*Va`)KSvH].TY@>>;MRm!A)KFG9p' );
define( 'AUTH_SALT',        '8L25ZiK<]1?] qC4>EGe0QgZuT+n}*+KxQQih^<gwMOI}d7_uETaFduJrl:d46cU' );
define( 'SECURE_AUTH_SALT', 'lnnm:AP>Nv2O/_v~]YP34}I|3!n+Gc8FjI.93*2F2uwxhYZzk?}`R9^8q$aW]Q1}' );
define( 'LOGGED_IN_SALT',   '(k9%7[ uZ_Nto*,/m#Ih&ra6AA*p[BYV%72gif{zMoPIX d86c8lW=68VL)hGE/k' );
define( 'NONCE_SALT',       'OrKpwjqgBr~svlZ_x17h{_ZQOSeiNlryb/1g0LT}h.9A=Ld$oSF#*^Pd{/o>z)#r' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
