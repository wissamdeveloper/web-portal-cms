<?php
/*
language : french
*/
return [
    'title' => [
        'index' => 'Catégories',
        'create' => 'Ajouter une catégorie',
        'edit' => 'Modifier la catégorie',
        'detail' => 'Catégorie de détail',
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Aucune donnée de catégorie pour le moment",
            'search' => "catégorie :mot-clé introuvable",
        ]
        ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Titre',
                'placeholder' => 'Entrez le titre',
                'attribute' => 'Titre'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Génération automatique',
                'attribute' => 'slug'
            ],
            'thumbnail' => [
                'label' => 'La vignette',
                'placeholder' => 'Parcourir les vignettes',
                'attribute' => 'la vignette'
            ],
            'search' => [
                'label' => 'Chercher',
                'placeholder' => 'Rechercher des catégories',
                'attribute' => 'Chercher'
            ]
        ],
        'select' => [
            'parent_category' => [
                'label' => 'Catégorie Parentale',
                'placeholder' => 'Choisissez la catégorie parent',
                'attribute' => 'Catégorie Parentale'
            ]
        ],
        'textarea' => [
            'description' => [
                'label' => 'La description',
                'placeholder' => 'Enter description',
                'attribute' => 'La description'
            ],
        ]
    ],
    'button' => [
        'create' => [
            'value' => 'Ajouter'
        ],
        'save' => [
            'value' => 'sauvegarder'
        ],
        'edit' => [
            'value' => 'Éditer'
        ],
        'delete' => [
            'value' => 'Effacer'
        ],
        'cancel' => [
            'value' => 'Annuler'
        ],
        'browse' => [
            'value' => 'Parcourir'
        ],
        'back' => [
            'value' => 'Arrière'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Ajouter une catégorie',
            'message' => [
                'success' => "Catégorie enregistrée avec succès.",
                'error' => "Une erreur s'est produite lors de l'enregistrement de la catégorie. :Erreur"
            ]
        ],
        'update' => [
            'title' => 'Modifier la catégorie',
            'message' => [
                'success' => "Catégorie mise à jour avec succès.",
                'error' => "Une erreur s'est produite lors de la mise à jour de la catégorie. :error"
            ]
        ],
        'delete' => [
            'title' => 'Supprimer la catégorie',
            'message' => [
                'confirm' => "Êtes-vous sûr de vouloir supprimer la catégorie :title ?",
                'success' => "Catégorie supprimée avec succès.",
                'error' => "Une erreur s'est produite lors de la suppression de la catégorie. :Erreur"
            ]
        ],
    ]
];
