# Browser-Poll

This is a simple PHP, MySQL, Javascript program that asks people for their favourite web browser and provides statistics for all submissions.
## Getting Started

Clone the project repository by running the command below if you use SSH

```bash
git clone git@github.com:mbphaghighi/Browser-Poll.git
```

If you use https, use this instead

```bash
git clone https://github.com/mbphaghighi/Browser-Poll.git
```

After cloning, go to:

```bash
core\model.php file
```

and in its __construct() method, modify the database properties with your database config.

Then, import the test_poll.sql file into your database.


## Using the Web App

And finally, start the application:


and visit [http://localhost/browser/poll/](http://localhost/browser/poll/) to see the application in action.

You can vote your preferred web browser and easily see the results in tables. You can see your using web browser at the time you are voting.

If you vote with a valid email, an email will be sent you showing your choice.



