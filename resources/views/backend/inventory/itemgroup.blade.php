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
                                        <form action="{{ route('admin.storegroup') }}" class="form-horizontal"
                                            role="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="group_idEdit" id="group_idEdit"
                                                value="{{ @$group->id }}">
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Group Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="groupName" id="simpleinput"
                                                        class="form-control" value="{{ @$group->groupName }}"
                                                        placeholder="Enter Group Name">
                                                    @if ($errors->has('groupName'))
                                                       <p style="color:red;
                                                        font-size: 15px;">
                                                            {{ $errors->first('groupName') }}
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

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>

                                            <th>Group Name</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>

                                                <th>{{ $item->groupName }}</th>

                                                <th> <a href="{{ route('admin.editgroupname', $item->id) }}"
                                                        class="btn btn-info waves-effect waves-light">
                                                        <i class="mdi mdi-pen"></i>
                                                    </a>&nbsp; <a href="{{ route('admin.deletegroupname', $item->id) }}"
                                                        onclick=" return confirm('Are you sure you want to delete this item ?'); "
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
