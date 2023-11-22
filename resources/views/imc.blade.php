<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Calculator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Calculer votre IMC</h1>
        <form action="{{ url('processImc') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
            </div>
            <div class="form-group">
                <label for="taille">Taille </label>
                <input type="number" step="0.01" class="form-control" id="taille" name="taille">
            </div>
            <div class="form-group">
                <label for="poids">Poids </label>
                <input type="number" class="form-control" id="poids" name="poids">
            </div>
            <button type="submit" class="btn btn-primary">Calculer IMC</button>
        </form>
    </div>
    <div class="container mt-3">
        @if(isset($nom))
            <h2>Resultat</h2>
            <p>Nom: {{$nom}}</p>
            <p>Résultat: {{$result}}</p>
            @endif
</div>
   
</body>
</html>
