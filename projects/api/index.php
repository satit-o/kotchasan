<?php
/**
 * @filesource projects/api/index.php.
 *
 * @author Goragod Wiriya <admin@goragod.com>
 * @copyright 2016 Goragod.com
 * @license https://www.kotchasan.com/license/
 *
 * @see https://www.kotchasan.com/
 */
/**
 * 0 (default )บันทึกข้อผิดพลาดร้ายแรงลง error_log .php
 * 1 บันทึกข้อผิดพลาดและคำเตือนลง error_log .php
 * 2 แสดงผลข้อผิดพลาดและคำเตือนออกทางหน้าจอ (ใช้เฉพาะตอนออกแบบเท่านั้น).
 */
define('DEBUG', 2);

/*
 * false (default)
 * true บันทึกการ query ฐานข้อมูลลง log (ใช้เฉพาะตอนออกแบบเท่านั้น)
 */
define('DB_LOG', false);
// load Kotchasan
include '../../Kotchasan/load.php';
// Initial Kotchasan Framework
Kotchasan::createWebApplication()->run();
