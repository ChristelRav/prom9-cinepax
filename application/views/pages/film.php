<?php if(!isset($type)) $type = array(); ?>
<?php if(!isset($film)) $film = array(); ?>

<link rel="stylesheet" href="<?php echo base_url("assets/css/popup.css"); ?>" >
<script src="<?php echo base_url("assets/js/popup.js"); ?> "></script>


<div class="main-panel">
  <div class="content-wrapper">
    
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Entite FILM :</h4>
                            <button type="button" class="btn btn-info" onclick="openPopup()"><i class="mdi mdi-plus"></i></button>
                            <!-- Bouton aligné à droite -->
          </div>
          <div class="card-body">
            <div class="table-responsive" style="height: 700px; overflow-y: auto;">
                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Catégorie</th>
                                                <th>Durée</th>
                                                <th>synopsis</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($film as $f) { ?>
                                                <tr>
                                                    <td><?php echo $f->nom; ?></td>
                                                    <td><?php echo $f->categorie; ?></td>
                                                    <td><?php echo $f->duree; ?></td>
                                                    <td><?php echo $f->synopsis; ?></td>
                                                    <td><button type="button" class="btn btn-warning" href="javascript:void(0);" onclick="openPopupUpdate(<?php echo htmlspecialchars(json_encode($f)); ?>)"><i class="mdi mdi-pencil"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="mdi mdi-delete"></i></button></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row end -->
    <div class="row">
    <?php $this->load->view('pages/popup/addFilm'); ?>
    </div>

    <!-- <div class="row"> -->
    <?php $this->load->view('pages/popup/updateFilm'); ?>
    <!-- </div> -->
    <!-- row end -->



    <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:./partials/_footer.html -->


  
    
  <script>
    function openPopupUpdate(film) {
    var overlay = document.getElementById("shadow");
    var popup = document.getElementById("update");

    overlay.style.display = "flex";
    popup.style.display = "block";

    // Utiliser les données du film pour remplir le formulaire
    document.getElementById('id').value = film.idfilm;
    document.getElementById('nom').value = film.nom;
    document.getElementById('type').value = film.idtype;
    document.getElementById('duree').value = film.duree;
    document.getElementById('synopsis').value = film.synopsis;
}



    function closePopupUpdate() {
        var overlay = document.getElementById("shadow");
        var popup = document.getElementById("update");

        overlay.style.display = "none";
        popup.style.display = "none";
    }
</script>


</body>

</html>
