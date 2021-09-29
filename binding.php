<?php
// arly or let binding discution

class Planet{
    static function echoName() {
        echo self::getName();
    }

    static function getName() {
        return 'Planet';
    }
}

class Earth extends Planet{
    static function getName()
    {
        return 'Earth';
    }
}

// planet::echoName();

Earth::echoName();