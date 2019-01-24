
      
      <!-- End Navbar -->
      <div class="content">
        
        
        <div class="row">
          
          <div class="col-12">
            <div class="card ">
              <div class="card-header">
                <h2 class="card-title"> Matriks Normalisasi</h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <td>Kecamatan</td>
                      <td>Kelerengan</td>
                      <td>Penggunaan Lahan</td>
                      <td>Rawan Longsor</td>
                      <td>Curah Hujan</td>
                      <td>Cadangan Air Tanah</td>
                      <td>Jenis Tanah</td>

                      </tr>
                    </thead>
                  <tbody>
                      <?php 
                 
                  foreach ($list_norm as $row) {
                  ?>
                  <tr>
                    <td width="25%"><?php echo $row['nama']; ?></td>
                    <td><?php echo round($row['k'], 4); ?></td>
                    <td><?php echo round($row['pl'], 4); ?></td>
                    <td><?php echo round($row['rbl'], 4); ?></td>
                    <td><?php echo round($row['ch'],4); ?></td>
                    <td><?php echo round($row['cat'],4); ?></td>
                    <td><?php echo round($row['jt'],4); ?></td>

                    
                    <?php } ?>
                  </tr>
                </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     