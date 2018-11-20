<?php

define('db_host', 'xdm402552415.my3w.com');     // The host you want to connect to.
define('db_user', 'xdm402552415');    // The database username.
define('db_pass', 'wdfq1tqzuxijgfosjyae');    // The database password.
define('db_name', 'xdm402552415_db');    // The database name.

$conn = new PDO('mysql:host='.db_host.';dbname='.db_name, db_user, db_pass,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = array();




//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ERROR);

if(isset($_POST['language_choice'])) $data['language_choice'] = $_POST['language_choice'];
else                                 $data['language_choice'] = NULL;
if(isset($_POST['request_id'])) $data['request_id'] = $_POST['request_id'];
else                            $data['request_id'] = NULL;
if(isset($_POST['product'])) $data['product'] = $_POST['product'];
else                         $data['product'] = NULL;
if(isset($_POST['city'])) $data['city'] = $_POST['city'];
else                      $data['city'] = NULL;
if(isset($_POST['wechat'])) $data['wechat'] = $_POST['wechat'];
else                        $data['wechat'] = NULL;
if(isset($_POST['industry'])) $data['industry'] = $_POST['industry'];
else                        $data['industry'] = NULL;

// COWORKING

if(isset($_POST['movein'])) $data['movein'] = $_POST['movein'];
else                          $data['movein'] = NULL;
if(isset($_POST['movein_start'])) $data['movein_start'] = $_POST['movein_start'];
else                          $data['movein_start'] = NULL;
if(isset($_POST['amount'])) $data['amount'] = $_POST['amount'];
else                          $data['amount'] = NULL;
if(isset($_POST['months'])) $data['months'] = $_POST['months'];
else                          $data['months'] = NULL;
if(isset($_POST['location_coworking'])) $data['location_coworking'] = $_POST['location_coworking'];
else                          $data['location_coworking'] = NULL;
if(isset($_POST['need_address'])) $data['need_address'] = $_POST['need_address'];
else                          $data['need_address'] = NULL;
if(isset($_POST['taxpayer_coworking'])) $data['taxpayer_coworking'] = $_POST['taxpayer_coworking'];
else                          $data['taxpayer_coworking'] = NULL;
if(isset($_POST['description'])) $data['description'] = $_POST['description'];
else                          $data['description'] = NULL;
if(isset($_POST['desk_private_office'])) $data['desk_private_office'] = $_POST['desk_private_office'];
else                          $data['desk_private_office'] = NULL;
if(isset($_POST['desk_fixed_desk_office'])) $data['desk_fixed_desk_office'] = $_POST['desk_fixed_desk_office'];
else                          $data['desk_fixed_desk_office'] = NULL;
if(isset($_POST['desk_fixed_desk_open'])) $data['desk_fixed_desk_open'] = $_POST['desk_fixed_desk_open'];
else                          $data['desk_fixed_desk_open'] = NULL;
if(isset($_POST['desk_hot_desk'])) $data['desk_hot_desk'] = $_POST['desk_hot_desk'];
else                          $data['desk_hot_desk'] = NULL;


  // both numbers inputted
  if( (isset($_POST['number1']) && $_POST['number1'] != '') && (isset($_POST['number2']) && $_POST['number2'] != '') ) {
    // number 1 equals number 2
    if($_POST['number1'] == $_POST['number2']) {
      $data['number1'] = $_POST['number1'];
      $data['number2'] = NULL;
    } else {
      // number 1 less than number 2
      if($_POST['number1'] < $_POST['number2']) {
        $data['number1'] = $_POST['number1'];
        $data['number2'] = $_POST['number2'];
      // number 1 greater than number 2
      } else {
        $data['number1'] = $_POST['number2'];
        $data['number2'] = $_POST['number1'];
      }
    }
  } else {

    // only number 1 is set
    if(isset($_POST['number1']) && $_POST['number1'] != '') {
      $data['number1'] = $_POST['number1'];
      $data['number2'] = NULL;
    } else {
      //only number 2 is set
      if(isset($_POST['number2']) && $_POST['number2'] != '') {
        $data['number1'] = $_POST['number2'];
        $data['number2'] = NULL;
      // neither is set
      } else {
        $data['number1'] = 0;
        $data['number2'] = NULL;
      }
    }
  }


/// ADDRESS

if(isset($_POST['taxpayer_address'])) $data['taxpayer_address'] = $_POST['taxpayer_address'];
else                          $data['taxpayer_address'] = NULL;
if(isset($_POST['location_address'])) $data['location_address'] = $_POST['location_address'];
else                          $data['location_address'] = NULL;

// OTHER

if(isset($_POST['other_message'])) $data['other_message'] = $_POST['other_message'];
else                               $data['other_message'] = NULL;



// if no request_id, make a new record
if($data['request_id'] == 0) {
    $new_request_id = write_new_record($conn,$data);

    // return the request id to ajax
    echo $new_request_id;

// if request_id is sent, then modify the record
} else {
    $stmt = $conn->prepare('UPDATE client_request SET
                            movein = ?,
                            movein_start = ?,
                            location_coworking = ?,
                            
                            private_office = ?,
                            fixed_desk_office = ?,
                            fixed_desk_open = ?,
                            hot_desk = ?,

                            number1 = ?,
                            number2 = ?,
                            price = ?,
                            months = ?,

                            description = ?,
                            need_address = ?,
                            taxpayer_coworking = ?,
                            wechat_phone  = ?,
                            company_function = ?,

                            taxpayer_address = ?,
                            location_address = ?,
                            other_message = ?
                            WHERE id='.$data['request_id']);
    $stmt->execute(array(
        $data['movein'],
        $data['movein_start'],
        $data['location_coworking'],

        $data['desk_private_office'],
        $data['desk_fixed_desk_office'],
        $data['desk_fixed_desk_open'],
        $data['desk_hot_desk'],

        $data['number1'],
        $data['number2'],
        $data['amount'],
        $data['months'],

        $data['description'],
        $data['need_address'],
        $data['taxpayer_coworking'],
        $data['wechat'],
        $data['industry'],

        $data['taxpayer_address'],
        $data['location_address'],
        $data['other_message']
    ));
    $rows_affected = $stmt->rowCount();

    //echo '$rows_affected:'.$rows_affected; // ????? testing



    if($rows_affected > 0) {
        echo $data['request_id'];
    } else {
        $new_request_id = write_new_record($conn,$data);
        echo $request_id;
    }
}



function write_new_record($conn,$data) {

    // IP AND BROWSER
    $data['language_browser'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    if(isset($_SERVER['REMOTE_ADDR'])) $data['ip_REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
    else                               $data['ip_REMOTE_ADDR'] = NULL;
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) $data['ip_HTTP_X_FORWARDED_FOR'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else                                        $data['ip_HTTP_X_FORWARDED_FOR'] = NULL;

    $get_browser = get_browser(null,true);
    if(isset($get_browser['browser_name_pattern'])) $data['browser_name'] = $get_browser['browser_name_pattern'];
    else                                            $data['browser_name'] = NULL;
    if(isset($get_browser['parent'])) $data['browser_parent'] = $get_browser['parent'];
    else                              $data['browser_parent'] = NULL;
    if(isset($get_browser['platform'])) $data['platform'] = $get_browser['platform'];
    else                                $data['platform'] = NULL;

    session_start();
    $data['session_id'] = session_id();

    $stmt = $conn->prepare('INSERT INTO client_request (id, product, city, movein, movein_start, location_coworking,
                    private_office, fixed_desk_office, fixed_desk_open, hot_desk,
                    number1, number2, price, months,
                    description, need_address, taxpayer_coworking, wechat_phone, company_function,
                    taxpayer_address, location_address, other_message,
                    browser_name, browser_parent, platform,
                    language_choice, language_browser, ip_REMOTE_ADDR, ip_HTTP_X_FORWARDED_FOR, session_id, date_submitted)
    VALUES (NULL, ?, ?, ?, ?, ?,
            ?, ?, ?, ?,
            ?, ?, ?, ?,
            ?, ?, ?, ?, ?,
            ?, ?, ?,
            ?, ?, ?,
            ?, ?, ?, ?, ?, NOW());');
    $stmt->execute(	array(
        $data['product'],
        $data['city'],
        $data['movein'],
        $data['movein_start'],
        $data['location_coworking'],

        $data['desk_private_office'],
        $data['desk_fixed_desk_office'],
        $data['desk_fixed_desk_open'],
        $data['desk_hot_desk'],

        $data['number1'],
        $data['number2'],
        $data['amount'],
        $data['months'],

        $data['description'],
        $data['need_address'],
        $data['taxpayer_coworking'],
        $data['wechat'],
        $data['industry'],

        $data['taxpayer_address'],
        $data['location_address'],
        $data['other_message'],
        
        $data['browser_name'],
        $data['browser_parent'],
        $data['platform'],

        $data['language_choice'],
        $data['language_browser'],
        $data['ip_REMOTE_ADDR'],
        $data['ip_HTTP_X_FORWARDED_FOR'],
        $data['session_id']
        )
    );
    //mail('1993523726@qq.com','lead','city:'.$data['city'].'--id:'.$data['request_id']);
    return $conn->lastInsertId();
}

?>