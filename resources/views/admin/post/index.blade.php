
@extends('layouts.admin_layout')

@section('title','Все категории')

@section('content')
    
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Все СтТовары</h1>
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
                              <th style="width: 3%">
                                  ID
                              </th>
                              <th>
                                  Название декора
                              </th>
                                <th>
                                    Категория
                                </th>
                                <th>
                                    Д-Ш-Т
                                </th>
                                <th>
                                    Производство
                                </th>
                                <th>
                                    Цена
                                </th>
                                <th>
                                    Наличие
                                </th>
                                <th>
                                    Изображение
                                </th>
                                <th>
                                    Дата создания
                                </th>
                              <th style="width: 30%">
                                </th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                          <tr>
                                <td>
                                    {{$post['id']}}
                                </td>
                                <td>
                                    {{$post['decor']}}
                                </td>
                                <td>
                                    {{$post->category['decor']}}
                                </td>
                                <td>
                                    {{$post['length']}}x{{$post['width']}}x{{$post['thickness']}}
                                </td>
                                <!--<td>-->
                                <!--    {{$post['width']}}-->
                                <!--</td>-->
                                <!--<td>-->
                                <!--    {{$post['thickness']}}-->
                                <!--</td>-->
                                <td>
                                    {{$post['manufacturer']}}
                                </td>
                                <td>
                                    {{$post['price']}}
                                </td>
                                <td>
                                    {{$post['availability']}}
                                </td>
                                <td>
                                    <img src="{{$post['image']}}" alt="" class="img-uploaded" style="display: block; width: 50px">
                                </td>
                                <td>
                                    {{$post['created_at']}}
                                </td>
                              <td>

                              <td class="project-actions text-right">
                                  <a class="btn btn-info btn-sm" href="{{ route ('post.edit',$post['id'])}}">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Редактировать
                                  </a>
                                  <form action="{{route('post.destroy',$post['id'])}}" method="POST" style="display:inline-block">
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