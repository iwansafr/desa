<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
  	<?php $i = 0; ?>
    <?php foreach ($data as $key => $value): ?>
    	<?php $class = ($i==0) ? 'active' : ''; ?>
    	<a class="nav-item nav-link <?php echo $class ?>" id="nav-<?php echo $key;?>-tab" data-toggle="tab" href="#nav-<?php echo $key;?>" role="tab" aria-controls="nav-<?php echo $key;?>" aria-selected="true"><?php echo strtoupper($value[0]['jabatan']) ?></a>
    	<?php $i++; ?>
    <?php endforeach ?>
  </div> 
</nav>
<div class="tab-content" id="nav-tabContent">
	<?php $i = 0; ?>
	<?php foreach ($data as $key => $value): ?>
		<?php $class = ($i==0) ? 'active' : ''; ?>
  	<div class="tab-pane fade show <?php echo $class ?>" id="nav-<?php echo $key?>" role="tabpanel" aria-labelledby="nav-<?php echo $key?>-tab">
  		<?php 
  		$data_tmp = $value;
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
                    <td>: <?php echo strtoupper($dvalue['nama'])?></td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td>: <?php echo strtoupper($dvalue['tempat_lahir'].', '.content_date($dvalue['tgl_lahir']))?></td>
                  </tr>
                  <tr>
                    <td>KELAMIN</td>
                    <td>: <?php echo strtoupper($dvalue['kelamin'])?></td>
                  </tr>
                  <tr>
                    <td>ALAMAT</td>
                    <td>: <?php echo strtoupper($dvalue['alamat'])?></td>
                  </tr>
                  <tr>
                    <td>AGAMA</td>
                    <td>: <?php echo strtoupper($dvalue['agama'])?></td>
                  </tr>
                  <tr>
                    <td>STATUS PERKAWINAN</td>
                    <td>: <?php echo strtoupper($dvalue['status_perkawinan'])?></td>
                  </tr>
                  <tr>
                    <td>PENDIDIKAN TERAKHIR</td>
                    <td>: <?php echo strtoupper($dvalue['pendidikan_terakhir'])?></td>
                  </tr>
                  <tr>
                    <td>jabatan</td>
                    <td>: <?php echo strtoupper($dvalue['jabatan'])?></td>
                  </tr>
                  <tr>
                    <td>PELANTIK</td>
                    <td>: <?php echo strtoupper($dvalue['pelantik'])?></td>
                  </tr>
                </table>
                <?php 
                $riwayat_pendidikan = $dvalue['riwayat_pendidikan'];
                if (!empty($riwayat_pendidikan))
                {
                  $riwayat_pendidikan = explode("\n", $riwayat_pendidikan);
                  ?>
                  <h5>Riwayat Pendidikan</h5>
                  <table class="table <?php echo $class ?> table-sm table-striped table-hover" style="font-size: 11px;">
                    <tr>
                      <th>No</th>
                      <th>Jenjang</th>
                    </tr>
                    <?php 
                    $ii = 1;
                    foreach ($riwayat_pendidikan as $rpkey => $rpvalue) 
                    {
                      ?>
                      <tr>
                        <td><?php echo strtoupper($ii); ?></td>
                        <td><?php echo strtoupper($rpvalue); ?></td>
                      </tr>
                      <?php
                      $ii++;
                    }
                    ?>
                  </table>
                  <?php
                }
                ?>
              </div>
              
            </div>
          </div>
          <div class="card-footer">
          </div>
        </div>
        <?php
  		}
  		?>
  	</div>
  	<?php $i++; ?>
	<?php endforeach ?>
</div>

<div class="accordion" id="accordionExample">
	<?php 
	foreach($kepdes_notes AS $key => $value)
	{
		?>
	  <div class="card">
	    <div class="card-header" id="headingOne">
	      <h2 class="mb-0">
	        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $key;?>" aria-expanded="true" aria-controls="collapse<?php echo $key;?>">
	          <?php echo '+ '.$key.' KEPALA DESA' ?>
	        </button>
	      </h2>
	    </div>

	    <div id="collapse<?php echo $key;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
	      <div class="card-body">
	        <?php echo $value ?>
	      </div>
	    </div>
	  </div>
		<?php
	}
	?>
</div>