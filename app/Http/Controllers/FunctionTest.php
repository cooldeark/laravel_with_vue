<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionTest extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        header('Status: 200');
        // echo response()->json('ok', 200);
        dd(response()->json('ok', 200));
        // Enter your code here, enjoy!

        $authorization = "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwiaXNzIjoic2VsZiIsImp0aSI6IjU2OTE3OGRlNzY2MWQwZTBkNTExODMxNDU0ODBmNmJiNzM0YmJmNmY0OThiNzc0MGVhMTY1MmJlOTVhMzhjZGJmMTE3ZjE2MTg2ZjE3NmZiIiwiaWF0IjoxNjcwMjE0MjYzLjA2MzI0OSwibmJmIjoxNjcwMjE0MjYzLjA2MzI0OSwiZXhwIjoxNjk5NjkzMDkxLCJzdWIiOiIxIiwic2NvcGVzIjpbInNldF9hdHRlc3RhdGlvbiIsImNyZWF0ZV9zaHlmdF91c2VyIiwiZ2V0X2p1cmlzZGljdGlvbnMiLCJnZXRfdmVyaWZpZWRfdHJ1c3RfYW5jaG9ycyIsImdldF90cnVzdF9hbmNob3JfZGV0YWlscyIsInZlcmlmeV90cnVzdF9hbmNob3IiXX0.tu92V7CmYn9S14enIre11fcIoErbmtvw_C2h1k513991aM2bgn4XSmYEDP0hgQTyJvygU5qDaaTYBMhf7OHquPRzDO30LqMtYr75jvezuJPaEjRYSP2q3JMcZ-WNAiHWE0rwBtYwEUTitA41K2Q1pwTNo4Uur2bCtfRkU_6jfbbYQqQDVr6uIOkOuBf5IRyWip_DjdkIMGq7P_oVesyVMR7g-TiMuhLYgmgg3hbUz5uIX-FGPv9eP7biuLjlqsclBl02x25q4T88d246H7y9picRaSnr7SP7lJXInoRB5FJUytHGknZEkByfccFNTBEuzEW_Rig8TYRwgji6aW_IhkbwPEIobe44rmyqaheETkJtGH8oPxLoXvTY6m0tXJXWlXODu6rWZMAob15WGAfuyVMpzzqPj0rGW-yL6vRd5vjRqPCGmSkcMv1tWHI3FuPQshYiWdF3_TUjt8afOD9iNvSNY8ogtbh4W0e1OmvZTSNmNDiT588cDKf4emMvuapU6DA6IIAqsZQsggs6qBANj-5Q-MTeaPc_rY5J_RQ7pt53CHwCkOX4nfDQmc28s8PKC_Q8pGFSqzz2xCpIx6CP1BrQp0-TZ6vg2F8bL_oFR4RNCbsD6lm7MFK1heQ8EHnQH2EapL0ur30VpKeMdSUEPGuk5Xn5_oq_qlf-rEHTx6A";

        $fields = [
            'public_key' => '0x047ab1478284f44dde151313160dc297c71afe9846acad94981081dd6049ef61a82f87d7734385754ba9625747f1bf758219362b03e5991748774b06c435f67ac4',
            'ivms_json' => '{"test":"456"}'
        ];

        $postdata = http_build_query($fields);
        $postdata = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // with bearer token
        curl_setopt($ch, CURLOPT_URL, 'https://jamescode.holmesmind.com/api/v1/server/encrypt_ivms');
        curl_setopt($ch, CURLOPT_POST, true); // post method
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        dd(json_decode($result)->data);
        // $implementObj = new FunctionTest();
        // $happy = $implementObj->organizeThing(1, 2)->something(5);
        // dd($happy);
    }

    public function organizeThing($first, $second){
        $this->total = $first + $second;
        return $this;
    }

    public function something($third){
        return $this->fuck = $this->total + $third;
    }
}
