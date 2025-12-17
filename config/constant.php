<?php 
    defined('ADMIN')   || define('ADMIN', 'admin');
    defined('ADMIN_MAIL_TO')   || define('ADMIN_MAIL_TO', 'test152@yopmail.com');
    defined('IMAGE_PATH')   || define('IMAGE_PATH', 'assets/uploads/images/');
    defined('PDF_PATH')   || define('PDF_PATH', 'storage/app/pdf/');
    defined('STRIPE_KEY')   || define('STRIPE_KEY', env('STRIPE_KEY'));  
    defined('STRIPE_SECRET')   || define('STRIPE_SECRET', env('STRIPE_SECRET'));  

    defined('STRIPE_CURRENCY')   || define('STRIPE_CURRENCY', 'AUD');

