<?php
/*
language :francais
*/
return [
    'title' => [
        'index' => 'Rôles',
        'create' => 'Ajouter un rôle',
        'edit' => 'Modifier le rôle',
        'detail' => 'Rôle de détail',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nom',
                'placeholder' => 'Entrez le nom',
                'attribute' => 'Nom'
            ],
            'permission' => [
                'label' => 'Autorisation',
                'placeholder' => 'Choisir l’autorisation',
                'attribute' => 'Autorisation'
            ],
            'search' => [
                'label' => 'Rechercher',
                'placeholder' => 'Rechercher des rôles',
                'attribute' => 'Rechercher'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Rôles pas encore disponibles!",
            'search' => ":rôle de mot-clé introuvable",
            ]
    ],
    'button' => [
        'create' => [
            'value' => 'Ajouter'
        ],
        'save' => [
            'value' => 'Sauvegarder'
        ],
        'edit' => [
            'value' => 'Éditer'
        ],
        'delete' => [
            'value' => 'Supprimer'
        ],
        'cancel' => [
            'value' => 'Annuler'
        ],
        'back' => [
            'value' => 'Précédent'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Ajouter un rôle',
            'message' => [
                'success' => "Catégorie enregistrée avec succès.",
                'error' => "Une erreur s’est produite lors de l’enregistrement du rôle. :erreur"
            ]
        ],
        'update' => [
            'title' => 'Modifier le rôle',
            'message' => [
                'success' => "Catégorie mise à jour avec succès.",
                'error' => "Une erreur s’est produite lors de la mise à jour du rôle. :error"
            ]
        ],
        'delete' => [
            'title' => 'Supprimer le rôle',
            'message' => [
                'confirm' => "Voulez-vous vraiment supprimer le rôle :name ?",
                'success' => "Catégorie supprimée avec succès.",
                'error' => "Une erreur s’est produite lors de la suppression du rôle. :erreur",
                'warning' => "Désolé, le rôle :name ne peut pas être supprimé. Parce qu’il est toujours utilisé.",
            ]
        ],
    ]
];
