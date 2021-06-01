@extends('admin.layout.layout')
@section('content')

<div class="card-body">
@include('partials.flash')
				<div class="responsive-data-table">
					<table id="responsive-data-table" class="table dt-responsive nowrap table-stripped" style="width:100%">
						<thead>
							<tr>
                 
								<th>id</th>
								<th>tittle</th>
                                <th>action</th>
								
							</tr>
						</thead>

						<tbody>
                            @forelse($articles as $i)
							    <tr>
								    <td>{{$i->id}}</td>
								    <td>{{$i->tittle}}</td>
								    
								    <td>
										<a class="btn btn-warning btn-sm"  href="{{URL::to('admin/article/'. $i->id .'/edit')}}"> Edit </a>
										{!! Form::open(['url'=>'admin/article/'.$i->id,'style'=>'display:inline-block']) !!}
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
					{{$articles->links('pagination::bootstrap-4')}}<br>
				<a class="btn btn-primary" style="display:inline-block"  href="{{URL::to('admin/article/create')}}"> Add </a>

                </div>
</div>                          
@stop