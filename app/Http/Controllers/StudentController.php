<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $student = DB::table('students')->get();
        return view('student.index',compact('student'));
    }


    public function cari(Request $request)
    {
        $cari = $request->cari;;

        $student = DB::table('students')->where('nama','like',"%".$cari."%")->get();

        return view('student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Cara 1 Menggunakan Object Student
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // Cara 2 Menggunakan Model sendiri Student

        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // Cara 3 Menggunakan method All()

        $request->validate([
            'nama' => 'required',
            'nim'=> 'required'
        ]);

        Student::create($request->all());

        return redirect('/student')->with('status','Data Student Berhasil Ditambahkan !');
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
        return view('student.show',compact('student'));
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
        return view('student.edit', compact('student'));
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

        $request->validate([
            'nama' => 'required',
            'nim' => 'required'
        ]);
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
            return redirect('/student')->with('status','Data Student Berhasil Di Edit');
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
        Student::destroy($student->id);
        return redirect('/student')->with('status','Data Student Berhasil Di Hapus');
    }
}
