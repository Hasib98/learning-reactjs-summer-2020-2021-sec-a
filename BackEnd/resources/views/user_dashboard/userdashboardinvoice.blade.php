<!doctype html>
@extends('user_layout.print')
@extends('../user_layout/usermaster')
@extends('../user_layout/usersidebar')
@extends('../user_layout/userheader')
@extends('../user_layout/userfooter')
@section('indexcontent')

<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-area">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="iv-left col-6">
                                                <span>INVOICE</span>
                                            </div>
                                            <div class="iv-right col-6 text-md-right">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="invoice-address">
                                                <h3>invoiced to</h3>
                                                <h5>{{$name}}</h5>
                                              
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <ul class="invoice-date">
                                        
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="invoice-table table-responsive mt-5">
                                        <table class="table table-bordered table-hover text-right">
                                            <thead>
                                                <tr class="text-capitalize">
                                                    <th class="text-center" style="width: 5%;">id</th>
                                                    <th class="text-left" style="width: 45%; min-width: 130px;">Title</th>
                                                   
                                                    <th style="min-width: 100px">Cost</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
											@foreach ($invoicelist as $invoice)
                                                <tr>
                                                    <td class="text-center">{{$invoice['id']}}</td>
                                                    <td class="text-left">{{$invoice['title']}}</td>
                                                    <td>{{$invoice['cprice']}}</td>
                                                   
                                                   
                                                </tr>
											
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2">total balance :</td>
                                                    <td>$140</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-buttons text-right">
                                    <a href="{{route('user.dashboardprint',$invoice['id'])}}" class="invoice-btn">print invoice</a>
									<script type="text/javascript">
									$(document).ready(function(){
									$('.btnprn').printPage();
									});
									</script>
                                    <a href="#" class="invoice-btn">send invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@endforeach
		@endsection