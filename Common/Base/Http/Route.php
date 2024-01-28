<?php
    namespace Common\Base\Http;
    use Common\Base\PHX\Parser\PHX;

    class Route{
        public string $uri;
        public function __construct(string $uri)
        {
            $this->uri = $uri;
        }

        function Routing(): void{
            $path = explode("?",$this->uri)[0];
            $page_path = $_SERVER['DOCUMENT_ROOT']."/app/".$path."/page.php";
            $is_exists = file_exists($page_path);
            if($is_exists){
                include_once $page_path;
                $page_content = new \Pages\Page();
                echo PHX::toHTML($page_content->render());
                return;
            }
            echo "Cac";
        }
    }

