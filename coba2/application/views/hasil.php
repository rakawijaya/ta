
      
      <!-- End Navbar -->
      <div class="content">
        
        
        <div class="row">
          
          <div class="col-12">
            <div class="card ">
              <div class="card-header">
                <h2 class="card-title"> Hasil Peringkat</h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <td>Nama</td>
                      <td>Nilai</td>
                      <td>Peringkat</td>
                      </tr>
                    </thead>
                  <tbody>
                      <?php 
                  $no=1; 
                  foreach ($list_kec as $row) {
                  ?>
                  <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['hasil']; ?></td>
                    <td><?php echo $no ?></td>
                    <?php $no++; } ?>
                  </tr>
                </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     