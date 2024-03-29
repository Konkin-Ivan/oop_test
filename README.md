# Тестовое задание "oop_test"

### Задача:
- Создать новость.
- У новости есть автор (пользователь) название, текст и категория.
- Категория - это не строка, а сущность, ее можно включить или выключить.
- У каждой новости есть комментарии. Комментарий могут писать как пользователи так и гости.
- Нужно написать классы News, User, Comment и другие.

### Решение:

#### app/Entity/

- Создю классы User, Comment, Category и News для представления пользователей, комментариев, категорий и новостей.
- Класс User содержит только одно свойство - имя пользователя.
- Класс Comment содержит информацию об авторе комментария и тексте комментария.
- Класс Category представляет категорию новости и имеет свойства имя категории и флаг enabled, указывающий на то, включена ли данная категория.
- Класс News содержит автора новости, название, текст, категорию и список комментариев к новости.

#### app/public/index.php

- В конструкторе класса News инициализирются свойства объекта с переданными значениями.
- Метод addComment позволяет добавить комментарий к новости.
- Добавляю комментарии к новости, как от пользователя, так и от гостя.

## Примечание:

```php

public function __construct(
        string $author,
        string $title,
        string $text,
        string $category
    )

```

Такого вида типизацию я бы заменил на на объявление типов классами.

Например:

```php

public function __construct(
        Autor $author,
        Title $title,
        Text $text,
        Category $category
    )

```