<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function edit()
    {
        $resume = Resume::latest()->first();

        return view('admin.resume.edit', compact('resume'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'resume' => [
                'required',
                'file',
                'mimes:pdf',
                'max:10240',
            ],
        ]);

        $oldResume = Resume::latest()->first();

        // Hapus CV lama
        if ($oldResume) {

            if ($oldResume->file_path) {
                Storage::disk('public')
                    ->delete($oldResume->file_path);
            }

            $oldResume->delete();
        }

        // Simpan CV baru
        $path = $request
            ->file('resume')
            ->store('resume', 'public');

        Resume::create([
            'file_path' => $path,
            'file_name' => $request->file('resume')->getClientOriginalName(),
        ]);

        return redirect()
            ->route('admin.resume.edit')
            ->with('success', 'CV berhasil diperbarui.');
    }
}
