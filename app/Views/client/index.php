<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card card-primary card-outline card-tabs">
    <div class="card-header p-0 pt-1 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-principal-tab" data-toggle="pill" href="#tabs-principal" role="tab" aria-controls="tabs-principal" aria-selected="true">Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="costom-tabs-oblege-tab" data-toggle="pill" href="#tabs-oblege" role="tab" aria-controls="tabs-oblege" aria-selected="false">Oblege</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-three-tabContent">
            <div class="tab-pane fade show active" id="tabs-principal" role="tabpanel" aria-labelledby="custom-tabs-principal-tab">
                <div class="card-header border-white">
                    <h3 class="card-title">Data Jaminan Terbuat <strong id="count_data">10</strong></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Principal</th>
                                <th>Alamat</th>
                                <th><i class="fas fa-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PT. FIBER TECHNOLOGIES INDONESIA</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PT. FIBER TECHNOLOGIES INDONESIA</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PT. FIBER TECHNOLOGIES INDONESIA</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>PT. FIBER TECHNOLOGIES INDONESIA</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-md d-flex">
                                <p class="my-auto mx-md-2 mx-auto">
                                    <span class="text-muted">Halaman </span><span id="halaman" class="text-bold">1</span><span class="text-muted"> dari </span><span id="halaman_max" class="text-bold">1</span>
                                </p>
                            </div>
                            <div class="col-md text-center">
                                <div class="btn-group mt-md-0 mt-3">
                                    <button type="button" class="btn btn-secondary data-nav" data-page="first" disabled>
                                        <i class="fas fa-angle-double-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary data-nav" data-page="prev" disabled>
                                        <i class="fas fa-angle-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary data-nav" data-page="next" disabled>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary data-nav" data-page="last" disabled>
                                        <i class="fas fa-angle-double-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md text-center text-md-right">
                                <button class="btn btn-default" disabled>Lihat Semua Kolom<i class="fas fa-external-link-alt ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabs-oblege" role="tabpanel" aria-labelledby="costom-tabs-oblege-tab">
                <div class="card-header border-white">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Principal</th>
                                <th>Alamat</th>
                                <th><i class="fas fa-cog"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PT. TELKOM AKSES, C.Q. UNIT FINANCE</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PT. TELKOM AKSES, C.Q. UNIT FINANCE</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PT. TELKOM AKSES, C.Q. UNIT FINANCE</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>PT. TELKOM AKSES, C.Q. UNIT FINANCE</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PT. TELKOM AKSES, C.Q. UNIT FINANCE</td>
                                <td><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molmet congue quam finibus.</b></td>
                                <td>
                                    <a href="guarantee/detail" class="btn btn-info btn-sm text-bold"><i class="fas fa-info-circle mr-2"></i>Detail</a>
                                    <a href="" target="_blank" class="btn btn-default ml-1 btn-sm text-bold"><i class="fas fa-external-link-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="card-body py-3">
                        <div class="row">
                            <div class="col-md d-flex">
                                <p class="my-auto mx-md-2 mx-auto">
                                    <span class="text-muted">Halaman </span><span id="halaman" class="text-bold">1</span><span class="text-muted"> dari </span><span id="halaman_max" class="text-bold">1</span>
                                </p>
                            </div>
                            <div class="col-md text-center">
                                <div class="btn-group mt-md-0 mt-3">
                                    <button type="button" class="btn btn-secondary data-nav" data-page="first" disabled>
                                        <i class="fas fa-angle-double-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary data-nav" data-page="prev" disabled>
                                        <i class="fas fa-angle-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary data-nav" data-page="next" disabled>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary data-nav" data-page="last" disabled>
                                        <i class="fas fa-angle-double-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md text-center text-md-right">
                                <button class="btn btn-default" disabled>Lihat Semua Kolom<i class="fas fa-external-link-alt ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>