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
$config['des_key'] = '随机字符串-请更改'; // 建议使用随机生成的字符串

// 邮件服务器设置
$config['default_host'] = 'ssl://your-imap-server';
$config['smtp_server'] = 'ssl://your-smtp-server';
$config['smtp_port'] = 465;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

// 基本设置
$config['product_name'] = 'Webmail';
$config['support_url'] = '';
$config['timezone'] = 'Asia/Shanghai';
$config['language'] = 'zh_CN';
