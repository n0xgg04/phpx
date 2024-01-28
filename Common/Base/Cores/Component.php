<?php
    namespace Common\Base\Cores;
    use Common\Base\Cores\Node\ComponentNode;
    use Common\Base\PHX\Element\Element;

    abstract class Component extends ComponentNode{
        function __construct(Element|null $children = null)
        {
            if($children) $this->children = $children;
        }

    }
