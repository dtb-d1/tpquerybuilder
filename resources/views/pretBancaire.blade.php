<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la Mensualité</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-...your-integrity-hash-here..." crossorigin="anonymous" />

</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <i class="fas fa-dollar-sign fa-2x navbar-brand"></i>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">NosOffre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Conseils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactez-nous</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Calculer la mensualité à payer en indiquant votre montant prêté, la durée du prêt en mois et le taux d'intérêt annuel :</h1>
    </div>
    
    <div class="container mt-3">
        <form action="{{ url('pretCalculer') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="montant">Montant du prêt :</label>
                <input type="number" class="form-control" id="montant" name="montant" placeholder="Montant du prêt" required>
            </div>
            <div class="form-group">
                <label for="duree">Durée du prêt en mois :</label>
                <input type="number" class="form-control" id="duree" name="duree" placeholder="Durée du prêt en mois" required>
            </div>
            <div class="form-group">
                <label for="taux">Taux d'intérêt annuel :</label>
                <input type="number" step="0.01" class="form-control" id="taux" name="taux" placeholder="Taux d'intérêt annuel" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculer</button>
        </form>
    </div>

    <div class="container mt-3">
        @if(isset($mensualite))
            <h2>Résultat</h2>
            <p>Mensualité à payer : {{$mensualite}}</p>
        @endif
    </div>

</body>
</html>
