<?php
    namespace Pages;
    use Common\Base\Cores\Component;
    use Common\Base\PHX\Element\Element;
    use Common\Base\PHX\HTML\Column;
    use Common\Base\PHX\HTML\Text;
    use Common\Base\PHX\Style\TextStyle;

    class Component1 extends Component{

        public function render(): Element
        {
            return new Text();
        }
    }

    class Component2 extends Component{

        public function render(): Element
        {
            return new Text();
        }
    }

    class Page extends Component{
        public function render(): Element
        {
            return new Component1(
                children: new Component2(
                    children: new Column(
                        children: [
                            new Text(
                                text: "Anh",
                                style: new TextStyle(
                                    fontSize: 50,
                                    color: "violet"
                                    )
                                ),
                            new Text(
                                text: "Anh",
                                style: new TextStyle(
                                    fontSize: 50,
                                    color: "violet"
                                )
                            )
                        ]
                    )
                ),
            );
        }
    }

