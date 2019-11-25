@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post Form</h1>
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
        <div class="col-md-6">
          <div class="card card-primary">
           

            
            <div class="card-body">
              <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
             
              <div class="form-group">
                <label for="inputStatus">Group</label>
                
                <select class="form-control custom-select" name="group_id">
                  <option selected disabled>Select Group</option>
                  @foreach($groups as $data)
                  <option value="{{$data->id}}">{{$data->name}}</option>
                  @endforeach
                  
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Title</label>
                <input type="text" id="inputName" class="form-control" name="title" value="">
              </div>
              <div class="form-group">
                <label for="inputName">Details</label>
                <input type="text" id="inputName" class="form-control" name="details" value="">
              </div>
              <div class="form-group">
              <input type="checkbox" id="agreeTerms"  name="status" value="0">
                          <label for="agreeTerms">
                           Available
                          </label>
                
              </div>
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Save" class="btn btn-success float-right">
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
       
    </section>
    <!-- /.content -->

  </div>

@endsection