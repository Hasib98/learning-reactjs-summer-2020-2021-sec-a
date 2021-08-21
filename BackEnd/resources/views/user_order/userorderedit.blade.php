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
                <!-- order list area start -->
                <div class="container">
                    <div class="row">
						<div class="row">
							<div class="header-title">Content Details</div>
							<table class="table table-image">
							<form method="post" enctype="multipart/form-data">
							@csrf
                                <thead>
										
								@foreach ($editlist as $edit)
								<tbody>		
									<tr>
										<td>Order Id</td>
										<td><input type="text" name="orderid" value="{{$edit['orderid']}}" readonly></td>
									</tr>
									<tr>
										<td>Order Name</td>
										<td><input type="text" name="ordername" value="{{$edit['ordername']}}"></td>
									</tr>
									<tr>
										<td>Order Description</td>
										<td><input type="text" name="orderdescription" value="{{$edit['orderdescription']}}"></td>
									</tr>	
									<tr>
										<td>Order Template</td>
										<td>@if($edit['template']== null)
												No template
											@else
												<a href="{{ asset('assets/users/'.$edit['template'])}}" target="_blank"><button type="button" class="btn btn-primary">Download</button></a>
											@endif	
										</span></td>
										<td>
										<label for="exampleInputEmail1">Example Template</label>
											<div class="input-group-append">
                                                <input type="file" name="temp">
                                            </div>
											</td>
									</tr>
									<tr>
										<td>Order Image</td>
										<td>
										@if($edit['picture']== null)
												No IMAGE
										@else
												<a href="{{asset('assets/users/'.$edit['picture'])}}" target="blank"><img src ="{{asset('assets/users/'.$edit['picture'])}}" alt="Sheep" width="100" height="100"></a></td>			
										@endif
										</span></td>
										<td>
										<label for="exampleInputEmail1">Example Image</label>
											<div class="input-group-append">
                                                <input type="file" multiple accept="image/*" name="pic">
                                            </div>
											</td>
									</tr>	
										<tr>
											<td>
												<div>
													<button class="btn btn-outline-secondary" type="submit">Submit</button>
												</div>
											</td>
										</tr>
									
									@endforeach
									
                                </tbody>
								</thead>
								
							</form>	
                            </table>
                        </div>
	@endsection


</html>
