I've used my own DIC library as I'm pretty big on getting that aspect right. It's forked from one made by another guy which I contributed to in the past.

On the issue of whether inheritance, encapsulation, interfaces, or traits should be used:

* I'm not a fan of **traits** outside of very specific use cases. They do allow for code reuse, but you can't type-hint on them -- so I think the best scenario to use them in is as kind of a last option, where code reuse is needed but the inheritance and composition relationships don't make logical sense.
* **Inheritance**, in my view, is useful but should not be preferred as a go-to relationship over composition because it is more restrictive in how it can be worked with, and it is less secure from a data visibility perspective in terms of what it allows the programmer to do.
* **Encapsulation/composition** is a great way of establishing relationships between objects. It forces you to interact with objects through their public API. The main drawback is that a DI container is practically a necessity to avoid lots of boilerplate code and the "new" keyword littered everywhere. You get better data security by default and a great use case for polymorphism.
* Some would say that you should have an **interface** for every class you have, and then typehint on the interface every time you need the class. I only agree with this if you are writing tests for your code (which is a good practice of course) because it allows the class to be mocked easily. If you're not writing tests, then you may not necessarily need an interface for every class.

I've been greatly influenced by the writings of [Tom Butler](http://r.je/) and those he has referenced.
