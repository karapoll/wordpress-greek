<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'greek');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+xUVKPYg?RvE*0j~)6DC[vHNYXIP:TX<Z5xX/Xt(|olh?wHCR&=(l>t5zC-IOD$4');
define('SECURE_AUTH_KEY',  '3k {lk>%*M~<q5RV~Gf~-mqN2Ei>+| ARt e10l=ay|U9>f+Qt@UUyG<RG+NWnjd');
define('LOGGED_IN_KEY',    '=i2.1|{0e,oFx38MY|pT!JXfUB+r-[]|u*4rxzA C?CS:9EQ7:&1[D(!qy&o]?)B');
define('NONCE_KEY',        '=@&Dsfg3KolP.~nIVWMH,-Vj&_J.$rT|2yE$x1%&Q|pvlV!3RBX3Kw z~LYW|&:*');
define('AUTH_SALT',        'o>*GPpQ^t{dR8fS:`uW1#^>( 6O7so]B~s^$yi|HpC{:qIl)k&8*Ssd]o[3ddA90');
define('SECURE_AUTH_SALT', 'p1Q4JZ}|=HQ279j-Zs vWvqJ0Rm+eBP5M_SJGs{q3JBdX:kJ#Q1MGoP7?o}|+t.z');
define('LOGGED_IN_SALT',   'X|<s,Ci8:r;,KjV;9Eb&0;#B]q1-0UTaNi)l9O%cbb2[(^x3GKGZle,}# $)$7])');
define('NONCE_SALT',       '<H9$+KDwRJL./<m6iT+kum1n*RzJl^(f._<:G N(jTKm,6*3#?:#*aAa#+0^nQ0F');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');