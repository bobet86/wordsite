<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'bobet');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2A(nv3P>esqp*&.@-pv.yLQ-419~X/eZZh+joLD8Km&|YQJ5{rF56Q;4G$JC3mvu');
define('SECURE_AUTH_KEY',  'TZ+T)2[{U;-.I*^SxdPcI-|Xu4pw9Dq^&5MGhx2O3-D.w`mO-ba4f2+nQWhnPOs|');
define('LOGGED_IN_KEY',    '5PuIkReQ5D{Pn&|] &Nbwla bT3MFSfC/mImu-RUL9[@s$(![;T^|i+jsFk{o2R4');
define('NONCE_KEY',        'KNpQ-4v|% Ruj Z`Rf?[<#RRgOC}K*UTBt1;+AbX.7!Bk#JY#L[4-j-f=fp<|OGh');
define('AUTH_SALT',        '`J>~HV7f/S+n5T/hoLqy7S)-n96){+!>w3=Gf_i~e2-z^WgN{aH(-7v$1jY-m{!$');
define('SECURE_AUTH_SALT', 'ZS}h#mI0)7rm]z1v0^u:{E5aZQ<mQ}xEk*T(/5>Lai)=X=6yOt+>zVf6Q{_W>pZa');
define('LOGGED_IN_SALT',   'KvT^/]eB`iOj`Bvxf/32|%cc1K.Sd|!:+1nXJB&uzpgXr+#o5`+~:i!cX&0)v*VP');
define('NONCE_SALT',       'P.wd:B5CEKs#Wc!+tZk`@,nK@(HxD<oT-C>8a*E75+ysa]qXcylwnU3w{14~EkPD');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon creazione di contenuti. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');