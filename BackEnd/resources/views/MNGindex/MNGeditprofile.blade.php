<!doctype html>
@extends('MNG_layout.master')


<html class="no-js" lang="en">

<head>
        <title>Manager Dashboard</title>
</head>

<body>

{{-- @section('search')
@stop --}}
@section('indexcontent')
                <!-- order list area start -->
                <div class="container">
                    <div class="row">
						<div class="row">
							<div class="header-title">Profile Update </div>
							<table class="table table-image">
							<form method="post" enctype="multipart/form-data">
							@csrf
                                <thead>
										
								{{-- @foreach ($editprofile as $edit) --}}
								<tbody>		
									<tr>
										<td>Profile Id</td>
										<td><input type="text" name="userid" value="{{$edit['userid']}}" readonly></td>
									</tr>
									<tr>
										<td>Profile Name</td>
										<td><input type="text" name="username" value="{{$edit['username']}}"></td>
									</tr>
									<tr>
										<td>Name</td>
										<td><input type="text" name="name" value="{{$edit['name']}}"></td>
									</tr>
									<tr>
										<td>Password</td>
										<td><input type="text" name="password" value="{{$edit['password']}}"></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><input type="text" name="email" value="{{$edit['email']}}"></td>
									</tr>	
									<tr>
										<td>Phone NO:</td>
										<td><input type="text" name="phoneno" value="{{$edit['phoneno']}}"></td>
									</tr>	

									
									<tr>
										<td>Change profile picture</td>
										<td>
										@if($edit['profilepic']== null)
												No IMAGE
										@else
												<a href="{{asset('assets/users/'.$edit['profilepic'])}}" target="blank"><img src ="{{asset('assets/users/'.$edit['profilepic'])}}" alt="profilepic" width="100" height="100"></a></td>			
										@endif
										</span></td>
										<td>
										{{-- <label for="exampleInputEmail1">Example Image</label> --}}
											<div class="input-group-append">
                                                <input type="file" multiple accept="users/*" name="profilepic">
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
									
									{{-- @endforeach --}}
									
                                </tbody>
								</thead>
								
							</form>	
                            </table>
                        </div>
	@endsection

	
	
    
   

    
</body>

</html>
