Usage:

Set variables:
<?php
cfg::set('DB_HOST', 'localhost');
cfg::set('DB_USER', 'root');
cfg::set('DB_PASS', '');
cfg::set('DB_NAME', 'database');

cfg::set('ALLOWED_IPs', array(	'127.0.0.1', '192.168.0.100'));

?>

Get variables:

<?php
echo cfg::get('DB_HOST');
echo PHP_EOL.'<br>'.PHP_EOL;
echo cfg::get('UNDEFINED', 'default-value');
?>