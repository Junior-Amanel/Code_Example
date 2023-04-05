
@extends('layouts.admin_layout')

@section('title','Редактирование категоии')

@section('content')
    
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактирование категоии:{{$category['decor']}}</h1>
        </div>
      </div>
      @if (session('success'))
            <div class="alert alert-siccess" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
            </div>
       @endif     
    </div>
  </div>
 
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="card card-primary">
            <!-- form start -->
            <form action="{{route('category.update',$category['id'])}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Название</label>
                  <input type="text" value="{{$category['decor']}}" name="decor" class="form-control" id="exampleInputEmail1" placeholder="Введите название категории" required>
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Обновить</button>
              </div>
            </form>
          
      </div>
      
    </div>
  </section>
  <!-- /.content -->
  
    
@endsection