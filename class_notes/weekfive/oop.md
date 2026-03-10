## object oriented programming

# what is object oriented programming
programming approach where we take individual pieces of data, contecepts, functions etc. and group them into obects

classes
intefaces
traits
(abstract) classes

## why OOP

# reusability
taking an idea or concept that we have and seperating it from other concepts
split it up into different sections/objects allow us to group similar concepts, data, functions etc
i.e: 
    - animals and animal related functions
    - plants and plant related functions

# organization
by splitting our code into objects that that each represent a concept were able to more easily find related functionality and concepts based on what "object" they are

# maintainability

?

## how OOP

# modularity
the ability to break our objects into components like puzzle pieces that can be rearranged and reattached in multiple different ways
allow us to reuse database concepts instead of having many unique concepts

# inheritance
example
- animal (functionality defines here)
    - dog (is also available here)
        - golden retreiver
        - pug
    - cat (and here)
    - bird (and here)
all are animals and inheret animals but have tighter definitions

# polymorphism
poly = many, Morph = form(s)

function (animal) {
    dog (will work)
    cat (will work)
}
each unit of code / each sub-concept works the same as and in place of the superclass (ie. animal)

# Encapsulation
function () {
    $myVar
}

echo $myVar;
^^^^ will not work because it is outside the object

# API

Application Programming Interface
application = anything

- public vs private API
like having a conversation is like public
thinking is like private

# installing composer for windows
download the exe file
apply for one user
open command prompt and type "composer" and hit enter