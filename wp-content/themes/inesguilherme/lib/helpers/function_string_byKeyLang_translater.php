<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 26/03/2019
 * Time: 14:47
 */

/*******
 * Translater Category
 */

function string_byKeyLang_translater($string, $lang = "fr"){

    //var_dump($lang);
    if($lang === "en") {
        switch ($string) {
            case "Communiqué de presse":
                return "Press Release";
            case "Actualité":
                return "Article";
            case "Filiales":
                return "Subsidiaries";
            case "Vidéo":
                return "Video";
            case "Base Installée":
                return "Installed Base";
            case "Composants":
                return "Components";
            case "Contrôle-Commande":
                return "Instrumention & Control";
            case "Combustible":
                return "Fuel";
            case "Grands Projets":
                return "Large Projects";
            case "Direction Technique et Ingénierie":
                return "Engineering and Design Authority";
            case "Médical":
                return "Medical";
            case "Recrutement":
                return "Recruitment";
            case "Défense":
                return "Defense";
            case "Régulation":
                return "Regulation";
            case "Vidéos":
                return "Videos";
            case "Médiathèque":
                return "Media library";
            case "À propos":
                return "About";
            case "Vidéos":
                return "Videos";
            case "Documents":
                return "Files";
            default:
                return $string;
                break;
        }
    }else{
        switch (strtolower($string)) {
            default:
                return $string;
                break;
        }
    }
}