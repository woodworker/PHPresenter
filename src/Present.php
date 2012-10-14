<?php
/**
 * Created by JetBrains PhpStorm.
 * User: woodworker
 * Date: 10/14/12
 * Time: 3:09 AM
 * To change this template use File | Settings | File Templates.
 */
class Present
{
    protected $class;

    public function __construct($class) {
        $this->class = $class;
    }

    public function next() {
        $this->pressKey('Down');
    }

    public function prev() {
        $this->pressKey('Up');
    }

    private function pressKey($key) {
        exec( sprintf('xdotool search --onlyvisible --class %1$s key %2$s', $this->class, $key) );
    }
}
