@extends('layouts.layot')


@section( 'content')


<div class="card-body p-0">                
                           
        
    <div class="p-4" style="display: inline-block">

            <a>{{$post['title']}}</a>
            <br />
        
            <img    src="{{$post['img']}}"  width="117"
            height="100"> <br /> 
            
            <textarea id="w3review" name="w3review" rows="4" cols="50">
                <?php echo $tut = strip_tags($post['text'])?>
            </textarea>
            <br /> 

           <span class="time">{{$post['created_at']}}</span> 
            <br />             
            

            <a href="/">Головна</a>
        
    </div>                      
    
    
</div>


{{-- <?php //print_r($post)
    //echo '<pre>';
   // print_r( $post );
   // echo '</pre>';
?> --}}

@endsection