<?php
// الجز الخاص بي cards 
$cards = array(
  array(
      "image" => "../HomePage/assets/dd.jpg",
      "text" => "With supporting text below as a natural lead-in to additional content."
  ),
  array(
      "image" => "../HomePage/assets/dd.jpg",
      "text" => "With supporting text below as a natural lead-in to additional content."
  ),
  array(
      "image" => "../HomePage/assets/dd.jpg",
      "text" => "With supporting text below as a natural lead-in to additional content."
  ),
  array(
      "image" => "../HomePage/assets/dd.jpg",
      "text" => "With supporting text below as a natural lead-in to additional content."
  )
);
// تحقق من أن النموذج تم تقديمه
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // استدعاء الدالة لتنظيف البيانات وتحديد قيمها
  $name = clean_input($_POST["name"]);
  $password = clean_input($_POST["password"]);
  $email = clean_input($_POST["email"]);
  $phone = clean_input($_POST["phone"]);
  $message = clean_input($_POST["message"]);
  function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = clean_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "البريد الإلكتروني غير صالح";
}

$password = clean_input($_POST["password"]);
if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
  $passwordErr = "يجب أن تحتوي كلمة المرور على 8 أحرف على الأقل وتحتوي على حرف كبير وحرف صغير ورقم واحد على الأقل";
}

$message = clean_input($_POST["message"]);
if (count(array_intersect(preg_split('/\PL+/u', $message, -1, PREG_SPLIT_NO_EMPTY), 
    preg_split('/\PL+/u', file_get_contents('dictionaries/english.txt'), -1, PREG_SPLIT_NO_EMPTY))) < 1) {
        $messageErr = "الرسالة تحتوي على كلمات خاطئة";
}
  // إرسال البيانات إلى قاعدة البيانات أو البريد الإلكتروني أو أي موقع آخر
  
  // تأكيد استلام البيانات
  echo "تم استلام البيانات بنجاح!";
}
?>