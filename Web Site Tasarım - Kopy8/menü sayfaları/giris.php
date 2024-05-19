<?php
// Formdan gelen verileri kontrol etmek için PHP kodu

// Kullanıcı adı ve şifreyi al
$username = $_POST['username'];
$password = $_POST['password'];

// Kullanıcı adı ve şifre boş mu diye kontrol et
if (empty($username) || empty($password)) {
    // Eğer kullanıcı adı veya şifre boşsa, hata mesajını göster ve işlemi durdur
    echo "Kullanıcı adı ve şifre alanları boş bırakılamaz!";
    exit;
}

// Kullanıcı adı ve şifreyi doğrulama için veritabanı ile karşılaştırabilirsiniz
// Örneğin, sadece örnek bir doğrulama işlemi olarak, burada sabit bir kullanıcı adı ve şifre kontrol ediyoruz
$correctUsername = "zeynepoykuceltik2005@gmail.com";
$correctPassword = "12345";

if ($username === $correctUsername && $password === $correctPassword) {
    // Kullanıcı adı ve şifre doğru ise giriş başarılı mesajını göster
    echo "Giriş başarılı!";
} else {
    // Kullanıcı adı veya şifre yanlışsa hata mesajını göster
    echo "Kullanıcı adı veya şifre yanlış!";
}
?>

