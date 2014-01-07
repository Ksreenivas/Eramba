<?php

final class PZ_Config
{
    const MERCHANT_ID = "test_t494"; // Your Merchant ID
    const SECRET_KEY = "dca056eb3ccf5f487be49b67fa5aa68f33a2b94b8160e4aebf55594a36aad6f0"; // Your Secret Key. Do not share this.
    const TRANSACTION_TYPE = "SALE";
    const CURRENCY = "INR";
    const UI_MODE = "REDIRECT"; // UI Integration - REDIRECT or IFRAME
    const HASH_METHOD = "MD5"; // MD5 or SHA256
    const MERCHANT_KEY_ID = "payment"; // Your Merchant Key ID
    const CALLBACK_URL = "http://192.168.33.10/php-sdk/examples/response/charging_response.php"; // Your callback URL

    const API_BASE = "https://www.payzippy.com/payment/api/";
    const API_CHARGING = "charging";
    const API_QUERY = "query";
    const API_REFUND = "refund";
    const API_VERSION = "v1";
    const VERIFY_SSL_CERTS = TRUE;
}
?>
