<?php

class UserController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |   
    |  CRUD User
    |
    */
    public function getIndex() {
        $users = User::all();
        return View::make('user.index')->with('users', $users);
    }

    public function getView($id) {
        $user = User::find($id);
        if ($user == null) return App::abort(404);
        return View::make('user.view')->with('user', $user);
    }

    public function getCreate() {
        $user = new User();
        return View::make('user.form')->with('user', $user);
    }

    public function getUpdate($id) {
        $user = User::find($id);
        if ($user == null) return App::abort(404);
        return View::make('user.form')->with('user', $user);
    }

    public function postUpdate($id) {
        $input = Input::all();
        $user = User::find($id);
        if ($user == null) App::abort(404);
        $user->fill($input);
        $user->save();
        return Redirect::to('user/index');
    }


    public function getDelete($id) {
        $user = User::find($id);
        if ($user == null) return App::abort(404);
        $user->delete();
        return Redirect::to('user/index');
    }

    public function postCreate() {
        $input = Input::all();
        $user = new User($input);
        $user->password = Hash::make($user->password);
        $user->point = 0;
        $user->save();
        return Redirect::to('admin/user/index');
    }


}