<?php
$ rahasia = '83415d06-ec4e-11e6-a41b-6c40088ab51e' ;
$ header = larik ();
$ headers [] = 'Tipe-Konten: application/json' ;
$ headers [] = 'X-AppVersion: 3.48.2' ;
$ header [] = "X-Uniqueid: ac94e5d0e7f3f" . rand ( 111 , 999 );
$ headers [] = 'X-Location: id_ID' ;
ulang:
 echo  "[+] Masukin Nomor JADA MU DI SINI : " ;
 $ angka = trim ( fgets ( STDIN ));
 $ login = curl ( 'https://api.gojekapi.com/v3/customers/login_with_phone' , '{"phone":"+' . $ number . '"}' , $ headers );
 $ login = json_decode ( $ login [ 0 ]);
 if ( $ login -> sukses == benar ) {
     pilihan:
         echo  "[+] Masukin Kode OTP Kamu Disini : " ;
         $ Otp = lis ( fgets ( STDIN ));
         $ data1 = '{"scopes":"gojek:customer:transaction gojek:customer:readonly","grant_type":"password","login_token":"' . $ logins -> data -> login_token . '"," otp":"' . $ otp . '","client_id":"gojek:cons:android","client_secret":"' . $ secret . '"}' ;
         $ verif = curl ( 'https://api.gojekapi.com/v3/customers/token' , $ data1 , $ header );
         $ verifs = json_decode ( $ verif [ 0 ]);
         if ( $ verifs -> sukses == true ) {
             $ token = $ verifikasi -> data -> access_token ;
             $ headers [] = 'Otorisasi: Pembawa' . $ tanda ;
             $ live = "token-akun.txt" ;
             $ fopen1 = fopen ( $ live , "a+" );
             $ fwrite1 = fwrite ( $ fopen1 , "Token Kamu : " . $ token . "
Nomor GoJek Kamu : " . $ nomor . "
" );
             fclose ( $ fopen1 );
             gema  "
" ;
             echo  "Token Kamu : " . $ tanda . "
" ;
             echo  "Token Berhasil Disimpan Di File" . $ hidup . "
" ;
             gema  "
" ;
         } lain {
             gema  "
" ;
             echo  "Yah, OTP Salah, Coba Kamu Kode Lagi Deh!
" ;
             gema  "
" ;
             harus otp;
         }
     } lain {
         gema  "
" ;
         echo  "Yah Gagal Mengirim Kode OTP, Gunakan Nomor Yang Sudah Terdaftar Di GOJEK Yah!
" ;
         gema  "
" ;
         goto ulang;
     }

function  curl ( $ url , $ field = null , $ headers = null ) {
  $ ch = curl_init ();
  curl_setopt ( $ ch , CURLOPT_URL , $ url );
  curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , benar );
  curl_setopt ( $ ch , CURLOPT_FOLLOWLOCATION , benar );
  curl_setopt ( $ ch , CURLOPT_SSL_VERIFYPEER , false );
  if ( $ bidang !== null ) {
      curl_setopt ( $ ch , CURLOPT_POST , 1 );
      curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ field );
  }
  if ( $ header !== null ) {
      curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ header );
  }
  $ hasil = curl_exec ( $ ch );
  $ httpcode = curl_getinfo ( $ ch , CURLINFO_HTTP_CODE );
  curl_close ( $ ch );
  kembali  array ( $ hasil , $ httpcode );
  }
