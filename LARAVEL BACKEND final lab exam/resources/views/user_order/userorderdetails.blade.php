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
							<div class="header-title">Content List</div>
							<table class="table table-image">
                                <thead>
									<tr>
										<td>Order Name</td>
										<td>Order Description</td>
										<td>Content Template</td>
										<td>Content Image</td>
										<td></td>
										<td></td>
									</tr>
								</thead>	
								@foreach ($orderlist as $orderslist)
								<tbody>					
									<tr>
										<td>{{$orderslist['ordername']}}</td>
										<td>@if ($orderslist['orderdescription']== null)
											no description
											@else 
											{{$orderslist['orderdescription']}}
											@endif
										</span></td>
										<td>@if ($orderslist['template']== null)
											no description
											@else 
											{{$orderslist['template']}}
											@endif
										</span></td>
										<td>@if ($orderslist['picture']== null)
											no picture
											@else
											<img  src="{{asset('assets/users/'.$orderslist['picture'])}}" alt="Sheep" width="100" height="100"></td>
											@endif
										</span></td>
										<td><a href="{{route('user.orderedit',$orderslist['orderid'])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
										<td><a href="{{route('user.orderdelete',$orderslist['orderid'])}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
									</tr>
									@endforeach
									
                                </tbody>
                            </table>
                        </div>
					</div>
					</div>
						<div class="pagination_area pull-center mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                  
					
                
				
                <!-- order list area end -->

	@endsection


</html>
