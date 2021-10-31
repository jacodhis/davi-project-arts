
@extends('layouts.artist')


@section('title')
artist |Dashboard
@endsection



@section('content')


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <div class="d-flex align-items-baseline justify-content-between">
                 <h5 class="title">{{$art->name}}</h5>
                 <a href="{{route('all-Arts')}}">view Arts</a>

               </div>
               </div>
              

               <div class="row">
                 <div class="col-lg-7 pl-4 pb-4">
                    <a href="/art/{{$art->id}}">
                    
                        <img src="{{asset('/storage/art/'.$art->image)}}"
                            alt="Image" class="img-fluid"></a>
                 </div>

               <div class="col-lg-5 pl-8 pb-8">
               <h3 class="title">{{$art->name}}</h3>
                            <p><span>Offered by: <a href="#">{{$art->user->name}}</a></span><br>
                                <!-- <span> Ad ID:<a href="#" class="time"> {{$art->id}}</a></span></p> -->
                                <span> Ad Price : Kshs<a href="#" class="time"> {{$art->price}} </a> </span></p>
                            <span class="icon">Posted : {{$art->created_at->diffForHumans()}}</span><br><br>
                            <span class="icon"><a href="/arts/{{$art->id}}/edit">Edit Art</a></span>
               
              </div>
               </div>
               
               
               @if(Auth::user()->id == $art->user_id)
               <h2 style="color:Blue;">Admin ChatBoard</h2>
                
                @foreach($art->comments as $comment)
                   <p>{{$comment->body}} (<small style="color:green;"><b>{{$comment->user->name}} commented </b></small>)
                   <small style="color:red;"> written {{$comment->created_at->diffForHumans()}} </small></p>
                  
                        
                   
                 @endforeach

                 <form action="/chat/create/{{$art->id}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="comment">chat</label>
                          <input type="text" name="body" placeholder="enter comment" class="form-control">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Reply</button>
                      </div>
                      </form>

           
             
              
              

                
                  
             
               
               
               
                @endif
            
            

             
            
            </div>
          </div>
        </div>
      </div>

@endsection



@section('script')

@endsection