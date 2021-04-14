<?php
// aller modifier aussi dans autoload(composer.json) pour charger 
//ensuite(ds console composer dump-autoload -o) -o pour optimisé

// function pageTitle
// si function existe paa on la crée
if (!function_exists('pageTitle')) {
    //crée function

    
    function pageTitle(?string $title = null): string
    {
        // si paget est null retourne $paget
        return $title
            // si $title n'est pas null on aurra $title suivie d'un pipe suivie du app.name dans fichier config
            ? $title . ' | ' . config('app.name')
            // si non on aura seulement app.name
            : config('app.name');
    }
}
