
@extends('layouts.admin')


@section('title')
admin |Dashboard
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
                 <a href="/allarts">view Arts</a>

               </div>
               </div>
              

               <div class="row">
                 <div class="col-lg-7 pl-4 pb-4">
                    <a href="/art/{{$art->id}}">
                    
                        <img src="{{asset('/storage/art/'.$art->image)}}"
                            alt="Image" class="img-fluid"></a>
                 </div>

               <div class="col-lg-5 pl-8 pb-8">
               <h3 class="title">  {{$art->name}}</h3>
               <!-- <p></p> -->
                            <p><span>Offered by : <a href="#">{{$art->user->name}}</a></span><br>
                            <span> Arts Price :<a href="#" class="time"> {{$art->price}}</a></span></p>
                                <!-- <span> Ad ID:<a href="#" class="time"> {{$art->id}}</a></span></p> -->
                            <span class="icon"><i class="fa fa-clock-o"></i><a href="#">{{$art->created_at}}</a></span>
                            <!-- <span class="icon"><i class="fa fa-map-marker"></i><a href="#">estate name,county name</a></span> -->
               
              </div>
               </div>
               <p>chat with artist</p>

               <div class="container">
                 @foreach($art->comments as $comment)
                   <p>{{$comment->body}} (<small  style="color:Blue;"><b>{{$comment->user->name}} commented </b></small>) 
                   <small  style="color:red;">{{$comment->created_at->diffForHumans()}}</small></p>
                   
                     
                 @endforeach

                  <!-- reply -->
                

              <div class="card ">
                  <div class="card-block">
                    <form action="/chat/create/{{$art->id}}" method="post">
                      @csrf
                      <div class="form-group">
                        <label for="comment">Chart</label>
                        <input type="text" name="body" placeholder="enter comment" class="form-control">
                      </div>
                      <div class="form-group">
                <button type="submit" class="btn btn-primary">send</button>
              </div>
              </form>
            </div>
</div>
</div>
            
            

             
            
            </div>
          </div>
        </div>
      </div>

      <script>
        // var disp = document.getElementById('display');
        // disp.addEventListener('mouseenter',function(){
        //   event.target.style.color = "blue";
        //   alert('Start Chat');
        // })
      </script>


@endsection



@section('script')

@endsection