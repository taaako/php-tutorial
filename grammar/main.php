<?php

// $name = 'sato';
// $name = 'dotinstall';

// 定数は大文字 define() と const
// 定数に再代入しようとするとNoticeという警告になる
define('NAME', 'sato');
echo NAME . PHP_EOL;

const CNAME = 'sato';
echo CNAME . PHP_EOL;