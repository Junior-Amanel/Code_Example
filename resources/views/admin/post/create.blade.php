
@extends('layouts.admin_layout')

@section('title','Добавить Продукт')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить Продукт</h1>
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
            <form action="{{route('post.store')}}"method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Декор</label>
                  <input type="text" name="decor" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                </div>
                <div class="form-group">
                    <!-- select -->
                    <div class="form-group">
                      <label>Выберите категорию</label>
                      <select name="cat_id" class="custom-select" required>
                        @foreach ($categories as $category)
                        <option value="{{$category['id']}}">{{$category['decor']}}</option>
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-group">                  
                  <label for="exampleInputEmail1">Дина</label>
                  <input type="text" name="length" class="form-control" id="exampleInputEmail1" placeholder="Введите Длину" required>
                
                  <label for="exampleInputEmail1">Ширина</label>
                  <input type="text" name="width" class="form-control" id="exampleInputEmail1" placeholder="Введите  Ширину" required>
                
                  <label for="exampleInputEmail1">Толщина</label>
                  <input type="text" name="thickness" class="form-control" id="exampleInputEmail1" placeholder="Введите Толщину" required>
                  
                  
                    <label>Производитель</label>
                    <select name="manufacturer" class="form-control">
                      <option>ШЕКСНА</option>
                      <option>SWISS KRONO</option>
                      <option>LAMTECH</option>
                      <option>KRONOSPAN </option>
                      <option>BYSPAN </option>
                      <option>СКИФ </option>
                      <option>КИТАЙ  </option>
                    </select>
                  
                  {{-- <label for="exampleInputEmail1">Производитель</label>
                  <input type="text" name="manufacturer" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                   --}}
                  <label for="exampleInputEmail1">Цена</label>
                  <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                  
              
                      <div class="form-group">
                        <label>Наличие</label>
                        <select name="availability" class="form-control">
                          <option>Есть в наличии</option>
                          <option>Уточняйте у продавцов</option>
                          <option>Ожидается поступление</option>
                          <option>Нет в наличии</option>
                        </select>
                      </div>
                  
                  <label for="feature_image">Изображение</label>
                  <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                  <input type="text" name="image" class="form-control" id="feature_image"
                      name="feature_image" value="" readonly>
                  <a href=""  class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                
                <div class="form-group">
                <textarea type="text" name="description" class="editor"></textarea>
                </div>
                <div class="form-group">
                  <label>Покрытие</label>
                  <select name="coating" class="form-control">
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
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </div>
            </form>
          
      </div>
      
    </div>
  </section>
  <!-- /.content -->
  
    
@endsection