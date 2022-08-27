<!DOCTYPE html>
<html>
    <head>
        <title>Burger Code</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <body> 
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>Demorium restaurant<span class="glyphicon glyphicon-cutlery"></span></h1>
        <div class="container admin">
            <div class="row">
                <h1><strong>Liste des items   </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Catégorie</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tr>
                      <th>item 1</th>
                      <th>Description</th>
                      <th>Prix 1</th>
                      <th>Catégorie 1</th>
                     <td width=300>
                        <a class="btn btn-default" href="view.php?id=1"><span class="glyphicon glyphicon-eye-open"></span>Voir</a>
                        <a class="btn btn-primary" href="update.php?id=1"><span class="glyphicon glyphicon-eye-pencil"></span>Modifier</a>
                        <a class="btn btn-danger" href="delete.php?id=1"><span class="glyphicon glyphicon-eye-remove"></span>Supprimer</a>
                    </tr>
                    <tr>
                      <th>item 2</th>
                      <th>Description</th>
                      <th>Prix 2</th>
                      <th>Catégorie 2</th>
                     <td width=300>
                        <a class="btn btn-default" href="view.php?id=1"><span class="glyphicon glyphicon-eye-open"></span>Voir</a>
                        <a class="btn btn-primary" href="update.php?id=1"><span class="glyphicon glyphicon-eye-pencil"></span>Modifier</a>
                        <a class="btn btn-danger" href="delete.php?id=1"><span class="glyphicon glyphicon-eye-remove"></span>Supprimer</a>
                    </tr>
                  <tbody>
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
