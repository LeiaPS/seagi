<?php
namespace Models;

use \Core\Model;

class Helper extends Model {

	/**
 * Encode array from latin1 to utf8 recursively
 * @param $dat
 * @return array|string
 */
   public static function utf8_conversao($dat)
   {
      if (is_string($dat)) {
         return utf8_encode($dat);
      } elseif (is_array($dat)) {
         $ret = [];
         foreach ($dat as $i => $d) $ret[ $i ] = self::utf8_conversao($d);

         return $ret;
      } elseif (is_object($dat)) {
         foreach ($dat as $i => $d) $dat->$i = self::utf8_conversao($d);

         return $dat;
      } else {
         return $dat;
      }
   }

}