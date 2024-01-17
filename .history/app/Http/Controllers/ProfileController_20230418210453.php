<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        Log::info($request->all());
        if ($request->image2 != null) {
            Log::info("in if");
            $fileName = 'Uploads/Profile' . '/' . microtime() . '.' . $request->image2->getClientOriginalExtension();
            $request->image2->move(public_path('Uploads/Espece'),$fileName);
            //$espece->image = $fileName;
            //$request->merge(['image' => $fileName]);
            $request->request->add(['image' => $fileName]); //add request
            //$request->request->replace(['image' => $fileName]); //replace request
        }
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        Log::info($request->all());
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
