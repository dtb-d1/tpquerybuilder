<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h1>Convertisseur de la monnaie nationale (Dh)</h1>
    </div>
    
    <div class="container mt-3">
    <form action="{{ url('convert') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Votre Nom ?" required>
        </div>
        <div class="form-group">
            <label for="montant">Montant à convertir</label>
            <input type="number" class="form-control" id="montant" name="montant" placeholder="Montant ?" required>
        </div>
        
        <div class="form-group">
            <label for="devise">Devise de conversion</label>
            <select class="form-control" id="devise" name="devise" required>
                <option value="USD">Dollar Americain</option>
                <option value="CAD">Dollar Canadian </option>
                <option value="EUR">Euro </option>
                <option value="GBP">Livre sterling </option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Calculer</button>
    </form>
</div>
<div class="container mt-3">
        @if(isset($montant))
            <h2>Résultat</h2>
            <p><span style="color:green"> {{$Nom}}, Le montant de {{$montant}} {{$devise}} vaut {{$converted}} DH</span></p>
        @endif
    </div>

</body>
</html>