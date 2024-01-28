<?php
    namespace Common\Base\PHX\Style;

    class TextStyle{
        public float|string $fontSize;
        public string $color;
        public function __construct(string|float $fontSize = "14", string $color = "black")
        {
            $this->color = $color;
            $this->fontSize = $fontSize;
        }

    }
