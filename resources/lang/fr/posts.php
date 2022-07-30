<?php
/*
language : francais
*/
return [
    'title' => [
        'index' => 'Article',
        'create' => 'Ajouter article',
        'edit' => 'Editer article',
        'detail' => 'Détail article ',
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Pas encore de données d'article'",
            'search' => ":Motclés d'article introuvable ",
        ]
    ],
    'form_control' => [
        'input' => [
            'title' => [
                'label' => 'Titre',
                'placeholder' => 'Entrer titre',
                'attribute' => 'titre'
            ],
            'slug' => [
                'label' => 'Slug',
                'placeholder' => 'Auto génération',
                'attribute' => 'slug'
            ],
            'thumbnail' => [
                'label' => 'La vignette',
                'placeholder' => 'Parcourir les vignettes',
                'attribute' => 'La vignette'
            ],
            'category' => [
                'label' => 'Catégorie',
                'placeholder' => 'Choisissez la catégorie',
                'attribute' => 'Catégorie'
            ],
            'search' => [
                'label' => 'Chercher',
                'placeholder' => 'Rechercher des articles',
                'attribute' => 'Chercher'
            ]
        ],
        'select' => [
            'tag' => [
                'label' => 'Etiquette',
                'placeholder' => 'Entrer étiquette',
                'attribute' => 'Etiquette',
                'option' => [
                    'publish' => 'Publier',
                    'draft' => 'Brouillon'
                ],
            ],
            'status' => [
                'label' => 'Etiquette',
                'placeholder' => 'Choisir statut',
                'attribute' => 'Statut',
                'option' => [
                    'draft' => 'Brouillon',
                    'publish' => 'Publier',
                ]
            ],
        ],
        'textarea' => [
            'description' => [
                'label' => 'description',
                'placeholder' => 'Entrer description',
                'attribute' => 'description'
            ],
            'content' => [
                'label' => 'Contenu',
                'placeholder' => 'Entrer Contenu',
                'attribute' => 'Contenu'
            ],
        ]
    ],
    'button' => [
        'create' => [
            'value' => 'Ajouter'
        ],
        'save' => [
            'value' => 'enregistrer'
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
        'apply' => [
            'value' => 'Appliquer'
        ]
    ],
    'alert' => [
        'create' => [
            'title' => 'Ajouter article',
            'message' => [
                'success' => "Article enregistré avec succès.",
                'error' => "Une erreur s'est produite lors de l'enregistrement de l'article. :Erreur"
            ]
        ],
        'update' => [
            'title' => 'Editer article',
            'message' => [
                'success' => "Article mis à jour avec succès.",
                'error' => "Une erreur s'est produite lors de la mettre à jour de l'article. :Erreur"
            ]
        ],
        'delete' => [
            'title' => 'Delete post',
            'message' => [
                'confirm' => "Are you sure you want to delete the :title post?",
                'success' => "Post deleted successfully.",
                'error' => "Une erreur s'est produite lors de la suppression de l'article. :Erreur"
            ]
        ],
    ]
];
