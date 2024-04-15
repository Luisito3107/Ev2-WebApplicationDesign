First I added a column for the book cover and a CSS class for the image.

Then I added the enctype attribute and a file input field to the create and update forms.

Also, added an IF clause to display a container with all the validation errors that may occour. Added a CSS class for that container too.

Then, added the validations to the BookController, that are the same as those present in HTML input fields.

I used the "php artisan storage:link" command line to create the uploaded files path.

Then, added the lines to check if an image file was sent in the create or update request and if so, update the Book instance.

Finally, added the book cover column to the table, with IF clauses to check if an image has been uplodaded and the file is present in the storage folder.