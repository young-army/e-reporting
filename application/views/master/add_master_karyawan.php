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
                           Tambah Data Karyawan
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
                            <h4><i class="icon-reorder"></i> Tambah Data Karyawan </h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/add_karyawan" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">NIK</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="nik" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Karyawan</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="karyawan" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Jabatan</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="jabatan" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?php echo base_url();?>dashboard/cancel"><button type="button" class="btn">Cancel</button></a>
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