<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Beklenen e-posta ve şifre
    $expected_email = "example@example.com";
    $expected_password = "123456";

    // Formdan gelen verileri al
    $email = $_POST["email"];
    $password = $_POST["password"];

    // E-posta ve şifre alanlarının dolu olduğunu ve beklenen değerlerle eşleştiğini kontrol et
    if (!empty($email) && !empty($password) && $email == $expected_email && $password == $expected_password) {
        echo "Teşekkürler, form başarıyla gönderildi!";
    } else {
        echo "Bulunamadı. Lütfen geçerli bir e-posta ve şifre girin.";
    }
}
?>
