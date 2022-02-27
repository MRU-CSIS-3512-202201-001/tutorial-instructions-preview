# Tutorial 10: PHP Classes (Preview) 


## Overview

This tutorial has you create a couple of PHP classes, one that holds data about [Lorem Picsum](https://picsum.photos/) objects and the other that presents Lorem Picsum objects in a variety of ways.

You may find the techniques demonstrated here useful for the assignment.

## Instructions
   
Proceed as you did for Tut-09:

- You should clone the starting repo into your XAMPP installation's `htdocs` directory.
- You'll need to remember to start up XAMPP and turn on the Apache server before you'll be able to do any work.
- Live Server isn't a thing anymore; instead, you'll need to go to the proper URL in a browser and refresh the browser manually every time you want to see the results of a change to your PHP code. Sigh.

--- 

## ex-01: a Lorem Picsum class

### background

It can be very useful to create classes in PHP to encapsulate data. Think about your second assignment - there are definitely some classes that you might consider creating!

### prerequisites

To complete this exercise, you should know how to:

- [ ] Define a PHP class.
- [ ] Create public and private properties.
- [ ] Create static properties.
- [ ] Create a constructor.
- [ ] Create methods.
- [ ] Refer to static and non-static properties in methods.
- [ ] Call private methods within public methods.
- [ ] Instantiate objects from a class.
- [ ] Call an object's methods.

### goal

When the user arrives on `testing.php`, they'll see an unordered list of 3 URLs of Lorem Picsum images:
  1. The first URL is for any valid Lorem Picsum image (see the full list of images [here](https://picsum.photos/images#1)) at its original dimensions.
  2. The second URL is for a different valid Lorem Picsum image at a size of 400px square.
  3. The third URL is for yet another different valid Lorem Picsum image at a size of 200px square and in grayscale. 

Here is an example of what I see when I choose my different images:

**(there will be a screenshot here in the full tutorial)**


### what you'll need to do

1. Take a quick look at https://picsum.photos/ and find out what the URLs look like for:
   1. a picture with a given id and a given width and height,
   2. a picture with a given id that is square with a given width, and
   3. a grayscale version of a given picture with a given id and size (square or otherwise)

2. Examine the `LoremPic.php` file. It contains the start of a PHP class that you will need to complete. This includes a partially-completed helper method called `initFromApi` that actually talks to the Lorem Ipsum API to get information about a picture with a given ID.

3. Complete all the `// TODO` entries in the `LoremPic.php` file. **There will be 2 more methods to complete in the full tutorial.**

4. Take a look at the `testing.php` file. Complete the `// TODO` entries in order to display the desired list of URLs. **There will be 2 more TODOs to complete in the full tutorial.**


---

## ex-02: a Lorem Picsum Presenter class

### background

It is frequently a good practice to separate the encapsulation of data from the presentation of that data. For example, we might want to "present" a LoremPic object in a variety of ways - perhaps in some cases, as a simple `<img>` tag and in other cases as a `<figure>` that has a `<figcaption>`.

### prerequisites

To complete this exercise, you should know how to:

- [ ] Define a PHP class.
- [ ] Create private properties.
- [ ] Create a constructor.
- [ ] Create methods.
- [ ] Refer to non-static properties in methods.
- [ ] Instantiate objects from a class.
- [ ] Call an object's methods.

### goal

When the user arrives on `testing.php`, they'll see two figures:

1. The first figure is a 400px square colour picture (of a valid Lorem Picsum photo) with an appropriate caption.
2. The second figure is a 200px square grayscale picture with a caption of the author's name.

Here is an example of what I see when I choose my different images:

![example list](instruction-images/ex-02-imgs.png)   

And here is what the underlying markup looks like (after Prettier got done with it):

(markup will be shown here in the full tutorial)

### what you'll need to do

1. Copy your working `LoremPic.php` file from `ex-01` into the `ex-02` folder.

2. Create a file called `LoremPicPresenter.php`; start it off with an empty class called `LoremPicPresenter`.

3. Complete the `LoremPicPresenter` class so that is has the following characteristics:
   1. It has a single private property to hold the LoremPic object it is presenting.
   2. It has a constructor that takes in a LoremPic object and initializes the private property with it.
   3. There will be two more methods to complete in the full tutorial.



4. Complete the `// TODO` entries in `testing.php` such that the page displays the desired `<figure>` elements. There will be 3 more TODOs to complete in the full tutorial.


---

## Submitting the tutorial

I will take a look through people's work early (_really_ early!) Wednesday mornings, so if you would like feedback on your code, please make sure you push your work back to your repo before 3 AM on that day.
