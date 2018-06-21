<?php
define( 'DB_NAME', 'dbname' );
define( 'DB_USER', 'dbuser' );
define( 'DB_PASSWORD', 'dbpassword' );
define( 'DB_HOST', 'dbhost' );

//ini_set( 'display_errors', E_ALL );

//define( 'WP_DEBUG', true );
//define( 'WP_DEBUG_LOG', true );
//define( 'WP_DEBUG_DISPLAY', true );

// Regenerate salts https://api.wordpress.org/secret-key/1.1/salt/
define( 'AUTH_KEY',         '!O5Nl5--7/5t(0Lts)Q<n`H LI8[||]FWtuRZjYjX|N?Mm_-mw:-t-&_V-|>~^xS' );
define( 'SECURE_AUTH_KEY',  'ZI+;TRUu324G7g;w9,DO1p- f[,0,HF`S1D,X=+N`XG`:cZ>4a)H&}`z>aj1?OSR' );
define( 'LOGGED_IN_KEY',    '%^T9!K**#`9`ME{YV?dA7I0+ebpqB#kWnK0%yAc$R6q]yqhkmd8g|4M}?b-0]gs0' );
define('NONCE_KEY',        'p%/%*(P}.Y+f?|d?we]$+nlhd5xF8LsP}z5`/SdB@x|a|S2eJ;)+s3[X}B=~|ERx' );
define( 'AUTH_SALT',        'cgn/4lkam^9yjiTC^YeM6JY>:`I!%o^#2lPeL>7GirgCOW.xmGd}@7@/o+3-~uB}' );
define( 'SECURE_AUTH_SALT', 'G9qqx|Ns@|4-&F$uQkV%EC-Jb>!01O!p!JK`o,gu2w&-th{3Cp)Ub$5(+=GToa6%' );
define( 'LOGGED_IN_SALT',   'r oj@s`$ta/||+0Lf3#U*@wkYE$So0l<q-2cZc,|j6N~S:.tyzd1D2j 3b]QmtoJ' );
define( 'NONCE_SALT',       'hd5m)S5GfXa}bl-t0n.oE.P7!s{>=;{e#8re+P!)e9!1H/q+S@-&hoVf6S9|qVC ' );

$table_prefix  = 'wp_';