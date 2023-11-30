<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">>
            <div class="container-fluid">
                <a class="navbar-brand" href="?page=home">Etudiant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=add">Ajouter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=home">Liste des étudiants</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <?= $content ?>

    <footer> 
        <div class="footer mt-5">
            <p>2023 La Manu. Tous droits réservés.</p>
        </div>
    </footer>

    <script async src="./assets/js/script.js"></script>
</body>
</html>