<div class="container">
<div class="row">
    <div class="card clo-10">
        <div class="card-header">
            <span class="h2">Nouveau contact</span>
            <span class="offset-5">
                <a href="/CRUD_MVC_POO/" class="btn btn-success">Liste des contact</a>
            </span>
        </div>
        <div class="card-body">
            <form action="/CRUD_MVC_POO/index.php?action=add" method="POST">
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" class="form-control">
                </div><br>
                <div class="row col-md-3">
                    <input type="submit" class="btn btn-primary" value="Enregistrer" name="add">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
