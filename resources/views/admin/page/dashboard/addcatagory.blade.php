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
                                    <h2 class="title-1">Add Catagory</h2>
                                    <a href="{{route('admin.dashboard')}}" class="au-btn au-btn-icon au-btn--blue">
                                        Back</a>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                       
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="table-responsive table--no-card m-b-40">
                                    
                                <div class="container">
                                
                                    <form action="{{route('admin.storecartagory')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                          <label for="">Name</label>
                                          <input type="text" name="cat_name" id="" class="form-control" placeholder="Enter Category name" value="{{old('name')}}">
                                          {!! $errors->first('cat_name', '<small class="text-danger">:message</small>') !!}

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
   
