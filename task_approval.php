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
                            Persetujuan Kegiatan
                            <a href="" class="text-muted"><li class="fa fa-angle-double-right ml-2"></li> Daftar List Kegiatan</a>
                        </h3>                                                        
                    </div>                       
                    
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-body">

                        <!--begin::Search Form-->
                        <div class="mb-7">                            
                            <div class="row">
                                <div class="btn-group mr-2" role="group" aria-label="...">
                                    <a href="#" type="button" class="btn btn-outline-secondary"><i class="la la-step-backward"></i> Kembali</a>
                                    <a href="#" type="button" class="btn btn-outline-info"><i class="la la-refresh"></i> Segarkan</a>
                                </div>                                
                                <div class="col-lg-6 col-xl-4">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                <span><i class="flaticon2-search-1 text-muted"></i></span>
                                            </div>
                                        </div>                                               
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 mt-5 mt-lg-0">
                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                                        Search
                                    </a>
                                </div>                                
                            </div>
                        </div>
                        <!--end::Search Form-->

                        <!--begin: Datatable-->
                        <table class="table table-bordered table-checkable" id="">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th>Butir Kegiatan</th>
                                    <th>No. Penugasan (ST/ND/Memo)</th>
                                    <th>AK</th>
                                    <th>Auditor</th>
                                    <th>Tgl. Pengajuan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>ST-833/VI/2020</td>
                                    <td>120.020</td>
                                    <td></td>
                                    <td data-field="ShipDate" aria-label="06 Juni 2019" class="datatable-cell"><span style="width: 130px;"><div class="font-weight-bolder text-primary mb-0">06 Juni 2019</div><div class="text-muted">11:02:23</div></span>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-primary label-inline font-weight-boldest mr-2">Permintaan Baru</span>
                                    </td>
                                    <td nowrap="">
                                        <a href="atasan_butir_keg.php" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i>Detail Kegiatan</a>
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