<!doctype html>
@extends('../user_layout/usermaster')
@extends('../user_layout/userheader')
@extends('../user_layout/usersidebar')
@extends('../user_layout/usersearch')
@extends('../user_layout/userfooter')


<html class="no-js" lang="en">

<head>
        <title>srtdash - Ecommerce Dashboard</title>
</head>


@section('indexcontent')
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Place New Order</h4>
                                        <form method="post" enctype="multipart/form-data">
										@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Order Name</label>
                                                <input type="text" class="form-control" name="ordername" aria-describedby="emailHelp" placeholder="Enter Order Name">
                                                <small id="emailHelp" class="form-text text-muted"></small>
                                            </div>
											
											<div class="form-group">
                                                <label for="exampleInputEmail1">Order Description</label>
                                                <input type="text" class="form-control" name="orderdescription" aria-describedby="emailHelp" placeholder="Enter Order Name">
                                                <small id="emailHelp" class="form-text text-muted"></small>
                                            </div>
											<label for="exampleInputEmail1">Example Template</label>
											<div>
												<input type="file" name="temp">
											</div>
											<label for="exampleInputEmail1">Example Image</label>
											<div class="input-group-append">
                                                <input type="file" multiple accept="image/* "name="pic">
												<button class="btn btn-outline-secondary" type="submit">Submit</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
             
                            <!-- Input Group end -->
                            <!-- Custom file input start --
                            <!-- Custom file input end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
	@endsection


</html>
