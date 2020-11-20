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
           
            <!--end::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-12">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Card-->
                    <div class="card card-custom example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">
                                Data Pegawai
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
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">N I P:</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">N I K :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Nama Lengkap :</label>
                                    <div class="col-9 input-group-sm"> 
                                        <input type="text" class="form-control" placeholder="" />
                                    <span class="font-size-sm text-muted">Nama lengkap Pegawai</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Tempat & Tanggal Lahir :</label>
                                    <div class="col-3 input-group-sm"> 
                                        <input type="text" class="form-control" placeholder="" />
                                    <span class="font-size-sm text-muted">Tempat Lahir</span>
                                    </div>
                                    <div class="col-6 input-group-sm"> 
                                        <input type="date" class="form-control" placeholder="" />
                                    <span class="font-size-sm text-muted">Tanggal Lahir</span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-1">
                                    <label class="col-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-9 input-group-sm">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios" checked="checked">
                                            <span></span>Laki - Laki</label>
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios">
                                            <span></span>Perempuan</label>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Agama :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Islam</option>
                                            <option>Protestan</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Khonghucu</option>                                            
                                        </select>
                                        <span class="font-size-sm text-muted">Agama Pegawai</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-3 col-form-label">Alamat</label>
                                    <div class="col-9 input-group-sm"> 
                                        <input type="text" class="form-control" placeholder="" />
                                    <span class="font-size-sm text-muted">Alamat Pegawai</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-3 col-form-label">Nomor Kontak</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placehorlder=""/>
                                        <span class="font-size-sm text-muted">Nomor kontak Pegawai</span>
                                    </div>
                                </div>
                                <div class="row">
                                <label class="col-3 col-form-label">Golongan Darah</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>-</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>O</option>
                                            <option>AB</option>                                           
                                        </select>
                                        <span class="font-size-sm text-muted">Agama Pegawai</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="" class="col-3 col-form-label">Pendidikan Terakhir</label>
                                    <div class="col-3 input-group-sm">
                                        <select name="" class="form-control" id="">
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA/Sederajat </option>
                                            <option>S1</option>
                                            <option>S2</option>
                                            <option>S3</option>
                                        </select>
                                        <span class="font-size-sm text-muted">Pendidikan Terakhir</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-3 col-form-label"> Jabatan </label>
                                    <div class="col-3 input-group-sm">
                                        <input type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="row">
                                    <label for="" class="col-3 col-form-label"> Email </label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>                          
                                <div class="row">
                                    <label class="col-3 col-form-label">Status :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Pilih Status</option>
                                            <option>Aktif</option>
                                            <option>Tidak Aktif / DO</option>
                                            <option>Cuti</option>   
                                            <option>Lulus</option>                                     
                                        </select>
                                    </div>
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