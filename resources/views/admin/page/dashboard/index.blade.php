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
                                    <h2 class="title-1">Item List</h2>
                                    <a href="{{route('admin.create')}}" class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
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
                                                <th>Cat Id</th>
                                                <th>Name</th>
                                                <th>About</th>
                                                <th>Quantity</th>
                                                <th class="text-right">Price</th>
                                                <th>Image</th>
                                                <th class="text-right">Show</th>
                                                <th class="text-right">update</th>
                                                <th class="text-right">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($std as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->cat_id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->about}}</td>
                                                <td>{{$user->Quantity}}</td>
                                                <td class="text-right">{{$user->price}}</td>
                                                <td class="text-right"><img src="{{asset('uploads/item/' . $user->image  )}}" alt="abc"></td>

                                                <td>
                                                    <a href="{{route('admin.show', $user->id)}}" class="btn btn-primary">show</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.edit',$user->id)}}" class="btn btn-success">update</a>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.delete',$user->id)}}">
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
                                        <div>{{$std->links()}}  </div>
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
   
