<?php
/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
/**
 * Import app
 */
use App\Models\M_User;

class C_Login_Admin extends Controller
{
    public function proses_login(Request $request)
    {
        /**
         * Get data from POST
         * if development mode go add this route -> controller to CSRF whitelist
         */
        $username = $request -> username;
        $password = $request -> password;
        /**
         * Check total user
         */
        $jlhUsername = M_User::where('username', $username) -> count();
        /**
         * Check & give result if user total < 1
         */
        if($jlhUsername > 0){
            /**
             * Get password from database with model
             */
            $dataUser = M_User::where('username', $username) -> first();
            $passwordUserDb = $dataUser -> password;
            /**
             * Get password verify with native php
             */
            $cekPassword = password_verify($password, $passwordUserDb);
            /**
             * Check if password true or false
             */
            if($cekPassword == true){
                /**
                 * if true, create session & status success of respond
                 */
                $statusLogin = 'success';
            }else{
                /**
                 * if false, create status error of respond
                 */
                $statusLogin = 'wrong_password';
            }
        }else{
            $statusLogin = 'no_user';
        }
        /**
         * Return respon json to client
         */
        $dr = ['status' => $statusLogin];
        return \Response::json($dr);
    }
}
