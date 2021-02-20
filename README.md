# learn-gof23

## Iterator

集合体を司るクラスと、1つ1つ次に進めるクラス。

- `src/DesignPattern/Iterator`
- `src/App/StudentCounter`

```
# docker exec -it learn-gof-php bash
# psysh
# App\StudentCounter\Main::call();
```

## Adapter（継承）

古いAPIなどをラップする。  
特定のクラスをラップする。

- `src/DesignPattern/Adapter`
- `src/App/Adapter01`

```
# docker exec -it learn-gof-php bash
# psysh
# App\Adapter01\Main::call();
```

## Adapter（委譲）

委譲（任せる）とあるが、新しいクラスで古いクラスのインスタンスを作成しているだけ。

- `src/DesignPattern/Adapter`
- `src/App/Adapter02`

```
# docker exec -it learn-gof-php bash
# psysh
# App\Adapter02\Main::call();
```

## TemplateMethod

処理の順序や内容を定めたもの

- `src/DesignPattern/TemplateMethod`
- `src/App/TemplateMethod`

```
# docker exec -it learn-gof-php bash
# psysh
# App\TemplateMethod\Main::call();
```
