<?php

namespace App\Http\Controllers;

use App\Models\InventorySettings;
use App\Models\InventorySettingDetails;
use App\Models\ItemGroup;
use App\Models\ItemSubGroup;
use App\Models\Brand;
use Illuminate\Http\Request;

class InventorySettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itemsdetails = InventorySettings::orderBy("id", "asc")->where('status', '0')->paginate(10);

        $itemgroup = ItemGroup::all();
        $brand = Brand::all();
        return view('backend.inventory.items', compact('itemsdetails','itemgroup','brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {

            
            $request->validate([
                'itemName' => 'required',
                'itemgroup_id' => 'required',
                'sub_groups_id' => 'required',
                'company_id' => 'required',
                'units' => 'required',
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);
    
    
    
            if ($request->itemEditId) {
                $itemsupdate = InventorySettings::find($request->itemEditId);
                $itemsupdate->itemName = $request->itemName;
                $itemsupdate->itemDetails = $request->itemDetails;
                $itemsupdate->itemgroup_id = $request->itemgroup_id;
                $itemsupdate->sub_groups_id = $request->sub_groups_id;
                $itemsupdate->company_id = $request->company_id;
    
                $itemsupdate->units = $request->units;
                if ($request->hasFile('thumbnail')) {
                    $thumbnail = $request->file('thumbnail');
                    $img_name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                    $thumbnail->move('uploads/itemsettings/thumbnail/', $img_name);
                    $save_url = '/uploads/itemsettings/thumbnail/' . $img_name;
                    $itemsupdate->thumbnail = $save_url;
                }
                $itemsupdate->update();
                return back()->with('itemsdetails_updated', 'Group Item  is successfully updated');
            } else {
                
                $itemsdetails = new  InventorySettings();
                $itemsdetails->itemName = $request->itemName;
                $itemsdetails->itemDetails = $request->itemDetails;
                $itemsdetails->itemgroup_id = $request->itemgroup_id;
                $itemsdetails->sub_groups_id = $request->sub_groups_id;
                $itemsdetails->company_id = $request->company_id;
                $itemsdetails->units = $request->units;
                if ($request->hasFile('thumbnail')) {
                    $thumbnail = $request->file('thumbnail');
                    $img_name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                    $thumbnail->move('uploads/itemsettings/thumbnail/', $img_name);
                    $save_url = '/uploads/itemsettings/thumbnail/' . $img_name;
                    $itemsdetails->thumbnail = $save_url;
                }
    
                $itemsdetails->save();
                return redirect()->back()->with('itemdetails', 'Item details  added successfully');
            }
        }
    }

    public function additemunitdetails($id)
    {
       
        $requestid = request()->route('id');
        $separatedid = explode("-", $requestid);

        $brand = Brand::all();
        $itemsgroupDetails = ItemGroup::FindorFail($separatedid[1]);
            
        $itemssubgroupdetails = ItemSubGroup::FindorFail($separatedid[2]);

        $itemscompanydetails = Brand::FindorFail($separatedid[3]);


        $itemsdetail = InventorySettings::FindorFail($separatedid[0]);

        $itemsunitdetails = InventorySettingDetails::where('commonCode_id', '=', $separatedid[0])->orderBy("id", "desc")->take(10)->get();

        return view('backend.inventory.itemunits', compact('itemsunitdetails', 'itemsdetail', 'itemsgroupDetails', 'itemssubgroupdetails', 'itemscompanydetails'));
    }
    /**
     * Display the specified resource.
     */
    public function show(InventorySettings $inventorySettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventorySettings $inventorySettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventorySettings $inventorySettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventorySettings $inventorySettings)
    {
        //
    }

    public function inventorysettingStore(Request $request)
    {

     

        // if ($request->unit_status == 0) {
        // }
        // else
        // {

        // }

        $data = InventorySettingDetails::where('status', '=', '0')
            ->where('commonCode_id', '=', $request->commonCode_id)
            ->where('altUnits', '=',  $request->Alunits)
            ->first();

        if ($data != null) {
            // user doesn't exist

            return redirect()->back()->with('itemAlreadyExist', 'This unit is already exist.');
        } else {

            $itemsettings = new  InventorySettingDetails();
            $itemsettings->unitStatus = $request->unit_status;
            $itemsettings->altUnits = $request->Alunits;
            $itemsettings->whereQty = $request->whereQty;
            $itemsettings->sellrate = $request->sellrate;
            $itemsettings->equals = $request->equals;
            $itemsettings->buyrate = $request->buyrate;
            $itemsettings->mrp = $request->mrp;
            $itemsettings->discountPercent = $request->dis;
            $itemsettings->commonCode_id = $request->commonCode_id;

            $itemsettings->save();
            return redirect()->back()->with('itemsettingsstore', 'Item Setting details  added successfully');
        }
    }

    public function stockin(InventorySettings $inventorySettings)
    {
        $itemsdummy = \DB::select("select * from inventory_settings inner join dummies on inventory_settings.id=dummies.item_id order by dummies.id desc");
        return view('backend.inventory.stockin',compact('itemsdummy'));
    }

    public function stockout(InventorySettings $inventorySettings)
    {
        $itemsdummy = \DB::select("select * from inventory_settings inner join dummy_seconds on inventory_settings.id=dummy_seconds.item_id order by dummy_seconds.id desc");
       
        return view('backend.inventory.stockout',compact('itemsdummy'));
    }

    public function searchforstockitem(Request $request)
    {
        if ($request->ajax()) {
            // dd('request is submitted');
            $search = $request->get('query');
            if ($search != '') {

                $items = \DB::select("select inventory_settings.id,itemName,altUnits,equals,buyRate,sellRate from inventory_settings inner join inventory_setting_details on inventory_settings.id=inventory_setting_details.commonCode_id where itemName like '" . $search . "%' and inventory_settings.status=0 and inventory_setting_details.status=0 limit 5");

                // $items = Inventorysetting::where('itemName', 'LIKE', '' . $search . '%')->where('status', '0')->take(10)->get();
            }
        }

        return json_encode($items);
    }

}
