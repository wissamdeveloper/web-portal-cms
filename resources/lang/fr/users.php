<?php
/*
language : francais
*/
return [
    'title' => [
        'index' => 'Utilisateurs',
        'create' => 'Ajouter un utilisateur',
        'edit' => 'Modifier l’utilisateur',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nom',
                'placeholder' => 'Entrez le nom',
                'attribute' => 'Nom'
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Entrer email',
                'attribute' => 'email'
            ],
            'password' => [
                'label' => 'Mot de passe',
                'placeholder' => 'Entrez le mot de passe',
                'attribute' => 'Mot de passe'
            ],
            'password_confirmation' => [
                'label' => 'Confirmation du mot de passe',
                'placeholder' => 'Retaper le mot de passe',
                'attribute' => 'Confirmation du mot de passe'
            ],
            'search' => [
                'label' => 'Rechercher',
                'placeholder' => 'Rechercher des utilisateurs',
                'attribute' => 'Rechercher'
            ]
        ],
        'select' => [
            'role' => [
                'label' => 'Rôle',
                'placeholder' => 'Choisir un rôle',
                'attribute' => 'Rôle'
            ]
        ]
    ],
    'label' => [
        'name' => 'Nom',
        'email' => 'Email',
        'role' => 'Rôle',
        'no_data' => [
            'fetch' => "Pas encore de données utilisateur",
            'search' => ":mot-clé utilisateur introuvable",
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
            'value' => 'Retour'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Ajouter un utilisateur',
            'message' => [
                'success' => "User saved successfully.",
                'error' => "An error occurred while saving the user. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit user',
            'message' => [
                'success' => "Utilisateur enregistré avec succès.",
                'error' => "Une erreur s’est produite lors de la mise à jour de l’utilisateur. :erreur"
            ]
        ],
        'delete' => [
            'title' => 'Supprimer l’utilisateur',
            'message' => [
                'confirm' => "Êtes-vous sûr de vouloir supprimer les utilisateurs :name ?",
                'success' => "Utilisateur supprimé avec succès.",
                'error' => "Une erreur s’est produite lors de la suppression de l’utilisateur. :erreur"
            ]
        ],
    ]
];
