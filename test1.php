<!DOCTYPE html>


<?php

        

        $user1 = [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mickael.andrieu@exemple.com',
            'recette' => 'poulet',
        ];
        $user2 = [
            'full_name' => 'mich',
            'email' => 'mich@jj',
            'recette' => 'couscous',
        ];
        $user3 = [
            'full_name' => 'deh',
            'email' => 'mic@dheh',
            'recette' => 'taboulet',
        ];
        $user4 = [
            'full_name' => 'juju',
            'email' => 'juju@tab',
            'recette' => 'marijano',
        ];

        $recettes = [$user1, $user2, $user3, $user4];
        ?>
    <lu>
        <?php for ($lines = 0; $lines <= 3; $lines++): ?>
            <li><?php echo $recettes[$lines]['full_name'].' '.$recettes[$lines]['recette'].' '; ?></li>
        <?php endfor; ?>
</body>
</html>

    </body>

    
    
</html>

