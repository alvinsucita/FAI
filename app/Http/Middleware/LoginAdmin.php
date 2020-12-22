<?php

namespace App\Http\Middleware;

use Closure;

// [2 - lanjutan] Fungsi dari middleware ini adalah kebalikan dari middleware sebelumnya. Middleware ini berfungsi untuk "menendang" user yang belum login ketika mencoba mengakses hal-hal yang seharusnya hanya boleh diakses ketika sudah login saja. Seperti pada middleware lainnya, pengecekan diletakkan pada function handle.
class LoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah user tidak terlogin
        if (!$request->session()->has('auth')) {
            return redirect('/login');
        }
        else{
            $user = $request->session()->get('auth');
            if(!($user==="admin")){
                if($user->type==0){
                    return redirect('/vendor');
                }
                if($user->type==1){
                    return redirect('/menu/manage');
                }
            }
        }
        // Jika sudah login, request dapat dilanjutkan.
        return $next($request);
    }
}
// Kedua middleware yang dibuat perlu diregistrasikan pada Kernel.php sebelum dapat digunakan. Bukalah file Kernel.php [3]
