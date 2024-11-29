<?php
$config['db_dsnw'] = sprintf(
    'pgsql:host=%s;port=%s;dbname=%s;user=%s;password=%s',
    getenv('ROUNDCUBE_DB_HOST'),
    getenv('ROUNDCUBE_DB_PORT'),
    getenv('ROUNDCUBE_DB_NAME'),
    getenv('ROUNDCUBE_DB_USER'),
    getenv('ROUNDCUBE_DB_PASSWORD')
);

// 生成随机密钥
$config['des_key'] = 'hhjushzs'; // 建议使用随机生成的字符串

/ Outlook 邮箱服务器设置
$config['default_host'] = 'ssl://outlook.office365.com';  // Outlook IMAP 服务器
$config['default_port'] = 993;  // IMAP 端口

// SMTP 设置
$config['smtp_server'] = 'ssl://smtp.office365.com';  // Outlook SMTP 服务器
$config['smtp_port'] = 587;  // Outlook SMTP 端口
$config['smtp_user'] = 'hhjushzs@outlook.com';  // 使用登录用户名
$config['smtp_pass'] = 'MAMasp@RS@BqpPlU';  // 使用登录密码
$config['smtp_auth_type'] = 'LOGIN';
$config['smtp_crypto'] = 'tls';

// 其他 Outlook 相关设置
$config['imap_auth_type'] = 'LOGIN';
$config['imap_delimiter'] = '/';
$config['username_domain'] = 'outlook.com';  // 如果您使用 outlook.com
$config['product_name'] = 'Webmail';
$config['language'] = 'zh_CN';
$config['timezone'] = 'Asia/Shanghai';

// 基本设置
$config['product_name'] = 'Webmail';
$config['support_url'] = '';
$config['timezone'] = 'Asia/Shanghai';
$config['language'] = 'zh_CN';
