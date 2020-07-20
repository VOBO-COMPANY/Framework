# Tema-Entegrasyon

```php

// Tekil bileşen veri çekme
// Tekil bileşen kodu
<?php echo $cms::getOnePage("1234567890")->{"Veri kanca adı"}; ?>

// Çoklu bileşen veri çekme ve listeleme
// Birinci parametre bileşen kodu
// İkinci parametre kayıt kodu
<?php echo  $cms::getOneRecordWithId("1234567890","1234567890")->data->{"Kanca adı"}; ?>



// Çoklu bileşen veri çekme ve listeleme
// Birinci parametre bileşen kodu
// İkinci parametre sef link urlsi
<?php echo $cms::getOneRecordWithSlug("1234567890")->data->{"Kanca adı"}; ?>


// Çoklu bileşen veri çekme ve listeleme
// Birinci parametre bileşen kodu
// İkinci parametre bileşen içerisinde aramak istenilen nitelikler
// Arama yapılan kancalar (name, content, component, child, title, table, placeholder, required)
<?php foreach ($cms::searchDynamic("1234567890",[ "content" => "1234567890" ])->data as $item): ?>

    ......

    HTML KODLARI

    // Veri kanca adını yazarak listelemede verilerinize ait içerikleri yazdırabilirsiniz
    <?php echo $item->{"Veri kanca adı"}; ?>

    .....

<?php endforeach; ?>

// Çoklu bileşen veri çekme ve listeleme
// Birinci parametre tekil bileşen kodu
// İkinci parametre verinin A-Z yada Z-A şeklinde kayıt sırasına göre listeleme işine yarar
<?php foreach ($cms::getAllRecord("1234567890","1234567890")->data as $item): ?>

    ......

    HTML KODLARI

    // Veri kanca adını yazarak listelemede verilerinize ait içerikleri yazdırabilirsiniz
    $item->{"Veri kanca adı"}

    .....

<?php endforeach; ?>

```
