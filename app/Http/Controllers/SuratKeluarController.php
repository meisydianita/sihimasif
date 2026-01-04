<?php

namespace App\Http\Controllers;

use App\Models\Suratkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    public function index()
    {
         $allsuratkeluar = Suratkeluar::all();
         return view ('sekum.suratkeluar.surat-keluar', compact('allsuratkeluar'));
    }
    public function create()
    {
        return view ('sekum.suratkeluar.add-suratkeluar');
    }

    public function store(Request $request)
    {
        //data akan diproses di sini ketika disubmit

        //validate data
        $validatedData=$request->validate([
            'jenis_surat'=>'required',
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'tujuan_surat' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'file_surat' => 'required|file|mimes:pdf,doc,docx|max:10240'
        ]);

        //simpan file ke dalam storage
        $file =$request->file('file_surat');
        $filename = time().'_'. $file->getClientOriginalName();
        $file->storeAs('SuratKeluar', $filename, 'public');

        // simpan nama file ke database
        $validatedData['file_surat'] = $filename;

        //simpan data
        Suratkeluar::create($validatedData);

        //redirect to index ketika berhasil disimpan
        return redirect()->route('suratkeluar.index');
    }

    public function show(SuratKeluar $suratkeluar)
    {
        // menampilkan detail data
        return view ('sekum.suratkeluar.surat-keluar', compact('suratkeluar'));
    }

    public function edit(SuratKeluar $suratkeluar)
    {
        return view ('sekum.suratkeluar.edit-suratkeluar', compact('suratkeluar'));
    }

    public function update(Request $request, SuratKeluar $suratkeluar)
    {
        //function yang memproses saat update disubmit
        //validate data
        $validatedData=$request->validate([
            'jenis_surat'=>'required',
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'tujuan_surat' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'file_surat' => 'nullable|file|mimes:pdf,doc,docx|max:10240'
        ]);

        //cek apakah user upload file baru
        if ($request->hasFile('file_surat')){

            //hapus file ketika sudah ada
            if ($suratkeluar->file_surat){
                Storage::disk('public')->delete('SuratKeluar/'.$suratkeluar->file_surat);
            }
            
            //simpan ke file baru
            $file =$request->file('file_surat');
            $filename = time().'_'. $file->getClientOriginalName();
            $file->storeAs('SuratKeluar', $filename, 'public');

            //update nama file di database
            $validatedData['file_surat']=$filename;
        }

        //update data
        $suratkeluar->update($validatedData);

        //redirect to index ketika berhasil disimpan
        return redirect()->route('suratkeluar.index');

    }

    public function destroy(SuratKeluar $suratkeluar)
    {
        $suratkeluar->delete();
        return redirect()->route('suratkeluar.index');

    }
}
