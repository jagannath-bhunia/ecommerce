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
                                    <h2 class="title-1">Add item</h2>
                                    <a href="{{route('admin.dashboard')}}" class="au-btn au-btn-icon au-btn--blue">
                                        Back item list</a>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                       
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="table-responsive table--no-card m-b-40">
                                    
                                <div class="container">
                                
                                    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <select name="cat_id" id="" >
                                            @foreach($cat as $user)
                                                <option value="{{$user->id}}" name="cat_id" selected="selected">{{$user->cat_name}}</option>
                                            @endforeach
                                        </select> 
                                    </div>
                                  
                                        

                                        <div class="form-group">
                                          <label for="">ItemName</label>
                                          <input type="text" name="name" id="" class="form-control" placeholder="Enter user name" value="{{old('name')}}">
                                          {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

                                        </div>
                                        <div class="form-group">
                                          <label for="">About</label>
                                          <input type="text" name="about" id="" class="form-control" placeholder="Enter user about" value="{{old('about')}}">
                                          {!! $errors->first('about', '<small class="text-danger">:message</small>') !!}

                                        </div>
                                        <div class="form-group">
                                          <label for="">Price</label>
                                          <input type="number" name="price" id="" class="form-control" placeholder="Enter price" value="{{old('price')}}">
                                          {!! $errors->first('price', '<small class="text-danger">:message</small>') !!}

                                        </div>
                                        <div class="form-group">
                                          <label for="">Image</label>
                                          <input type="file" name="image" id="" class="form-control" placeholder="Enter image" value="{{old('image')}}">
                                          {!! $errors->first('image', '<small class="text-danger">:message</small>') !!}

                                          <br>
                                          <input type="submit" value="submit" class="btn btn-info btn-lg">

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
   
