            
            
            
              

                

                <div class="form-group">
                  <label>Kategori</label>
                  <select name="kategori" id="category" class="form-control" required="">
        					<option value="">-- Pilih Kategori --</option>
        					<?php
        						include '../../config/koneksi.php';

                    $metu = $_SESSION['id'];
        						$sql 	= "SELECT * FROM kategori WHERE id_user=$metu";
        						$result = mysqli_query($konek, $sql);
        						if (mysqli_num_rows($result) > 0) {
        							while ($row = mysqli_fetch_assoc($result)) {
        								echo "<option value=".$row['id'].">".$row['nama']."</option>";
        							}
        						}
        					?>
        				</select>
              	</div>


              	<div class="form-group">
                <label for="isi">Isi Artikel</label>
                <div>
		            <textarea class="box-body pad" id="editor1" name="isi" rows="10" cols="80">
                </textarea>
		            </div>
                </div>


                <?php
                $role   = $_SESSION['user'];

                if (($role == 1) OR ($role == 3)) {
                  echo "
                        <div class='form-group'>
                          <label for='status'>Status</label>
                            <div class='form-group'>
                            <label for='active'>
                            <input type='radio' name='status' value='1' id='active' class='minimal-red' required>
                            Active</label>

                            <label for='non-active'>
                            <input type='radio' name='status' value='0' id='non-active' class='minimal-red' required>
                            Non-Active</label>
                            </div>
                          </div>
                       ";
                }
                ?>
                
                <div>
                <div class="form-group">
                <label for="status">Gambar</label>
                <input type="file" name="gambar">
                </div>
                </div>

                </div>
                </div>



              <!-- /.box-body -->
              <div class="box-footer">
                <a type="reset" class="btn btn-default" href="http://localhost/adminlte/admin/artikel">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Create</button>
              </div>
