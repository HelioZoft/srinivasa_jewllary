<?php
$upi_id = "harisudhan7562@okicici"; // Replace with your actual UPI ID
$amount = isset($_GET['amount']) ? $_GET['amount'] : "1"; // Default ₹1
$payee_name = "HARIHARASUDHAN"; // Replace with your name
$note = "Payment"; // Transaction note
$currency = "INR";

// Correct UPI Payment URL with encoding
$upi_url = "upi://pay?pa=" . urlencode($upi_id) . 
           "&pn=" . urlencode($payee_name) . 
           "&am=" . urlencode($amount) . 
           "&cu=" . urlencode($currency) . 
           "&tn=" . urlencode($note);

// Generate QR Code using API
$qr_code_url = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . urlencode($upi_url);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Google Pay Payment QR Code</title>
</head>
<body>
    <h2>Scan to Pay via GPay</h2>
    <p>Amount: ₹<?php echo $amount; ?></p>
    <img src="<?php echo $qr_code_url; ?>" alt="Google Pay QR Code">
</body>
</html>

<?php
// $upi_id = "harisudhan7562@okicici"; // Replace with your actual UPI ID
// $amount = isset($_GET['amount']) ? $_GET['amount'] : "1"; // Default ₹1
// $payee_name = "HARIHARASUDHAN"; // Replace with your name
// $note = "Payment for Order";
// $currency = "INR";

// // Correct UPI Payment URL with encoding
// $upi_url = "upi://pay?pa=" . urlencode($upi_id) . 
//            "&pn=" . urlencode($payee_name) . 
//            "&am=" . urlencode($amount) . 
//            "&cu=" . urlencode($currency) . 
//            "&tn=" . urlencode($note);

// // Generate QR Code using API
// $qr_code_url = "https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=" . urlencode($upi_url);

// // Return QR Code URL
// echo $qr_code_url;
?>





<?php
// $upi_id = "harisudhan7562@okicici"; // Replace with your actual UPI ID
// $amount = isset($_GET['amount']) ? $_GET['amount'] : "1"; // Default ₹1
// $payee_name = "HARIHARASUDHAN"; // Replace with your name
// $note = "Payment"; // Transaction note
// $currency = "INR";

// // Generate UPI Payment URL
// $upi_url = "upi://pay?pa=" . urlencode($upi_id) . 
//            "&pn=" . urlencode($payee_name) . 
//            "&am=" . urlencode($amount) . 
//            "&cu=" . urlencode($currency) . 
//            "&tn=" . urlencode($note);

// // Generate QR Code
// $qr_code_url = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=" . urlencode($upi_url);
// $qr_image = "qr.png";
// file_put_contents($qr_image, file_get_contents($qr_code_url));

// // Load QR Code and Logo
// $qr = imagecreatefrompng($qr_image);
// $logo = imagecreatefrompng("logo.png"); // Replace with your logo file

// // Get Image Sizes
// $qr_width = imagesx($qr);
// $qr_height = imagesy($qr);
// $logo_width = imagesx($logo);
// $logo_height = imagesy($logo);

// // Calculate Logo Position (Center)
// $logo_size = $qr_width / 4; // Logo size = 1/4th of QR Code
// $logo_x = ($qr_width - $logo_size) / 2;
// $logo_y = ($qr_height - $logo_size) / 2;

// // Resize Logo
// $logo_resized = imagecreatetruecolor($logo_size, $logo_size);
// imagecopyresampled($logo_resized, $logo, 0, 0, 0, 0, $logo_size, $logo_size, $logo_width, $logo_height);

// // Merge Logo and QR Code
// imagecopy($qr, $logo_resized, $logo_x, $logo_y, 0, 0, $logo_size, $logo_size);

// // Output Image
// header('Content-Type: image/png');
// imagepng($qr);

// // Clean Up
// imagedestroy($qr);
// imagedestroy($logo);
// imagedestroy($logo_resized);
?>

