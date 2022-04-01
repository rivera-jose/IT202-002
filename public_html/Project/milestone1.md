<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Jose Rivera(jpr47)</td></tr>
<tr><td> <em>Generated: </em> 3/31/2022 11:50:51 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone1-deliverable/grade/jpr47" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone1 branch</li>
<li>Create a milestone1.md file in your Project folder</li>
<li>Git add/commit/push this empty file to Milestone1 (you&#39;ll need the link later) </li>
<li>Fill in the deliverable items<ol>
<li>For the proposal.md file use the direct link to milestone1.md from the Milestone1 branch for all of the features  </li>
<li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e, <a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li>
</ol>
</li>
<li>Ensure your images display correctly in the sample markdown at the bottom</li>
<li>Save the submission items</li>
<li>Copy/paste the markdown from the &quot;Copy markdown to clipboard link&quot;</li>
<li>Paste the code into the milestone1.md file</li>
<li>Git add/commit/push the md file to Milestone1</li>
<li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li>
<li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Make a pull request from dev to prod (resolve any conflicts) <ol>
<li>Make sure everything looks ok on heroku</li>
</ol>
</li>
<li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li>
</ol>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161180282-50124667-a87d-44bc-878b-c6c0e56a43b7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing a new user being registered<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161180386-53c0e969-ccd7-4aeb-b834-5403cceaaee8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing a user with the same email being registered with an error<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161180546-b964cda2-90ef-4716-8a11-a1e64d25f2d2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing proof of the user being added to the table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/21">https://github.com/rivera-jose/IT202-002/pull/21</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>the way register works is that it creates a form where the user<br>enters input with the following labels: email, username, password, and confirm password. the<br>username/email is validated (client side ) using JavaScript function defined by me. email,<br>password, username, are all validated, and if validation or sanitization fails, a flash<br>message is given in error, eventually after validation is finished, pass word is<br>hashed. Then email, username, and hashed password is inserted into users tables.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161181799-b3cd9916-5f08-4806-91dd-5fbdab89538f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing the login form<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161181929-aec32e8c-5d9b-420f-880c-6f33f487ecaa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image receiving an unsucessful login due nonregistered email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161183416-6a854d4f-98f2-4f6d-b51b-d073681befe5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing user enter an invalid password<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161182033-b5540b34-6f54-41ca-bd9d-92cad72b0798.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing a successful login by viewing home page with a welcome message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/24">https://github.com/rivera-jose/IT202-002/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>the way login works is as follows it has a form of email/username,<br>and password, and the information is validated using the validate function we define<br>in javascript. The information is submitted, and is then validated on the server<br>side, and if the validation fails, user receives an error flash message, otherwise<br>the user is redirected into home page<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161183634-d38764d2-df73-4942-b342-5483745f485b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing user having a successful logout<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161183772-2b5b0f1e-758d-46e1-8395-fae1133bf93f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing user attempting to login a login-protected page home after being logged<br>out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/24">https://github.com/rivera-jose/IT202-002/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>the way logging out works is a session is destroyed and the user<br>is redirected back to the login page and a flash message stating you<br>have successfully logged out is given <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161183772-2b5b0f1e-758d-46e1-8395-fae1133bf93f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing user attempting to login a login-protected page home after being logged<br>out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page (a test/dummy page is fine)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161185048-dde49cbe-ca0f-48f7-b991-41f15f24b265.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of user attempting to enter a admin page without its admin role<br>given<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161185195-3c43257a-91da-4cf1-86e6-6bdf29c4d1a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the roles table with admin data given<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161185548-2616ae5c-5782-45fe-8d9c-c2a8f88ea452.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the user roles table with data <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/45">https://github.com/rivera-jose/IT202-002/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>the way the login-protected pages work is it checks whether the user is<br>logged in using the isloggedin function and if they are then the session<br>begins and user is able to navigate into different pages where is logged<br>in is set to true, like llogout, home.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>the way role-protected pages work is it checks whether a user that is<br>logged in has role specified and if they dont, they are redirected onto<br>home page, otherwise they can navigate onto the appropriate pages where the has<br>role specified to true<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161186745-693db2de-3ca1-406f-b1f6-ec1880e67781.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of home page showing that my site&#39;s style is a gray background<br>for body and pink salmon for the nav bar<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/41">https://github.com/rivera-jose/IT202-002/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>I gave my nav bar a light salmon color and edited padding and<br>margins of it to give some space to body of page. and to<br>the overall body I gave it a light gray color<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161187420-28792829-087e-494b-bb3e-0134970d9f13.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing an incorrect password entered<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161187507-ae817024-cca3-4c83-bd49-21591c23a0a1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing an incorrect email entered<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161187640-6970aaf6-645c-46be-9261-f1caa2e5d5ac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing an already made user for registration<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/26">https://github.com/rivera-jose/IT202-002/pull/26</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>the way messages were created was that each time a situation occurred and<br>we needed to state a message to the user, we would add that<br>to the flash function, into the array, where the situation would specify the<br>color of the message. the message after it is created and then fetched,<br>is then displayed under the nav bar<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161188312-7f6c0be7-3758-40ce-a8c6-e103ffde3dc6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image that shows how a user profile page looks like<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/27">https://github.com/rivera-jose/IT202-002/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>the profile page works is as follows, checks if user is logged in,<br> has  form provided with email and username already given and also<br>stuff like current password, and stuff like update password, and if any new<br>information is passed, then it passes through the validation process, and then the<br>passwords is updated in the sql table<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161190283-801b7b5f-5b7e-4bcf-aac8-93a4660d2927.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing a user editing their profile password but entering a password shorter<br>making password invalid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161190469-2796c057-ba34-45cc-9110-5018b4b61fd2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing user updating their password but current password not being valid<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161190805-ac281267-c5d7-4cb2-94ed-d76729d1e70f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing user update their profile successfully with message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161190587-2e5d7aa8-74dd-42c5-b20c-f2e2053204fe.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>users table before user updates their profile<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161190879-f1f29713-0e58-4ac2-8e6a-2f1942b5bcde.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>users table after user updates their profile<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/27">https://github.com/rivera-jose/IT202-002/pull/27</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>the profile page works is as follows, checks if user is logged in,<br> has  form provided with email and username already given and also<br>stuff like current password, and stuff like update password, and if any new<br>information is passed, then it passes through the validation process, and then the<br>passwords, emaiil, or username is updated in the sql table<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Proposal and Issues </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191122-4726c187-03fa-4cde-98c6-e1f5794e84e9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first part of the proposal.md file<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191212-1222d803-f1f1-47b5-8252-98be1e9b6ff6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second part of the proposal.md file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191396-cd83b408-b038-48f9-be56-2fe61f372ff0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first part of the closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191465-8337fcf6-d1b5-435f-b683-bcc0d56932fc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second two of the closes issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191516-b474faab-c2b0-4a34-a733-94c40d1174cf.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>third two of the closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191568-60731607-6af0-4067-9d4f-6837b15c836e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>fourth two of the closed issues<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/161191638-533ca9ee-4965-43c2-a094-a03daef25227.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>final issue of the closed issues<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone1-deliverable/grade/jpr47" target="_blank">Grading</a></td></tr></table>