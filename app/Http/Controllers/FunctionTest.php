<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FunctionTest extends Controller
{
    public function __construct()
    {
        $this->authorization = "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwiaXNzIjoic2VsZiIsImp0aSI6IjU2OTE3OGRlNzY2MWQwZTBkNTExODMxNDU0ODBmNmJiNzM0YmJmNmY0OThiNzc0MGVhMTY1MmJlOTVhMzhjZGJmMTE3ZjE2MTg2ZjE3NmZiIiwiaWF0IjoxNjcwMjE0MjYzLjA2MzI0OSwibmJmIjoxNjcwMjE0MjYzLjA2MzI0OSwiZXhwIjoxNjk5NjkzMDkxLCJzdWIiOiIxIiwic2NvcGVzIjpbInNldF9hdHRlc3RhdGlvbiIsImNyZWF0ZV9zaHlmdF91c2VyIiwiZ2V0X2p1cmlzZGljdGlvbnMiLCJnZXRfdmVyaWZpZWRfdHJ1c3RfYW5jaG9ycyIsImdldF90cnVzdF9hbmNob3JfZGV0YWlscyIsInZlcmlmeV90cnVzdF9hbmNob3IiXX0.tu92V7CmYn9S14enIre11fcIoErbmtvw_C2h1k513991aM2bgn4XSmYEDP0hgQTyJvygU5qDaaTYBMhf7OHquPRzDO30LqMtYr75jvezuJPaEjRYSP2q3JMcZ-WNAiHWE0rwBtYwEUTitA41K2Q1pwTNo4Uur2bCtfRkU_6jfbbYQqQDVr6uIOkOuBf5IRyWip_DjdkIMGq7P_oVesyVMR7g-TiMuhLYgmgg3hbUz5uIX-FGPv9eP7biuLjlqsclBl02x25q4T88d246H7y9picRaSnr7SP7lJXInoRB5FJUytHGknZEkByfccFNTBEuzEW_Rig8TYRwgji6aW_IhkbwPEIobe44rmyqaheETkJtGH8oPxLoXvTY6m0tXJXWlXODu6rWZMAob15WGAfuyVMpzzqPj0rGW-yL6vRd5vjRqPCGmSkcMv1tWHI3FuPQshYiWdF3_TUjt8afOD9iNvSNY8ogtbh4W0e1OmvZTSNmNDiT588cDKf4emMvuapU6DA6IIAqsZQsggs6qBANj-5Q-MTeaPc_rY5J_RQ7pt53CHwCkOX4nfDQmc28s8PKC_Q8pGFSqzz2xCpIx6CP1BrQp0-TZ6vg2F8bL_oFR4RNCbsD6lm7MFK1heQ8EHnQH2EapL0ur30VpKeMdSUEPGuk5Xn5_oq_qlf-rEHTx6A";
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $implementObj = new FunctionTest();
        $happy = $implementObj->organizeThing(1, 2)->something(5);
        dd($happy);
    }

    public function organizeThing($first, $second){
        $this->total = $first + $second;
        return $this;
    }

    public function something($third){
        return $this->fuck = $this->total + $third;
    }

    // //////////// //////////// //////////// //////////// //////////// //////////// //////////// //////////// //////////// //////////// //////////// //////////


    public function testDecrypt(){
        $fields = [
            'private_key' => 'bd9b2a9ccaa72b051d8c55572a8bafe8b1d56cdd7bd9e5fc640812c63fe6a966',
            'kyc_data' => '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'
        ];
    
        $authorization = "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwiaXNzIjoic2VsZiIsImp0aSI6IjU2OTE3OGRlNzY2MWQwZTBkNTExODMxNDU0ODBmNmJiNzM0YmJmNmY0OThiNzc0MGVhMTY1MmJlOTVhMzhjZGJmMTE3ZjE2MTg2ZjE3NmZiIiwiaWF0IjoxNjY4MTU3MDk1Ljk2OTc1MiwibmJmIjoxNjY4MTU3MDk1Ljk2OTc1MiwiZXhwIjoxNjk5NjkzMDkxLCJzdWIiOiIxIiwic2NvcGVzIjpbInNldF9hdHRlc3RhdGlvbiIsImNyZWF0ZV9zaHlmdF91c2VyIiwiZ2V0X2p1cmlzZGljdGlvbnMiLCJnZXRfdmVyaWZpZWRfdHJ1c3RfYW5jaG9ycyIsImdldF90cnVzdF9hbmNob3JfZGV0YWlscyIsInZlcmlmeV90cnVzdF9hbmNob3IiXX0.eW3avbc34C4-Y4fvkE-EM1xBm3ot_Ed1Rb0_7_0HT-LUjxTx5LhepDvKtJ99XfRQEdKdClgUBbe3eNIU5DyUg4J3MOPD4uJ-eGWzy7ICrRFK2WvUbBmXui6y-XWSAQc6xFAMFLafPG9XWpn0DiUgtAXD17XEVRxCHush3H6ALAmYQN3f1LuujJXoI8KR9bn_Lq5mWYmkZTlcjfStGUYeuInyszT_gSBo5in7bP3m_cRIXIOxujIC6KQaaLkjbCrtj1p6qgoOuWjpTZinm59aCS36mRju8eIEi_ArV3Dv3jM8EnD9BiDaaFtcgguxtwWydBun0O-bRGy7zPdn-DoeVfLuOBOypw5YXeT08HKOebnvRZA-dR4XGT2AFcNZAET_uOxpHuH4Wi-sB7A6fXdNfQ2b-5IXAFezgNPyVJ7ARRuc89GB7wrM9MlwmkZLfKMNnMcqrZUSgnD-A2XqCPwYgVeF15PI-DpO0EfRoh0P0Z2YgdUGzexMSZvnrsugFPkfDKNRhRIwgrnwNLTwxGPyYm1t3Unh0RyIm5OchJXMNqGcbSeGlk9uE5bKHKcBivDz9-auLHG4D9oAfeuNs2As4DgewKYoZhPeXC71c9DEoptvhlTgapXW6MaoghfqapvGYFcYRKu8KlLMRfL_BQ_XDrW_gw8tdS9ZKpzeBuUohuQ";
        $postdata = http_build_query($fields);
        $postdata = json_encode($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // with bearer token
        curl_setopt($ch, CURLOPT_URL, 'https://jamescode.holmesmind.com/api/v1/server/decrypt_ivms');
        curl_setopt($ch, CURLOPT_POST, true); // post method
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        if(array_key_exists("data", json_decode($result, true)))
        {
            dd('fuck ya');
        }else{
            dd('hell no');
        }
        dd(json_decode(json_decode($result)->data));
    }

    public function jamesGetWebhook(Request $req){
        $now = date('Y-m-d h:s:i', time());
        // above is to received the webhook eveint
        $myClass = new FunctionTest();

        $url = 'https://jamescode.holmesmind.com/api/v1/server/create_kyc_template';

        $fields = [
            'user_account' => '0x5ce71f22e496d0e626137b007dd08f66e9ca4ad4',
            'user_public_key' => '0x04bb43e4a2ea0e9daf491fce5b1dc12dacd5d2dbcb832c5d4477d0da6ff94308b5c72f76cb655bc770873206ea560a7bc319ace30bd0d627050853e5368db33f20',
            'user_signature' => '{"r":"0x250a68df7c9cc9292efc7b1aadf02c9caff3a500c2e39dae140ef18a5d8bca42","s":"0x12044566859becdb7caf3c0f227c59514eb6230014386f7df9190c5c59c8440c","v":"0x26"}',
            'user_signature_hash' => '0x7ec005c40fadb64f4180dcc14d9f5927f649096a08478a4a5a112a3aa77ca549',
        ];
        
        // $ta_account = $getData['kycTemplate']['ta_account'];
        // $coin_address = $getData['kycTemplate']['coin_address'];
        $getData = '{"eventType":"BE_KYC_REQ","kycTemplate":{"AttestationHash":"0xbc1b3d5f74fbd16647e5024ed787bc451f85042d738d7b5a13aa57e7e7aaffcf","BeneficiaryTAAddress":"0x41f02d69C0A8C592276B668750BFF1c446906B76","BeneficiaryTAPublicKey":"c58ce7b16605ede2c3da7a4684898f9d64ad2090ad875595b00bcd88235ee2f6ca8e70780b37c9c2daeb1c7b283ac98a97c05735fab48ed78ba73d38d6fbfa16","BeneficiaryUserAddress":"0x5ce71f22e496d0e626137b007dd08f66e9ca4ad4","BeneficiaryUserPublicKey":"0x04bb43e4a2ea0e9daf491fce5b1dc12dacd5d2dbcb832c5d4477d0da6ff94308b5c72f76cb655bc770873206ea560a7bc319ace30bd0d627050853e5368db33f20","BeneficiaryTASignatureHash":"0x0b709dd4809f36a22fe48250b24a5e41e8aea491bace26627f5c68ea9b4fad3f","BeneficiaryTASignature":{"r":"0x375c306f0883699c3a823a40057e449ed0407221f356b8bddae0b707b346e126","s":"0x36f49f8141ff51195b3663b92c5682cb8535c3054cc7401f86008d1b93a5f99a","v":"0x25"},"BeneficiaryUserSignatureHash":"0x7ec005c40fadb64f4180dcc14d9f5927f649096a08478a4a5a112a3aa77ca549","BeneficiaryUserSignature":{"r":"0x250a68df7c9cc9292efc7b1aadf02c9caff3a500c2e39dae140ef18a5d8bca42","s":"0x12044566859becdb7caf3c0f227c59514eb6230014386f7df9190c5c59c8440c","v":"0x26"},"BeneficiaryUserAddressCryptoProof":null,"BeneficiaryUserAddressCryptoProofStatus":null,"CoinBlockchain":"ETH","CoinToken":"ETH","CoinAddress":"0x17a8c9fae1b65ae99acb6a4c55514dfa511ce53e","CoinMemo":"12\/8 test with myself 0003","CoinTransactionHash":null,"CoinTransactionValue":null,"SenderTAAddress":"0xccce743f18a58180a9353ad878893b9bec55592e","SenderTAPublicKey":"07ac1fdf688d34f0c1564e131be6b10edb223f606305cfdf4d057208745340cb5951f84cffcc798539b1f421bba83d810266cde22de36bb979db80d44b39ab58","SenderUserAddress":"0x4b2eaf716f285d881460c366085f15d5c6c98e58","SenderUserPublicKey":"0x047ab1478284f44dde151313160dc297c71afe9846acad94981081dd6049ef61a82f87d7734385754ba9625747f1bf758219362b03e5991748774b06c435f67ac4","SenderTASignatureHash":"0x0b709dd4809f36a22fe48250b24a5e41e8aea491bace26627f5c68ea9b4fad3f","SenderTASignature":{"r":"0x54c382817a9360698a9a342d776184baa3e5f6cbc0a86a70c34b49f1fa0b1411","s":"0x1648e70ea20ff4bc2582b0d2f03b2ae3ae1d7a0ce5d329fcde54f40b24ee8920","v":"0x25"},"SenderUserSignatureHash":"0x7ec005c40fadb64f4180dcc14d9f5927f649096a08478a4a5a112a3aa77ca549","SenderUserSignature":{"r":"0xac9e3ee4cdaf4bed0ca99843494609f686fff071bcbdf3b70b5dc10f5481d2a8","s":"0x58d8def32c091d030469f6b0a31ac991c6497080477384d561cab548a912685f","v":"0x26"},"BeneficiaryKYC":null,"SenderKYC":null,"BeneficiaryTAUrl":"https:\/\/jamescode.holmesmind.com\/kyc-template","SenderTAUrl":"https:\/\/jamesshrepo2.holmesmind.com\/kyc-template"}}';
        $getData = json_decode($getData, true);
        $attestation_hash = $getData['kycTemplate']['AttestationHash'];
        $originatorUserPubKey = $getData['kycTemplate']['SenderUserPublicKey'];
        $fields['attestation_hash'] = $attestation_hash;
        $encryptUrl = 'https://jamescode.holmesmind.com/api/v1/server/encrypt_ivms';
        
        // encrypt
        $encryptFields = [
            'public_key' => $originatorUserPubKey,
            'ivms_json' => '{"test":"I\'m beneficiary"}'
        ];

        $getEncryptResult = json_decode($myClass->organizeData($encryptFields)->postEvent($now, $encryptUrl))->data;
        $fields['ivms_encrypt'] = $getEncryptResult;
        // sleep(5);
        $myClass->organizeData($fields)->postEvent($now, $url);
        return response()->json(['success' => 'success'], 200);
    }

    public function organizeData($fields){
        $this->postdata = http_build_query($fields);
        $this->postdata = json_encode($fields);
        return $this;
    }

    public function postEvent($now, $url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $this->authorization )); // with bearer token
        // curl_setopt($ch, CURLOPT_HEADER, true); // return result顯示表頭
        // curl_setopt($ch, CURLOPT_NOBODY, true); // return result忽略內容
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true); // post method
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        Log::info($now . ' : jamesPostEventFinished : ' . $result);
        
        return $result;
        // dd(json_decode(json_decode($result)->data));
    }

}
