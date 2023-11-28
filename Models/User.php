<?php

namespace App\Models\Users;

// include './Model.php';
use App\Models\Model;

class User extends Model
{
    public static $table = 'users';
}
// $user1 = User::create(['name' => 'John Doe', 'email' => 'john@example.com']);
$users = User::get();
$user1 = $users[0];

// $user1->update(['name' => 'hamza']);

// var_dump(User::find(1));
// $user = User::find(1);
// echo $user->id;
// ----- delete user --------------------
// $user = User::find(2);
// echo $user->delete();