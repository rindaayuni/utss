@extends('template.admin')

@section('content')
	<div class="ecommerce-widget">
		<div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Total Revenue</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">$12099</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                	<h5 class="card-header">Recent Orders</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                    <tr class="border-0">
	                                    <th class="border-0">#</th>
	                                    <th class="border-0">Image</th>
	                                    <th class="border-0">Product Name</th>
	                                   	<th class="border-0">Product Id</th>
	                                    <th class="border-0">Quantity</th>
	                                    <th class="border-0">Price</th>
	                                    <th class="border-0">Order Time</th>
	                                    <th class="border-0">Customer</th>
	                                    <th class="border-0">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="m-r-10"><img src="{{url('public/admin')}}/assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                        </td>
                                        <td>Product #1 </td>
                                        <td>id000001 </td>
                                        <td>20</td>
                                        <td>$80.00</td>
                                        <td>27-08-2018 01:22:12</td>
                                        <td>Patricia J. King </td>
                                        <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                    </tr>
                                    <tr>
                                    	<td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
       	</div>
    </div>
@endsection