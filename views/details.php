<?php

ob_start();

?>

<form method="post" class="d-flex justify-content-center">
    <div class="card align-items-center" style="width: 36rem;">
        <h2 class="card-title text-center mt-3 mb-4">Liste des détails de l'étudiant <?=$student_details[0]->student_id ?></h2>
        <div class="card-body d-flex flex-column align-items-center">
            <div class="card-part-img mb-3">
                <img src="../assets/img/logo.png" class="img-thumbnail" alt="Yes">
            </div>
            <div class="card-part-content">
                <label>INE</label><br>
                <input class="form-control" type="text" name="INE" placeholder="Nom" value="<?=$student_details[0]->INE?>"><br>
                <label>Nom</label><br>
                <input class="form-control" type="text" name="lastname" placeholder="Nom" value="<?=$student_details[0]->lastname?>"><br>
                <label>Prénom</label><br>
                <input class="form-control" type="text" name="firstname" placeholder="Nom" value="<?=$student_details[0]->firstname?>"><br>
                <label>Téléphone</label><br>
                <input class="form-control" type="text" name="phone" placeholder="Nom" value="<?=$student_details[0]->phone?>"><br>
                <input type="submit" class="btn btn-primary" value="Modifier">
            </div>
    </div>
    </div>
</form>
<a href="?page=home">Revenir à la liste étudiante</a>

<?php 

$content = ob_get_clean();
