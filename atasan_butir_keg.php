<?php 
    include('construct/header.php');
    include('construct/sidebar.php');
    include('construct/subheader.php');
?>

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
        <div class="row">	
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">
                            Butir Kegiatan
                        </h3>                        

                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="#" class="btn btn-warning font-weight-bolder">
                                <li class="fa fa-paste"></li> Lihat SPMK
                            </a>
                            <!--end::Button-->
                        </div>
                    </div>                                  
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="d-flex align-items-center mr-7 mb-2">
                                <a href="#" class="font-weight-bolder text-primary ml-2"><li class="fa fa-list-ol mr-2"></li> Rincian Butir Kegiatan</a>
                            </div>

                            <div class="row">
                                <label class="col-3 col-form-label">Butir Kegiatan:</label>
                                <div class="col-9 input-group-sm mb-2"> 
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Jenis Pengajuan:</label>
                                <div class="col-9 input-group-sm">
                                    <select class="form-control" id="">
                                        <option>-- Pilih Jenis --</option>
                                        <option>Reguler</option>
                                        <option>Kebutuhan Khusus</option>
                                    </select>
                                </div>                              
                            </div>                            
                            <div class="row">
                                <label class="col-3 col-form-label">No. Pengajuan (ST/ND/Memo):</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Tgl. Terbit (ST/ND/Memo):</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Tgl. Periode Penugasan:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Jumlah Jam:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div> 
                            <div class="row">
                                <label class="col-3 col-form-label">Jumlah HP (Penugasan) Produktif:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Jumlah HP (Penugasan) Realisasi:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Satuan Angka Kredit:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Angka Kredit:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div> 
                            <div class="row">
                                <label class="col-3 col-form-label">Peran Auditor:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Uraian:</label>
                                <div class="col-9 input-group-sm mb-2"> 
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Catatan Keg.:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>                                                                                                               
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mr-7 mb-2">
                            <a href="#" class="font-weight-bolder text-primary ml-2"><li class="fa fa-file mr-2"></li> Lampiran Berkas</a>
                        </div>                        
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-checkable" id="">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th>Tipe Dokumen</th>                                   
                                    <th>Nama Berkas</th>                                                                         
                                    <th>Status</th>                                
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Reguler</td>
                                    <td></td>
                                    <td data-field="ShipDate" aria-label="06 Juni 2019" class="datatable-cell">
                                    </td>
                                    <td nowrap>
                                            <div class="btn-group">
                                                <button class="btn btn-primary font-weight-bold btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="inv_keg.php"><i class="fa fa-server mr-2"></i> Lihat File</a>
                                                    <div class="dropdown-divider"></div>                
                                                    <a class="dropdown-item" href="#"><i class="fa fa-edit mr-2"></i> Unduh File</a>
                                                </div>
                                            </div>                                            
                                        </div>                   
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->                
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mr-7 mb-2">
                            <a href="#" class="font-weight-bolder text-primary ml-2"><li class="fa fa-check mr-2"></li> Status Persetujuan Atasan</a>
                        </div>                        
                        <!--begin::Form-->
                        <form class="form">
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-3 col-form-label">Status (Setuju/Tolak):</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control" id="">
                                            <option>-- Pilih Status --</option>
                                            <option>Setuju</option>
                                            <option>Tolak</option>
                                        </select>
                                    </div>                              
                                </div>                            
                                <div class="row">
                                    <label class="col-3 col-form-label">Catatan:</label>
                                    <div class="col-9 input-group-sm"> 
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div> 
                        </form>
                        <!--end::Form-->
                    </div>
                </div>    
                <!--end:Card-->               					
                
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<?php 
    include('construct/footer.php');
?>                    