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
                           <a href="{{route('admin.addproject')}}"> <button type="button" class="btn btn-secondary waves-effect">Add</button></a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-bullseye-arrow me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">



                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>

                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th>{{ $item->title }}</th>
                                            <th>{{ $item->description }}</th>

                                            <th><img height="100px;" width="150px" src="project/{{ $item->thumbnail }}">
                                            </th>
                                            <th> <a href="{{ route('admin.editproject', $item->id) }}"
                                                    class="btn btn-info waves-effect waves-light">
                                                    <i class="mdi mdi-pen"></i>
                                                </a></button>&nbsp;<button type="button"
                                                    class="btn btn-danger waves-effect waves-light"><i
                                                        class="mdi mdi-close"></i></button></th>
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
