@extends('admin.layouts.paymentlayout')

@section('title')
E-Token System
@endsection

@section('content')
    <section class="content">
    	 @if(count($errors)>0)
				<div class="alert alert-danger w-50 mx-auto mt-3 text-center">
					<ul>
						@foreach($errors->all() as $error)
							<li style="list-style: none;">{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
 <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                E-Token Payment TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Batch</th>
                                  <th>Semester</th>
                                  <th>Status</th> 
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($freelancers as $freelancer)
                                <tr>
                                  <td> {{ $freelancer->std_id }} </td>
                                  <td> {{ $freelancer->std_name }} </td>
                                  <td> {{ $freelancer->batch }} </td>
                                  <td> {{ $freelancer->semester }} </td>
                                  <td>{{ $freelancer->status }}</td>
                                  <td><h4>
                                    @if($freelancer->status == 'unpaid')
                                    <button class="btn btn-danger Paid banUsers" data-id="{{$freelancer->id}}">Pay</button>
                                    @elseif($freelancer->status == 'paid')
                                     <button class="btn btn-success unbanFreelancer" data-id="{{$freelancer->id}}">Paid</button>
                                    @endif
                                  </h4></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                             <div class="ml-3"> {{$freelancers->links()}}</div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
