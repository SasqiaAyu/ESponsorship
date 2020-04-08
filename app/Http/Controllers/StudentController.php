<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use App\Proposal;
use App\Company;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function back(Request $request){
        //
          //
          $user = User::where('jenis_user',2)->where('approve',1)->Where('nama','like', '%'. $request->cari.'%')->skip(($request->page*10)-20)->take(10)->get();
          $data = [];
          
          foreach ($user as $key => $value) {
              # code...
              if($value->company->kategori == $request->kategori){
                $arr =[
                    'name' =>  $value->nama,
                    'deskripsi' => $value->company->deskripsi,
                    'img' => $value->foto_sumber,
                    'company_id' => $value->company->id,

                ];
                array_push($data, $arr);

            }
              
          }
  
          return response()->json( ["data" => $data, "page" => $request->page-1] );
    }

    public function forward(Request $request){
        //
        $user = User::where('jenis_user',2)->where('approve',1)->Where('nama','like', '%'. $request->cari.'%')->skip($request->page*10)->take(10)->get();
        $data = [];
        
        foreach ($user as $key => $value) {
            # code...
            if($value->company->kategori == $request->kategori){
                $arr =[
                    'name' =>  $value->nama,
                    'deskripsi' => $value->company->deskripsi,
                    'img' => $value->foto_sumber,
                    'company_id' => $value->company->id,

                ];
                array_push($data, $arr);

            }
            
        }

        return response()->json( ["data" => $data, "page" => $request->page+1] );
    }

    public function cari(Request $request){
        //
        // return $request;
        $user = User::where('jenis_user',2)->where('approve',1)->Where('nama','like', '%'. $request->cari.'%')->skip(0)->take(10)->get();
        $data = [];
        // return $user;
        foreach ($user as $key => $value) {
            # code...
            if($value->company->kategori == $request->kategori){
                $arr =[
                    'name' =>  $value->nama,
                    'deskripsi' => $value->company->deskripsi,
                    'img' => $value->foto_sumber,
                    'company_id' => $value->company->id,

                ];
                array_push($data, $arr);

            }
            
        }

        return response()->json( ["data" => $data, "page" => 1] );
    }

    public function kategori(Request $request){
        //
        // return $request;
        $user = User::where('jenis_user',2)->where('approve',1)->Where('nama','like', '%'. $request->cari.'%')->skip(0)->take(10)->get();
        $data = [];
        // return $user;
        foreach ($user as $key => $value) {
            # code...
            if($value->company->kategori == $request->kategori){
                $arr =[
                    'name' =>  $value->nama,
                    'deskripsi' => $value->company->deskripsi,
                    'img' => $value->foto_sumber,
                    'company_id' => $value->company->id,

                ];
                array_push($data, $arr);

            }
        }

        return response()->json( ["data" => $data, "page" => 1] );
    }

    public function pengajuan(Request $request){
        // return $request;
        $student = Student::where('user_id', auth()->user()->id)->first();
        // return $student;
        $array_file = array(
        "application/msword",
        "application/pdf","application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        );
        $uploadedFile = $request->file('proposal');  
        $type = $uploadedFile->getClientMimeType();
        $checkpdf = array_search($type, $array_file);
        if( $checkpdf != "" ) {
            $proposal = Proposal::create([
                'student_id' => $student->id,
                'company_id' => $request->company_id,
                'file_sumber' => substr($request['proposal']->store('public/proposal/'),7),
                'file_nama' => $request['proposal']->getClientOriginalName(),
                'file_tipe' => $request['proposal']->getClientMimeType(),
            ]);
        }
        return redirect("/home");
    }

    public function profilePerusahaan(Request $request){
        $company = Company::find($request->company_id);
        $user_company = $company->user;
        return response()->json( ["company" => $company, "user" => $user_company] );

    }
    
}
