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
										<td>Content Title</td>
										<td>Content Image</td>
										<td>Content Pdf</td>
										<td>Content Video</td>
										<td>Content Description</td>
									</tr>
								</thead>	
								@foreach ($list as $contentlist)
								<tbody>					
									<tr>
										<td><a href="{{ route('user.dashboarddetails',$contentlist['id'])}}">{{$contentlist['title']}}</a></td>
										<td>
											<img src="{{asset('assets/users/'.$contentlist['image'])}}" width="100" height="100"></td>
										<td>@if ($contentlist['pdf']== null)
											no pdf
											@else 
											PDF available
											@endif
										</span></td>
										<td>@if ($contentlist['video']== null)
											No video
											@else 
											VIDEO available
											@endif
										</span></td>
										<td>{{$contentlist['cdescription']}}</td>
									</tr>
									@endforeach
									
                                </tbody>
                            </table>
                        </div>
                    </div>
					  <div class="pagination_area pull-left mt-5">
                            <ul>
                                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                </div>
                <!-- order list area end -->
                <div class="row">
                    <!-- product sold area start -->
                    <div class="col-xl-8 col-lg-7 col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-4">
                                    <h4 class="header-title mb-0">Product Slod</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected="">Today</option>
                                        <option value="0">Last 7 Days</option>
                                    </select>
                                </div>
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tbody>
                                            <tr class="heading-td">
                                                <td>Product Name</td>
                                                <td>Revenue</td>
                                                <td>Sold</td>
                                                <td>Discount</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$56</td>
                                                <td>$160</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$26</td>
                                                <td>$500</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$26</td>
                                                <td>$500</td>
                                                <td>$20</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$56</td>
                                                <td>$250</td>
                                                <td>$10</td>
                                            </tr>
                                            <tr>
                                                <td>Ladis Sunglass</td>
                                                <td>$56</td>
                                                <td>$125</td>
                                                <td>$50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination_area pull-right mt-5">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product sold area end -->
                    <!-- team member area start -->
                    <div class="col-xl-4 col-lg-5 col-md-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex flex-wrap justify-content-between mb-4 align-items-center">
                                    <h4 class="header-title mb-0">Team Member</h4>
                                    <form class="team-search">
                                        <input type="text" name="search" placeholder="Search Here">
                                    </form>
                                </div>
                                <div class="member-box">
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author1.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Amir Hamza</p><span>Manager</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author2.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Anamul Kabir</p><span>UI design</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author3.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Animesh Mondol</p><span>UI design</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author4.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Faruk Hasan</p><span>UI design</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="s-member">
                                        <div class="media align-items-center">
                                            <img src="assets/images/team/team-author5.jpg" class="d-block ui-w-30 rounded-circle" alt="">
                                            <div class="media-body ml-5">
                                                <p>Sagor Chandra</p><span>Motion Designer</span>
                                            </div>
                                            <div class="tm-social">
                                                <a href="#"><i class="fa fa-phone"></i></a>
                                                <a href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- team member area end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
	@endsection


</html>
