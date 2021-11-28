<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Socialite;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    


    
    
    public function redirectToGoogle()
    {
        // Google へのリダイレクト
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        // email が合致するユーザーを取得
        $user = User::firstOrCreate([
            'name'=>$user->getName(),
            'email'=>$user->getEmail(),
            'provider_id'=>$user->getId(),
            
        ]);
        
            where('email', $gUser->email)->first();
        // 見つからなければ新しくユーザーを作成
        if ($user == null) {
            $user = $this->createUserByGoogle($gUser);
        }
        ログイン処理
        \Auth::login($user, true);
        
        Auth::login($user, true);
        return redirect('/home');
    }

    
}
