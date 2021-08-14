<?php
// DIRECTORY_SEPARATOR là dấu phân cách thư mục
// đặt lại hằng số DS bằng giá trị của hằng số DIRECTORY_SEPARATOR cho gọn
                                   
define('DS', DIRECTORY_SEPARATOR);
echo "<pre>";
var_dump(DS);    // xem giá trị
var_dump(__FILE__); // __FILE__ lấy ra đường dẫn tuyệt đối tới file php hiện tại
var_dump(__DIR__);  // __DIR__ lấy ra đường dấn tuyệt đối tới thư mục chứa file PHP hiện tại
var_dump(dirname(__FILE__));
var_dump(dirname(__DIR__));
