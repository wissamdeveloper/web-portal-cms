<?php
/*
language : francais
*/
return [
    'title' => [
        'index' => 'Etiquette',
        'create' => 'ajouter Etiquette',
        'edit' => 'Editer Etiquette',
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Titre',
                'placeholder' => 'Entrer',
                'attribute' => 'titre'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Génération automatique',
                'attribute' => 'slug'
            ],
            'search' => [
                'label' => 'Chercher',
                'placeholder' => 'Rechercher des Etiquettes',
                'attribute' => 'Chercher'
            ]
        ]
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Aucune donnée d'étiquette pour le moment",
            'search' => "étiquette introuvable",
        ]
    ]
    ,
    'button' => [
        'create' => [
            'value' => 'ajouter'
        ],
        'save' => [
            'value' => 'sauvegarder'
        ],
        'edit' => [
            'value' => 'Editer'
        ],
        'delete' => [
            'value' => 'supprimer'
        ],
        'cancel' => [
            'value' => 'Annuler'
        ],
        'back' => [
            'value' => 'arrière'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Ajouter étiquette',
            'message' => [
                'success' => "Etiquette enregistré avec succès.",
                'error' => "Une erreur s'est produite lors de l'enregistrement de l'étiquette. :Erreur"
            ]
        ],
        'update' => [
            'title' => 'Editer étiquette',
            'message' => [
                'success' => "étiquette Mis à jour avec succés.",
                'error' => "Une erreur s'est produite lors de la mise à jour de l'étiquette :Erreur"
            ]
        ],
        'delete' => [
            'title' => 'Supprimer étiquette',
            'message' => [
                'confirm' => "Êtes-vous sûr de vouloir supprimer l'étiquette :title ?",
                'success' => "l'étiquette a bien été supprimée.",
                'error' => "Une erreur s'est produite lors de la suppression de l'étiquette. :Erreur"
            ]
        ],
    ]
];
