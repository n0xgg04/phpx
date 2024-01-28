<?php
    namespace Common\Base\PHX\HTML;

    use Common\Base\PHX\Style\TextStyle;

    class Text extends HTMLElement {
        private string $innerText;
        private TextStyle | null $style = null;
        public function __construct(string $text, TextStyle $style = null)
        {
            $this->innerText = $text;
            $this->style = $style;
        }

        public function html(): string{
            $st = ($this->style!=null) ? "font-size: {$this->style->fontSize}; color: {$this->style->color}" : "";
            return <<<HTML
            <h1 style="$st">$this->innerText</h1>
HTML;

        }
    }
