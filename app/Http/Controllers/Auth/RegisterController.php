<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Tienda;
use Illuminate\Http\Request;
use App\Calificacione;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/lo-mas-hot';

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd($data);
        $request = request();

       // dd( $request );

        $photo = null;
        $lc = null;
        $cm = null;
        $ap = null;
        if( $request->file('photo') ){
            $profileImage = $request->file('photo');
            $profileImageSaveAsName = time() . "-profile." . $profileImage->getClientOriginalExtension();

            $upload_path = 'storage/img/';
            $profile_image_url = "img/". $profileImageSaveAsName;
            $photo = $profile_image_url;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        }

        if( $request->file('lc') ){
            $profileImage = $request->file('lc');
            $profileImageSaveAsName = time() . "-lc." . $profileImage->getClientOriginalExtension();

            $upload_path = 'storage/img/';
            $profile_image_url = "img/" . $profileImageSaveAsName;
            $lc = $profile_image_url;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        }

        if( $request->file('cm') ){
            $profileImage = $request->file('cm');
            $profileImageSaveAsName = time() . "-cm." . $profileImage->getClientOriginalExtension();

            $upload_path = 'storage/img/';
            $profile_image_url = "img/" . $profileImageSaveAsName;
            $cm = $profile_image_url;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        }

        if( $request->file('ap') ){
            $profileImage = $request->file('ap');
            $profileImageSaveAsName = time() . "-ap." . $profileImage->getClientOriginalExtension();

            $upload_path = 'storage/img/';
            $profile_image_url = "img/" . $profileImageSaveAsName;
            $ap = $profile_image_url;
            $success = $profileImage->move($upload_path, $profileImageSaveAsName);
        }

        
        //dd($data);
        if( intval($data["role_id"]) == 5 ){
            
            $user = new User;
            $user->name = $data['name'];
            $user->phone = $data['phone'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->avatar = $photo;
            $user->role_id = 5;
            $user->save();
            
            
            /*RoleUser::create([
                "role_id" =>  intval($data["role_id"]) ,
                "user_id" => $user->id
            ]);*/
        }
        if( intval($data["role_id"]) == 3 ){
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->dni = $data['type_document'] . "-" .$data['dni'];
            $user->address = $data['address'];
            $user->branches = $data['branches'];
            $user->password = Hash::make($data['password']);
            $user->avatar = $photo;
            $user->role_id = 3;
            $user->save();
            
            $tienda = new Tienda;
            $tienda->user_id = $user->id;
            $tienda->save();

            $calificacion = new Calificacione;
            $calificacion->calificacion = 5;
            $calificacion->tienda_id = $tienda->id;
            $calificacion->save();
            

            /*RoleUser::create([
                "role_id" =>  intval($data["role_id"]) ,
                "user_id" => $user->id
            ]);*/
        }
        if( intval($data["role_id"]) == 4){
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->dni = $data['type_document'] . "-" .$data['dni'];
            $user->address = $data['address'];
            $user->last_work = $data['last_work'];
            $user->last_boss = $data['last_boss'];
            $user->password = Hash::make($data['password']);
            $user->avatar = $photo;
            $user->lc = $lc;
            $user->cm = $cm;
            $user->ap = $ap;
            $user->role_id = 4;
            $user->save();
            
            /*RoleUser::create([
                "role_id" =>  intval($data["role_id"]) ,
                "user_id" => $user->id
            ]);*/
        }

        
        
        return $user;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function DniValidate(Request $request)
    {
        
    }

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function EmailValidate(Request $request)
    {
        if ($request->has('email')) {

            $find = User::where('email', $request->email)->first();
            if ($find) {
               return 1;
            }else{
                return 0;
            }
            
        }else{
            return response(['error' => 'Email no found'],500);
        }
    }
}
