<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    public function index()
    {
        $allsertifikat = Sertifikat::all();
        return view ('sekum.sertifikat.sertifikat', compact('allsertifikat'));
    }
    public function create()
    {
        return view ('sekum.sertifikat.add-sertifikat');
    }
    public function store(Request $request)
    {
        //data akan diproses di sini ketika disubmit

        // validate data
        $validatedData=$request->validate([
            'nomor_sertifikat'=>'required',
            'nama_penerima'=>'required|string|max:100',
            'peran_penerima'=>'required',
            'nama_kegiatan'=>'required|string|max:100',
            'tanggal_sertifikat'=>'required|date',
            'file'=>'required|file|mimes:pdf,doc,docx|max:10240'
        ]);

        //simpan file ke dalam storage
        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->storeAs('Sertifikat', $filename, 'public');

        //simpan nama file ke database
        $validatedData['file'] = $filename;

        //simpan data
        Sertifikat::create($validatedData);

        //redirect to index ketika berhasil disimpan
        return redirect()->route('sertifikat.index');
    }
    public function show(Sertifikat $sertifikat)
    {
        return view ('sekum.sertifikat.sertifikat', compact('sertifikat'));
    }

    public function edit(Sertifikat $sertifikat)
    {
        return view ('sekum.sertifikat.edit-sertifikat', compact('sertifikat'));
    }

    public function update(Request $request, Sertifikat $sertifikat)
    {
        //function yang memproses saat update disubmit
        // validate data
        $validatedData=$request->validate([
            'nomor_sertifikat'=>'required',
            'nama_penerima'=>'required|string|max:100',
            'peran_penerima'=>'required',
            'nama_kegiatan'=>'required|string|max:100',
            'tanggal_sertifikat'=>'required|date',
            'file'=>'nullable|file|mimes:pdf,doc,docx|max:10240'
        ]);
        
        //cek apakah user upload file baru
        if ($request->hasFile('file')){
            
            // hapus file ketika sudah ada
            if($sertifikat->file){
                Storage::disk('public')->delete('Sertifikat/'.$sertifikat->file);
            }
        
            // simpan ke file baru
            $file =$request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->storeAs('Sertifikat', $filename, 'public');

            // update nama file di database
            $validatedData['file']=$filename;
        }

        // update data
        $sertifikat->update($validatedData);

        // redirect ke index ketika berhasil disimpan
        return redirect()->route('sertifikat.index');
      
    }

    public function destroy(Sertifikat $sertifikat)
    {
        $sertifikat->delete();
        return redirect()->route('sertifikat.index');
    }
}
