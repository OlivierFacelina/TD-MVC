<?php

ob_start();
?>

<main class="container">
    <form method="get" action="">
        <label for="search">Recherche</label>
        <input type="text" name="search" id="search">
        <input type="submit" value="Rechercher">
    </form>
    
    <div class="add-btn d-flex justify-content-end ">
        <a href="?page=add" class="btn btn-primary p-2 mb-3">Créer un étudiant</a>
    </div>
    
    <table class="table text-center">
            <tr >
                <td><b>INE</b></td>
                <td><b>Nom :</b></td>
                <td><b>Prénom :</b></td>
                <td><b>Téléphone :</b></td>
                <td><b>Détails</b></td>
                <td><b>Supprimer</b></td>
            </tr>
    
            <?php foreach ($students as $student) { 
                ?>
                    <tr> 
                            <td><?= $student->INE ?></td>
                            <td><?= $student->lastname ?></td>
                            <td><?= $student->firstname ?></td>
                            <td><?= $student->phone ?></td>
                            <td><a href="?page=details&student_id=<?= $student->student_id ?>">Détails</a></td>
                            <td>
                                <form method="post" id="form_<?= $student->student_id ?>">
                                    <input type="hidden" name="id" value="<?= $student->student_id ?>">
                                    <input type="submit" value="Supprimer" class="delete" data-id="<?= $student->student_id ?>">
                                </form>
                            </td>
                            <?php }?>
                    </tr>
        </table>
</main>

<?php if(isset($_GET["search"])) { ?>        
    <a href="?page=home">Voir tout</a>
<?php } ?>

<?php 
$content = ob_get_clean();

