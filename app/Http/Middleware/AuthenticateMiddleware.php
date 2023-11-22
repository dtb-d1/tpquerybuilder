<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AuthenticateMiddleware

{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {
        $users = [
            [
                'username' => 'user1',
                'email' => 'user1@example.com',
                'password' => 'password1',
                'role' => 'user'
            ],
            [
                'username' => 'user2',
                'email' => 'user2@example.com',
                'password' => 'password2',
                'role' => 'admin'
            ],
            // Add more user entries as needed
        ];
        $email = $request->input('email');
        $password = $request->input('password');


        foreach($users as $user){
            if($user['email']===$email&&$user['password']===$password){
                return $next($request);
            }
        }
        return redirect('/login');




       
    }
}
