<div id="shadow" class="overlay" onclick="closePopupUpdate()"></div>
    <div id="update" class="popup">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Mise à jour Film</h4>
                        <form class="forms-sample" action="<?php echo base_url('CT_Film/updateFilm') ?>" method="post" >
                        <input type="hidden" name="id" class="form-control" id="id" >
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nom" class="form-control" id="nom" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">categorie</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm"  name="type" id="type">
                                    <?php foreach ($type as $t) { ?>
                                        <option value="<?php echo $t->idtype; ?>"><?php echo $t->categorie; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" name="duree" class="col-sm-3 col-form-label">Durée</label>
                                <div class="col-sm-9">
                                    <input type="time" name="duree" class="form-control" id="duree" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Synopsis</label>
                                <div class="col-sm-9">
                                    <textarea name="synopsis" class="form-control" id="synopsis" rows="5" ></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning mr-2">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





