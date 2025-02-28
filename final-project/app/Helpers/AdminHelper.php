<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('admin')) {
    function admin()
    {
        $user = Auth::user();
        return $user && $user->role === 'admin' ? $user : null;
    }
}
