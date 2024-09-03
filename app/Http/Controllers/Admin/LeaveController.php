<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function index()
    {
        $leaves = Leave::with('user')->get();
        $id_user = Auth::user()->id;
        $data = User::where('id', $id_user)->get();
        $name = User::where('id', $id_user)->value('name');

        // Menampilkan view dengan data pegawai
        return view('pages.admin.leave.kelolacuti', compact('leaves', 'name'));
    }

    public function show() {}

    public function create()
    {
        return view('pages.admin.leave.pengajuancuti');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'id' => 'required|exists:leaves,id',
            'status' => 'required|in:0,1',
            'reason' => 'nullable|string|max:255',
        ]);

        // Temukan record cuti
        $leaves = Leave::findOrFail($request->id);

        // Perbarui status cuti
        $leaves->status = $request->status;
        $leaves->reason = $request->status == '1' ? $request->reason : null; // Simpan alasan jika status 'Ditolak'
        $leaves->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('kelolacuti')->with('success', 'Status pengajuan cuti berhasil diperbarui.');
    }



    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
