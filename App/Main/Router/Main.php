<?php

use Vobo\Router\Router;
use Vobo\Support\Header;
use Vobo\Packages\Assets\Assets;
use App\Main\Model\cms;



// Api bağlantı noktası
cms::$API_ENDPOINT  = "";

// Api Secret kodu
cms::$SECRET        = "";

// Api Token kodu
cms::$TOKEN         = "";



// Standart sayfa gösterme
// ( "/" ile başlamalıdır ve türkçe olmalıdır )
// "Boşluk, Türkçe ve özel karekterler kullanmayınız"
Router::get("/",function (){

    // Gösterilecek sayfaya ait dosya işlemleri
    // İlk parametre "View" Klasörü içerisinde bulunan dosya adı olacaktır (.php uzantılı)
    Assets::render("index",[
        "cms" => cms::class
    ]);

});


// Detay sayfası
// Standart sayfa gösterme
// ( "/" ile başlamalıdır ve türkçe olmalıdır )
// "Boşluk, Türkçe ve özel karekterler kullanmayınız"
// "{parameter}" belirleyecisini alınacak url verisinin oldugu kısıma yazınız
Router::get("/blog/{parameter}",function ($slug = null){


    // ilk parametre bulunması istedginizin bileşene ait kod
    // okunması yada incelenmesi istediğiniz verinin kayıt ya da link adı
    $get = cms::getOneRecordWithSlug("[Bileşen Kodu]",$slug);

    // Girilen urlye ait kayıdın kontrolü
    if($get->status !== "success")
        // Kayıt bulunamazsa yönlendirelecek sayfa
        Header::redirect("/blog");

    // Eğer girilen kod yada link adı dogru ise sayfayı gösterelim
    // Gösterilecek sayfaya ait dosya işlemleri
    // İlk parametre "View" Klasörü içerisinde bulunan dosya adı olacaktır (.php uzantılı)
    Assets::render("/blog-detay",[
        "cms"       => cms::class,
        "details"   => $get->data
    ]);

});


// Veri kaydetme
// Standart sayfa gösterme
// ( "/" ile başlamalıdır ve türkçe olmalıdır )
// "Boşluk, Türkçe ve özel karekterler kullanmayınız"
Router::post("/submit/contact",function (){

    try{

        // İlk parametrre kayıt edilecek veriye ait component numarası
        // ikinci parametre oluşturulan component e ait veri başlıkları
        $get = cms::insertRecord("1234567890",$_POST);

        // Verinin başarılı bir şekilde kaydedildiğini kontrol edelim
        if($get->status !== "success")
            // Veri başarılı bir şekilde kontrol edilmemiş ise hata sayfasına yönlendirelim.
            throw new Exception("Error");

        // veri başarılı bir şekilde kaydedilmiş ise sonucu yazalım
        Header::jsonResult("success","BAŞARILI","İletişim verileriniz kaydedildi.");

    }catch (Exception $exception){

        // oluşan hataları yazdıralım
        Header::jsonResult("error","HATA","VERİLER EKSİK.");

    }


});


// Sayafa bulunamadı işlemi
Router::notFound(function (){

    // Ana sayfaya yönlendirme
    Header::redirect("/");
});