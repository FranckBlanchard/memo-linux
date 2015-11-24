<?php

/**
 * makeBookPdf.php
 */

$cmd="wkhtmltopdf --page-size letter build/html/memo-linux.html build/pdf/memo-linux.pdf";
system($cmd);