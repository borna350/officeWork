@extends('layouts.datatable')
@section('content')


        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>DataTables</h1>
              </div>
              <div class="col-sm-6">

                  <form class="form-inline" action="{{ route('groups.index') }}" method="get">
                  
                      <div class="form-group">
                          <input type="text" name="search" class="form-control" placeholder="search by name"> 
                      </div>
                       <input type="submit" class="btn btn-primary" value="Search">
                  </form>
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('groups.create') }}" class="btn btn-primary">Create</a></li>
                  
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Group List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                           
                            <th>Group Name</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($input as $data)
                    <tr>
                             <td>{{$data->name}}</td>
                             <td>{{$data->status}}</td>
                             
                            
                            
                             <td>
                              <a href="{{ route('groups.show',$data->id) }}" title='Show Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span>View</a>
                              <a href="{{ route('groups.edit',$data->id) }}" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span> Edit</a>
                              <form action="{{ route('groups.destroy',$data->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                                
                              </td>
                    </tr>
                    @endforeach()
            
                    </tbody>
                   
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
    
             
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      

@endsection