<?php
// 假设我们不想允许从 example.com 域名的页面重定向
$blockedDomain = 'nba.com.zhuolue.com.cn';

// 获取当前请求的Referer头部
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// 检查Referer头部是否存在以及是否包含被阻止的域名
if ($referer && strpos($referer, $blockedDomain) !== false) {
    // 如果来自被阻止的域名，则不进行重定向
    echo "重定向到 {$blockedDomain} 被阻止。";
} else {
    // 否则，进行正常的重定向
    header('Location: https://nba.com.zhuolue.com.cn/');
    exit;
}
?>
