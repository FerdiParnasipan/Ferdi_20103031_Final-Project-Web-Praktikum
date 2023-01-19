<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        //request adalah isi dari apa yang sudah kita input
        //closure adalah perintah untuk melanjutkan kehalaman selanjutnya
        //roles adalah kumpulan role yang diperbolehkan
        if (in_array($request->user()->role, $roles)) {
            # jika array role dari auth itu terdaftar pada middleware maka silakan lanjutkan
            return $next($request);
        }
        #jika tidak ada maka kehalaman 403
        return abort(403);
    }
}
