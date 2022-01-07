# Tutorial 02 Preview: Objects & Functions

**2022-01-17 (M)**

This is a **preview** of tutorial 02, meaning that the complete instructions for the exercises aren't present. The complete instructions will be available early (4 AM?) morning on the day of the tutorial.

I **do** provide some suggestions for things you can do to get a head-start on the exercises.

## Overview

This tutorial is meant to give you a feel for how comfortable you are with basic JS syntax, creating and calling JS functions, and creating objects using object literals and constructor functions.


## What things are being checked

[Here are the things](what-things-are-checked.md) being checked in this tutorial.


## Instructions
   
1. Go to the [GitHub Classroom Links section of the tutorials document](https://github.com/MRU-CSIS-3512-202201-001/shared-course-material/blob/main/tutorials.md#github-classroom-links) in our GitHub Org.
   
2. Click on the correct link to accept the "assignment". 

    _Links won't be active until early (like 4 AM?) on Monday mornings._

3. Clone the accepted repository to your computer.
   
4. Open the resulting local repository in VS Code.

    _You should see a README, folders for two exercises (ex-01 and ex-02), a `package.json` file, and a bunch of "dot files" - files whose names start with a period. The package.json file and dot files will be used in most tutorials and are "plumbing" that you should not change._

5. Run `npm install` in the VS Code terminal to install the tools used by the plumbing.
   
6. Work through the exercises in any order you prefer. Use the appropriate exercise section below to guide you.
   
7. When you feel you are ready for JP to walk through the marking script with you, DM him on Discord and be prepared to share your screen when he is ready to take a look at your work.

---

## ex-01

### prerequisites

To complete this exercise, you should know how to:

- [ ] create a link to an external JS file in your HTML
- [ ] declare and initialize variables and constants
- [ ] concatenate using `+` or template literals
- [ ] declare and initialize an object literal
- [ ] create a function via a function declaration
- [ ] use MDN as a reference to look up JS documentation


### get a head start

Make a function that takes in a amount of money in cents and returns that amount formatted as Canadian currency. 

- You can see how to format in US dollars [here](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/NumberFormat/NumberFormat#currency_formatting).
- Instead of 'en-US', you should use something appropriate for Canadian English. [This site](https://www.techonthenet.com/js/language_tags.php) was helpful for me.
- Instead of 'USD' for the currency, you should use something appropriate for Canadian Dollars. See https://www.techonthenet.com/js/currency_codes.php

---

## ex-02

### prerequisites

To complete this exercise, you should know how to:

- [ ] create a link to an external JS file in your HTML
- [ ] write output to the console using `console.log()`
- [ ] declare and initialize variables and constants
- [ ] concatenate using `+` or template literals
- [ ] create conditional statements
- [ ] declare and initialize arrays
- [ ] add elements to an array
- [ ] find the length of an array
- [ ] iterate through an array with a `for-of` loop
- [ ] access object properties with dot and/or `[]` notation
- [ ] create a function via a function declaration
- [ ] call functions
- [ ] create a constructor function
- [ ] create an object using a constructor function
- [ ] use MDN as a reference to look up JS documentation


### get a head start

Try and make a function that takes in a string with 6 characters and returns true if each pair of characters (first two characters, second two characters, and third two characters) is the same and false otherwise.

For example, if we called the function `allPairsSame`, then:

```javascript
allPairsSame("tututu"); // should return true
// the 3 pairs ("tu", "tu", "tu") are the same

allPairsSame("ababxy"); // should return false
// the third pair ("xy") isn't the same as the first two ("ab", "ab")
```

You can assume the case of the string will be consistent (all uppercase or all lowercase).

---

## Karma
 
- showing up on time gets you some karma (and continuing to do so *consistently* gets you even more)

- if you can complete both exercises successfully, you will get a goodly chunk of karma

- even if you can only get through _some_ of the exercises in time, you'll still get *some* karma

- if you aren't able to complete the exercises in tutorial, but are able to do so before I take a look through everyone's work early Wednesday morning, that will be worth some karma as well

_This wil be the last time I mention this stuff, because it's going to be the same for the rest of the "regular" (i.e. not code quiz) tutorials._

---

## Submitting the tutorial

I will take a look through people's work early (_really_ early!) Wednesday mornings, so if you would like feedback on your code, please make sure you push your work back to your repo before 3 AM on that day.




