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
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>2.</span>Inventaris Kegiatan</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>3.</span>Butir Kegiatan</h3>
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
                            Butir Kegiatan: 
                        <span class="mb-0 ml-2 text-muted"><strong>Jabatan</strong> - Auditor Madya</span>
                        </h3>                                                     
                    </div>                                     
                    <!--begin::Form-->

                <!--begin::Card-->
                <div class="card card-custom example example-compact">
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <div class="btn-toolbar" role="toolbar" aria-label="...">
                                <div class="btn-group mr-2" role="group" aria-label="...">
                                    <a href="#" type="button" class="btn btn-outline-danger"><i class="la la-check"></i> Sesuai Jabatan</a>
                                    <a href="#" type="button" class="btn btn-outline-primary"><i class="la la-exchange"></i> Tugas Limpahan</a>                                                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-checkable" id="">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th>Unsur</th>                                   
                                    <th>Sub Unsur</th>
                                    <th>Butir Kegiatan</th>                                    
                                    <th>Satuan</th>
                                    <th>Angka Kredit</th>                                    
                                    <th>Aksi</th>                                                                        
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah</a>
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