<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function loginAs(LoginRequest $request)
    {
        $user = $this->checkLogin($request['username'], $request['password']);

        if (false == $user) {
            return redirect()->route('frontend.user.login')
                ->withFlashDanger('ログインID、またはパスワードが正しくありません。');
        }

        session()->put(
            'admin',
            [
                'name' => $user->name,
                'id' => $user->id,
            ]
        );
        return redirect()->route('backend.admin.dashboard');
    }

    public function checkLogin($username, $password)
    {
        $user = DB::table('users')->where('name', $username)->first();
        if ($user) {
            if (true == Hash::check($password, $user->password)) {
                return $user;
            }
            return false;
        }
        return false;
    }
}

