@extends('layouts.admin')
@section('content')
  
        <div class="col-xs-12">
                            <h3><span class="fa fa-users"></span> Movies <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span><a style="text-decoration: none ; color: white;" href="{{route('movies.create')}}">Add Movie</a></button></h3>
                            
         </div>
                                            <div class="tab-pane show active" id="table-head-preview">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-centered mb-0">
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Movie Name</th>
                                                                <th>Description</th>
                                                                <th>Rating</th>
                                                                <th>Options</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($movies as $movie)
                                                        <tr>
                                                                <td>{{$movie["id"]}}</td>
                                                                <td>{{$movie["name"]}}</td>
                                                                <td>{{$movie["description"]}}</td>
                                                                <td>{{$movie["rating"]}}</td>
                                                                <td class="table-action">
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                                    <a href="{{route('movies.show',$movie)}}" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                                </td>
                                                        @csrf
                                                       @method("delete")
                                                       </tr>
                                                       @endforeach
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            
                                        </div> <!-- end tab-content-->
        
@endsection
