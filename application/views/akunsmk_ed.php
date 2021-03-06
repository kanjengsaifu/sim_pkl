<div class="content">
            <div class="container-fluid">
                <?php 
	if (isset($_SESSION['alert_sales_type'])) { ?>
    <div class="alert alert-<?php echo $_SESSION['alert_sales_type'];?>">
                    <button type="button" aria-hidden="true" class="close">×</button>
                    <span><?php echo $_SESSION['alert_sales_msg'];?></span>
                </div>
	<?php }
	unset($_SESSION['alert_sales_type']);
	unset($_SESSION['alert_sales_show']);
	unset($_SESSION['alert_sales_msg']);
	 ?>
                <div class="row">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Akun POKJA SMK </h4>
                            </div>
                            <div class="content">
                                <form action="<?php echo base_url()?>index.php/Setting/updAkunsmk" method="post">
                                    <div class="row">
                                        <input type="hidden" class="form-control" required name="pid" value="<?php echo $this->session->userdata('pv');?>">                                            
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Pegawai</label>
                                                <input type="text" class="form-control" required name="nm" value="<?php echo $this->session->userdata('pn');?>">
                                            </div>
                                        </div>                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telepon</label>
                                               <input type="text" class="form-control" required name="hp" id="hp_ed"  value="<?php echo $this->session->userdata('pt');?>">
                                             
                                            </div>
                                        </div>
                                    </div>                                        
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea id="ckeditor_full" name="alm" id="alm_ed" class="form-control"><?php echo $this->session->userdata('pa');?></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" required name="unm"  value="<?php echo $this->session->userdata('pu');?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password Baru</label>
                                                <input type="password" class="form-control" name="pw" placeholder="Password Baru">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Konfirmasi Password Baru</label>
                                                <input type="password" class="form-control" name="konfirm" placeholder="Ketik Ulang Password Baru">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>
                                </form>
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