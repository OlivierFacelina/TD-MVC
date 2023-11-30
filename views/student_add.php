<?php

ob_start();
?>

<form class="" action="" method="post">
    <h2 class="add-student text-center">Ajouter un étudiant</h2>
    <table>
        <tr>
            <td><b><label for="ine" class="form-label">INE</label></b></td>
            <td><b><label for="lastname" class="form-label">Nom</label></b></td>
            <td><b><label for="firstname" class="form-label">Prénom</label></b></td>
            <td><b><label for="birthdate" class="form-label">Date de naissance</label></b></td>
            <td><b><label for="phone" class="form-label">Téléphone</label></b></td>
            <td><b><label for="email" class="form-label">Email</label></b></td>
            <td><b><label for="address" class="form-label">Adresse</label></b></td>
            <td><b><label for="postal-code" class="form-label">Code postal</label></b></td>
            <td><b><label for="city" class="form-label">Ville</label></b></td>
            <td><b><label for="grade" class="form-label">Classe</label></b></td>
        </tr>

        <tr>
            <td>
                <div class="mb-3">
                    <input type="text" name="INE" class="form-control w-100" id="ine">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="lastname" class="form-control w-100" id="lastname">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="firstname" class="form-control w-100" id="firstname">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="date" name="birthdate" class="form-control w-100" id="birthdate">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="phone" class="form-control w-100" id="phone">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control w-100" id="email">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="address" class="form-control w-100" id="address">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="postal_code" class="form-control w-100" id="postal-code">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="city" class="form-control w-100" id="city">
                </div>
            </td>
            <td>
                <div class="mb-3">
                    <input type="text" name="class" class="form-control w-100" id="grade">
                </div>
            </td>
        </tr>
    </table>
    <button type="submit" class="btn btn-primary">Créer</button>
    </form>

<?php
$content = ob_get_clean();