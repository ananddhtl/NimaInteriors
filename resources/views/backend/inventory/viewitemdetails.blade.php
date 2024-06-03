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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="page-title mb-0">Product Details</h4>
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
                                                        value="{{ @$itemsdetail->itemName }}">
                                                </div>
                                            </div>

                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Item
                                                    Details</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        name="itemDetails" placeholder="Items Details"
                                                        value="{{ @$itemsdetail->itemDetails }}">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Group </label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" data-target="#myModalForGroup" id="groupName"
                                                        placeholder="Select Group"
                                                        value="{{ @$itemsgroupDetails->groupName }}">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Sub Group</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" id="subGroupName"
                                                        data-target="#myModalForSubGroup" placeholder="Select Sub group"
                                                        value="{{ @$itemssubgroupdetails->subGroupName }}">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Units</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" id="subGroupName"
                                                        data-target="#myModalForSubGroup" placeholder="Select Sub group"
                                                        value="{{ @$itemsdetail->units }}">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Company</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="text" class="form-control"
                                                        data-toggle="modal" id="subGroupName"
                                                        data-target="#myModalForSubGroup" placeholder="Select Sub group"
                                                        value="{{ @$itemscompanydetails->companyName }}">
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
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="page-title mb-0">Items Rates</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <form action="{{ route('admin.storeitemssettingdetails') }}"
                                            class="form-horizontal" role="form" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input autocomplete="off" type="hidden" class="form-control"
                                                name="commonCode_id" value="{{ @$itemsdetail->id }}"
                                                placeholder="UnitsStatus">
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Buy rate</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="buyrate" placeholder="Buy Rate"
                                                        value="{{ $itemsunitdetails->buyRate ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">Sell rate</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="sellrate" placeholder="Sell Rate"
                                                        value="{{ $itemsunitdetails->sellRate ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">
                                                    MRP</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="mrp" placeholder="MRP"
                                                        value="{{ $itemsunitdetails->mrp ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label" for="simpleinput">
                                                    Discount</label>
                                                <div class="col-md-10">
                                                    <input autocomplete="off" type="number" class="form-control"
                                                        name="dis" placeholder="Discount"
                                                        value="{{ $itemsunitdetails->discountPercent ?? '' }}">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Update</button>

                                        </form>

                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="page-title mb-0">Items Addons</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <form action="{{ route('admin.storeitemssettingdetails') }}"
                                            class="form-horizontal" role="form" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input autocomplete="off" type="hidden" class="form-control"
                                                name="commonCode_id" value="{{ @$itemsdetail->id }}"
                                                placeholder="UnitsStatus">
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label">Select the Addon Category</label>
                                                <div class="col-md-10">
                                                    <select id="addonCategorySelect" name="company_id"
                                                        class="form-control">
                                                        @foreach ($addoncategory as $item)
                                                            <option value="{{ $item->id }}">{{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label class="col-md-2 col-form-label">Select the Addon Item</label>
                                                <div class="col-md-10">
                                                    <select id="addonItemsSelect" name="addon_item_id"
                                                        class="form-control">

                                                    </select>
                                                </div>
                                            </div>



                                            <button type="button" class="btn btn-primary" onclick="addItem()"
                                                id="addButton">Add</button>



                                            <div id="selectedAddonItems">
                                            </div>

                                        </form>

                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div> <!-- end card -->
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="page-title mb-0">Items Images</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">



                                        @foreach ($productimages as $productId => $images)
                                            @foreach ($images as $image)
                                                <div style="position: relative; display: inline-block; margin: 10px;">
                                                    <form action="{{ route('productimages.destroy', $image->id) }}"
                                                        method="POST" style="position: absolute; top: 0; right: 0;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            style="background: none; border: none; color: red; font-size: 20px; cursor: pointer;">&times;</button>
                                                    </form>
                                                    <img height="100px;" width="150px;"
                                                        src="{{ asset($image->images) }}" alt="Product Image">
                                                </div>
                                            @endforeach
                                        @endforeach



                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div> <!-- end card -->
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
    <script>
        $(document).ready(function() {
            var selectedItems = []; // Array to store selected items

            $('#addonCategorySelect').change(function() {
                var selectedCategoryId = $(this).val();

                $.ajax({
                    url: '{{ route('admin.getaddonitems') }}',
                    method: 'GET',
                    data: {
                        category_id: selectedCategoryId
                    },
                    success: function(response) {
                        var $addonItemsSelect = $('#addonItemsSelect');
                        $addonItemsSelect.empty();

                        $.each(response, function(key, item) {
                            var displayText = item.title;
                            if (item.price !== null) {
                                displayText += ' - $' + item.price;
                            }
                            $addonItemsSelect.append('<option value="' + item.id +
                                '">' + displayText + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching addon items:', error);
                    }
                });
            });

            $('#addonItemsSelect').change(function() {
                var selectedOption = $(this).find('option:selected');
                var selectedItemId = selectedOption.val();
                var selectedItemText = selectedOption.text();
                var selectedPrice = selectedItemText.split('- $')[1];

                // Push selected item to the array
                selectedItems.push({
                    id: selectedItemId,
                    title: selectedItemText,
                    price: selectedPrice
                });

                // Display selected items in the div
                displaySelectedItems();
            });

            // Function to display selected items in the div
            function displaySelectedItems() {
                var $selectedAddonItems = $('#selectedAddonItems');
                $selectedAddonItems.empty();

                // Loop through selected items array and display them in the div
                selectedItems.forEach(function(item) {
                    $selectedAddonItems.append('<div>' + item.title +
                        ' - $<input type="text" class="price-input" value="' + item.price +
                        '"><button class="delete-btn" data-id="' + item.id + '">Delete</button></div>');
                });
            }

            // Event delegation for dynamically added delete buttons
            $(document).on('click', '.delete-btn', function() {
                var itemId = $(this).data('id');
                // Remove the selected item from the array
                selectedItems = selectedItems.filter(function(item) {
                    return item.id != itemId;
                });
                // Display updated list of selected items
                displaySelectedItems();
            });

            // Function to handle click event of "Add" button
            function addItem() {
                // Remove the selected options from both dropdowns
                $('#addonCategorySelect').val('');
                $('#addonItemsSelect').empty();

                // Display selected items in the div
                displaySelectedItems();
            }
        });
    </script>
@endsection