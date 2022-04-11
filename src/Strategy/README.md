# Паттерн Стратегия

**Стратегия — определяет семейство алгоритмов, инкапсулирует и обеспечивает их взаимозаменяемость.
Паттерн позволяет модифицировать алгоритмы независимо от их использования на стороне клиента.**

[comment]: <> (Возьмем за основу утку, но они бывают разные, например какие-то крякают, какие-то нет.)

[comment]: <> (То же самое с полетом, кто-то летает как ракета, кто-то на раслабоне, а некоторые и вовсе не умеют.)

[comment]: <> (---)

[comment]: <> (Если ты попробуешь написать класс описывающий какую-то конкретную утку, которая например `умеет летать` и крякает `кря`,)

[comment]: <> (то при создании новой утки тебе придется, либо наследовать эту утку в новом классе и менять реализацию полета и голоса,)

[comment]: <> (либо создавать отдельный класс новой утки и помнить о методах  )

[comment]: <> (Паттерн стратегия позволяет разделить общие атрибуты. И вынести их за пределы класса утка. )

[comment]: <> (То есть этот паттерн заставляет мыслить не реализацией, а абстракцией.)