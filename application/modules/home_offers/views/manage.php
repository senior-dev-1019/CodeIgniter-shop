
<h1>Gérer les offres</h1>

<?php
if(isset($flash)){
  echo $flash;
}

  $create_item_url=base_url()."home_offers/create";
  ?><p style="margin-top:30px">
		<a href="<?= $create_item_url ?>"><button type="submit" class="btn btn-primary">Gerer vos offres</button>

    </p>

<div class="row-fluid sortable">    
        <div class="box span12">
          <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Liste des offres</h2>
            <div class="box-icon">
              <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
              <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
              <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
          </div>
          <div class="box-content">

     <?php
           
echo Modules::run('home_offers/_create_sortable_list');

            ?>
            </div><!--/span-->
      
      </div><!--/row-->
