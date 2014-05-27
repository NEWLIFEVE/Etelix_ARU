<?php
/**
 * clase con metodos estaticos para administrar las fechas
 * @version 0.6.1
 * @package components
 */
class DateManagement
{
	
    
    public static function getValidate_hour($start, $date, $plusHours) {
        if ($start != null) {
            $hours = explode(":", $start);
            $hour = $hours[0];
            $min = $hours[1];
            $sec = $hours[2];
            $maxHour = $hour + $plusHours;

            if ($maxHour > 24) {

                $nextHour = $maxHour - 24;
                $fecha = date('Y-m-d');
                $nuevaFecha = strtotime('+1 day', strtotime($fecha));
                $nuevaFecha = date('Y-m-d', $nuevaFecha);
                $fechaHora[] = $nuevaFecha;

                if ($nextHour < 10) {
                    $fechaHora[] = "0" . $nextHour . ":" . $min . ":" . $sec;
                    return $fechaHora;
                } else {
                    $fechaHora[] = $nextHour . ":" . $min . ":" . $sec;
                    return $fechaHora;
                }
            } else {
                $fechaHora[] = date('Y-m-d');
                $fechaHora[] = $maxHour . ":" . $min . ":" . $sec;
                return $fechaHora;
            }
        } else {
            return false;
        }
    }

    public static function gethourcliente(){
            
            date_default_timezone_set("America/Caracas"); 
            $hour = date('H:i:s',time() - 3600*date('I')); 
            return $hour;
        }
}
?>