<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$data = array(
            'html' => array( 
            'title' => 'HTML / CSS',
            'abilities' => array(
                'Znajomość HTML 5.',
                'Znajomość CSS 3.',
                'Tworzenie stron www.',
                'Tworzenie szablonów mailowych.',
                'Tworzenie reklam Display (Google Ads,Go.pl,Adform).',
                'Znajomość metodyki BEM.',
                'Znajomość najpopularniejszych frameworków HTML/CSS.'
            ),
            'icon' => array(
                 'html5.png',
                 'css.png',
                 'bootstrap.png',
                 'spectre.png',
                 'foundation.png',  
            )
        ),
        'js' => array( 
            'title' => 'Java Script',
            'abilities' => array(
                'Dobra znojomość JS z elementami ES6.',
                'Dobra znajomość jQuery.',
                'Znajomość frameworka Vue.js.',
                'Znajomość TypeScript.',
                'Podstawowa znajomość frameworków Node.js i Electron.js.',
                'Swoboda w stosowaniu zewnętrznych bibliotek takich jak Lodash.js, AJAX czy axios.js.'
            ),
            'icon' => array(
                 'js5.png',
                 'jquery.png',
                 'vue.png',
                 'node.png',
                 'npm.png',  
            )
        ),
        'php' => array( 
            'title' => 'PHP',
            'abilities' => array(
                'Znajomość PHP w wersji 5.0.',
                'Znajomość OOP w PHP.',
                'Podstawowa znajomość framoworka Laravel.',
                'Dobra znajomość SQL i baz danych MySQL.',
                'Znajomość architektury REST API.',
                'Swoboda w stosowaniu zewnętrznych bibliotek takich jak PHPMailer czy DOMPdf.'
            ),
            'icon' => array(
                 'php_i.png',
                 'mysql.png',
                 'laravel.png'  
            )
        ),
        'bash' => array( 
            'title' => 'DevOps',
            'abilities' => array(
                'Zajomość języka skryptowego Bash.',
                'Znajomość systemów z rodziny Linux (Centos/RedHat).',
                'Umiejętność zarządzania platformą LAMP. ',
                'Znajomość rozwiązań chmurowych AWS i Google Cloud Plarform.',
                'Znajomość środowiska Windows + PowerShell.'
            ),
            'icon' => array(
                 'bash_i.png',
                 'linux.png',
                 'windows.png',  
                 'aws.png',
                 'google.png'

            )
        ),
        'others' => array( 
            'title' => 'Pozostałe',
            'abilities' => array(
                'Znajomość oprogramowani CMS (Wordpress,Presta,Magento) i roziązań Sass (Shoper,IAI).',
                'Znajomość programów graficznych ADOBE,GIMP,Inkscape.',
                'Planowanie i wdrażanie działań związanych z marketingiem internetowym.',
                'Znajomość GITa.',
                'Lekkość w kontaktach związanych z przekazywaniem wiedzy technicznej.'
            ),
            'icon' => array(
                 'cms.png',
                 'ps.png',
                 'ink.png',  
                 'dm.png',
                 'git.png'

            )
        )
    );

if ( isset($_GET['stack']) ) {
    $stack = $_GET['stack'];
        
    echo json_encode($data[$stack]);

}else{
    echo json_encode($data);
}

?>