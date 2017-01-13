<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       // Check whether it registers wdc, madc, or semnas
        if($data['type'] == 'competition' && $data['competition'] == 2) {
            // Verify WDC type account
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
                'instance_name' => 'required|max:255',
                'instance_address' => 'required|max:255',
                'leader_name' => 'required|max:255',
                'leader_phone' => 'required|max:255',
            ]);
        } else if ($data['type'] == 'competition' && $data['competition'] == 3) {
             // Verify MADC type account
             return Validator::make($data, [
                 'name' => 'required|max:255',
                 'email' => 'required|email|max:255|unique:users',
                 'password' => 'required|min:6|confirmed',
                 'instance_name' => 'required|max:255',
                 'instance_address' => 'required|max:255',
                 'leader_name' => 'required|max:255',
                 'leader_phone' => 'required|max:255',
             ]);
        } else {
            // Verify semnas type account
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
                'phone' => 'required|max:255',
                'category' => 'required',
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
       // Check whether it registers wdc, madc, or semnas
        if($data['type'] == 'competition' && $data['competition'] == 2) {
           // Create WDC type account
           $user = User::create([
               'name' => $data['name'],
               'email' => $data['email'],
               'password' => bcrypt($data['password']),
               'role_id' => '2',
           ]);
           $web_team = \App\WebTeam::create([
               'user_id' => $user->id,
               'school_name' => $data['instance_name'],
               'school_address' => $data['instance_name'],
               'leader_name' => $data['leader_name'],
               'leader_phone' => $data['leader_phone'],
               'member1_name' => $data['member1_name'],
               'member1_email' => $data['member1_email'],
               'member1_phone' => $data['member1_phone'],
               'member2_name' => $data['member2_name'],
               'member2_email' => $data['member2_email'],
               'member2_phone' => $data['member2_phone'],
           ]);
            return $user;
        } else if ($data['type'] == 'competition' && $data['competition'] == 3) {
           // Create MADC type account
           $user = User::create([
               'name' => $data['name'],
               'email' => $data['email'],
               'password' => bcrypt($data['password']),
               'role_id' => '3',
           ]);
           $mobile_team = \App\MobileTeam::create([
               'user_id' => $user->id,
               'instance_name' => $data['instance_name'],
               'instance_address' => $data['instance_address'],
               'leader_name' => $data['leader_name'],
               'leader_phone' => $data['leader_phone'],
               'member1_name' => $data['member1_name'],
               'member1_email' => $data['member1_email'],
               'member1_phone' => $data['member1_phone'],
               'member2_name' => $data['member2_name'],
               'member2_email' => $data['member2_email'],
               'member2_phone' => $data['member2_phone'],
               'member3_name' => $data['member3_name'],
               'member3_email' => $data['member3_email'],
               'member3_phone' => $data['member3_phone'],
           ]);
            return $user;
        } else {
          // Create semnas type account
          $user = User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => bcrypt($data['password']),
              'role_id' => '4',
          ]);
          $seminar_registration = \App\SeminarRegistration::create([
              'user_id' => $user->id,
              'phone' => $data['phone'],
              'category' => $data['category'],
          ]);
            return $user;
        }
    }
}
