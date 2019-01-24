
          
          <div class="col-12">
            <div class="card ">
              <div class="card-header">
                <h2 class="card-title"> Jarak Nilai Alternatif</h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <th>Kecamatan</th>
                      <th> D+ </th>
                      <th> D- </th>
                      </tr>
                    </thead>
                  <tbody>
                      <?php 
                 
                  foreach ($list_d as $row) {
                  ?>
                 
                  <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['dp']; ?></td>
                    <td><?php echo $row['dm']; ?></td>
                  </tr>
                     <?php } ?>
                    
                </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    