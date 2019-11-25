@extends('layouts.datatable')
@section('content')


<section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ URL::to('posts') }}" class="btn btn-primary">Home</a></li>
                  
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
                  <h3 class="card-title">Show Product</h3>
                  
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Group Name</th>
                          <th>Title</th>
                          <th>Details</th>
                          <th>status</th>
                         
                            
                        </tr>
                    </thead>
                    <tbody>
                        

                        <tr>
                          <td>{{$input->id}}</td>
                          <td>{{$input->name}}</td>
                          <td>{{$input->title}}</td>
                          <td>{{$input->details}}</td>
                          <td>{{$input->status}}</td>
                            
                        </tr>
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
        @endsection