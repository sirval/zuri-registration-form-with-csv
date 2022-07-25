# zuri-registration-form-with-csv
This project is a task for [zuri](https://training.zuri.team/) internship. 
It's a php form that accepts user input using a bootstrap 4 form, sav to a csv file and then use the php print_r function to display user saved data from csv file.
Despite being a small project, it can be a start off point for those who wants to write and read to a csv file.

if you wish to write multiple line, to your csv, just uncomment the part of the code in the store function and also the handle to append (a+) instead of write (w+).
That part of the code reads your csv line by line and then gets the maximum id using array max function then add 1 to it to always increment user data id by 1.

Happy Coding!
Cheers!!
