<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Fournisseur Articles</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Dropdown for Fournisseurs -->
<div class="mb-3">
    <form action="{{ route('getArticlesByFournisseur') }}" method="get">
        @csrf
        <div class="form-group">
            <label for="fournisseur">Select Fournisseur:</label>
            <select name="fournisseur" class="form-control" id="fournisseur">
                @foreach ($fournisseurs as $fournisseur)
                    <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Get Articles</button>
    </form>
</div>

<!-- Display selected Fournisseur and Articles -->
@if ($selectedFournisseur)
    <h3>Selected Fournisseur: {{ $selectedFournisseur->nom }}</h3>
    @isset($articles)
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Poids</th>
                    <th>Couleur</th>
                    <th>Prix Achat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr id="articleRow_{{ $article->id }}">
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->description }}</td>
                        <td>{{ $article->poids }}</td>
                        <td>{{ $article->couleur }}</td>
                        <td>{{ $article->prix_achat }}</td>
                        <td>
                            <button type="button" class="btn btn-info" onclick="editArticle({{ $article->id }})">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="deleteArticle({{ $article->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endisset
@endif

<!-- Modal for Editing Article -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields for editing here -->
                <p>Edit Article Content</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function editArticle(articleId) {
        // Add logic to fetch article details and populate the modal
        // For now, just open the modal
        $('#editModal').modal('show');
    }

    function deleteArticle(articleId) {
        // Remove the article row from the table
        $('#articleRow_' + articleId).remove();

        // Add logic to delete the article from the server/database
        // For now, just log a message
        console.log("Article with ID " + articleId + " deleted.");

        // You can also add a confirmation modal before deleting if needed
    }
</script>

</body>
</html>
