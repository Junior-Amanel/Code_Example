
@extends('layouts.admin_layout')

@section('title','Добавить Новость')

@section('content')
    
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить Новость</h1>
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
            <form action="{{route('news.store')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Название</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название Статьи" required>
                
                  <label for="feature_image">Изображение</label>
                  <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                  <input type="text" name="image" class="form-control" id="feature_image"
                      name="feature_image" value="" readonly>
                  <a href=""  class="popup_selector" data-inputid="feature_image">Выбрать изображение</a><br>

                  <label for="exampleInputEmail1">Аннонс</label>
                  <input type="text" name="annons" class="form-control" id="exampleInputEmail1" placeholder="Введите Аннонс Статьи" required>

                  <label for="exampleInputEmail1">Новость</label>
                  <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Введите  Статью" required>
                </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
          
      </div>
      
    </div>
  </section>
  <!-- /.content -->
  
    
@endsection