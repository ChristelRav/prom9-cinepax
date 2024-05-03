<?php if(!isset($seance)) $seance = array(); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Financial management review</h4>
            <div class="d-flex flex-wrap">
              <div class="mr-5">
              <p><strong>Title : </strong><?php echo $seance->nom; ?></p>
                <p><strong>Type : </strong><?php echo $seance->categorie; ?></p>
                <p><strong>Salle : </strong><?php echo $seance->salle; ?></p>
              </div>
              <div>
                <p><strong>Duree : </strong> <?php echo $seance->duree; ?></p>
                <p><strong>Projection :</strong> <?php echo $seance->dateheureprojection; ?></p>
              </div>
              <p class="card-text"><strong>Synopsis :</strong> <?php echo $seance->synopsis; ?></p>
              <br>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <form class="forms-sample">
                  <div class="form-group row">
                    <label for="exampleInputAdultes" class="col-sm-4 col-form-label">Adulte(s)</label>
                    <div class="col-sm-6">
                      <input type="text" name="adulte" class="form-control" id="exampleInputAdultes" placeholder="Nombre d'adultes">
                    </div>
                  </div>
                </form>
                <form class="forms-sample"  action="<?php echo base_url('CT_Seance/booking') ?>" method="get" >
                  <div class="form-group row">
                    <label for="exampleInputEnfants" class="col-sm-4 col-form-label">Enfant(s)</label>
                    <div class="col-sm-6">
                      <input type="text" name="enfant" class="form-control" id="exampleInputEnfants" placeholder="Nombre d'enfants">
                    </div>
                  </div>
                  <button type="button" class="btn btn-info">Info</button>
                </form>
              </div>
              <div class="col-sm-6">
                <?php for ($i=0; $i < 5; $i++) {  ?>              
                    <div class="d-flex align-items-center ml-1 mt-2">
                      <strong> A: </strong>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">1</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">2</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">3</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">4</button>
                      <button type="button" class="btn btn-secondary btn-rounded btn-icon ml-1">5</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">6</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">7</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">8</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">9</button>
                      <button type="button" class="btn btn-success btn-rounded btn-icon ml-1">10</button>
                    </div>
                <?php  }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row end -->
    <!-- row end -->
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:./partials/_footer.html -->
</div>
