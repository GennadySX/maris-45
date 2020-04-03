@extends('layouts.admin')
@section('content')
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Product edit card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Product Edit</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product-edit">
                                    <ul class="nav nav-tabs nav-justified md-tabs " role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-edit"></i>
                                                </div>
                                                Product Edit</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-document-search"></i>
                                                </div>
                                                SEO Metadata</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages7" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-ui-image"></i>
                                                </div>
                                                Pictures</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages8" role="tab">
                                                <div class="f-20">
                                                    <i class="icofont icofont-comment"></i>
                                                </div>
                                                Reviews</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home7" role="tabpanel">
                                            <form class="md-float-material card-block">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-ui-user"></i></span>
                                                            <input type="text" class="form-control" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-man-in-glasses"></i></span>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-ui-note"></i></span>
                                                            <input type="text" class="form-control" placeholder="Tax">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-cur-dollar"></i></span>
                                                            <input type="text" class="form-control" placeholder="Price">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-numbered"></i></span>
                                                            <input type="text" class="form-control" placeholder="Quantity">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-align-left"></i></span>
                                                            <input type="text" class="form-control" placeholder="Categories">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                            <input type="text" class="form-control" placeholder="Product Description">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="select" class="form-control form-control-primary">
                                                            <option value="opt1">Select One Value Only</option>
                                                            <option value="opt2">2</option>
                                                            <option value="opt3">3</option>
                                                            <option value="opt4">4</option>
                                                            <option value="opt5">5</option>
                                                            <option value="opt6">6</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="text-center m-t-20">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                            </button>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="profile7" role="tabpanel">
                                            <form class="md-float-material card-block">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                            <input type="text" class="form-control" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-underline"></i></span>
                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-ui-keyboard"></i></span>
                                                            <input type="text" class="form-control" placeholder="Keyword">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icofont icofont-copy-alt"></i></span>
                                                            <input type="text" class="form-control" placeholder="Description">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="text-center m-t-20">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light">Discard</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="messages7" role="tabpanel">
                                            <div class="md-float-material card-block">
                                                <div class="row p-t-10 p-b-10">
                                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                                        <a href="">
                                                            <img src="..\files\assets\images\product-edit\product-edit1.jpg" class="img-fluid width-100 m-b-20" alt="img-edit">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="col-xs-6 edit-left">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6 edit-right text-right">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                        <i class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row p-t-10 p-b-10">
                                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                                        <a href="">
                                                            <img src="..\files\assets\images\product-edit\product-edit2.jpg" class="img-fluid width-100 m-b-20" alt="img-edit">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="col-xs-6 edit-left">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6 edit-right text-right">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                        <i class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row p-t-10">
                                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                                        <a href="">
                                                            <img src="..\files\assets\images\product-edit\product-edit3.jpg" class="img-fluid width-100 m-b-20" alt="img-edit">
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-9 col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-all-caps"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Label Name">
                                                                </div>
                                                                <div class="col-xs-6 edit-left">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6 edit-right text-right">
                                                                    <button type="button" class="btn btn-danger waves-effect waves-light">Remove
                                                                        <i class="icofont icofont-close-circled f-16 m-l-5"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages8" role="tabpanel">
                                            <div class="container">
                                                <div class="card-block">
                                                    <div class="text-muted f-w-400">
                                                        No reviews yet.
                                                    </div>
                                                    <div class="m-t-10">
                                                        <div class="txt-primary f-18 f-w-600">Your Rating</div>
                                                        <div class="stars stars-example-css detail-stars">
                                                            <select id="product-view" class="rating-star" name="rating" autocomplete="off">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icofont icofont-underline"></i></span>
                                                        <input type="text" class="form-control" placeholder="User Name">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icofont icofont-man-in-glasses"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icofont icofont-email"></i></span>
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                                                        </button>
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
                <!-- Product edit card end -->
            </div>
        </div>
    </div>
    @endsection
