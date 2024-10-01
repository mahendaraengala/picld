<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

interface UserInterface
{
    public function viewUserList();
    public function viewUserPreview($id);
}

class UserController extends Controller implements UserInterface
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    /**
     * View User List
     *
     * @return mixed
     */
    public function viewUserList(): mixed
    {
        try {

            $users = User::all();

            return view('admin.pages.user.user-list', [
                'users' => $users,
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * View User Preview
     *
     * @return mixed
     */
    public function viewUserPreview($uuid): mixed
    {
        try {

            $user = User::where('uuid', $uuid)->first();

            if (!$user) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'User not found',
                    'description' => 'User not found with specified ID'
                ]);
            }

            return view('admin.pages.user.user-preview', [
                'user' => $user
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}
