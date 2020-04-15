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
                                <h2 class="title-1">Catagory</h2>
                                    <a href="{{route('admin.addcatagory')}}" class="au-btn au-btn-icon au-btn--blue">
                                        Add Catagory</a>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>    
                                                <th>Delete</th>                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cat as $catagory)
                                            <tr>
                                                <td>{{$catagory->id}}</td>
                                                <td>{{$catagory->cat_name}}</td>
                                                <td>
                                                    <form action="{{route('admin.deletecatagory',$catagory->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="delete" class="btn btn-danger">
                                                    </form>
                                                   
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="d-flex justify-content-center aling-items-center ">
                                        <div>{{$cat->links()}}  </div>
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
   
