<!doctype html>
@extends('../user_layout/usermaster')
@extends('../user_layout/userheader')




<html class="no-js" lang="en">

<head>
        <title>srtdash - Ecommerce Dashboard</title>
</head>


@section('indexcontent')
                <!-- order list area start -->
				<div class="i-am-centered">
                    <div class="row">
						<div class="col-sm-9">
							<h1 class="text-danger">Delete Order</h1>
								<div class="row"> 
									<div class="col-sm-9">
										<p>Do you want to delete Following order?</p>
											<div class="row">
												<div class="col-sm-9">
													@foreach ($dellist as $del)
														<table>
														
															<tr>Order Id = <p class="text-danger">{{$del['orderid']}}</p> and </tr>
															<tr>Order Name = <p class="text-danger">{{$del['ordername']}}</p> </tr>
														</table>
													@endforeach
													<div class="row">
														<div class="col">
															<a href="{{route('user.orderdestroy',$del['orderid'])}}"><button type="button" class="btn btn-success">Yes</button></a>	
															<a href="{{route('user.orderdetails')}}"><button type="button" class="btn btn-danger">No</button></a>
														</div>
													</div>		
												</div>
											</div>
									</div>		
								</div>
						</div>
					</div>				
				</div>										
											
	@endsection


</html>
