<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Master Karyawan
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Dashboard</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Master Data</a>
                           <span class="divider">/</span>
                       </li>
					   <li>
                           <a href="#">Master Karyawan</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Edit Data Karyawan
                       </li>
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Edit Data Karyawan </h4>
							
							
						</div>
						<div class="widget-body">
                            <!-- BEGIN FORM-->
						<form method="post" action="<?php echo base_url();?>dashboard/update_master_karyawan" class="form-horizontal">
						<input type="hidden" name="id" value="<?php echo $master_karyawan->id;?>">
							<div class="control-group">
                                <label class="control-label">NIK</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="nik" value="<?php echo $master_karyawan->nik;?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Karyawan</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="nama" value="<?php echo $master_karyawan->nama_karyawan;?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Jabatan</label>
                                <div class="controls">
                                    <input type="text" class="span6" name="jabatan" value="<?php echo $master_karyawan->jabatan;?>"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="<?php echo base_url();?>dashboard/master_karyawan"><button type="button" class="btn">Cancel</button>
                            </div>
							
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>