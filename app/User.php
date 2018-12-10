<?php

namespace App;

use Illuminate\Database\Eloquent\Model,
    DB,
    Hash,
    Session;

class User extends Model {

    static public function verifyUser($request) {
        $valid = false;
        $sql = "SELECT * FROM users u JOIN users_roles r ON u.id = r.uid WHERE u.email = ?";
        $user = DB::select($sql, [$request['log_email']]);
        if ($user) {
            $user = $user[0];
            if (Hash::check($request['log_password'], $user->password)) {
                $valid = true;
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
                if ($user->role == 3) {
                    Session::put('is_admin', true);
                }
                Session::flash('sm', 'welcome back, ' . '<b>' . $user->name . '</b>');
            }
        }
        return $valid;
    }

    static public function save_new($request) {
        $user = new self();
        $user->name = $request['reg_name'];
        $user->email = $request['reg_email'];
        $user->password = bcrypt($request['reg_password']);
        $user->save();
        DB::insert("INSERT INTO users_roles VALUES($user->id, 4)");
        Session::put('user_id', $user->id);
        Session::put('user_name', $user->name);
        Session::flash('sm', '<b>' . $user->name . ',</b>' . ' your account has been successfully created');
    }

}
