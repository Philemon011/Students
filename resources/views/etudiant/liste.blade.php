<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud laravel</title>
</head>

<body>
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col s12">
                <h1>CRUD IN LARAVEL 10</h1>
                <a href="/ajouter" class="btn btn-primary mt-5">Ajouter un etudiant</a>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénoms</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($etudiants as $etudiant)
                            <tr>
                                <th scope="row">{{ $etudiant->id }}</th>
                                <td>{{ $etudiant->nom }}</td>
                                <td>{{ $etudiant->prenom }}</td>
                                <td>{{ $etudiant->classe }}</td>
                                <td>
                                    <a href="http://" class="btn btn-info">Modifier</a>
                                    <a href="http://" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger mt-5" role="alert">
                                Aucun étudiant trouvé, veuillez en ajouter
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
