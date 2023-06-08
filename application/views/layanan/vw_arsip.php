<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('layanan/_partials/head.php'); ?>
</head>
<body class="nav-md">
<?php $this->load->view('layanan/_partials/top.php'); ?>
<?php $this->load->view('layanan/_partials/menu.php'); ?>
         
<!-- page content -->
<div class="right_col" role="main">

<br />
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Arsip Dokumen</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <div id="datatable-checkbox_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="datatable-checkbox_length">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="datatable-checkbox_filter" class="dataTables_filter">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-checkbox"
                                            class="table table-striped table-bordered bulk_action dataTable no-footer"
                                            style="width: 100%;" role="grid"
                                            aria-describedby="datatable-checkbox_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="datatable-checkbox" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label=": activate to sort column descending"
                                                        style="width: 4px;">No
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-checkbox" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 500px;">Nama Dokumen</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="datatable-checkbox" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Name: activate to sort column ascending"
                                                        style="width: 500px;">Download Dokumen</th>

                                                </tr>
                                            </thead>
                                            
                                            <?php $no=0; foreach($datavalids as $datavalid): $no++;?>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <?php echo $no; ?>
                                                    </td>
                                                    <td><?= $datavalid['suratvalid'] ?></td>
                                                    <td><a href="<?php echo base_url('ttd/sudah_ttd/') . $datavalid['suratvalid'];?>">Download</a></td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach ?>
                                           
                                        </table>
                                    </div>
                                </div>
                                <br><br><br>
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






</div>
</div>
</div>
<!-- /page content -->

<?php $this->load->view('layanan/_partials/footer.php'); ?>