
@extends('admin.layout.layout')
@section('content')

<div class="card-body">
@include('partials.flash')
				<div class="responsive-data-table">
					<table id="responsive-data-table" class="table dt-responsive nowrap table-stripped" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>Slug</th>
								<th>Parent</th>
                                <th>Action</th>
							</tr>
						</thead>

						<tbody>
                            @forelse($categories as $c)
							    <tr>
								    <td>{{$c->id}}</td>
								    <td>{{$c->nama}}</td>
								    <td>{{$c->slug}}</td>
								    <td>{{$c->parent_id}}</td>
								    <td>
										<a class="btn btn-warning btn-sm"  href="{{URL::to('admin/categories/'. $c->id .'/edit')}}"> Edit </a>
										{!! Form::open(['url'=>'admin/categories/'.$c->id,'style'=>'display:inline-block']) !!}
										{!! Form::hidden('_method','DELETE')!!}
										{!! Form::submit('remove',['class'=>'btn btn-danger btn-sm'])!!}
										{!! Form::close()!!}
									</td>
							    </tr>
                                @empty
                                <tr>
                                    <td>No category</td>
                                </tr>
                                @endforelse   
                        </tbody> 
                    </table> 
					{{$categories->links('pagination::bootstrap-4')}}<br>
				<a class="btn btn-primary" style="display:inline-block"  href="{{URL::to('admin/categories/create')}}"> Add </a>

                </div>
</div>                          
@stop