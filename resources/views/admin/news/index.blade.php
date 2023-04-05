
@extends('layouts.admin_layout')

@section('title','Все категории')

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
                                Изображение
                            </th>
                              <th>
                                  Аннонс
                              </th>
                              <th>
                                Текст Новости
                            </th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($news as $news)
                          <tr>
                              <td>
                                  {{$news['id']}}
                              </td>
                              <td>
                                    {{$news['title']}}
                              </td>
                              
                              <td>
                                <img src="{{$news['image']}}" alt="" class="img-uploaded" style="display: block; width: 50px">

                            </td>

                            <td>
                              {{$news['annons']}}
                            </td>
                            <td>
                              {{$news['text']}}
                            </td>

                              <td>
                              <td class="project-actions text-right">
                                  <a class="btn btn-info btn-sm" href="{{ route ('news.edit',$news['id'])}}">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Редактировать
                                  </a>
                                  <form action="{{route('news.destroy',$news['id'])}}" method="POST" style="display:inline-block">
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