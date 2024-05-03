<div id="overlay" class="overlay" onclick="closePopup()"></div>
    <div id="popup" class="popup">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ajout Film</h4>
                            <form class="forms-sample" action="<?php echo base_url('CT_Film/addFilm') ?>" method="post" >
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nom" class="form-control" id="exampleInputUsername2" placeholder="titre du film">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">categorie</label>
                                    <div class="col-sm-9">
                                        <select class="form-control form-control-sm"  name="type" id="exampleFormControlSelect3">
                                        <?php foreach ($type as $t) { ?>
                                            <option value="<?php echo $t->idtype; ?>"><?php echo $t->categorie; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" name="duree" class="col-sm-3 col-form-label">Durée</label>
                                    <div class="col-sm-9">
                                        <input type="time" name="duree" class="form-control" id="exampleInputUsername2" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Synopsis</label>
                                    <div class="col-sm-9">
                                        <textarea name="synopsis" class="form-control" id="basic-default-name" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info mr-2">Ajouter</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





