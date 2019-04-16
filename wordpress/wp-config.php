<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projetWordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'projetWordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '14759' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2fwfC/;l;G#C_,1dMp+CfX(-2v4,JijCDHvhK71|-GB0)XLKVbq^d,`Y3s;*L <D' );
define( 'SECURE_AUTH_KEY',  '.vIp8F,-{Z%sy+[cdCvJdAmy85 TBQS3MVbL@%SOrvv)gQ_v4%+|!c2l=:Ns:Z^,' );
define( 'LOGGED_IN_KEY',    'Q|V-:;3]p3(tS#0E:_q+:}F0?yO&KpJB-]!%`rqVS*)>s?#lQX66vh$J66aiOHDs' );
define( 'NONCE_KEY',        'RbH ~|(K,!VmG7wE`l^G[E.pdYsdYi*yBs~Jfh@x6aKPdWeVOy]x5.$fgT.Edne0' );
define( 'AUTH_SALT',        '%UP8Gv_}/ho.NU0SYl2S?QY5e_)A`o|P]*s,Cmc8A,+F#;;pcWi;gj}=`$0Yu7si' );
define( 'SECURE_AUTH_SALT', 's:OU%#Ifis^4x2siYycc{@yRK#J/cic+-`HuBhc5m:Txw|f82V*O%4>vvH_N g&x' );
define( 'LOGGED_IN_SALT',   '9f`U7WIrP*]w1M6DQMu8e}~jqi# 3_9P$IK+mTBc+T{c6X<io||f_v/SCi[6Mbvr' );
define( 'NONCE_SALT',       '~?r56Ym.Jzly0%}Ff@LE?1_dX`_A<oz4|L#99(ePGUzaT#A(D{O2nN9[Da*%uQB:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_Projet';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
