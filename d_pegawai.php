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
            <!--begin::Aside-->
            <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                <!--begin::Profile Card-->
                <div class="card card-custom card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->

                        <!--end::Toolbar-->
                        <!--begin::User-->
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
                        <!--end::User-->
                        <!--begin::Contact-->
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
                        <!--end::Contact-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Profile Card-->
            </div>
            <!--end::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
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
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">FOto Pegawai</label>
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
                                        <span class="form-text text-muted font-size-sm">Allowed file types: png, jpg, jpeg. Size: 100 x 100 px.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">N I K :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">N I M :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Nama Lengkap :</label>
                                    <div class="col-9 input-group-sm"> 
                                        <input type="text" class="form-control" placeholder="" />
                                    <span class="font-size-sm text-muted">Nama lengkap Mahasiswa</span>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-1">
                                    <label class="col-3 col-form-label">Jenjang :</label>
                                    <div class="col-9 input-group-sm">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios" checked="checked">
                                            <span></span>D3 - Diploma 3</label>
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios">
                                            <span></span>S1 - Strata 1</label>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Program Studi :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Pilih Program Studi</option>
                                            <option>D3 - Manajemen Informatika</option>
                                            <option>S1 - Sistem Informasi</option>
                                            <option>S1 - Teknik Informatika</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Angkatan :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Kelas :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Pilih Kelas</option>
                                            <option>Reguler Pagi</option>
                                            <option>Reguler Malam</option>
                                            <option>Shift</option>
                                            <option>Karyawan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Kampus Cabang :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Pilih Kampus</option>
                                            <option>Kampus Pusat - Serang</option>
                                            <option>Kampus cabang - Tangerang</option>
                                            <option>Kampus Cabang - MAUK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Tempat dan Tgl. Lahir :</label>
                                    <div class="col-6 input-group-sm">
                                        <input type="text" class="form-control" placeholder="Tempat" />         
                                    </div>
                                    <div class="col-3 input-group-sm">
                                        <input type="date" class="form-control" placeholder="Tgl. Lahir">
                                    </div>
                                </div> 
                                <div class="row align-items-center mb-1">
                                    <label class="col-3 col-form-label">Jenis Kelamin:</label>
                                    <div class="col-9 input-group-sm">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-outline-2x radio-primary">
                                            <input type="radio" name="radios" checked="checked">
                                            <span></span>Laki-laki</label>
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
                                            <option>Pilih Agama</option>
                                            <option>Islam</option>
                                            <option>Protestan</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Khonghucu</option>                                            
                                        </select>
                                    </div>
                                </div>     
                                <div class="row">
                                    <label class="col-3 col-form-label">Golongan Darah :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Pilih Golongan Darah</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>AB</option>
                                            <option>O</option>                                          
                                        </select>
                                    </div>
                                </div>                                                
                                <div class="row">
                                    <label class="col-3 col-form-label">Alamat :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Email :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="namaemail@tempatdaftar.com" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">No. Kontak :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Pendidikan Asal :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Nama Orangtua (Ayah) :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Jenis Pendaftaran :</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control">
                                            <option>Pilih Jenis Pendaftaran</option>
                                            <option>Alih Jenjang</option>
                                            <option>Pindahan</option>
                                            <option>Mahasiswa Baru</option>                                      
                                        </select>
                                    </div>
                                </div> 
                                <div class="row">
                                    <label class="col-3 col-form-label">Tahun Masuk :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
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
                                <!--div class="row">
                                    <label class="col-3 col-form-label">Pendidikan Terakhir:</label>
                                    <div class="col-9 input-group-sm"> 
                                        <input type="text" class="form-control" placeholder="" />
                                    <span class="font-size-sm text-muted">Contoh: : S2 Magister Akuntansi, Universitas Indonesia</span>
                                    </div>                            
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label">Pangkat/Gol./TMT:</label>
                                    <div class="col-9 input-group-sm">
                                        <select class="form-control" id="">
                                            <option>-- Pilih Pangkat/Gol. --</option>
                                            <option>Pembina, IV/a</option>
                                            <option>Pangkat/Gol.</option>
                                            <option>Pangkat/Gol.</option>
                                            <option>Pangkat/Gol.</option>
                                        </select>                                      
                                    </div>                              
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label">Jabatan:</label>
                                    <div class="col-4 input-group-sm">
                                        <select class="form-control" id="">
                                            <option>-- Pilih Jabatan --</option>                                        
                                            <option>Auditor Madya</option>
                                            <option>Auditor Madya</option>
                                            <option>Auditor Madya</option>                                      
                                            <option>Auditor Madya</option>
                                            <option>Auditor Madya</option>
                                            <option>Auditor Madya</option>
                                        </select>           
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
                                </div-->                           
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







