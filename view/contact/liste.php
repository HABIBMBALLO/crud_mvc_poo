<div class="container">
<div class="row">
    <span class="h2">Liste des contacts</span>
    <span class="offset-7">
        <a href="/CRUD_MVC_POO/index.php?view=ajout" class="btn btn-primary">Nouveau</a>
    </span>
</div><br>
<div class="row">
    <table class="table table-bordered teable-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($contacts as $c) { ?>
                <tr>
                    <td><?= $c['id']?></td>
                    <td><?= $c['prenom']?></td>
                    <td><?= $c['nom']?></td> 
                    <td><?= $c['telephone']?></td>
                    <td>
                        <a href="/CRUD_MVC_POO/index.php?view=modification&id=<?= $c['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="/CRUD_MVC_POO/index.php?action=supprimer&id=<?= $c['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php } 
                ?>


            
        
        </tbody>

    </table>
</div>
</div>