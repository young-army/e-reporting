<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Master Siswa
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
                           <a href="#">Master Siswa</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Edit Data Siswa
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
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
                            <h4><i class="icon-reorder"></i> Edit Data Siswa </h4>
                          
						 
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/update_master_siswa" class="form-horizontal"> 
							<input type="hidden" name="id" value="<?php echo $master_siswa->id;?>">							
                            <div class="control-group">
                                <label class="control-label">NIS</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="nis" value="<?php echo $master_siswa->nis;?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Siswa</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="nama" value="<?php echo $master_siswa->nama_siswa;?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Jenis Kelamin</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="jns_kel" value="Pria" style="margin-top:-3px"/> Pria
                                    <input type="radio" name="jns_kel" value="Wanita" style="margin-top:-3px"/> Wanita
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Kelas</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="kelas" value="<?php echo $master_siswa->kelas;?>" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Jurusan</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="jurusan" value="<?php echo $master_siswa->jurusan;?>"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="<?php echo base_url();?>dashboard/master_siswa"><button type="button" class="btn">Cancel</button>
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
						</form>
                    </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>