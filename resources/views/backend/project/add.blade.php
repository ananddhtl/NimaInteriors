@extends('backend.include.main')
@section('content')
    <div class="px-3">


        <div class="container-fluid">


            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Add Project</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <form action="{{ route('admin.storeproject') }}" class="form-horizontal"
                                            role="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="title" id="simpleinput" value="{{ old('title') }}"
                                                        class="form-control" placeholder="Enter Project Title">
                                                    @if ($errors->has('title'))
                                                        <p style="color:red; font-size: 15px;">
                                                            {{ $errors->first('title') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label"
                                                    for="example-fileinput">Thumbnail</label>
                                                <div class="col-md-10">
                                                    <input type="file" name="thumbnail" class="form-control"
                                                        id="example-fileinput">
                                                    @if ($errors->has('thumbnail'))
                                                        <p style="color:red; font-size: 15px;">
                                                            {{ $errors->first('thumbnail') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="example-textarea">Description</label>
                                                <div class="col-md-10">
                                                    <textarea name="description" class="form-control" id="example-textarea" rows="5">{{ old('description') }}</textarea>
                                                    @if ($errors->has('description'))
                                                        <p style="color:red; font-size: 15px;">
                                                            {{ $errors->first('description') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                            




                                            <button type="submit" class="btn btn-primary">Submit</button>





                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div>




        </div> <!-- container -->

    </div>
@endsection
