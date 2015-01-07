<?php
class Modifier_hexrgb extends Modifier
{
    public function index($value, $parameters=array())
    {
      $hex = str_replace("#", "", $value);
      $prefix = "rgb";

      if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
      } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
      }
      $rgb = array($r, $g, $b);
      $returnValue = implode(",", $rgb); // returns the rgb values separated by commas

      if( isset($parameters[0]) ){
        $returnValue .= "," . $parameters[0];
        $prefix = "rgba";
      }
      if( !isset($parameters[1]) ) {
        $returnValue = $prefix . "(" . $returnValue . ")";
      }
      return $returnValue;
    }
}
