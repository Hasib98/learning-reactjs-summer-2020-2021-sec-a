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
                                <thead>
										
								@foreach ($list as $contentlist)
								<tbody>		
									<tr>
										<td>Content Id</td>
										<td>{{$contentlist['id']}}</td>
									</tr>
									<tr>
										<td>Content Title</td>
										<td>{{$contentlist['title']}}</td>
									</tr>
									<tr>
										<td>Content Image</td>
										<td class="w-25">
											<a href="{{asset('assets/users/'.$contentlist['image'])}}" ><img src="{{asset('assets/users/'.$contentlist['image'])}}"></a></td>
									</tr>	
									<tr>
										<td>Content PDF</td>
										<td>@if($contentlist['pdf']== null)
												No PDF
											@else
												@if ($contentlist['cstatus']== 1)
												Buy First
												@else 
												<a href="{{ asset('assets/users/'.$contentlist['pdf'])}}" target="_blank"><button type="button" class="btn btn-primary">Download</button></a>
												@endif
											@endif	
										</span></td>
									</tr>
									<tr>
										<td>Content Video</td>
										<td>@if($contentlist['video']== null)
												No VIDEO
											@else
												@if ($contentlist['cstatus']== 1)
												Buy First
												@else 
												<a href="{{ asset('assets/users/'.$contentlist['video'])}}" target="_blank"><button type="button" class="btn btn-primary">Download</button></a>
												@endif
											@endif
										</span></td>
									</tr>
										<td>Content Description</td>
										<td>{{$contentlist['cdescription']}}</td>
									</tr>
									<tr>
										<td></td>
										<td>@if($contentlist['cstatus']== 1)
												<a href="{{route('user.dashboardinvoice',$contentlist['id'])}}"><button type="button" class="btn btn-primary">BUY</button></a>
											@else
												Free Content
											@endif
												</td>
									</tr>
									@endforeach
									
                                </tbody>
								</thead>
                            </table>
                        </div>
	@endsection


</html>
