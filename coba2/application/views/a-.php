
          
          <div class="col-lg-6 col-md-12">
            <div class="card ">
              <div class="card-header">
                <h2 class="card-title"> Solusi Ideal Negatif</h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <th>Jenis</th>
                      <th> A- </th>
                      
                      </tr>
                    </thead>
                  <tbody>
                      <?php 
                 
                  foreach ($list_m as $rop) {
                  ?>
                 
                  <tr>
                    <th>Kelerengan</th>
                    <td><?php echo $rop['k']; ?></td>
                  </tr>
                  <tr>
                    <th>Penggunaan Lahan</th>
                    <td><?php echo $rop['pl']; ?></td>
                  </tr>
                  <tr>
                    <th>Rawan bencana Longsor</th>
                    <td><?php echo $rop['rbl']; ?></td>
                  </tr>
                  <tr>
                    <th>Curah Hujan</th>
                    <td><?php echo $rop['ch']; ?></td>
                  </tr>
                  <tr>
                    <th>Cadangan Air Tanah</th>
                    <td><?php echo $rop['cat']; ?></td>
                  </tr>
                  <tr>
                    <th>Jenis Tanah</th>
                    <td><?php echo $rop['jt']; ?></td>
                  </tr>
                     <?php } ?>
                    
                </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
     