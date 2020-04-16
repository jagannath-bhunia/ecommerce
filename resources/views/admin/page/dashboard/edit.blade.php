@extends("admin.layout.adminlayout")
@section('title','dashboard')

@section("body")

 <!-- MAIN CONTENT-->
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Update Item</h2>
                                    <a href="{{route('admin.dashboard')}}" class="au-btn au-btn-icon au-btn--blue">
                                        Back emp list</a>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                       
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="table-responsive table--no-card m-b-40">
                                    
                                <div class="container">
                                
                                    <form action="{{route('admin.update', $user->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="">Select Catagory</label>
                                        <select name="cat_id" id="" >
                                            @foreach($cat as $catagory)
                                                <option value="{{$catagory->id}}" name="cat_id" selected="selected">{{$catagory->cat_name}}</option>
                                            @endforeach
                                        </select> 
                                    </div>
                                        <div class="form-group">
                                          <label for="">ItemName</label>
                                          <input type="text" name="name" id="" class="form-control" placeholder="Enter user name" value="{{$user->name}}">
                                          {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

                                        </div>
                                        <div class="form-group">
                                          <label for="">About</label>
                                          <input type="text" name="about" id="" class="form-control" placeholder="Enter user about" value="{{$user->about}}">
                                          {!! $errors->first('about', '<small class="text-danger">:message</small>') !!}

                                        </div>
                                        <div class="form-group">
                                          <label for="">Quantity</label>
                                          <input type="text" name="Quantity" id="" class="form-control" placeholder="Enter user quantity" value="{{$user->Quantity}}">
                                          {!! $errors->first('Quantity', '<small class="text-danger">:message</small>') !!}

                                        </div>
                                        <div class="form-group">
                                          <label for="">price</label>
                                          <input type="number" name="price" id="" class="form-control" placeholder="Enter price" value="{{$user->price}}">
                                          {!! $errors->first('salary', '<small class="text-danger">:message</small>') !!}
                                        </div>
                                        <div class="form-group">
                                          <label for="">Image</label>
                                          <input type="file" name="image" id="" class="form-control" placeholder="Enter image" value="{{$user->image}}">
                                          {!! $errors->first('image', '<small class="text-danger">:message</small>') !!}

                                          <br>
                                          <input type="submit" value="Update" class="btn btn-info btn-lg">
                                        </div>

                                    </form>
                                
                                </div>

                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>

    </div>


        
@endsection
   
