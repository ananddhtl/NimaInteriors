@extends('backend.include.main')
@section('content')
    <div class="px-3">


        <div class="container-fluid">


            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Items Units</h4>
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
                                            <input autocomplete="off" type="hidden" value="{{ @$itemsdetail->id }}">
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Item Name</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        name="itemName" placeholder="Item Name"
                                                        value="{{ @$itemsdetail->itemName }}" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Vatable</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        name="vatable" placeholder="Vatable" value="No" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Item
                                                    Details</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        name="itemDetails" placeholder="Items Details"
                                                        value="{{ @$itemsdetail->itemDetails }}" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Group </label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" data-target="#myModalForGroup" id="groupName"
                                                        placeholder="Select Group"
                                                        value="{{ @$itemsgroupDetails->groupName }}" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Sub Group</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" id="subGroupName"
                                                        data-target="#myModalForSubGroup" placeholder="Select Sub group"
                                                        value="{{ @$itemssubgroupdetails->subGroupName }}" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Units</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" id="subGroupName"
                                                        data-target="#myModalForSubGroup" placeholder="Select Sub group"
                                                        value="{{ @$itemsdetail->units }}" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Company</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" id="subGroupName"
                                                        data-target="#myModalForSubGroup" placeholder="Select Sub group"
                                                        value="{{ @$itemscompanydetails->companyName }}" readonly>
                                                </div>
                                            </div>

                                            
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
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <form action="{{ route('admin.storeitemssettingdetails') }}" class="form-horizontal"
                                            role="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input autocomplete="off" type="hidden" class="form-control" name="commonCode_id"
                                            value="{{ @$itemsdetail->id }}" placeholder="UnitsStatus">
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Buy rate</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="buyrate" placeholder="Buy Rate"
                                                        >
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Sell rate</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="sellrate" placeholder="Sell Rate"  >
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">
                                                    MRP</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="mrp" placeholder="MRP"
                                                       >
                                                </div>
                                            </div>

                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">
                                                    Discount</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="dis" placeholder="Discount"
                                                        value="" >
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            
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
                                            <th>Id</th>
                                            <th> Al units</th>
                                            <th> WhereQty</th>
                                            <th> Equals</th>
                                            <th> Sell Rate</th>
                                            <th> MRP</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($itemsunitdetails as $item)
                                            <tr>
                                                <th scope="row">{{ @$item->id }} </th>
                                                <td>{{ @$item->altUnits ?? '' }}</td>
                                                <td>{{ @$item->whereQty ?? '' }}</td>
                                                <td>{{ @$item->equals ?? '' }}</td>

                                                <td>{{ @$item->sellRate ?? '' }}</td>
                                                <td>{{ @$item->mrp ?? '' }}</td>
                                                <td>

                                                    <a href="/ " class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item ?');">
                                                        Delete
                                                    </a>

                                                </td>
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