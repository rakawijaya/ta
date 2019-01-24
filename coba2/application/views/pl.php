
      
      <!-- End Navbar -->
      <div class="content">
        
        
        <div class="row">
          
          <div class="col-12">
            <div class="card ">
              <div class="card-header">
                <h2 class="card-title"> Penggunaan Lahan</h2>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <td>Nama</td>
                      <td>Nilai</td>
                      <td>Keterangan</td>
                      </tr>
                    </thead>
                  <tbody>
                      <?php 
                 
                  foreach ($list_kec as $row) {
                  ?>
                  <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['pl']; ?></td>
                    <td><?php if($row['pl']=='1'){echo "Sawah/Ladang/Tambak";} elseif ($row['pl']=='0'){echo "Hutan";} elseif ($row['pl']=='2'){echo "Kebun/Lapangan";} elseif ($row['pl']=='3'){echo "Pemukiman";} else{echo "Industri";}  ?> </td>
                     <td class="text-center">
                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit<?php echo $row['nama']; ?>"><i class="tim-icons icon-settings"></i></button>
                    </td>
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
      <?php   
   foreach ($list_kec as $rows) {
?>
<div id="edit<?php echo $rows['nama']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data</h4>
      </div>
      <div class="modal-body">
        <form action="Lahan/edit" method="post">
        <table class="table borderless">
         
              <input type="hidden" name="nama" class="form-control input-sm" value="<?php echo $rows['nama']; ?>" readonly>
            
          <tr>
            <th width="30%">Nilai</th>
            <td width="3%">:</td>
            <td>
              <input type="text" name="pl" class="form-control input-sm" style="color: black" value="<?php echo $rows['pl']; ?>" required="" >
            </td>
          </tr>
         
          
      </table>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-success" style="margin-left: 20px;">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>
<?php } ?>
     