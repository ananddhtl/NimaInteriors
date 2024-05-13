@extends('backend.include.main')
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <div class="container-fluid">

        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Blog Data</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
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
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td class="ql-editor">{!! $item->description !!}</td>
                                        <td><img src="{{ asset('admin/blog/' . $item->image) }}" height="100px" width="150px"></td>
                                        <th> <a href="{{ route('admin.editblog', $item->id) }}" class="btn btn-info waves-effect waves-light">
                                            <i class="mdi mdi-pen"></i>
                                        </a></button>&nbsp;<button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button></th>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div> 
            </div> 

            
        </div>
       


      

    </div>
@endsection
