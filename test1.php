


<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];
?>

<!DOCTYPE html>

<head>
    <title>Affichage des recettes</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
</head>
<body>
<div class="container">
    <h1>recettes</h1>
        <?php foreach ($recipes as $recipe) : ?>
            <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] === true) : ?>
                <article>
                    <?php echo $recipe['title']; ?>
                </article>
            <?php endif ?>
        <?php endforeach ?>
       

</div>
</body>

</html>

