# PHP X

Pờ rồ dếch lỏ tham vọng routing như NextJS nhưng viết FE như Flutter :)) Đọc cấm cười

### Routes:
    /app : Folder structure routing : page.php, layout.php auto render

### PHX Components

```php
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
```
