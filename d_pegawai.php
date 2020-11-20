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
            <!--begin::tab Matakuliah-->
            <div class="card card-custom">
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                    <span class="nav-icon"><img src="https://img.icons8.com/emoji/20/000000/blue-book.png"/></span>
                                    <span class="nav-text">D3-Manajemen Informatika</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                    <span class="nav-icon"><img src="https://img.icons8.com/emoji/20/000000/orange-book.png"/></span>
                                    <span class="nav-text">S1-Sistem Informasi</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-icon"><img src="https://img.icons8.com/emoji/20/000000/green-book.png"/></span>
                                    <span class="nav-text">Prodi Sastra</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_1">Ilmu Bahasa Indonesia</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_2">Ilmu Bahasa Arab</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_4_3">Ilmu Bahasa Inggris</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="nav-icon"><img src="https://img.icons8.com/emoji/20/000000/closed-book.png"/></span>
                                    <span class="nav-text">Teknik</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_1">Teknik Informatika</a>
                                    <a class="dropdown-item" data-toggle="tab" href="#kt_tab_pane_5_2">Teknik Industri</a>
                                </div>
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
                                        <h5 class="text-muted text-hover-primary">Manajemen Informatika</h5>
                                    </span>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::add-->
                                    <a href="f_pegawai.php" class="btn btn-outline-primary btn-sm">
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
                            <!--end: Tab Pendidikan-->

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
                        <!--begin: Tab Ilmu Bahasa Indonesia-->
                        <div class="tab-pane fade" id="kt_tab_pane_4_1" role="tabpanel" aria-labelledby="kt_tab_pane_4_2">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Ilmu Bahasa Indonesia</h5>
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

                            <!--begin: table Prodi Sastra-->
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
                            <!--end: table Prodi Sastra-->
                        </div>
                        <!--end: Tab Ilmu Bahas Indonesia -->
                        <!--begin: Tab Ilmu Bahasa Arab-->
                        <div class="tab-pane fade" id="kt_tab_pane_4_2" role="tabpanel" aria-labelledby="kt_tab_pane_4_2">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Ilmu Bahasa Arab</h5>
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

                            <!--begin: table Prodi Sastra-->
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
                            <!--end: table Prodi Sastra-->
                        </div>
                        <!--end: Tab Ilmu Bahas Arab -->
                        <!--begin: Tab Ilmu Bahasa Inggris-->
                        <div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel" aria-labelledby="kt_tab_pane_4_3">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Ilmu Bahasa Inggris</h5>
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

                            <!--begin: table Prodi Sastra-->
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
                            <!--end: table Prodi Sastra-->
                        </div>
                        <!--end: Tab Ilmu Bahas Inggris -->
                        <!--begin: Tab Teknik Informatika-->
                        <div class="tab-pane fade" id="kt_tab_pane_5_1" role="tabpanel" aria-labelledby="kt_tab_pane_5_1">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Teknik Informatika</h5>
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

                            <!--begin: table Prodi Sastra-->
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
                            <!--end: table Prodi Sastra-->
                        </div>
                        <!--end Tab Teknik Informatika-->
                        <!--begin: Tab Teknik Industri-->
                        <div class="tab-pane fade" id="kt_tab_pane_5_2" role="tabpanel" aria-labelledby="kt_tab_pane_5_2">

                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap mb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap">
                                    <!--begin::Page Title-->
                                    <span class="font-size-sm">
                                        <h5 class="text-muted text-hover-primary">Teknik Industri</h5>
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

                            <!--begin: table Prodi Sastra-->
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
                            <!--end: table Prodi Sastra-->
                        </div>
                        <!--end Tab Teknik Industri-->
                    </div>
                </div>
            </div>
            <!--end::tab Matakuliah-->
        </div>

    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->