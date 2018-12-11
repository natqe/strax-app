<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\SigninRequest,
    App\Http\Requests\SignupRequest,
    App\User,
    Session,
    Cart;

class UserController extends MainController {

    function __construct() {
        parent::__construct();
        $this->middleware('usersigned', ['except' => ['logout', 'account']]);
    }

    public function signup() {
        self::$data['title'] = 'sign-up';
        return view('HTML.account-1', self::$data);
    }

    public function postSignup(SignupRequest $request) {
        User::save_new($request);
        $rd=!empty($request['rd'])?$request['rd']:'';
        return redirect($rd);
    }

    public function signin() {
        self::$data['title'] = 'Sign-in';
        return view('HTML.signin', self::$data);
    }

    public function postSignin(SigninRequest $request) {
        $rd=!empty($request['rd'])?$request['rd']:'';
        dd(User::verifyUser($request));
        if (User::verifyUser($request)) {
            return redirect($rd);
        } else {
            self::$data['title'] = 'Sign-in';
            return redirect($rd)->withErrors('Wrong email/password combination');
        }
    }

    public function logout() {
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('is_admin');
        $rd=!empty($_GET['rd'])?$_GET['rd']:'';
        return redirect($rd);
    }

    public function account() {
        return view('HTML.account', self::$data);
    }

    public function myAddress() {
        return view('HTML.my-address', self::$data);
    }

    public function addAddress() {
        return view('HTML.add-address', self::$data);
    }

    public function userInformation() {
        return view('HTML.user-information', self::$data);
    }

    public function orderList() {
        return view('HTML.order-list', self::$data);
    }

    public function orderStatus() {
        return view('HTML.order-status', self::$data);
    }

    public function forgotPassword() {
        return view('HTML.forgot-password', self::$data);
    }

    /*
      public function checkout1() {
      return view('HTML.checkout-1');
      }

      public function checkout2() {
      return view('HTML.checkout-2');
      }

      public function checkout3() {
      return view('HTML.checkout-3');
      }

      public function checkout4() {
      return view('HTML.checkout-4');
      }

      public function checkout5() {
      self::$data['cart'] = Cart::getContent()->toArray();
      return view('HTML.checkout-5', self::$data);
      }
     */

    public function wishlist() {
        return view('HTML.wishlist', self::$data);
    }

}
