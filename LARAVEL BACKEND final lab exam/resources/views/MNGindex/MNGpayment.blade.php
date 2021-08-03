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
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                {{-- <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            {{-- <h2>{{$pic}}</h2> --}}
                            <img class="avatar user-thumb" src="{{asset('assets/users/Hasib.jpg')}}" alt="avatar">
                            {{-- <img class="avatar user-thumb" src="" alt="avatar"> --}}
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">S.M. HASIB <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/editprofile">Edit Profile</a>
                                <a class="dropdown-item" href="{{route('user.logout')}}">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- order list area start -->
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="header-title">Content List</div>
                        <table class="table table-image" border = "1">
                            <thead>
                                <th>
                          
                                    <td>orderid</td>
                                    <td>userid</td>
                                    <td>name</td>
                             
                                    <td>title</td>
                                    <td>image</td>
                                    <td>Amount to be paid</td>
                                    
                                </th>
                            </thead>	
                            @foreach ($contentlist as $content)
                            <tbody>					
                                <tr>
                                    <td>
                                        {{$content['pid']}}
                                    </td>
                                    <td>
                                        {{$content['orderid']}}
                                    </td>
                                    <td>
                                        {{$content['userid']}}
                                    </td>
                                    <td>
                                        {{$content['name']}}
                                    </td>
                                    
                                    <td>
                                        {{$content['title']}}
                                    </td>
                                    <td>
                                        <img  src="{{asset('assets/users/'.$content['image'])}}" alt="Sheep" width="100" height="100"></td>
                                    </td>
                                    <td>
                                        {{$content['amount']}}
                                    </td>

                                

                                    {{-- <td><a href="{{route('MNGdiscount',$content['pid'])}}"><button type="button" name = "discount" class="btn btn-primary">25% Discount</button></a></td> --}}
                                    

                                    {{-- <td><a href="{{route('user.orderedit',$content['orderid'])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                                    <td><a href="{{route('user.orderdelete',$content['orderid'])}}"><button type="button" class="btn btn-danger">Delete</button></a></td> --}}
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
            <!-- page title area end -->
        
        </div>
        <!-- main content area end -->
		
        
    </div>
    <!-- page container area end -->
	@endsection

	
	
    
   

    
</body>

</html>
