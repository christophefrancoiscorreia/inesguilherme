<?php

/****
@Php Date Translator
Returns or echoes the date in German format (dd/mm/YYYY) for WordPress themes.
Start
 **/

function date_translate($format = "j F Y", $post_id, $echo = null, $lang = "fr") {

    if($post_id){
        $timestamp = get_post_time('U', false, $post_id);
    }else{
        $timestamp = get_post_time('U', false, get_the_ID());
    }


    if( $lang == "de" ) {
        $param_D = array('', 'Mon', 'Die', 'Mit', 'Don', 'Fre', 'Sam', 'Son');
        $param_l = array('', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag');
        $param_F = array('', 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
        $param_M = array('', 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
    }elseif ( $lang == "fr" ) {
        $param_D = array('', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim');
        $param_l = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        $param_F = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        $param_M = array('', 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc');
    }elseif ( $lang == "en" ) {
        $param_D = array('', 'Mon', 'Tue', 'Wen', 'Thu', 'Fri', 'Sat', 'Sun');
        $param_l = array('', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $param_F = array('', 'January', 'February ', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $param_M = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    }elseif ( $lang == "it" ) {
        $param_D = array('', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom');
        $param_l = array('', 'Lunedi', 'Martedì', 'Mercoledì', 'Giovedi', 'Venerdì', 'Sabato', 'Domenica');
        $param_F = array('', 'Gennaio', 'Febbraio ', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
        $param_M = array('', 'Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');
    }

    $return = '';
    if(is_null($timestamp)) { $timestamp = mktime(); }
    for($i = 0, $len = strlen($format); $i < $len; $i++) {
        switch($format[$i]) {
            case '\\' : // fix.slashes
                $i++;
                $return .= isset($format[$i]) ? $format[$i] : '';
                break;
            case 'D' :
                $return .= $param_D[date('N', $timestamp)];
                break;
            case 'l' :
                $return .= $param_l[date('N', $timestamp)];
                break;
            case 'F' :
                $return .= $param_F[date('n', $timestamp)];
                break;
            case 'M' :
                $return .= $param_M[date('n', $timestamp)];
                break;
            default :
                $return .= date($format[$i], $timestamp);
                break;
        }
    }
    if(is_null($echo)) { return $return;} else { echo $return;}
}


function date_translate_by_date($timestamp, $format = "j F Y", $echo = null, $lang = "fr") {

    if( $lang == "de" ) {
        $param_D = array('', 'Mon', 'Die', 'Mit', 'Don', 'Fre', 'Sam', 'Son');
        $param_l = array('', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag');
        $param_F = array('', 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
        $param_M = array('', 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
    }elseif ( $lang == "fr" ) {
        $param_D = array('', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim');
        $param_l = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        $param_F = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        $param_M = array('', 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc');
    }elseif ( $lang == "en" ) {
        $param_D = array('', 'Mon', 'Tue', 'Wen', 'Thu', 'Fri', 'Sat', 'Sun');
        $param_l = array('', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $param_F = array('', 'January', 'February ', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $param_M = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    }elseif ( $lang == "it" ) {
        $param_D = array('', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom');
        $param_l = array('', 'Lunedi', 'Martedì', 'Mercoledì', 'Giovedi', 'Venerdì', 'Sabato', 'Domenica');
        $param_F = array('', 'Gennaio', 'Febbraio ', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
        $param_M = array('', 'Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic');
    }

    $return = '';
    if(is_null($timestamp)) { $timestamp = mktime(); }
    for($i = 0, $len = strlen($format); $i < $len; $i++) {
        switch($format[$i]) {
            case '\\' : // fix.slashes
                $i++;
                $return .= isset($format[$i]) ? $format[$i] : '';
                break;
            case 'D' :
                $return .= $param_D[date('N', $timestamp)];
                break;
            case 'l' :
                $return .= $param_l[date('N', $timestamp)];
                break;
            case 'F' :
                $return .= $param_F[date('n', $timestamp)];
                break;
            case 'M' :
                $return .= $param_M[date('n', $timestamp)];
                break;
            default :
                $return .= date($format[$i], $timestamp);
                break;
        }
    }
    if(is_null($echo)) { return $return;} else { echo $return;}
}

/****
@End Php Date Translator
 **/

