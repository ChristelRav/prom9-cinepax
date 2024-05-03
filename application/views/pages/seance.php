<?php if(!isset($seance)) $seance = array(); ?>

<div class="main-panel">
  <div class="content-wrapper">
  <?php foreach ($seance as $film => $details) : ?>
  <div class="row">
      <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="row w-100 flex-grow">
          <div class="card">
            <div class="card-body">
              <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1" id="regional-chart-legend"></div>
              <div class="d-flex align-items-start">
                <div class="col-md-2 grid-margin stretch-card">
                  <img src="<?php echo base_url("assets/images/faces/movie.jpg"); ?>" alt="image" class="mr-3" style="max-width: 100px;">
                </div>
                <div> 
                <form class="forms-sample"  action="<?php echo base_url('CT_Seance/') ?>" method="get" >
                  <h4><?php echo $details['nom']  ; ?></h4>
                  <input type="hidden" name="idfilm" value="<?php echo $details['idfilm']  ; ?>">
                  <p class="card-text"><?php echo $details['synopsis']  ; ?></p>
                  <p>Durée : <?php echo $details['duree']  ; ?></p>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Date de réservation: </label>
                      <div class="col-sm-7">
                      <select class="form-control" name="datepf" id="exampleSelectGender">
                      <?php foreach ($details['datepf'] as $date) : ?>
                          <option><?php echo $date; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success">réserver</button>
                  </form>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    
    <!-- row end -->

   

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:./partials/_footer.html -->