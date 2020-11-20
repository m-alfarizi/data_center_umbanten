<?php
include('construct/header.php');
include('construct/sidebar.php');
include('construct/subheader.php');
?>

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">

        <!--begin::Profile Account Information-->
        <div class="d-flex flex-row">
            <!--begin::Aside
            <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                begin::Profile Card
                <div class="card card-custom card-stretch">
                    begin::Body
                    <div class="card-body pt-4">
                       
                        begin::User
                        <div class="d-flex align-items-center mt-4">
                            <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                <div class="symbol-label" style="background-image:url('dist/assets/media/users/blank.png')"></div>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div>
                                <a href="#" class="font-weight-bolder font-size-sm text-dark-75 text-hover-primary">
                                    Nama Dosen
                                </a>
                                <div class="text-muted">
                                    NIDN / NIK.: 1234567
                                </div>
                            </div>
                        </div>
                        end::User-->
            <!--begin::Contact
                        <div class="py-9">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Status Dosen:</span>
                                <a href="#" class="text-muted text-hover-primary">Tetap</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="font-weight-bold mr-2">Pangkat/Gol.:</span>
                                <span class="text-muted">Pembina /IVa</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="font-weight-bold mr-2">Jabatan:</span>
                                <span class="text-muted">Auditor Madya</span>
                            </div>
                        </div>
                        
                    </div>
                    end::Body
                </div>
                end::Profile Card
            </div>
            end::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Card-->
                <div class="card card-custom">

                    <!--begin::Card-->
                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">
                                DATA PROGRAM STUDI
                            </h3>
                            <div class="card-toolbar">
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-edit"></i> Ubah</a>
                                    <!--end::add-->
                                </div>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form class="form">
                            <div class="card-body">
                                <!--
                                <div class="form-group row mt-2">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Foto Pegawai</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="image-input image-input-outline" id="kt_image_1">
                                            <div class="image-input-wrapper" style="background-image: url(dist/assets/media/users/blank.png)"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="profile_avatar_remove">
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted font-size-sm">File tipe yang diizinkan : jpg, jpeg. Size: 100 x 100 px.</span>
                                    </div>
                                </div>-->
                                <div class="row">
                                    <label class="col-3 col-form-label">Kode Program Studi:</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <!-- Begin Prodi-->
                                <div class="row">
                                    <label class="col-3 col-form-label"> Program Studi :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <!--end Prodi-->
                                <!--begin Status-->
                                <div class="row align-items-center mb-1">
                                    <label class="col-3 col-form-label">Status</label>
                                    <div class="col-9 input-group-sm">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                                <input type="radio" name="radios" checked="checked">
                                                <span></span>Aktif</label>
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                                <input type="radio" name="radios">
                                                <span></span>Tidak Aktif</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Status-->
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
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <!--begin::tab profil-->
                <div class="card card-custom gutter-b">


                </div>
                <!--end::tab profil-->

            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::row-->

</div>
<!--end::Entry-->







<?php
include('construct/footer.php');
?>