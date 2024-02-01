<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'tbl_member';
    protected $fillable = [
        'MID',
        'PIN',
        'ky_id',
        'ky_prefix',
        'ky_pb',
        'idperingkat',
        'SpMID',
        'UpMID',
        'KiriMID',
        'KananMID',
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'posisi',
        'mb_ip',
        'mb_username',
        'mb_password',
        'mb_pas',
        'mb_tanggal_join',
        'mb_tanggal_expire',
        'mb_nama',
        'mb_identitas',
        'mb_identitas_foto',
        'mb_tanggal_lahir',
        'mb_kelamin',
        'mb_alamat',
        'lokasi_kode',
        'mb_telpon',
        'mb_email',
        'bk_id',
        'mb_rekening',
        'mb_akun_bank',
        'mb_bank_asal',
        'mb_ahliwaris',
        'mb_ahliwaris_hubungan',
        'mb_status',
        'mb_status_stokist',
        'mb_tipe_stokist',
        'mb_foto',
        'mb_login_akhir',
        'mb_ip_sebelum',
        'mb_minggu',
        'mb_bulan',
        'mb_tahun',
        'mb_sesi',
        'mb_funder',
        'mb_share',
        'MID_funder',
        'plan_b',
        'MID_parent',
        'mb_aktivasi',
        'mb_tanggal_aktivasi',
        'mb_minggu_aktivasi',
        'mb_bulan_aktivasi',
        'mb_tahun_aktivasi',
        'mb_pin_rhs',
        'mb_ro_generasi',
        'mb_ro_matching',
        'mb_ro_profit_share',
        'mb_titik',
        'mb_paket',
        'idpaketreg',
        'idpaketprod',
        'mb_max_pasangan',
        'mb_maksimal_bonus',
        'mb_reward',
        'mb_id_telegram',
        'mb_kode_telegram',
        'mb_status_telegram',
        'mb_status_carity',
        'mb_verifikasi',
        'mb_verifikasi_reject',
        'post_free',
        'mb_hak_royalti',
        'mb_royalti',
        'mb_kapasitas_petani',
        'mb_petani_aktif',
        'idkebun',
        'mb_jumlah_pohon',
        'mb_rekening_pegadaian',
        'mb_vendor_status',
        'mb_vendor_reg',
        'mb_vendor_reg_tgl',
        'mb_vendor_usaha',
        'mb_vendor_verifikasi',
        'mb_vendor_legalitas',
    ];
}
