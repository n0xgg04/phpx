<?php
    namespace Common\Base\PHX\HTML;
    use Common\Base\PHX\Element\Element;

    abstract class HTMLElement extends Element {
        abstract public function html():string;
    }
