<?php
    namespace Common\Base\PHX\Parser;
    use Common\Base\PHX\Element\Element;
    use Common\Base\PHX\HTML\HTMLElement;

    class PHX{
        static function toHTML(Element $component): string{
            if($component instanceof HTMLElement){
                return $component->html();
            }
            $res = ($component->children) ? self::toHTML($component->children) : "";
            return $res;
        }
    }
