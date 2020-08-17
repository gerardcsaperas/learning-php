<?php



class Configuration {
    public static $color;
    public static $newsletter;
    public static $environment;
    
    // Instead of $this->property we use self::property
    // to access static properties
    static function getColor() {
        return self::$color;
    }

    static function getNewsletter() {
        return self::$newsletter;
    }

    static function getEnvironment() {
        return self::$environment;
    }

    static function setColor($color) {
        self::$color = $color;
    }

    static function setNewsletter($newsletter) {
        self::$newsletter = $newsletter;
    }

    static function setEnvironment($environment) {
        self::$environment = $environment;
    }


}

