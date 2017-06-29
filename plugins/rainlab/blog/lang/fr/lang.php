<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Une plateforme de blog robuste.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Gestion d’articles de blog',
        'posts' => 'Articles',
        'create_post' => 'article de blog',
        'categories' => 'Catégories',
        'create_category' => 'catégorie d’articles',
        'tab' => 'Blog',
        'access_posts' => 'Gérer les articles',
        'access_categories' => 'Gérer les catégories',
        'access_other_posts' => 'Gérer les articles d’autres utilisateurs',
        'access_import_export' => 'Autorisé à importer et exporter des articles',
        'access_publish' => 'Autorisé à publier des articles',
        'delete_confirm' => 'Confirmez-vous la suppression des articles sélectionnés ?',
        'chart_published' => 'Publié',
        'chart_drafts' => 'Brouillons',
        'chart_total' => 'Total'
    ],
    'posts' => [
        'list_title' => 'Gérer les articles du blog',
        'filter_category' => 'Catégorie',
        'filter_published' => 'Masquer la publication',
        'filter_date' => 'Date',
        'new_post' => 'Nouvel article',
        'export_post' => 'Exporter les articles',
        'import_post' => 'Importer des articles'
    ],
    'post' => [
        'title' => 'Titre',
        'title_placeholder' => 'Titre du nouvel article',
        'content' => 'Contenu',
        'content_html' => 'Contenu HTML',
        'slug' => 'Adresse',
        'slug_placeholder' => 'adresse-du-nouvel-article',
        'categories' => 'Catégories',
        'author_email' => 'Email de l’auteur',
        'created' => 'Créé',
        'created_date' => 'Date de création',
        'updated' => 'Mis a jour',
        'updated_date' => 'Date de mise à jour',
        'published' => 'Publié',
        'published_date' => 'Date de publication',
        'published_validation' => 'Veuillez préciser la date de publication',
        'tab_edit' => 'Rédaction',
        'tab_categories' => 'Catégories',
        'categories_comment' => 'Sélectionnez les catégories auxquelles l’article est lié',
        'categories_placeholder' => 'Il n’existe pas encore de catégorie, mais vous pouvez en créer une !',
        'tab_manage' => 'Configuration',
        'published_on' => 'Publié le',
        'excerpt' => 'Extrait',
        'summary' => 'Résumé',
        'featured_images' => 'Image de promotion',
        'delete_confirm' => 'Confirmez-vous la suppression de cet article ?',
        'close_confirm' => 'L’article n’est pas enregistré.',
        'return_to_posts' => 'Retour à la liste des articles'
    ],
    'categories' => [
        'list_title' => 'Gérer les catégories',
        'new_category' => 'Nouvelle catégorie',
        'uncategorized' => 'Non catégorisé'
    ],
    'category' => [
        'name' => 'Nom',
        'name_placeholder' => 'Nom de la nouvelle catégorie',
        'description' => 'Description',
        'slug' => 'Adresse URL',
        'slug_placeholder' => 'adresse-de-la-nouvelle-catégorie',
        'posts' => 'Articles',
        'delete_confirm' => 'Confirmez-vous la suppression de cette catégorie ?',
        'return_to_categories' => 'Retour à la liste des catégories',
        'reorder' => 'Réorganiser les catégories'
    ],
    'menuitem' => [
        'blog_category' => 'Catégories du blog',
        'all_blog_categories' => 'Toutes les catégories du blog'
    ],
    'settings' => [
        'category_title' => 'Liste des catégories',
        'category_description' => 'Afficher une liste des catégories sur la page.',
        'category_slug' => 'Adresse URL de la catégorie',
        'category_slug_description' => 'Adresse URL d’accès à la catégorie. Cette propriété est utilisée par le partial par défaut du composant pour marquer la catégorie courante comme active.',
        'category_display_empty' => 'Afficher les catégories vides.',
        'category_display_empty_description' => 'Afficher les catégories qui ne sont liés à aucun article.',
        'category_page' => 'Page des catégories',
        'category_page_description' => 'Nom de la page des catégories pour les liens de catégories. Cette propriété est utilisée par le partial par défaut du composant.',
        'post_title' => 'Article',
        'post_description' => 'Affiche un article de blog sur la page.',
        'post_slug' => 'Adresse URL de l’article',
        'post_slug_description' => 'Adresse URL d’accès à l’article.',
        'post_category' => 'Page des catégories',
        'post_category_description' => 'Nom de la page des catégories pour les liens de catégories. Cette propriété est utilisée par le partial par défaut du composant.',
        'posts_title' => 'Liste d’articles',
        'posts_description' => 'Affiche une liste des derniers articles de blog sur la page.',
        'posts_pagination' => 'Numéro de page',
        'posts_pagination_description' => 'Cette valeur est utilisée pour déterminer à quelle page l’utilisateur se trouve.',
        'posts_filter' => 'Filtre des catégories',
        'posts_filter_description' => 'Entrez une adresse de catégorie ou un paramètre d’URL pour filter les articles. Laissez vide pour afficher tous les articles.',
        'posts_per_page' => 'Articles par page',
        'posts_per_page_validation' => 'Format du nombre d’articles par page incorrect',
        'posts_no_posts' => 'Message en l’absence d’articles',
        'posts_no_posts_description' => 'Message à afficher dans la liste d’articles lorsqu’il n’y a aucun article. Cette propriété est utilisée par le partial par défaut du composant.',
        'posts_order' => 'Ordre des articles',
        'posts_order_description' => 'Attribut selon lequel les articles seront ordonnés',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
        'posts_category' => 'Page des catégories',
        'posts_category_description' => 'Nom de la page des catégories pour les liens de catégories "Publié dans". Cette propriété est utilisée par le partial par défaut du composant.',
        'posts_post' => 'Page d’article',
        'posts_post_description' => 'Nom de la page d’articles pour les liens "En savoir plus". Cette propriété est utilisée par le partial par défaut du composant.',
        'rssfeed_blog' => 'Page du blog',
        'rssfeed_blog_description' => 'Nom de la page principale du blog pour générer les liens. Cette propriété est utilisé par le composant dans le partial.',
        'rssfeed_title' => 'Flux RSS',
        'rssfeed_description' => 'Génère un Flux RSS contenant les articles du blog.'
    ]
];
