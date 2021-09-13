Laravel 8.0 kurulumu gerçekleştirilerek mesajlaşma uygulaması yazılmıştır
sql dosyası proje içerisine eklenmiştir mesaj.sql
Auth sistemi kurularak sisteme login olmayan kişilerin mesajları görmesi engellenmiştir.
Middleware tanımlamaları yapılmıştır
son mesaj ilk başta olacak şekilde datatable eklenmiştir. 
Mesaj sayfa yenilenmeden database iletilmektedir. 
Eğer karakter sayısı 10 dan fazla ise gönder butonu javascript kodlarıyla aktif hale gelmektedir
Eğer 10 karakterden az ise buton görünmemektedir.
Ayrıca controller tarafında validation işlemleri tanımlanmıştır. Validation yaparak güvenlik sadece javascript tarafında değil validation ile controller tarafındada sağlanmıştır
Mesajlar sayfayı yenileyince güncellenmektedir.
Mesajlar message isimli modelda saklanmaktadır.
Task scheduling tanımlanmış ancak projede aktif olarak kullanılması için kurulu olduğu sunucudada cron işlemi tanımlanması gerekecektir. 
Mesaj ile user arasında hasone ilişkisi tanımlanmıştır.

Teşekkürler
