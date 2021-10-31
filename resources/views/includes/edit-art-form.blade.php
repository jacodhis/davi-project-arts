<div class="pt-2">
                 <form method="POST" action="/update-art/{{$art->id}}" enctype="multipart/form-data">
                
                 @method('PUT')
               @csrf
                    <labeL class="form-group">Art Name</label>
                   <input type="text" name="name" class="form-control" value="{{$art->name}}">

                   <labeL class="form-group">Price</label>
                   <input type="text" name="price" class="form-control" value="<?php echo $art->price;?>">

                   <labeL class="form-group">Describe Your Art</label>
                   <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$art->description}}</textarea>



                   <labeL class="form-group">upload file</label>
                   <input type="File" name="art" class="form-control" >

                    <div class="py-2"  >
                  <button class="btn btn-primary">update Art</button>
                  </div>

                 </form>
               </div>