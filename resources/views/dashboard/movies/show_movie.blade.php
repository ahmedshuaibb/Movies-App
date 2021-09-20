@extends('layouts.admin')
@section('content')
  
        <div class="col-xs-12">
                            <h3><span class="fa fa-users"></span> Movies <button class="btn btn-success m-l-15"><span class="fa fa-plus"></span><a style="text-decoration: none ; color: white;" href="{{route('movies.create')}}">Add Movie</a></button></h3>
                            
         </div>
                                            <div class="tab-pane show active" id="table-head-preview">
                                                <div class="table-responsive-sm">
                                                <table class="table table-centered mb-0">
                                                    <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Movie Name</th>
                                                                <th>Description</th>
                                                                <th>Rating</th>
                                                                
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <tr>
                                                                <td>{{$movies["id"]}}</td>
                                                                <td>{{$movies["name"]}}</td>
                                                                <td>{{$movies["description"]}}</td>
                                                                <td>{{$movies["rating"]}}</td>
                                                                
                                                        
                                                      
                                                            </tr>
                                                    </tbody>
                                                        
                                                        
                                                        
                                                </table>
                                                </div> <!-- end table-responsive-->                     
                                            </div> <!-- end preview-->
                                        
                                            
                                        
                                        
        
@endsection
