**Student Form (index.php), Details (action.php) and Authn layers (login.php,register.php)**
- Validate late and early used, regex on html/php and htmlspecialchars
- Authentication by checking with mysql database. Hashed password using password_hash in register.php. If account already exist, error message.
- Also logout added on form and detail pages to test authn.
- Session passes user's logged in status, id, email, role.

**Sequence:**
1. Starts at student form. Create session and redirect to login if not logged in. 
2. Either insert login credentials to proceed back to student form or register.
3. Register will send back to login after filled in with correct details.
4. Student form page, fill in with correct input will send to student details. 


**To run:**  Place everything in htdocs, create db, edit config and run with xampp. In db after user registration, need to manually insert roles.  

**Authz Roles:**
- Admin: can view, update and delete users data. 
- User: can insert, update and delete their own data.
- Guest: Can only fill in form, not view result after. 
