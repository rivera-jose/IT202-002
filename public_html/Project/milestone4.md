<table><tr><td> <em>Assignment: </em> IT202 Milestone 4 Shop Project</td></tr>
<tr><td> <em>Student: </em> Jose Rivera(jpr47)</td></tr>
<tr><td> <em>Generated: </em> 5/8/2022 1:25:49 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-4-shop-project/grade/jpr47" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone4 branch </li>
<li>Create a new markdown file called milestone4.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone4.md link (from Milestone4) into the proposal.md file under each milestone4 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone4.md</li>
<li>Add/commit/push the changes to Milestone4</li>
<li>PR Milestone4 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes</li>
<li>Submit the direct link to this new milestone4.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on GitHub and everywhere else.
Images are only accepted from dev or prod, not localhost.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> User can set their profile to public or private </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of new column on the Users table</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167303734-9f09b569-bfb4-4fdd-aa40-7e4d61ed4700.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the whole users table including visibility column<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of updated profile edit view</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167303806-7644824b-7480-4663-b45f-5b48c091e6f5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the profile edit page including the visibility toggle <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of profile view view (ensure email isn't shown publicly)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167303833-74a6e942-b39c-4b9e-974b-1c685f5aa89a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the profile view page with email not included<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s) links</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/95">https://github.com/rivera-jose/IT202-002/pull/95</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add direct link to a public profile from heroku</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/profile.php">https://jpr47-prod.herokuapp.com/Project/profile.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic behind how public/private profile works</td></tr>
<tr><td> <em>Response:</em> <p>the current user is checked if they are the user visiting the profile<br>page of another user, and if they are the same user, then they<br>can edit but if they are not and that user has the visibility<br>of 1, i.e  public the view of their profile can be seen<br>but if they are not public the view of their profile cannot be<br>seen<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> User will be able to rate a product they purchased </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Ratings table with some data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167304295-a1c04366-8d65-467d-b022-ee796e3178fa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>ratings table with some data in it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Product Details page with comments/ratings and the form to add another and the average rating</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167304382-f9bf76bc-d000-46cb-84b4-d62300ec0142.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details page with the ratings and comments form showing<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167304442-05db9746-f6b2-4a69-a5e9-377fc80ad9f0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details page with the ratings and comments  posted<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the error message for a user trying to rate/comment that hasn't purchased the product</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167305164-0607adf8-d350-417a-9849-397c1a995d75.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the error message you receive after trying to rate a product<br>you have not purchased<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/96">https://github.com/rivera-jose/IT202-002/pull/96</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add link to a product details page with ratings/comments</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/products-details.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/products-details.php</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Briefly explain the logic being adding comment/rating and validations</td></tr>
<tr><td> <em>Response:</em> <p>the logic behind comment/ratings and validation is as follows, on the client side,<br>we have a form that allows to rate and comment a product, which<br>then sends the information to the server side, in which before the infomation<br>is processed, a select query is executed in order to check if the<br>user has actually pruchased the item they are trying to date, if they<br>have $hasError is changed to true and the rate and comment are not<br>inserted,  in respect to the validation, the rating and comment are checked<br>if they are not empty, and if they are the has error is<br>changed to true, not inserting into the ratings table, after validation, if everything<br>pases, the information is inserted into ratings table, and is then displayed on<br>the page and as well at the end, the average is computed and<br>displayed on the end of the page<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167305814-9f48c2f6-c880-45ff-8514-01092bdbe039.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first page of the purchase history page <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167305842-40c155d1-832b-4c21-b9f2-15fd7e9fd4cd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second page of the purchase history page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167305915-5385514b-638c-472e-866f-03cdee74fde9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>purchase history with that date ranging 04/08/2022 to 05/04/2022 filter applied<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306015-9b87eefb-e99e-4745-a247-903dfebd7111.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>purchase history sorted by purchased date in ascending order<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306068-1270c8b1-7001-4f70-82ca-6129b5563933.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>purchase history sorted by purchased data in descending order<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306153-5e78a3c5-ee79-495b-9c69-5cc08020b221.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>purchased history sorted by total in ascending order<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306232-59dc19f7-dc9e-4d7f-8b7b-27b2ffbde727.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>purchased history sorted by total in descending order<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/97">https://github.com/rivera-jose/IT202-002/pull/97</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/purchase_history.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/purchase_history.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Store Owner Purchase History Changes </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots demonstrating examples of the filters/pagination applied (ensure the calculated total price is clearly visible)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306353-2f529266-75c1-4f63-ad7c-e6e7244f3c55.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>frst page of shop owner purchase history page with pagination applied and total<br>of that page displayed at the bottom<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306406-ba307e26-d9f2-45e9-9f99-68201a1ff836.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>second page of the shop owner purchase history page with pagination applied and<br>the total of that page displayed at the bottom<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/98">https://github.com/rivera-jose/IT202-002/pull/98</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a link to the store owner's purchase history page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/purchase_history.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/purchase_history.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the total price is calculated based on the filtered/paginated results</td></tr>
<tr><td> <em>Response:</em> <p>the total price is calculated as follows after querying the results from the<br>pruchase history table, the results table only takes certain rows from the table,<br>based on offset , afterwards in the results table the collumn of total_price<br>is added to the grand total variable, and basically after I added all<br>of the total price together it is displayed at the bottom of the<br>page, given that there is any orders of course<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Add pagination to Shop and any other product lists not covered </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot(s) of the newly paginated pages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306590-72e87b9b-e22e-4713-9303-452145da4e19.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page being paginated<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306630-6341300d-717b-42cc-8537-33cc5aa51638.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product list page being paginated<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306677-b88c7008-3fea-459d-a662-92eb97f486e3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>roles list being paginated<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/99">https://github.com/rivera-jose/IT202-002/pull/99</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related pages</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/shop.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/shop.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/admin/list_item.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/admin/list_item.php</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/admin/list_roles.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/admin/list_roles.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Store Owner will be able to see all products out of stock </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the out of stock results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167306785-973e0044-0a03-432c-892d-79cd37c28b82.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of product-list page with out of stock filter applied<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/100">https://github.com/rivera-jose/IT202-002/pull/100</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/admin/list_item.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/admin/list_item.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain your approach to this view</td></tr>
<tr><td> <em>Response:</em> <p>essentially I gather a category sent through the form when I click on<br>search button, if the user goes to the dropdown menu and clicks on<br>the out of stock, the name is sent to the the server side,<br>and if not found in the request, then a category variable is defaulted<br>into all. I create a categories array where I insert the category out<br>of stock, I compare my category with the array categories, and if it<br>is in there, then I leave category as is but if it is<br>not, then I change into all. after comparison, I eventually check if my<br>category is all or out of stock. if it is out of stock,<br>I state that I want to select ... with the where condition that<br>says if my value is less than or equal to the category value,<br>which is then binded to the value of zero.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User can sort products by average rating on the shop page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing the sort in effect</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307443-31506042-c306-473e-b414-db6da1bc8cc9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page products sorted in descending order<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307495-0b317d66-3c5e-4d69-9877-3a4eaa47bd53.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>average rating of lime (1st product on shop page when sorted by average<br>rating desecended)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307543-12b42cf8-9ec0-4369-bcc7-6e4179402a07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>average rating of blueberry second item in shop page when sorted by average<br>rating descended<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of the Products table (or your implementation/approach to average rating)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307617-847a300b-3b6a-4681-87ac-f3712d054781.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of products table with average rating added<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/101">https://github.com/rivera-jose/IT202-002/pull/101</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add links to related page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/shop.php">https://github.com/rivera-jose/IT202-002/blob/Milestone4/public_html/Project/shop.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain how you implemented the average rating recording logic and how it applies to this sort on sho</td></tr>
<tr><td> <em>Response:</em> <p>I basically added to the list of sort options on shop page average_rating<br>and then added a new column to the products table, and following the<br>same logic behind the other sorts, the shop page will sort by average_rating<br>column. on the product details page where you actually rate, after rating the<br>products and computing the average the products table column with average rating is<br>then updated. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone4.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307795-48f1769b-cc28-48f6-a709-6f5d76b6b16d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the first four checkmarks with all of the information filled out<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307840-a8010ed3-a6c1-47ce-a49f-d5e9f12baaea.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the last three checkmarks with all of the information filled out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone4 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307895-4bbe04c2-4850-4304-87f7-d68b3bbdd4ce.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2 /7 completed issues on the project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307946-cfea8f50-73cc-431d-81cb-34a698e345c5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2/7 compledted issues on the project board<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/167307967-1407e9bf-2445-469d-898a-21dd07d4081d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3/7 completed issues on the project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-4-shop-project/grade/jpr47" target="_blank">Grading</a></td></tr></table>