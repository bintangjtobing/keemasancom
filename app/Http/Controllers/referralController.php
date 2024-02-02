<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Subdomain;
use App\Models\Bank;
use App\Models\Peringkat;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class referralController extends Controller
{
    public function index(Request $request)
    {
        $sesi = session()->getId();
        $ip = $request->ip();

        // Delete all subdomains with MID = 0
        Subdomain::where('MID', 0)->delete();

        $refid = $this->determineRefId($request, $sesi);

        // Update session and subdomain records
        Session::put('refid', $refid);
        $this->updateSubdomainRecords($refid, $sesi, $ip);

        // Fetch sponsor data
        return $this->fetchSponsorData($refid);
    }

    private function determineRefId(Request $request, $sesi)
    {
        if ($request->has('m')) {
            $referral = Member::where('mb_username', $request->input('m'))
                ->where('mb_status', 1)
                ->where('mb_kapasitas_petani', '>', 0)
                ->first();

            return $referral ? $referral->MID : $this->getRandomRefId();
        } else {
            $sqlref = Subdomain::where('sesi', $sesi)->first();
            return $sqlref ? $sqlref->MID : $this->getRandomRefId();
        }
    }

    private function getRandomRefId()
    {
        $randomReferral = Member::where('mb_status', 1)
            ->where('mb_kapasitas_petani', '>', 0)
            ->inRandomOrder()
            ->first();

        return $randomReferral ? $randomReferral->MID : null;
    }

    private function updateSubdomainRecords($refid, $sesi, $ip)
    {
        Subdomain::where('sesi', $sesi)->delete();

        if ($refid) {
            Subdomain::create([
                'MID' => $refid,
                'ip' => $ip,
                'sesi' => $sesi
            ]);
        }
    }

    private function fetchSponsorData($refid)
    {
        $sponsor = Member::inRandomOrder()->whereIn('idperingkat',  [4, 5, 6])->first();
        $config = DB::table('tbl_web_config')->first();
        if (!$sponsor) {
            return response()->json(['message' => 'Sponsor not found'], 404);
        }

        $bank = Bank::find($sponsor->bk_id);
        $prkt = Peringkat::find($sponsor->idperingkat);

        $awalan = substr($sponsor->mb_telpon, 0, 3);
        $awalane = str_replace('0', '62', $awalan);
        $sponsor_wa = str_replace($awalan, $awalane, $sponsor->mb_telpon);
        $sponsor_fotone = !empty($sponsor->mb_foto) ? "https://keemasan.id/system/images/member/" . $sponsor->mb_foto : "no-images.png";

        return view('home.ref', [
            'sponsor_id' => $sponsor->MID,
            'sponsor_ky_id' => $sponsor->ky_id,
            'sponsor_wa' => $sponsor_wa,
            'sponsor_fotone' => $sponsor_fotone,
            'sponsor_peringkat' => $prkt ? $prkt->peringkat : "",
            'sponsor_bank' => $bank ? $bank->bk_bank : null,
            'sponsor_nama' => $sponsor->mb_nama,
            'sponsor_username' => $sponsor->mb_username,
            'sc_name' => $config->sc_name,
        ]);
        // return response()->json(
        //     [
        //         'sponsor_id' => $sponsor->MID,
        //         'sponsor_ky_id' => $sponsor->ky_id,
        //         'sponsor_wa' => $sponsor_wa,
        //         'sponsor_fotone' => $sponsor_fotone,
        //         'sponsor_peringkat' => $prkt ? $prkt->peringkat : "",
        //         'sponsor_bank' => $bank ? $bank->bk_bank : null,
        //         'sponsor_nama' => $sponsor->mb_nama,
        //         'sponsor_username' => $sponsor->mb_username,
        //         'sc_name' => $config->sc_name,
        //     ]
        // );
    }
    public function webConfig()
    {
        // Implement the logic from web_config()
        // Example:
        $config = DB::table('tbl_web_config')->first();
        // Process and return the configuration data
    }

    public function listSocial()
    {
        // Implement the logic from list_social()
        // Example:
        $socials = DB::table('tbl_social')->get();
        // Process and return the social data
    }

    public function dataReferral($refid)
    {
        // Implement the logic from data_referral()
        $sponsor = Member::find($refid);
        if ($sponsor) {
            // Process and return the sponsor data
            return response()->json($sponsor);
        }
        return response()->json(['message' => 'Sponsor not found'], 404);
    }
}
