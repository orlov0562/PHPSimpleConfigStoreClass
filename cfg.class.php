<?php if (!defined('ALLOW_ACCESS') OR !ALLOW_ACCESS) die('Access denied');

    class cfg {
        private static $cfg_prefix='__cfg';
        public static function get($var, $default=null)
        {
            $ret = $default;
            if ( isset( $GLOBALS[self::$cfg_prefix][$var] ) )
            {
                $ret = $GLOBALS[self::$cfg_prefix][$var];
            }
            return $ret;
        }

        public static function set($var, $val)
        {
            $GLOBALS[self::$cfg_prefix][$var] = $val;
        }
    }