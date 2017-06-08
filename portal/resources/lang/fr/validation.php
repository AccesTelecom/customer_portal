<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'             => 'Le :attribute doit être accepté.',
    'active_url'           => 'L\'URL :attribute n\'est pas valide.',
    'after'                => 'Le :attribute doit être après :date.',
    'after_or_equal'       => 'Le :attribute doit être après ou pendant :date.',
    'alpha'                => 'Le :attribute doit seulement contenir des lettres.',
    'alpha_dash'           => 'Le :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'Le :attribute doit seulement contenir des lettres et des chiffres.',
    'array'                => 'Le :attribute doit être un tableau',
    'before'               => 'Le :attribute doit être avant :date.',
    'before_or_equal'      => 'Le :attribute doit être avant ou égal au :date.',
    'between'              => [
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'file'    => 'Le :attribute doit être entre :min et :max KB.',
        'string'  => 'Le :attribute doit être entre :min et :max caractères.',
        'array'   => 'Le :attribute doit être entre :min et :max articles.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.'
    'confirmed'            => 'La confirmation :attribute ne correspond pas.',
    'date'                 => 'Le :attribute n\'est pas une date valide.',
    'date_format'          => 'Le :attribute ne correspond pas au format :format.',
    'different'            => 'Le :attribute et :other doivent être différents.',
    'digits'               => 'Le :attribute doit être :digits chiffres.',
    'digits_between'       => 'Le :attribute doit être entre :min et :max chiffres.',
    'dimensions'           => 'Le :attribute a des dimensions d\'image non valides.',
    'distinct'             => 'Le champ :attribute a une valeur en double.',
    'email'                => 'Le :attribute doit être une adresse de courriel valide.',
    'exists'               => 'Le selected :attribute est invalide.',
    'file'                 => 'Le :attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute est requis.',
    'image'                => 'Le :attribute doit être une image.',
    'in'                   => 'L\'élément :attribute doit être valide.',
    'in_array'             => 'Le champ :attribute n\'existe pas dans :other.',
    'integer'              => 'Le :attribute doit être entier.',
    'ip'                   => 'Le :attribute doit être une adresse IP valide.',
    'json'                 => 'Le :attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'Le :attribute ne doit pas être plus lourd que :max.',
        'file'    => 'Le :attribute ne doit pas être plus lourd que :max KB.',
        'string'  => 'Le :attribute ne doit pas être plus long que :max caractères.',
        'array'   => 'Le :attribute ne doit pas avoir plus de :max articles.',
    ],
    'mimes'                => 'Le :attribute doit être un fichier: :values.',
    'mimetypes'            => 'Le :attribute doit être un fichier: :values.',
    'min'                  => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file'    => 'Le :attribute doit contenir au moins :min KB.',
        'string'  => 'Le :attribute doit contenir au moins :min caractères.',
        'array'   => 'Le :attribute doit contenir au moins :min articles.',
    ],
    'not_in'               => 'L\'élément :attribute est invalide.',
    'numeric'              => 'Le :attribute doit être un chiffre.',
    'present'              => 'Le champ :attribute doit être rempli.',
    'regex'                => 'Le format :attribute est invalide.',
    'required'             => 'Le champ :attribute est requis.',
    'required_if'          => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless'      => 'Le champ :attribute est requis à moins que :other vaut :values.',
    'required_with'        => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute lorsque :values est présent.',
    'required_without'     => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis lorsqu\'aucun des :values sont présents',
    'same'                 => 'Le :attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => 'Le :attribute doit être :size.',
        'file'    => 'Le :attribute doit être :size KB.',
        'string'  => 'Le :attribute doit être de :size caractères.',
        'array'   => 'Le :attribute doit contenir :size articles.',
    ],
    'string'               => 'Le :attribute doit être une chaîne.',
    'timezone'             => 'Le :attribute doit être une zone valide.',
    'unique'               => 'Le :attribute a déjà été pris.',
    'uploaded'             => 'Le :attribute n\'a pas pu télécharger.',
    'url'                  => 'Le format :attribute est invalide.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'cc-number' => 'numéro de carte de crédit',
        'name' => 'nom',
        'expirationDate' => 'date d\'expiration',
        'role' => 'rôle',
        'email_address' => 'adresse courriel',
        'work_phone' => 'téléphone au travail',
        'mobile_phone' => 'téléphone cellulaire',
        'home_phone' => 'téléphone à la maison',
        'fax' => 'fax',
        'current_password' => 'mot de passe actuel',
        'new_password' => 'nouveau mot de passe',
        'new_card' => 'nouvelle carte',
        'payment_method' => 'méthode de paiement',
        'paypal' => 'PayPal',
        'subject' => 'sujet',
        'description' => 'description',

    ],

];
