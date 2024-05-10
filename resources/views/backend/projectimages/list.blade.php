@extends('backend.include.main')
@section('content')
    <div class="container-fluid">

        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Project Data</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        
                                        <th>Title</th>
                                      
                                        <th>Image</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projectsWithImages as $project)
                                    <tr>
                                        <td>{{ $project->title }}</td>
                                        <td>
                                            @foreach($project->images as $item)
                                                <img src="{{ asset($item->images) }}" alt="Project Image" height="100px" width="150px">
                                            @endforeach
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-pen"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->

            
        </div>
        <!--- end row -->


      

    </div>
@endsection
