* **Create a books API using Laravel:** This was not necessary to the assumed traditional meaning of API, since I'm not using Vue. It would be a small step to add routing for the BookController in the `api.php` file and return data in JSON format if the given request was asking for JSON. 

* **Create Postman collection and Vue app OR Laravel App:** I opted for simply making a Laravel app since that's more the scope of the job role for which I'm applying. 

* **Add or remove books from the list:** Adding books is done through the "Add Book" button and takes the user to a new page. Deleting a book is done with a jQuery confirmation and AJAX call, which I thought was an appropriate solution given that the job role listed a desire for jQuery experience

* **Change the order of the books in the list:** This was added using the tablesort library. Table headers can be clicked on to change sort orders.

* **Sort the list of books by their author:** This is how the table is returned from the controller, and is additionally capable using the tablesort feature

* **Display a book detail page with a minimum of author, publication date, and title:** This is accessible by selecting the title of a book from the index page

* **Include unit tests:** Unit tests have been included, though given a realistic project, the testing would have been more comprehensive and holistic

* **Deploy it on the cloud - be prepared to describe your process on deployment:** This was deployed to Heroku and I am available to discuss this process, though it is fairly straightforward. 

If actually building a customer application, I would:

* Have further discussed the requirements to ensure it meets the needs of the customer
* Probably implement a Vue interface to make adding and removing books more seamless
* In the absence of Vue, use jQuery and modals for adding books
* Use authentication and check privileges before accessing, adding, and removing books
* Tied book entries to users, and possibly other auditing
* Implement an actual design outside the default Bootstrap
* Create documentation for future developers, especially on deployment steps
* Have tests that are more holistic assuming there is more complicated behavior later implemented
* Create a separate table and model for Authors, since a real application would probably want the ability to view all books by a particular author
* Add a date picker widget for publication date entry
* Add more robust validation for form input
* Add commenting on code that wasn't self explanatory. There were only a couple instances in this particular exercise
