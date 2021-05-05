# Notes
The "faktura_pdf" block can be added to the default user profile page and from there a user can view any "faktura" for courses the user is enrolled to.

version.php and db/* is taken from the tutorial documentation and has not been modified except changing the block name to the faktura_pdf block name.

## Security concerns
In the current version any user (also without login) can open any "faktura" as long as they know the id for it, which can easily be guessed.

## Future works
Add authentication checks to ensure that the client trying to get access to a "faktura" has the permissions for it.