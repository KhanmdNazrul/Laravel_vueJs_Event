<?php
namespace App\Http\Controllers\Auth\Attendee;

use App\Models\Attendee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('login.attendee_register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Attendee::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $attendee = Attendee::create([
            'name' => $request->name,
            'phone' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Auth::guard('attendee')->login($attendee);

        // return redirect(RouteServiceProvider::ATTENDEE_DASHBOARD);
        return redirect()->route('attendee.login');
    }
}
