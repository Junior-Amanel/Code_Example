
@extends('layouts.admin_layout')

@section('title','Добавить фурнитуры')

@section('content')
    
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить фурнитуры</h1>
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
            <form action="{{route('furniture.store')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  {{-- <div class="form-group">
                    <!-- select -->
                    <div class="form-group">
                      <label>Категория</label>
                      <select name="cat_id" class="custom-select" required>
                        @foreach ($categories as $category)
                        <option value="{{$category['furniture']}}">{{$category['decor']}}</option>
                        @endforeach
                      </select>
                    </div>
                </div> --}}
                  <label for="">Название</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название Фурнитуры" required>
                  <label for="">Цена</label>
                  <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Введите цену" required>
                  <label for="feature_image">Изображение</label>
                  <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                  <input type="text" name="image" class="form-control" id="feature_image"
                      name="feature_image" value="" readonly>
                  <a href=""  class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                  <textarea type="text" name="description" class="editor"></textarea>
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