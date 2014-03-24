Factory
===================
* it is a factory of related classes that shares the same interface or base.
* this pattern lets you create instances without using the ```new``` keyword.
* can create different types of object without really knowing the type of object is actually being created.

#### When to use this pattern
* You have a base class that is inherited by different classes. (parent-child inheritance)
* You need to encapsulate the logic for instantiating/creating objects.
* You need to reduce the tight-coupling between classes.
