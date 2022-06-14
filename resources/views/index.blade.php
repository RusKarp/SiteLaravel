@extends('layouts.layot')

@section( 'content')


 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Все статьи </h1>
                </div><!-- /.col -->
                <!-- /.col -->
            </div>
        <!-- /.row -->
      @if (session('success'))
      <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">✘</button>
          <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
      </div>
      @endif    

        </div><!-- /.container-fluid -->
        <section class="content">
            <div class="container-fluid">        
                <div class="card">              
                  <div class="card-body p-0">                    
                            
                            @foreach ($posts as $post)
                                
                            <div class="p-4" style="display: inline-block">

                                    <a href="/post/{{$post['id']}}">{{$post['title']}}</a>
                                    <br />
                                
                                    <img    src="{{$post['img']}}"  width="117"
                                    height="100"> <br />                                
                               
                                   <span class="time">{{$post['created_at']}}</span> 
                                    <br /> 
                                
                            </div>                            
                            
                             @endforeach                       
                  </div>
                  <!-- /.card-body -->            
            </div>      
          
        </div><!-- /.container-fluid -->
      </section>
    </div>
    
{{ $posts->links() }}
@endsection