
@extends('layouts.admin_layout')

@section('title','РЕдактировать Продукт')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Редактировать Продукт:{{$post['decor']}}</h1>
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
            <form action="{{route('post.update', $post['id'])}}"method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Декор</label>
                  <input type="text" value="{{$post['decor']}}" name="decor" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                </div>
                <div class="form-group">
                    <!-- select -->
                    <div class="form-group">
                      <label>Выберите категорию</label>
                      <select name="cat_id" class="custom-select" required>
                        @foreach ($categories as $category)
                        <option value="{{$category['id']}}" @if ($category['id']==$post['cat_id']) selected @endif>
                        {{$category['decor']}}
                        </option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-group">                  
                  <label for="exampleInputEmail1">Дина</label>
                  <input type="text" value="{{$post['length']}}" name="length" class="form-control" id="exampleInputEmail1" placeholder="Введите Длину" required>
                
                  <label for="exampleInputEmail1">Ширина</label>
                  <input type="text" value="{{$post['width']}}" name="width" class="form-control" id="exampleInputEmail1" placeholder="Введите Ширину" required>
                
                  <label for="exampleInputEmail1">Толщина</label>
                  <input type="text" value="{{$post['thickness']}}"  name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                  
                  <label for="exampleInputEmail1">Производитель</label>
                  <input type="text" value="{{$post['manufacturer']}}" name="manufacturer" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                  
                  <label for="exampleInputEmail1">Цена</label>
                  <input type="text" value="{{$post['price']}}" name="price" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                  
              
                      <div class="form-group">
                        <label>Наличие</label>
                        <select name="availability" value="{{$post['availability']}}" class="form-control">
                          <option>Есть в наличии</option>
                          <option>Уточняйте у продавцов</option>
                          <option>Ожидается поступление</option>
                          <option>Нет в наличии</option>
                        </select>
                      </div>
                  
                  <label for="feature_image">Изображение</label>
                  <img src="{{$post['image']}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                  <input type="text"  name="image" class="form-control" id="feature_image"
                      name="feature_image" value="{{$post['image']}}" readonly>
                  <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                </div>
                <div class="form-group">
                <textarea type="file" name="description" class="editor">{{$post['text']}}</textarea>
                </div>
                <div class="form-group">
                  <label>Покрытие</label>
                  <select name="coating" value="{{$post['coating']}}" class="form-control">
                    <option>Матовое</option>
                    <option>Глянцевое</option>
                  </select>
                </div>
                {{-- <form class="form-group">
                  
                  <label for="feature_image">Feature Image</label>
                  <input type="text" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                  <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
                </form> --}}
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