

@extends('layouts.admin')


@section('title')
admin Dashboard
@endsection



@section('content')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Artists</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <p>Name : <span style="color:red">{{$artist->name}}</span></p>
                    <p>Email : <span style="color:red">{{$artist->email}} </span></p>
                    <p>Phone Number : <span style="color:red">
                    <?php  if ($artist->phone == '') { echo  'No phone Number';} else { echo $artist->phone;};?>
</span> </p>
                    <br>

                    <div class="row">
                  @foreach($artist->arts as $art)
                   
                    <div class="col-md-3 col-lg-3 col-sm-12">
                     <a href="/viewsingleart/{{$art->id}}"> <img src="{{asset('/storage/art/'.$art->image)}}"
                    alt="Image" width="70px" height="70px"></a>
                   <p>  {{$art->name}}</p>
                   <p><a href="/arts/{{$art->id}}/delete"> delete</a></p>
                      </div>

                   
                   
                    @endforeach
                </div>

                </div>
              </div>
            </div>
          </div>


          
       
        </div>
      </div>


@endsection





@section('script')


@endsection


