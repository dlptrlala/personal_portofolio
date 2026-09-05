<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        $profile = ProfileSetting::first();

        if (!$profile) {
            $profile = ProfileSetting::create();
        }

        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240'
            ],

            'hero_position_x' => [
                'required',
                'integer',
                'between:0,100'
            ],

            'hero_position_y' => [
                'required',
                'integer',
                'between:0,100'
            ],

            'hero_rotation' => [
                'required',
                'integer',
                'between:-180,180'
            ],

            'about_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240'
            ],

            'about_position_x' => [
                'required',
                'integer',
                'between:0,100'
            ],

            'about_position_y' => [
                'required',
                'integer',
                'between:0,100'
            ],

            'about_rotation' => [
                'required',
                'integer',
                'between:-180,180'
            ],
        ]);

        $profile = ProfileSetting::first();

        if (!$profile) {
            $profile = new ProfileSetting();
        }

        /*
        |--------------------------------------------------------------------------
        | HERO IMAGE
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('hero_image')) {

            if ($profile->hero_image) {
                Storage::disk('public')->delete(
                    $profile->hero_image
                );
            }

            $validated['hero_image'] =
                $request->file('hero_image')
                    ->store('profile', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | ABOUT IMAGE
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('about_image')) {

            if ($profile->about_image) {
                Storage::disk('public')->delete(
                    $profile->about_image
                );
            }

            $validated['about_image'] =
                $request->file('about_image')
                    ->store('profile', 'public');
        }

        $profile->fill($validated);
        $profile->save();

        return redirect()
            ->route('admin.profile.edit')
            ->with('success', 'Profile berhasil diperbarui.');
    }
}
