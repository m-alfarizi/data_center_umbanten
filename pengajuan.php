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
                    <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>1.</span>Pengajuan Dupak</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>2.</span>Inventaris Kegiatan</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>3.</span>SPMK</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>4.</span>Kirim Ajuan Dupak</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                    </div>

                    <div class="card-header">
                        <h3 class="card-title">
                            Pengajuan Dupak
                        </h3>                        
                    </div>                 
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="row">
                                <label class="col-3 col-form-label">Jenis Pengajuan:</label>
                                <div class="col-9 input-group-sm">
                                    <select class="form-control" id="">
                                        <option>-- Pilih Jenis --</option>
                                        <option>Reguler</option>
                                        <option>Kebutuhan Khusus</option>
                                    </select>
                                    <span class="form-text text-muted font-size-sm mb-5">*) Reguler dan Kebutuhan Khusus (Pembebasan sementara/pengangkatan kembali).</span>
                                </div>                              
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Periode Kegiatan:</label>
                                <div class="col-9 input-group-sm">
                                    <select class="form-control" id="">
                                        <option>-- Pilih Periode Kegiatan --</option>
                                        <option>01 Januari 2019 - 30 Juni 2019</option>
                                        <option>01 Juli 2019 - 31 Desember 2019</option>
                                    </select>                                      
                                </div>                              
                            </div>                            
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-3">
                                </div>
                                <div class="col-9">
                                    <button type="" class="btn btn-primary mr-2">Simpan</button>
                                    <button type="" class="btn btn-secondary">Batal</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">
                                Pengajuan DUPAK
                                <span class="d-block text-muted pt-2 font-size-sm">Data Pengajuan DUPAK</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="#" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon--></span> Pengajuan Dupak Baru
                            </a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-checkable" id="">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th>#</th>
                                    <th>Jenis</th>                                   
                                    <th>Periode</th>                                                                         
                                    <th>Tanggal Buka</th>                                    
                                    <th>Terakhir update</th>
                                    <th>Status</th>                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Reguler</td>
                                    <td>01 Januari 2019 - 30 Juni 2019</td>
                                    <td>06 Juni 2019</td>
                                    <td data-field="ShipDate" aria-label="06 Juni 2019" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder text-primary mb-0">06 Juni 2019</div><div class="text-muted">11:02:23</div></span>
                                    </td>
                                    <td>Dupak Baru</td>
                                    <td nowrap>
                                            <div class="btn-group">
                                                <button class="btn btn-primary font-weight-bold btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tindakan</button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="inv_keg.php"><i class="fa fa-server mr-2"></i> Inventaris Kegiatan</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-edit mr-2"></i> Sunting (edit)</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-trash mr-2"></i> Hapus</a>
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