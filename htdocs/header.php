<?php
// Starting session if not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- Meta Tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />

<title><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : 'Simple Online Bidding System'; ?></title>

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="admin/assets/font-awesome/css/all.min.css">

<!-- Vendor CSS Files -->
<link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
<link href="admin/assets/css/select2.min.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="admin/assets/css/jquery-te-1.4.0.css">

<!-- Custom CSS Files -->
<link href="css/styles.css" rel="stylesheet" />

<!-- Load jQuery First -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Font Awesome JavaScript (for some icons) -->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

<!-- Load Vendor JS Dependencies -->
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="admin/assets/js/select2.min.js"></script>
<script src="admin/assets/js/jquery.datetimepicker.full.min.js"></script>
<script src="admin/assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
