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
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>1.</span>Pengajuan Dupak</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
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
                            Inventaris Kegiatan
                        </h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-copy">
                                Jenis Pengajuan:<strong> REGULER</strong></span>
                            </div>
                        </div>                                                        
                    </div>                                     
                    <!--begin::Form-->

                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                    <span class="mt-5" style="text-align: center;"><h4>DAFTAR USULAN PENETAPAN ANGKA KREDIT</h4>
                        <h6>PENATA TINGKAT I</h6>
                        <h7>NOMOR: [Akan digenerate otomatis ketika pejabat pengusul Approved]</h7><br>
                        <h7>Masa Penilaian: 01 Januari 2019 - 30 Juni 2019</h7>                           
                    </span>

                    <!--begin::profil pegawai-->
                        <div class="card-body">
                            <div class="row">
                                <label class="col-3 col-form-label">N I P:</label>
                                <div class="col-9 input-group-sm">
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Nama Lengkap:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Nomor Seri Kartu Pegawai:</label>
                                <div class="col-9 input-group-sm">
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Tempat dan Tgl. Lahir:</label>
                                <div class="col-5 input-group-sm">
                                    <input type="text" class="form-control" placeholder="Tempat" />         
                                </div>
                                <label class="col-1 col-form-label text-right"> / </label>
                                <div class="col-3 input-group-sm">
                                    <input type="" class="form-control" placeholder="Tgl. Lahir">
                                </div>
                            </div>                                                        
                            <div class="row">
                                <label class="col-3 col-form-label">Alamat:</label>
                                <div class="col-9 input-group-sm">
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row align-items-center mb-1">
                                <label class="col-3 col-form-label">Jenis Kelamin:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>                                
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Pendidikan Terakhir:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>                            
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Pangkat/Gol./TMT:</label>
                                <div class="col-9 input-group-sm"> 
                                    <input type="text" class="form-control" placeholder="" />
                                </div>                              
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Jabatan:</label>
                                <div class="col-4 input-group-sm">
                                    <input type="text" class="form-control" placeholder="" />           
                                </div>
                                <label class="col-1 col-form-label text-right">TMT:</label>
                                <div class="col-4 input-group-sm">
                                    <input type="" class="form-control" placeholder="TMT">
                                </div>
                            </div>                            
                            <div class="row">
                                <label class="col-3 col-form-label">Angka Kredit:</label>
                                <div class="col-9 input-group-sm">
                                    <input type="email" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-3 col-form-label">Unit Kerja:</label>
                                <div class="col-9 input-group-sm">
                                    <input type="email" class="form-control" placeholder="Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral" />
                                </div>
                            </div>                            
                        </div>
                    <!--end::profil pegawai-->
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <div class="btn-toolbar" role="toolbar" aria-label="...">
                                <div class="btn-group mr-2" role="group" aria-label="...">
                                    <a href="#" type="button" class="btn btn-outline-secondary"><i class="la la-step-backward"></i> Kembali</a>
                                    <a href="#" type="button" class="btn btn-outline-primary"><i class="la la-print"></i> Cetak LAK</a>
                                    <a href="butir_keg.php" type="button" class="btn btn-outline-warning"><i class="la la-plus"></i> Butir Kegiatan</a>  
                                    <a href="#" type="button" class="btn btn-outline-info"><i class="la la-refresh"></i> Segarkan</a>                                                                      
                                </div>
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">
                            <i class="la la-send"></i> Kirim Data Ke Pejabat Pengusul</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-checkable" id="">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th>#</th>
                                    <th>Unsur</th>                                   
                                    <th>Sub Unsur</th>
                                    <th>Butir Kegiatan</th>                                    
                                    <th>Satuan</th>
                                    <th>Angka Kredit</th>                                    
                                    <th>Lama</th>
                                    <th>Baru</th>
                                    <th>Jumlah</th>
                                    <th>#</th>
                                    <th>#</th>                                                                        
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                                                        
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