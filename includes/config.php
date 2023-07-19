<?php
/*******************************************************************************
* Md Invoice 
* Billing Management System                                             *
*                                                                              *
* Version: 1.0	                                                               *
* Author:  Abhishek Raj                                    				   *
*******************************************************************************/

// Debugging
ini_set('error_reporting', E_ALL);

// DATABASE INFORMATION
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'pahn6vl1_invoice');
define('DATABASE_USER', 'pahn6vl1_invoice');
define('DATABASE_PASS', '10gXWOqeaf!');

// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo.png');
define('COMPANY_LOGO_WIDTH', '300');
define('COMPANY_LOGO_HEIGHT', '90');
define('COMPANY_NAME','Apple Graphics Pte. Ltd.');
define('COMPANY_ADDRESS_1','35 Selegie Rd');
define('COMPANY_ADDRESS_2','B1-24 Parklane Shopping Mall');
define('COMPANY_ADDRESS_3','Singapore');
define('COMPANY_COUNTY','Singapore');
define('COMPANY_POSTCODE','188307');

define('PAYNOW_LOGO', 'images/qrcode.jpg');
define('PAYNOW_LOGO_WIDTH', '300');
define('PAYNOW_LOGO_HEIGHT', '300');

define('COMPANY_NUMBER','Company UEN: 200803729C'); // Company registration number
define('COMPANY_VAT', 'Company GST: 645515154'); // Company TAX/VAT number

// EMAIL DETAILS
define('EMAIL_FROM', 'sales@applegraphicssg.com'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'Md Invoice Lmt'); // Email from address
define('EMAIL_SUBJECT', 'Invoice default email subject'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice default body'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Quote default body'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Receipt default body'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'MD'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Asia/Kolkata'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', 'S$'); // Currency symbol
define('ENABLE_VAT', true); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '0'); // This is the percentage value
define('PAYMENT_DETAILS', 'Apple Graphics Pte. Ltd.<br>Account Number: 0119039925<br>DBS Bank<br><br>Paylah : 92453229<br>Paynow : 200803729C'); // Payment information
define('FOOTER_NOTE', 'http://www.applegraphicsg.com/');

// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

?>