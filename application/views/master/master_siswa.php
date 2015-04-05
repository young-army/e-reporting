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
                           <a href="<?php echo base_url();?>dashboard">Dashboard</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="<?php echo base_url();?>dashboard">Master Data</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Master Siswa
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
                <div class="widget blue">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> Data Siswa</h4>
                            
                    </div>
                    <div class="widget-body">
					<a href="<?php echo base_url();?>dashboard/add_master_siswa"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Tambah Data</button></a><br><br>
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th class="hidden-phone">NIS</th>
                                <th class="hidden-phone">Nama</th>
                                <th class="hidden-phone">Jenis Kelamin</th>
                                <th class="hidden-phone">Kelas</th>
                                <th class="hidden-phone">Jurusan</th>
                                <th class="hidden-phone">Fungsi</th>
								
                            </tr>
                            </thead>
                            <tbody>
							<?php $no=1; foreach ($master_siswa as $row){?>
                            <tr class="odd gradeX">
                                <td><?php echo $no;?></td>
                                <td><?php echo $row->nis;?></td>
                                <td class="hidden-phone"><?php echo $row->nama_siswa;?></td>
                                <td class="hidden-phone"><?php echo $row->jns_kel;?></td>
                                <td class="hidden-phone"><?php echo $row->kelas;?></td>
                                <td class="hidden-phone"><?php echo $row->jurusan;?></td>
                                <td class="hidden-phone">
								<a href="<?php echo base_url();?>dashboard/edit_master_siswa/<?php echo $row->id;?>"><button class="btn btn-small btn-primary"><i class="icon-pencil icon-white"></i> Edit</button></a>
                                <a href="<?php echo base_url();?>dashboard/delete_master_siswa/<?php echo $row->id;?>"onclick="return confirm('Apakah Anda Yakin?')"><button class="btn btn-small btn-danger"><i class="icon-remove icon-white"></i> Delete</button></td>
                            </tr>
							<?php $no++;} ?>
                            </tbody>
								
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>