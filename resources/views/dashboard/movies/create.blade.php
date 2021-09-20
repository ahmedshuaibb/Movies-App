@extends('layouts.admin')
@section('content')
  
<div class="tab-content">
                                            <div class="tab-pane show active" id="input-sizes-preview">
                                                <form method="POST" action="{{route('movies.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="mb-3">
                                                        <label for="example-input-small" class="form-label">Movie Name</label>
                                                        <input type="text" id="example-input-normal" name="name" class="form-control" placeholder="Input Movie Name .....">
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label for="example-input-normal" class="form-label">Description</label>
                                                        <input type="text" id="example-input-normal" name="description" class="form-control" placeholder="Input Description .....">
                                                    </div>
        
                                                    <div class="mb-3">
                                                        <label for="example-input-large" class="form-label">Rating</label>
                                                        <input type="text" id="example-input-normal" name="rating" class="form-control" placeholder="Input Rating .....">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
        
                                                    
                                                </form>                                           
                                            </div> <!-- end preview-->
                                        
                                            
        
@endsection
