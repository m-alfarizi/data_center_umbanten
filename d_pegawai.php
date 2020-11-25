<?php 
    include('construct/header.php');
    include('construct/sidebar.php');
    include('construct/subheader.php');
?>

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

        <div class="card card-custom example example-compact">
            <div class="card-header">
                <h3 class="card-title">
                    Data Pegawai
                </h3>
            </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-md col-3">
                                      
                                    </span>
                                    <span class=" btn-group text-sm-right">
                                    </span> 
                                    
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <!--begin::add-->
                                            <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Pencarian</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                            </div>
 
                                        </div>
                                            <a href="f_pegawai.php" class="btn btn-outline-primary btn-sm">
                                            <i class="fa fa-plus"></i> Tambah data</a>
                                    <!--end::add-->
                                    </div>
                                
                                </div>
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->
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
                                        <th>N I P</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat </th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor Kontak</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0098792</td>
                                        <td>Yudi Supriyadi</td>
                                        <td>Lebak,</td>
                                        <td>06 Maret 1999</td>
                                        <td>087771022907</td>
                                        <td>BAAK</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>0098793</td>
                                        <td>Muhamamd Alfarizi </td>
                                        <td>Lebak,</td>
                                        <td>07 Agustus 1999</td>
                                        <td>089311342232</td>
                                        <td>BAAK</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>0098794</td>
                                        <td>Amirudin</td>
                                        <td>Lebak,</td>
                                        <td>06 Maret 1997</td>
                                        <td>087778212334</td>
                                        <td>BAAK</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>0088792</td>
                                        <td>Rustoni</td>
                                        <td>Lebak,</td>
                                        <td>06 Maret 1979</td>
                                        <td>08779271829</td>
                                        <td>BAUK</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>0018792</td>
                                        <td>Mamun Johari,M.Kom</td>
                                        <td>Lebak,</td>
                                        <td>06 Maret 1960</td>
                                        <td>087771022907</td>
                                        <td>BAAK</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </div>
                                    </tr>
                                    
                                </div>    
                                </tbody>
                                <hr>
                                
                            </table>
                            <!--end: Tab Pendidikan-->
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 align-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                        </nav>
``                                </div>
                            </div>        
                            
                        </div>

                        

                        <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Sistem Informasi</h5>
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

                            <!--begin: Tab Matakuliah Sistem Informasi-->
                            <table class="table table-bordered table-checkable font-size-sm" id="">
                                <thead>
                                    <tr class="bg-gray-100 text-center">
                                        <th>#</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Matakuliah</th>
                                        <th>Semester</th>
                                        <th>Sks</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>KD55477</td>
                                        <td>Pengantar Studi Islam</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td>Aktif</td>
                                        <td>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-primary btn-hover-primary" href="#">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-bg-light btn-icon-danger btn-hover-danger" href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--end: Tab Matakuliah Sistem Informasi-->
                        </div>
                        
        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->