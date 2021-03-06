        <div class="content">
            <div class="container-fluid">
                <div class="row">                        
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="col-md-6">
                                <h4 class="title">Daftar Siswa PKL Periode 2017/2018 </h4>
                                </div><br><br>
                                <div class="row"></div>
                                <div class="col-md-4">
                                    <a href="<?php echo base_url()?>index.php/Siswa/siswa_in">
                                        <button type="button" class="btn btn-success">Tambah Siswa</button>
                                    </a>
                                </div>
                            </div>
                            <br><br>
                            <div class="content table-responsive table-full-width">
                                
                                <table class="table table-hover table-striped" id="tabel_data">
                                    <thead>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                    	<th>Nama</th>
                                    	<th>JK</th>
                                        
                                        <th>HP Pribadi / Ortu</th>
                                        <th>Opsi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($siswa as $s){
                                            $ket;
                                            if ($s->DUDI_ID==0){
                                                $ket="<button class='btn btn-xs btn-danger'>BELUM PLOTTING</button>";
                                            }else{
                                                $ket="<a href='#' data-toggle='modal' data-target='#siswaDudi' class='tbl-detail' id='tbl-detail'
                                                   si='$s->SW_NIS'
                                                   sn='$s->SW_NAMA'
                                                   sk='$s->JURKEL_ID'
                                                   sj='$s->SW_JK'
                                                   sh='$s->SW_HP'
                                                   so='$s->SW_HP_ORTU'
                                                   sa='$s->SW_ALAMAT'
                                                   dn='$s->DUDI_NAMA'
                                                   dp='$s->DUDI_PIMPINAN'
                                                   da='$s->DUDI_ALAMAT'
                                                   dt='$s->DUDI_TELEPON'
                                                   de='$s->DUDI_EMAIL'
                                                   >
                                                   <button class='btn btn-xs btn-success'> DUDI</button></a>";
                                            }
                                            ?>
                                        <tr>
                                        	<td><?php echo $s->SW_NIS;?></td>
                                            <td><?php echo $s->JURKEL_ID;?></td>
                                        	<td><?php echo $s->SW_NAMA;?></td>
                                        	<td><?php echo $s->SW_JK;?></td>                                           
                                            <td><?php echo $s->SW_HP;?> / <?php echo $s->SW_HP_ORTU;?></td>
                                           <!-- <td><?php //echo $s->DUDI_NAMA;?></td>-->
                                            <td><?php echo $ket ?>  
                                                </td>
                                            <td>
                                                <a href="<?php echo base_url()?>index.php/Siswa/Siswa_ed/<?php echo $s->SW_NIS;?>" class="btn btn-xs btn-info"> Edit</a>
                                            </td>
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
<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                SIM PKL versi 1.0
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2018 <a href="http://www.creative-tim.com">TIF Polije Tim</a>, SMK Negeri 6 Jember
                </p>
            </div>
        </footer>

    </div>
</div>
<div id="siswaDudi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Siswa Prakerin</h4>
      </div>
      <div class="modal-body">
          <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th>Nama</th><td>:</td><td id="sn_edit"></td>
                </tr>
                <tr>
                    <th>Kelas</th><td>:</td><td id="sk_edit"></td>
                </tr>
                <tr>
                    <th>JK</th><td>:</td><td id="sj_edit"></td>
                </tr>
                <tr>
                    <th>Alamat</th><td>:</td><td id="sa_edit"></td>
                </tr>
                <tr>
                    <th>HP</th><td>:</td><td id="sh_edit"></td>
                </tr>
                <tr>
                    <th>HP Ortu</th><td>:</td><td id="so_edit"></td>
                </tr>
           </tbody>
          </table>
       <table class="table table-hover table-striped">
            <thead>
                <th>Nama Du/Di</th>
                <th>Penanggung Jawab</th>
                <th>Alamat</th>
                <th>Kontak</th>
            </thead>
            <tbody>
                
                <tr>
                    <td><label id="dn_edit"></label></td>
                    <td><label id="dp_edit"></label></td>
                    <td><label id="da_edit"></label></td>
                    <td><label id="dt_edit"></label> / <label id="de_edit"></label></td>
                </tr>
           </tbody>
          </table>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

