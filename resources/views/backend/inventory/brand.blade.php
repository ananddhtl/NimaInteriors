@extends('backend.include.main')
@section('content')
    <div class="px-3">


        <div class="container-fluid">


            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Add Item Group</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">
                                        Item Group</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <form action="{{ route('admin.storebrand') }}" class="form-horizontal"
                                            role="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="group_idEdit" id="group_idEdit" value="{{ @$editbrand->id }}"> 
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Company Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="companyName" id="simpleinput"
                                                        class="form-control" value="{{ @$editbrand->companyName }}" placeholder="Enter Company Name">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Address</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="address" id="simpleinput"
                                                        class="form-control" value="{{ @$editbrand->address }}" placeholder="Enter Address">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Contact Number</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="contactNumber" id="simpleinput"
                                                        class="form-control" value="{{ @$editbrand->contactnumber }}" placeholder="Enter Contact Number">
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

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>

                                            <th>Company Name</th>
                                            <th> Address</th>
                                            <th> Contact Number</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>

                                                <?php $i=1; ?>
                                               
                                                <th>{{ $item->companyName }}</th>
                                                <th>{{ $item->address }}</th>
                                                <th>{{ $item->contactNumber}}</th>
                                                 <th>{{ $item->status }}</th> 

                                                <th> <a href="{{ route('admin.editbrand', $item->id) }}"
                                                        class="btn btn-info waves-effect waves-light">
                                                        <i class="mdi mdi-pen"></i>
                                                    </a>&nbsp; <a href="{{ route('admin.deletebrand', $item->id) }}" onclick=" return confirm('Are you sure you want to delete this item ?'); "
                                                        class="btn btn-danger waves-effect waves-light">
                                                        <i class="mdi mdi-close"></i>
                                                    </a></th>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>




        </div> <!-- container -->

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').submit(function() {
                var quillContent = $('.ql-editor').html();
                $('#description-input').val(quillContent);
            });
        });
    </script>
@endsection
