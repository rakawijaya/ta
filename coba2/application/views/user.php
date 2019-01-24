
      
      <!-- End Navbar -->
      <div class="content">
        
        
        <div class="row">
          
          <div class="col-12">
            <div class="card ">
              <div class="card-header">
                <h2 class="card-title"> User</h2>
              </div>

              <div class="card-body">
                <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#tambah">Tambah User</button><br><br>
                <div class="table-responsive">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                      <td>Nama</td>
                      <td>Sebagai</td>
                      </tr>
                    </thead>
                  <tbody>
                      <?php 
                 
                  foreach ($list_user as $row) {
                  ?>
                  <tr>
                   
                    <td><?php echo $row['nama']; ?> <?php $row['username']; ?></td>
                    <td><?php echo $row['sebagai']; ?></td>
                    
                    <td class="text-center">
                      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit<?php echo $row['username']; ?>"><i class="tim-icons icon-settings"></i></button>
                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus<?php echo $row['username']; ?>"><i class="tim-icons icon-trash-simple"></i></button>
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
        
<div id="tambah" class="modal fade" role="dialog" style="margin-top: -90px">
  <div class="modal-dialog">

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah User</h4>
      </div>
      <div class="modal-body">
        <form action="User/tambah" method="post">
        <table class="table borderless">
          <tr>
            <th width="30%">Username</th>
            <td width="3%">:</td>
            <td>
              <input type="text" name="username" placeholder="Username tidak dapat diubah" class="form-control input-sm" required="" style="color: black">
            </td>
          </tr>
          <tr>
            <th width="30%">Nama</th>
            <td width="3%">:</td>
            <td>
              <input type="text" placeholder="Nama"  name="nama" class="form-control input-sm" required="" style="color: black">
            </td>
          </tr>
          <tr >
                  <th>Sebagai</th>
                  <td>:</td>
                  <td>
                    <select class="form-control input-sm" name="sebagai" style="color: black">
                      <option disabled="" selected="">Pilih...</option>
                      <option value="Admin">Admin</option>
                      <option value="Manager">Manager</option>
                      <option value="User">User</option>
                    </select>
                  </td>
                </tr>
          <tr>
            <th width="30%">Password</th>
            <td width="3%">:</td>
            <td>
              <input type="password" placeholder="Password" name="pass" class="form-control input-sm" style="color: black"  required="" >
            </td>
          </tr>
         <tr>
            <th width="30%">Konfirm Password</th>
            <td width="3%">:</td>
            <td>
              <input type="password" placeholder="konfirm Password" name="cpass" class="form-control input-sm" style="color: black"  required="" >
            </td>
          </tr>
          
      </table>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-success" style="margin-left: 20px;">Save</button>
      </div>
      </form>
    </div>

  </div>
</div>
<?php   
   foreach ($list_user as $rows) {
?>
<div id="edit<?php echo $rows['username']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit User</h4>
      </div>
      <div class="modal-body">
        <form action="User/edit" method="post">
        <table class="table borderless">
         
              <input style="color: black" type="hidden" name="username" class="form-control input-sm" value="<?php echo $rows['username']; ?>" >
            
          <tr>
            <th width="30%">Nama</th>
            <td width="3%">:</td>
            <td>
              <input style="color: black" type="text" name="nama" class="form-control input-sm" value="<?php echo $rows['nama']; ?>" required="">
            </td>
          </tr>
          
          
      </table>
      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
        <button type="submit" name="submit" class="btn btn-success" style="margin-left: 20px;">Submit</button>
      </div>
      </form>
    </div>

  </div>
</div>
<?php } ?>

<?php   
   foreach ($list_user as $rows) {
?>
<div id="hapus<?php echo $rows['username']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus User</h4>
      </div>
      <form method="post" action="user/delete">
      <div class="modal-body">
        <h3 align="center" style="color: black">
          Apakah anda yakin ingin menghapus <br> User <?php echo $rows['nama']; ?> ?
        </h3>
        <input type="hidden" name="username" value="<?php echo $rows['username']; ?>">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
      </form>
    </div>

  </div>
</div>
<?php } ?>
     