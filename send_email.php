<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $address = htmlspecialchars($_POST["address"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "lykm97123@gmail.com"; // ✨ ضع بريدك الإلكتروني هنا
    $subject = "رسالة جديدة من خدمة العملاء";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<h2>تم استلام رسالة جديدة</h2>
             <p><strong>الاسم:</strong> $name</p>
             <p><strong>العنوان:</strong> $address</p>
             <p><strong>البريد الإلكتروني:</strong> $email</p>
             <p><strong>الرسالة:</strong> $message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>