<?php

use App\Http\Controllers\referralController;
use App\Models\Member;
use App\Models\PohonEmas;
use Illuminate\Support\Facades\Route;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Http;

Route::get('/', [referralController::class, 'index']);
Route::get('/{username}', [referralController::class, 'userFind']);
Route::get('/web-config', [ReferralController::class, 'webConfig']);
Route::get('/list-social', [ReferralController::class, 'listSocial']);
Route::get('/data-referral/{refid}', [ReferralController::class, 'dataReferral']);
Route::view('/kenapa-kami', 'home.why')->name('kenapaKami');
Route::view('/produk-layanan', 'home.product')->name('produk');
Route::view('/perusahaan', 'home.company')->name('perusahaan');
Route::view('/berita', 'home.news')->name('berita');
Route::view('/hubungi-kami', 'home.contact');
Route::view('/faqs', 'home.faqs');

// Route dengan parameter
Route::get('/reff', function () {
    return view('home.ref');
});
Route::get('/sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/kenapa-kami'))
        ->add(Url::create('/produk-layanan'))
        ->add(Url::create('/perusahaan'))
        ->add(Url::create('/berita'))
        ->add(Url::create('/hubungi-kami'));
    $sitemap->writeToFile(public_path('sitemap.xml'));
});
Route::get('/proxy/fetch', function () {
    try {
        $member = Member::where('mb_status', '1')->inRandomOrder()->first();

        if (!$member) {
            throw new \Exception("Member tidak ditemukan");
        }

        $nama_pendek = implode(" ", array_slice(explode(" ", strip_tags($member->mb_nama)), 0, 2));
        $inv = PohonEmas::where('MID', $member->MID)->sum('gram');

        $data = [
            'nama_pendek' => $nama_pendek,
            'inv' => $inv,
            'action' => $inv > 0 ? 'belanja' : 'bergabung',
        ];

        return view('partials.notification', ['data' => $data]);
    } catch (\Exception $e) {
        // Handle the exception
        return response()->json(['error' => $e->getMessage()], 500);
    }
});
