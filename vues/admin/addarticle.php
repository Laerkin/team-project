<?php include_once('controller/admin/addarticle.php');?>

<div class="container">
    <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6">


            <form action="addarticle.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Ajouter un article</legend>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input id="nom" type="text" name="nom" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cat">Catégorie</label>
                        <select class="form-control" id="cat" name="cat">
                            <option value="chaussure">chaussure</option>
                            <option value="pantalon">pantalon</option>
                            <option value="tee-shirt">tee-shirt</option>
                            <option value="robe">robe</option>
                            <option value="manteau">manteau</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="prix">Prix de l'article</label>
                        <input class="form-control" id="prix" type="number" name="prix" step="any">
                    </div>

                    <div class="form-group">
                        <label for="dispo">Quantitée disponible</label>
                        <input id="dispo" type="number" name="dispo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img">Select image to upload:</label>
                        <input class="form-control" id="img" name="img" type="file">
                    </div>

                    <div class="form-group">
                        <label for="soldeTrue">Solde : </label>
                        <label class="radio-inline">
                            <input id="soldeTrue" type="radio" name="solde">Oui
                        </label>
                        <label class="radio-inline">
                            <input id="soldeFalse" type="radio" name="solde">Non
                        </label>

                        <input id="percentSolde" type="text" name="percentSolde"/>
                        <label for="percentSolde">%</label>

                    </div>

                    <button type="submit" class="btn btn-primary">poster l'article</button>
                </fieldset>
            </form>
        </div>

    </div>
</div>
