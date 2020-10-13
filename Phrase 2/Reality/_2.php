<?php
/**
Write a PHP file that will output a form containing 2 fields: username and password. Upon
submission of the form, the code should check against the database to see whether the usernamepassword pair was correct. If so, display a welcome message. If not, display the message
“Invalid username or password” followed by the same login form.
Once again, there should only be one PHP file, and you should redirect to the same place after
submitting. The output should be one of three options:
1. The login form.
2. The welcome message, if successful login.
3. The invalid message and the login form, if failed login.
 */

/*
Create a form to allow a user to reset their password with their username and phone number. If
the username and phone number match entries in the database, you should generate a random
string as a password (make it of reasonable length, alphanumeric), inform the user of the random
string generated, and make appropriate changes in the database. Remember that the database
stores the hashed version of the password.
If the username and phone number combination does not exist, inform the user of the failure to
reset the password, and display the reset form below the message.
*/

/*
• A successful login should set some session variable so that the server knows that the user
is logged in. For example, set $_SESSION[‘loggedin’] to be TRUE.
• When the page is loaded, check the session variable. If the user is logged in, display the
welcome message instead of the login form.
• Add a “Log Out” button to the welcome message that, when clicked, removes the session
variable so that the user is logged out. Clicking the button should redirect the user to the
same page, which now shows a login form
*/

/*
Add a “Remember me!” checkbox to the login form. If the box is checked and the login is
successful, save a cookie that identifies the user to the server. On further visits to the page, the
user should appear logged in, even if the browser has been closed.
The cookie will be stored in 3 days. Remember also that if the user
manually logs out by clicking the “Log Out” button that the cookie should be deleted (set the
expiration to be some time in the past).
*/
