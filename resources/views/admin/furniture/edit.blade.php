
@extends('layouts.admin_layout')

@section('title','Рeдактировать Фурнитуру')

@section('content')
@foreach($furniture as $furniture)
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактировать Фурнитуру:{{$furniture['title']}}</h1>
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
  <section class="content">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="card card-primary">
            <!-- form start -->
            <form action="{{route('furniture.update', $furniture['id'])}}"method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Декор</label>
                  <input type="text" value="{{$furniture['title']}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                
                  <label for="exampleInputEmail1">Цена</label>
                  <input type="text" value="{{$furniture['price']}}" name="price" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                  
                  <label for="feature_image">Изображение</label>
                  <img src="{{$furniture['image']}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                  <input type="text"  name="image" class="form-control" id="feature_image"
                      name="feature_image" value="{{$furniture['image']}}" readonly>
                  <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                </div>
                <div class="form-group">
                <textarea type="file" name="description" class="editor">{{$furniture['text']}}</textarea>
                </div>             
              </div>
              @endforeach
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Обновить</button>
              </div>
            </form>
          
      </div>
      
    </div>
  </section>
  <!-- Main content -->

  <!-- /.content -->

@endsection