<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    Riwayat Kepegawaian
                </h3>
            </div>            

            <!--begin::tab profil-->
            <div class="card card-custom">
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                    <span class="nav-icon"><i class="fa fa-graduation-cap"></i></span>
                                    <span class="nav-text">Pendidikan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                    <span class="nav-icon"><i class="fa fa-user-plus"></i></span>
                                    <span class="nav-text">Pangkat / Gol.</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
                                    <span class="nav-icon"><i class="fa fa-sitemap"></i></span>
                                    <span class="nav-text">Jabatan</span>
                                </a>
                            </li>                
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-icon"><i class="fa fa-university"></i></span>
                                    <span class="nav-text">Diklat</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_1">Sertifikasi JFA</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_2">Teknis Substantif</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Sertifikasi Profesi</a>
                                </div>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_4">
                                    <span class="nav-icon"><i class="fa fa-list-ol"></i></span>
                                    <span class="nav-text">Angka Kredit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">               
                    <div class="tab-content">                    
                        <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Riwayat Pendidikan</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>                                
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: Tab Pendidikan-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>Jenjang</th>                                   
                                        <th>Lembaga Pendidikan</th>                                                   
                                        <th>Jurusan</th>                                    
                                        <th>Tgl. Ijazah</th>
                                        <th>File</th>                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>S2</td>
                                        <td>Universitas Indonesia</td>
                                        <td>Akuntansi</td>
                                        <td data-field="ShipDate" aria-label="06 Juni 2019" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder text-primary mb-0">06 Juni 2019</div></span>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: Tab Pendidikan-->

                        </div>
                        
                        <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Riwayat Pangkat/Gol.</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: Tab Pangkat-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>Pangkat</th>                                   
                                        <th>Gol. Ruang</th>                                                   
                                        <th>No. SK</th>                                    
                                        <th>TMT Pangkat</th>
                                        <th>File</th>                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pembina</td>
                                        <td>IV/a</td>
                                        <td>12/SK/2020</td>
                                        <td data-field="ShipDate" aria-label="06 Juni 2019" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder text-primary mb-0">06 Juni 2019</div></span>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: Tab Pangkat-->
                        </div>                                                

                        <!--begin: Tab Jabatan-->
                        <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_4_4">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Riwayat Jabatan</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: Table Tab Jabatan-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>Jenjang Jabatan</th>                                   
                                        <th>Jabatan</th>                                                   
                                        <th>Status Perubahan</th>                                    
                                        <th>No. SK</th>
                                        <th>Tgl. SK</th> 
                                        <th>TMT Jabatan</th>
                                        <th>File</th>                                    
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <td>1</td>
                                        <td>Pembina</td>
                                        <td>IV/a</td>
                                        <td></td>
                                        <td>12/SK/2020</td>
                                        <td data-field="ShipDate" aria-label="06 Juni 2019" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder text-primary mb-0">06 Juni 2019</div></span>
                                        </td>
                                        <td></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: table Tab Jabatan-->
                        </div>  
                        <!--end: Tab Jabatan-->

                        <!--begin: Tab Angka Kredit-->                        
                        <div class="tab-pane fade" id="kt_tab_pane_5_4" role="tabpanel" aria-labelledby="kt_tab_pane_5_4">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted">Riwayat Angka Kredit</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: table Angka Kredit-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>No. PAK</th>                                   
                                        <th>Tgl. PAK</th>                                                   
                                        <th>Nilai Angka Kredit</th>                                    
                                        <th>Masa Penilaian</th>
                                        <th>File PAK</th>                                 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>100-PAK</td>
                                        <td>08-09-2019</td>
                                        <td>120.010</td>
                                        <td>01/01/2020 s.d 01/01/2020</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" style="vertical-align: center;" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: table Angka Kredit-->
                        </div>
                        <!--end: Tab Angka Kredit-->

                        <!--begin: Tab Sertifikat JFA-->                        
                        <div class="tab-pane fade" id="kt_tab_pane_4_1" role="tabpanel" aria-labelledby="kt_tab_pane_4_1">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted">Riwayat Diklat
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                                </g>
                                            </svg>
                                        Sertifikat JFA</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: table Sertifikat JFA-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>No. PAK</th>                                   
                                        <th>Tgl. PAK</th>                                                   
                                        <th>Nilai Angka Kredit</th>                                    
                                        <th>Masa Penilaian</th>
                                        <th>File PAK</th>                                 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>100-PAK</td>
                                        <td>08-09-2019</td>
                                        <td>120.010</td>
                                        <td>01/01/2020 s.d 01/01/2020</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" style="vertical-align: center;" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: table Sertifikat JFA-->
                        </div>
                        <!--end: Tab Sertifikat JFA-->

                        <!--begin: Tab Teknis Substantif-->                        
                        <div class="tab-pane fade" id="kt_tab_pane_4_2" role="tabpanel" aria-labelledby="kt_tab_pane_4_2">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted">Riwayat Diklat
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                                </g>
                                            </svg>
                                        Teknis Substantif</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: table Teknis Substantif-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>No. PAK</th>                                   
                                        <th>Tgl. PAK</th>                                                   
                                        <th>Nilai Angka Kredit</th>                                    
                                        <th>Masa Penilaian</th>
                                        <th>File PAK</th>                                 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>100-PAK</td>
                                        <td>08-09-2019</td>
                                        <td>120.010</td>
                                        <td>01/01/2020 s.d 01/01/2020</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" style="vertical-align: center;" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: table Teknis Substantif-->
                        </div>
                        <!--end: Tab Teknis Substantif-->

                        <!--begin: Tab Sertifikasi Profesi-->                        
                        <div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel" aria-labelledby="kt_tab_pane_4_3">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted">Riwayat Diklat
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                                </g>
                                            </svg>
                                        Sertifikasi Profesi</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->                                
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header--> 

                            <!--begin: table Sertifikasi Profesi-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>No. PAK</th>                                   
                                        <th>Tgl. PAK</th>                                                   
                                        <th>Nilai Angka Kredit</th>                                    
                                        <th>Masa Penilaian</th>
                                        <th>File PAK</th>                                 
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>100-PAK</td>
                                        <td>08-09-2019</td>
                                        <td>120.010</td>
                                        <td>01/01/2020 s.d 01/01/2020</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-hover-secondary" href="#" data-toggle="modal" data-target="#">
                                                <i class="fa fa-paperclip"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" style="vertical-align: center;" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>                                        
                                        </td>
                                </tbody>
                            </table>
                            <!--end: table Sertifikasi Profesi-->
                        </div>
                        <!--end: Tab Sertifikasi Profesi-->                                                                                                                        

                    </div>
                </div>
            </div>
            <!--end::tab profil-->

        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<?php 
    include('construct/footer.php');
?>                    