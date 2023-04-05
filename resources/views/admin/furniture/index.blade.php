
@extends('layouts.admin_layout')

@section('title','Все Фурнитуры')

@section('content')
    
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Все категории</h1>
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
            <div class="card">
                <div class="card-body p-0">
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th style="width: 5%">
                                  ID
                              </th>
                            <th>
                                Название
                            </th>
                            <th>
                                Цена
                            </th>
                            <th>
                                Изображение
                          </th>
                            <th>
                                Описание
                            </th>
                            <th>
                                Дата создания
                            </th>
                              <th style="width: 40%">
                                </th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($furniture as $furniture)
                          <tr>
                              <td>
                                  {{$furniture['id']}}
                              </td>
                              <td>
                                  {{$furniture['title']}}
                              </td>
                              <td>
                                  {{$furniture['price']}}
                            </td>
                            
                            <td>
                              <img src="{{$furniture['image']}}" alt="" class="img-uploaded" style="display: block; width: 50px">
                            </td>
                            <td>
                              {{$furniture['description']}}
                          </td>
                            <td>
                              {{$furniture['created_at']}}
                            </td>
                        
                              <td>
                              <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('furniture.edit',$furniture['id'])}}" method="GET">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Редактировать
                              </a>
                                  <form action="{{route('furniture.destroy',$furniture['id'])}}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </button>
                                  </form>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>

    </div>
  </section>
  <!-- /.content -->
  
    
@endsection