<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cusday;
use Illuminate\Support\Facades\DB;
use DataTables;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Exports\ExportUsers;
use Maatwebsite\Excel\Facades\Excel;

class CusdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.cusday.index');
    }

    public function exportCSVFile() 
    {

        return Excel::download(new ExportUsers , 'All-User.csv');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function get_qr($day, $code){
       // dd($code);

       $objs = cusday::where('day', $day)
               ->where('code', $code)
               ->first();
               $data['objs'] = $objs;
        
            if($objs){
                return view('checkin', $data);
            }else{
                return view('checkin_404', $data);
            }

     }

     public function api_post_status_user(Request $request){

        $id = $request->user_id;

        $objs = cusday::find($id);
        $objs->status = 1;
        $objs->time_checkin = date("Y-m-d H:i:s");
        $objs->save();

        return response()->json([
         'data' => [
           'success' => 'success',
           'date_time' => date("Y-m-d H:i:s")
         ]
       ]);

 }

    public function api_post_status_follow(Request $request){

        $user = cusday::findOrFail($request->user_id);

              if($user->status == 1){
                  $user->status = 0;
              } else {
                  $user->status = 1;
                  $user->time_checkin = date("d-m-Y H:i:s");
              }


      return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);

    }


    public function get_cusday(Request $request){

        if ($request->ajax()) {

                $data = cusday::orderby('created_at', 'desc');
  
            if ($request->filled('search_name')) {
                $data = $data->where('name', 'like', "%" . $request->search_name . "%")->orwhere('code', 'like', "%" . $request->search_name . "%");
            }
            if ($request->filled('day')) {
                if($request->day !== 0){
                    $data = $data->where('day', $request->day);
                }
            }
            if ($request->filled('daytype')) {
                if($request->day !== 2){
                    $data = $data->where('type', $request->daytype);
                }
            }
          //  dd($data);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->setRowId(function ($row) {
                        return $row->id;
                    })
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="'.url('admin/cusday/'.$row->id.'/edit').'" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="'.url('api/del_cusday/'.$row->id).'" onclick="return confirm("คุณต้องการลบข้อมูลนี้ใช่ไหม?")" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </a>';
      
                            return $btn;
                    })
                    ->addColumn('datex', function($row){
       
                        $btn = date("d-m-Y H:i", strtotime($row->created_at));
  
                        return $btn;
                })
                ->addColumn('types', function($row){
                    
                    if($row->type == 1){
                        $btn = 'OnLine';
                    }else{
                        $btn = 'OnGround';
                    }

                    return $btn;
            })
            ->addColumn('status', function($row){
       
                if($row->status == 1){
                    $sta = '<div id="clickme'.$row->id.'" class="clickme form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" name="status" 
                            checked="checked"
                            value="1"/>
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>';
                }else{
                    $sta = '<div id="clickme'.$row->id.'" class="clickme form-check form-check-solid form-switch form-check-custom fv-row">
                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" name="status" 
                            value="1"/>
                            <label class="form-check-label" for="allowmarketing"></label>
                        </div>';
                }
                

                return $sta;
        })
            ->addColumn('qrcode', function($row){
                    
                $btn = '<div class="symbol symbol-50px me-2">
                            <span class="symbol-label">
                            '.QrCode::size(100)->generate('https://thaestheticsforum.com/checkin/'.$row->day.'/'.$row->code).'
                            </span>
                        </div>';

                return $btn;
        })
                    ->rawColumns(['action', 'datex', 'types', 'qrcode', 'status'])
                    ->make(true);
        }
            
        return view('admin.cusday.index');

    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $objs = cusday::find($id);
        $data['url'] = url('admin/cusday/'.$id);
        $data['method'] = "put";
        $data['objs'] = $objs;
        return view('admin.cusday.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

       $this->validate($request, [
        'name' => 'required',
            'surname' => 'required',
            'clinic_name' => 'required',
            'email' => 'required',
            'day' => 'required',
            'type' => 'required',
    ]);

       if($request['type'] == 1){
        $type_2 = 'online';
    }else{
        $type_2 = 'onground';
    }

                $objs = cusday::find($id);
                $objs->name = $request['name'];
                $objs->surname = $request['surname'];
                $objs->clinic_name = $request['clinic_name'];
                $objs->email = $request['email'];
                $objs->day = $request['day'];
                $objs->type = $request['type'];
                $objs->type_2 = $type_2;
                $objs->save();

                return redirect(url('admin/cusday/'.$id.'/edit'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_cusday($id)
    {
        $obj = cusday::find($id);
            $obj->delete();

        return redirect(url('admin/cusday/'))->with('del_success','คุณทำการลบอสังหา สำเร็จ');
    }
}
