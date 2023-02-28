<?php
/**
 * CHILD THEME URI - don't touch
 */
define('HIPERION_CHILD_THEME_URI', get_stylesheet_directory_uri());

/**
 * ROOT THEME URI - don't touch
 */
define('HIPERION_ROOT_THEME_URI', get_template_directory_uri());

/**
 * CHILD THEME PATH - don't touch
 */
define('HIPERION_CHILD_THEME_PATH', get_stylesheet_directory());

/**
 * ROOT THEME PATH - don't touch
 */
define('HIPERION_ROOT_THEME_PATH', get_template_directory());

/**
 * THEME INFORMATIONS - you can touch
 */
define("HIPERION_THEME_NAME", "hiperion");

define("HIPERION_HOME_URL", get_bloginfo('wpurl'));

define("HIPERION_SHORT_NAME", "hip");

define("HIPERION_CUSTOMER_NAME", "hiperion");

define("HIPERION_VERSION", "1.0");

/**
 * FEATURES FOR THE THEME - you can touch
 */
define("HIPERION_THEME_SUPPORT", serialize(array(
    "post-thumbnails",
    'automatic-feed-links' // Adds RSS feed links to for posts and comments.
)));

/**
 * REMOVE EMOJI - you can touch
 */
define("HIPERION_REMOVE_EMOJI", true);

/**
 * ACTIVATE MULTILANG - you can touch
 * To active multilang please change false to true
 * If you change the value, flush permalinks in back office
 */
define("HIPERION_MULTI_LANG", true);

/**
 * DEFAULT LANG WHEN MULTILANG IS ACTIVATED - you can touch
 */
define ("HIPERION_DEFAULT_LANG", 'fr');

/**
 * LANGS AVAILABLE (with this format ever : fr|en|cn|ru|...)
 * Add here your lang in your platform
 * you can touch
 */
define("HIPERION_LANGS_AVAILABLE", 'fr|en');

/**
 * Configuration for register_nav_menus()
 * This configuration works without multilang activated (lang's level will be not ridden)
 *
 * you can touch
 */
define("HIPERION_MENUS", serialize(array(
    'main_menu' => array(
        'location_title' => "Main Menu",
        'lang' => array(
            'fr',
            'en'
        )
    ),
    'footer_menu' => array(
        'location_title' => 'Footer Menu',
        'lang' => array(
            'fr'
        )
    ),
    'sidebar_menu' => array(
        'location_title' => 'Sidebar Menu',
        'lang' => array(
            'ru'
        )
    )
)));

/**
 * STRINGS TRANSLATION BY LANG & STRING KEY - you can touch
 * Add here all the words you want to translate in your platform
 */
define("HIPERION_STRINGS_TRANSLATION", serialize(array(
    "fr" => array(
        "read-more_translate"       => "Découvrir",
        "view-more_translate"       => "Voir plus",
        "show-more_translate"       => "Afficher plus",
        "download-the"              => "Télécharger ",
        "download-presskit"         => "Télécharger le kit presse",
        "download-the-story"        => "Télécharger la story",
        "discover-the-story"        => "Découvrir la storybook",
        "storybook_title"           => "THE STORIES OF THE STORY BOOK",
        "search_name"               => "Recherche",
        "search_result_wrong"       => "Désolé, votre recherche n'a donné aucun résultat.",
        "play-video"                => "Lancer<br/>Vidéo",
        "loading-text"              => "Chargement...",


        //////////////////////////////////////////
        //////////  FLUX -> FRENCH
        ///

        "TYPE_img"                  => "Photos",
        "TYPE_vid"                  => "Vidéos",
        "STORY_full"                => "Télécharger la storybook",
        "Stories_text"              => "Stories",
        "Bar_Iconographie_Text"     => "Bar - Iconographie",
        "Courses_Text"              => "Courses",
        "Packshots_Text"            => "Packshots",

        ///
        /////////  END FLUX
        ////////////////////////////////////////////

        //////////////////////////////////////////
        //////////  SINGLE -> ENGLISH
        ///

        "SINGLE_title-img"          => "Images associées",
        "SINGLE_add-all-in-cart"    => "Ajouter tout au panier",
        "SINGLE_download-all-img"   => "Télécharger toutes les images",
        "SINGLE_title-vid"          => "Vidéos associées",
        "SINGLE_discover-more"      => "Découvrir plus",

        ///
        /////////  END SINGLE
        ////////////////////////////////////////////

        //////////////////////////////////////////
        //////////  404 -> FRENCH
        ///

        "Page_not_found"             => "Page non trouvé",
        "text_404"                   => "Désolé, l'article que vous recherchez n'est pas disponible.",
        "go_home_404"                => "Retourner à l'accueil",

        ///
        /////////  END 404
        ////////////////////////////////////////////

    ),
    "en" => array(
        "read-more_translate"       => "Discover",
        "view-more_translate"       => "View More",
        "show-more_translate"       => "Load more",
        "download-the"              => "Download the",
        "download-presskit"         => "Download the press kit",
        "download-the-story"        => "Download the story",
        "discover-the-story"        => "Discover the storybook",
        "storybook_title"           => "THE STORIES OF THE STORY BOOK",
        "search_name"               => "Search",
        "search_result_wrong"       => "Sorry, your search did not return any results.",
        "play-video"                => "Play<br/>Video",
        "loading-text"              => "Loading...",

        //////////////////////////////////////////
        //////////  FLUX -> ENGLISH
        ///

        "TYPE_img"                  => "Photos",
        "TYPE_vid"                  => "Videos",
        "STORY_full"                => "Download the storybook",
        "Stories_text"              => "Stories",
        "Bar_Iconographie_Text"     => "Bar - Iconographie (EN)",
        "Courses_Text"              => "Courses (EN)",
        "Packshots_Text"            => "Packshots (EN)",

        ///
        /////////  END FLUX
        ////////////////////////////////////////////

        //////////////////////////////////////////
        //////////  SINGLE -> ENGLISH
        ///

        "SINGLE_title-img"          => "Related images",
        "SINGLE_add-all-in-cart"    => "Add all to basket",
        "SINGLE_download-all-img"   => "Download all images",
        "SINGLE_title-vid"          => "Related videos",
        "SINGLE_discover-more"      => "Discover more",

        ///
        /////////  END SINGLE
        ////////////////////////////////////////////

        //////////////////////////////////////////
        //////////  404 -> ENGLISH
        ///

        "Page_not_found"             => "Page not found",
        "text_404"                   => "Sorry, the post you are looking for is not available.",
        "go_home_404"                => "Return to the home page",

        ///
        /////////  END 404
        ////////////////////////////////////////////

    )
)));

/**
 * Configuration for register_sidebar()
 *
 * you can touch
 */
define("HIPERION_SIDEBAR", serialize(array(
    array(
        'name' => 'Right Sidebar',
        'id' => 'right-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ),
    array(
        'name' => 'Left Sidebar',
        'id' => 'left-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
)));