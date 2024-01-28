<?php
    namespace Common\Base\Cores\Node;
    use Common\Base\Cores\Component;
    use Common\Base\PHX\Element\Element;

    abstract class ComponentNode extends Element {
        public array $params;
        public Element $children;
        abstract public function render(): Element;
    }
