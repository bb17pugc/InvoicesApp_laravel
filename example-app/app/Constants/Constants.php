<?php
namespace App\Constants;

class Constants
{    
    // status constants
    const ACTIVE = 1;
    const IN_ACTIVE = 17;
    const DELETED = 0;

    // support messages
    const SENT = 13;
    const DELIEVERED = 14;
    const SEEN = 15;
    const READ = 16;
    // request status codes
    const SERVER_ERROR = 500; 
    const FOUND = 302; 
    const NOT_CONTENT_FOUND = 201; 
    const SUCCESS=200;
    
    // users roles
    const USER = 'user';
    const ADMIN = 'admin';
    const SUPER_ADMIN = 'super admin';
    const RESET_PASSWORD = "PasswordMubarakFoods";
      
// contacts
const WHATSAPP = 'whatsapp';
const PHONE = 'phone';
const EMAIL = 'email';
const ADDRESS = 'address';

const VERIABLES = [
    // status constants
    self:: ACTIVE => 'ACTIVE',
    self::IN_ACTIVE => 'PAUSED',
    self:: SENT => 'UNREAD',
    self::READ => 'SEEN',
    
    self:: DELETED => '<i>Deleted</i>',

    // support messages
    self::SENT => 13,
    self::DELIEVERED => 14,
    self::SEEN => 15,
    self::READ => 16,
    // request status codes
    self::SERVER_ERROR => 500, 
    self::FOUND => 302, 
    self::NOT_CONTENT_FOUND => 201, 
    self::SUCCESS=>200,
    
    // users roles
    self::USER => 'user',
    self::ADMIN => 'admin',
    self::SUPER_ADMIN => 'super admin',
    self::RESET_PASSWORD => "PasswordMubarakFoods",
      
// contacts
self::WHATSAPP => 'whatsapp',
self::PHONE => 'phone',
self::EMAIL => 'email',
self::ADDRESS => 'address',
    
];

}