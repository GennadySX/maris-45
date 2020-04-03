@extends('layouts.admin')
@section('content')
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Product list card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Учебники</h5>
                        <a  class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger text-light" href="/home/teacherDocs/create" data-modal="modal-13" style="text-transform: none"> <i class=" icofont icofont-plus m-r-5"></i>
                            Создать новый
                        </a>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <div class="table-content">
                                <div class="project-table">
                                    <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                        <tr>
                                            <th>Учебники</th>
                                            <th>Дисциплина</th>
                                            <th>Степень</th>
                                            <th>Группа</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l1.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6>Frock Designs</h6>
                                                <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-danger">Out 7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l6.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> Style Tops </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l2.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> Kurta Women </h6>
                                                <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-warning">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l3.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l4.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> Black Frock For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l5.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-danger">Out 7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l7.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> Digital Print Top </h6>
                                                <span>sum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l8.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> One Piece Dress</h6>
                                                <span class="text-muted f-12">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-warning">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l9.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> kurat style Dress </h6>
                                                <span>sum dolor sit consec te imperdiet iaculis ipsum..</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-danger">Out 7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l8.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l7.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l6.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l5.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l4.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l2.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pro-list-img">
                                                <img src="..\files\assets\images\product-list\pro-l1.png" class="img-fluid" alt="tbl">
                                            </td>
                                            <td class="pro-name">
                                                <h6> T Shirts For Women </h6>
                                                <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                                            </td>
                                            <td>Магистратура</td>
                                            <td>
                                                <label class="text-success">7261-11</label>
                                            </td>
                                            <td class="action-icon">
                                                <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product list card end -->
            </div>
        </div>
        <!-- Add Contact Start Model start-->
        <div class="md-modal md-effect-13 addcontact" id="modal-13">
            <div class="md-content">
                <h3 class="f-26">Add Product</h3>
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control pname" placeholder="Prodcut Name">
                        <span class="input-group-addon btn btn-primary">Chooese File</span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                        <input type="text" class="form-control pname" placeholder="Prodcut Name">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                        <input type="text" class="form-control pamount" placeholder="Amount">
                    </div>
                    <div class="input-group">
                        <select id="hello-single" class="form-control stock">
                            <option value="">---- Select Stock ----</option>
                            <option value="married">In Stock</option>
                            <option value="unmarried">Out of Stock</option>
                            <option value="unmarried">Law Stock</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">Save</button>
                        <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="md-overlay"></div>
        <!-- Add Contact Ends Model end-->
    </div>
    <!-- Page body end -->

    @endsection
