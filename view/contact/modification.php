<div class="container">
<div class="row">
    <div class="card clo-10">
        <div class="card-header">
            <span class="h2">modification contact</span>
            <span class="offset-5">
                <a href="/CRUD_MVC_POO/" class="btn btn-success">Liste des contact</a>
            </span>
        </div>
        <div class="card-body">
            <form action="/CRUD_MVC_POO/index.php?action=modifier" method="POST">
                <input type="hidden" name="id" value="<?= $contact['id']?>">
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" value="<?= $contact['prenom']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" value="<?= $contact['nom']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" value="<?= $contact['tel']?>" class="form-control">
                </div><br>
                <div class="row col-md-5">
                    <input type="submit" class="btn btn-primary" value="Valider" name="modif">
                </div>
            </form>
        </div>
    </div>
</div>
</div>