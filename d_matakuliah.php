<?php
include('construct/header.php');
include('construct/sidebar.php');
include('construct/subheader.php');
?>

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="flex-row-fluid ml-lg-8">
                <div class="card card-custom">
                    <div class="card card-custom example example-compact">
                        <!--begin header form-->
                        <div class="card-header">
                            <h3 class="card-title">
                                DATA MATAKULIAH
                            </h3>
                            <div class="card-toolbar">
                                <div class="d-flex align-items-center flex-wrap">
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-edit"></i> Ubah
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- and header form-->
                        <div class="form">
                            <div class="card-body">
                                <!--begin Kodematakuliah-->
                                <div class="row">
                                    <label class="col-3 col-form-label">Kode Matakuliah :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <!--and kode matakuliah-->
                                <!--begin  nama matakuliah-->
                                <div class="row">
                                    <label class="col-3 col-form-label"> Matakuliah :</label>
                                    <div class="col-9 input-group-sm">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                                <!--and nama matakuliah-->
                                <!-- begin Program Studi-->
                                <div class="row">
                                    <label class="col-3 col-form-label"> Program Studi :</label>
                                    <div class="col-4 input-group-sm">
                                        <select class="form-control">
                                            <option>D3-Manajemen Informatika</option>
                                            <option>S1-Sistem Informasi</option>
                                            <option>S1-Teknik Informatika</option>
                                            <option>S1-Teknik Industri</option>
                                            <option>S1-Ilmu Bahasa Inggris</option>
                                            <option>S1-Ilmu Bahasa Arab</option>
                                            <option>S1-Ilmu Bahasa Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <!--and Program Studi-->
                                <!-- Begin Semester-->
                                <div class="row">
                                    <label class="col-3 col-form-label"> Semester :</label>
                                    <div class="col-1 input-group-sm">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end Semester-->
                                <!--BEGIN sks-->
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
                                <!--END SKS-->
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <button type="" class="btn btn-primary mr-2">Simpan</button>
                                            <button type="" class="btn btn-secondary">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <div class="card card-custom example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">
                            Daftar Matakuliah
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
                                            <span class="nav-text">Mata Kuliah</span>
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
                                                <h5 class="text-muted text-hover-primary">Matakuliah</h5>
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
                                                <th>Kode Matakuliah</th>
                                                <th>Mata Kuliahn</th>
                                                <th>SKS</th>
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr align="center">
                                                <td>1</td>
                                                <td>KD000456</td>
                                                <td>Pengantar Studi Islam</td>
                                                <td>3</td>
                                                <td> 1 </td>
                                                <td>Aktif</td>
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
                            </div>
                        </div>
                    </div>
                    <!--end::tab profil-->
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
</div>