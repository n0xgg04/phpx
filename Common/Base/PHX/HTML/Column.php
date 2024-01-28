<?php
    namespace Common\Base\PHX\HTML;

    use Common\Base\PHX\Parser\PHX;

    class Column extends HTMLElement {
        private float|string $gapX, $gapY = 0;
        private array $children = [];
        public function __construct(float|string $gapX = 0, float|string $gapY = 0, array $children = []){
            $this->gapX = $gapX;
            $this->gapY = $gapY;
            $this->children = $children;
        }

        public function html(): string
        {
            $html_child = "";
            foreach ($this->children as $child){
                $html_child.= PHX::toHTML($child);
            }
            return <<<HTML
        <div style="display: flex; flex-direction: column;row-gap: $this->gapX; column-gap: $this->gapY">
            $html_child
        </div>
HTML;
        }
    }
