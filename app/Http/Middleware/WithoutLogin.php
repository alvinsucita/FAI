<?php

namespace App\Http\Middleware;

use Closure;

// [1 - lanjutan] Di bawah ini merupakan middleware WithoutLogin. Proses pengecekan untuk middleware apapun dilakukan pada function handle
class WithoutLogin
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
        // Data user yang sedang login disimpan pada session dengan key "auth". Jika terdapat key auth pada session, berarti user tidak memenuhi kriteria middleware ini sehingga diredirect ke home page.
        if ($request->session()->has('auth')) {
            $user = $request->session()->get('auth');
            // if($user==="admin"){
            //     return redirect('/admin/vendor/new');
            // }
            // if($user->type==0){
            //     return redirect('/vendor');
            // }
            // if($user->type==1){
                return redirect('/user');
            // }
        }
        // Jika user memang belum login (tidak terdapat key "auth" pada session), maka request dilanjutkan.
        return $next($request);
    }
}
// Setelah selesai membuat middleware ini, akan dibuat middleware kedua, yaitu middleware WithLogin. Buatlah dengan menjalankan perintah `php artisan make:middleware WithLogin`. Bukalah file tersebut [2]
