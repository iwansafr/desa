<?php defined('BASEPATH') OR exit('No direct script access allowed');

// pr($data);
die();
?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
  	<?php $i = 0; ?>
    <?php foreach ($kelompok as $key => $value): ?>
    	<?php $class = ($i==0) ? 'active' : ''; ?>
    	<a class="nav-item nav-link <?php echo $class ?>" id="nav-<?php echo $key;?>-tab" data-toggle="tab" href="#nav-<?php echo $key;?>" role="tab" aria-controls="nav-<?php echo $key;?>" aria-selected="true"><?php echo strtoupper($value) ?></a>
    	<?php $i++; ?>
    <?php endforeach ?>
  </div> 
</nav>
<div class="tab-content" id="nav-tabContent">
	<?php $i = 0; ?>
	<?php foreach ($kelompok as $key => $value): ?>
		<?php $class = ($i==0) ? 'active' : ''; ?>
  	<div class="tab-pane fade show <?php echo $class ?>" id="nav-<?php echo $key?>" role="tabpanel" aria-labelledby="nav-<?php echo $key?>-tab">
  		<?php 
      if(!empty($data[$key]))
      {
    		$data_tmp = $data[$key];
    		foreach ($data_tmp as $dkey => $dvalue)
    		{
    			?>
          <hr>
          <div class="card card-default">
            <div class="card-header">
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <table>
                    <tr>
                      <td>
                        <img src="<?php echo $dvalue['foto'] ?>" alt="" class="img-fluid">
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="col-md-8">
                  <table class="table table-hover table-striped" style="font-size: 11px;">
                    <tr>
                      <td>NAMA</td>
                      <td>: <?php echo $dvalue['nama']?></td>
                    </tr>
                    <tr>
                      <td>TTL</td>
                      <td>: <?php echo $dvalue['tempat_lahir'].', '.content_date($dvalue['tgl_lahir'])?></td>
                    </tr>
                    <tr>
                      <td>KELAMIN</td>
                      <td>: <?php echo $kelamin[$dvalue['kelamin']]?></td>
                    </tr>
                    <tr>
                      <td>ALAMAT</td>
                      <td>: <?php echo $dvalue['alamat']?></td>
                    </tr>
                    <tr>
                      <td>AGAMA</td>
                      <td>: <?php echo $agama[$dvalue['agama']]?></td>
                    </tr>
                    <tr>
                      <td>STATUS PERKAWINAN</td>
                      <td>: <?php echo $status_perkawinan[$dvalue['status_perkawinan']]?></td>
                    </tr>
                    <tr>
                      <td>PENDIDIKAN TERAKHIR</td>
                      <td>: <?php echo $pendidikan_terakhir[$dvalue['pendidikan_terakhir']]?></td>
                    </tr>
                    <tr>
                      <td>jabatan</td>
                      <td>: <?php echo $jabatan[$key][$dvalue['jabatan']]?></td>
                    </tr>
                    <tr>
                      <td>PELANTIK</td>
                      <td>: <?php echo $dvalue['pelantik']?></td>
                    </tr>
                  </table>
                  
                </div>
                
              </div>
            </div>
            <div class="card-footer">
            </div>
          </div>
          <?php
    		}
      }else{
        echo '<hr>';
        msg('Data Kosong', 'warning');
      }
  		?>
  	</div>
  	<?php $i++; ?>
	<?php endforeach ?>
</div>