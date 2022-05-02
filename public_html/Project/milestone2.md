<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Jose Rivera(jpr47)</td></tr>
<tr><td> <em>Generated: </em> 5/1/2022 8:44:49 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-2-shop-project/grade/jpr47" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol>
<li>Checkout Milestone2 branch </li>
<li>Create a new markdown file called milestone2.md</li>
<li>git add/commit/push immediate</li>
<li>Fill in the milestone2.md link (from Milestone2) into the proposal.md file under each milestone2 feature</li>
<li>For each feature in the proposal add a related direct link to Heroku prod for a file related to it the feature</li>
<li>Fill in the below deliverables</li>
<li>At the end copy the markdown and paste it into milestone2.md</li>
<li>Add/commit/push the changes to Milestone2</li>
<li>PR Milestone2 to dev and verify</li>
<li>PR dev to prod and verify</li>
<li>Checkout dev locally and pull changes to get ready for Milestone 3</li>
<li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li>
</ol>
<p>Note: Ensure all images appear properly on github and everywhere else.
Images are only accepted from dev or prod, not local host.
All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod). </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166162147-b41cdef4-4906-4f7f-958d-cd0da9ed9f42.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin create item page (1/2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166162169-fa8d9d02-d543-4fa4-9645-add47bf0e92d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin create item page (2/2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166162199-6f0b555e-46a5-43ad-8fdd-22f2ad946f8d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Products table containing created products<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>the code  reads the post request data, and saves the information to<br>products table using save_data function which  is used in this case to<br>insert into Products table<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/70">https://github.com/rivera-jose/IT202-002/pull/70</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/Project/add_item.php">https://jpr47-prod.herokuapp.com/Project/Project/add_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166167770-82375113-7d5c-4f9c-bb33-8cdd68d2d6ed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page with 10 items without filter or sorting applied(1/2) (admin shop version)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166167789-77b3c265-cccb-4a5f-bfee-b381de6dff5f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page with 10 items without filter or sorting applied(2/2) (admin shop version)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165086-d6089116-0c41-41a7-836b-7e69d966f546.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: unit_price,  up)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165157-19588217-7657-4788-a53a-c76acf8b97a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: unit_price,  down)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165184-a0ff8b9d-0daf-46a1-96e3-eba4e9c6ea9b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: stock,  up)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165209-d7a36d05-f4d0-4a58-9aad-8ab4f177913b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: stock, down)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165240-14dc6459-166d-4622-aaec-8b740335a4f6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: name, up)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165267-b4411c56-31b8-4a15-a3c5-55b1c1d3056c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: name, down)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165307-6532622f-6e3f-4bc4-a7ca-6857a695c65d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: created, up)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165351-185fa076-0cf3-4d23-922c-ad49822a1f07.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shop page (filter: fruit sort: created, down)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code (ensure ucid and date is shown)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165425-056f9ca0-0581-4d7e-bf5d-dddf5581daf3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code gets column order and descending or ascending order from  and checks<br>if it&#39;s one of the specified categories<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165520-05f913e9-9b96-4b09-b0ba-49e2989bc471.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code gets category and checks if category is from one of the allowed<br>categories to filter<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165542-c2244755-6cdd-412e-9300-3b268a597178.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code appends the category to filter by to sql query<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165584-c49a09ee-911f-48e2-afc7-ad319a666508.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>code that appends the sort by functionality to sql  query<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>the results are shown as follows, the user gets data from table if<br>the product is visible and has at least 1 item in stock, and<br>depending on what the user places for category and sort the variables are<br>appended to the query in which is limited by 10, and eventually the<br>code executes the query and each  record is displayed in cards on<br>the page,<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/72">https://github.com/rivera-jose/IT202-002/pull/72</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/shop.php">https://jpr47-prod.herokuapp.com/Project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165927-b58cd1c5-d1f8-4472-9534-93f7664885aa.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin list pages (1/2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166165899-f0598917-f7e9-4e23-a1e7-766f73a91d8a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin list pages (2/2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>user is checked if they have the role of admin and or shop<br>owner and if they do, then, the query  is used afterwards to<br>get all of the records from products tables where anything that was entered<br>by the user in box, is used as partial match against the records<br>names and the after retrieving records display on page<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/71">https://github.com/rivera-jose/IT202-002/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/admin/list_item.php">https://jpr47-prod.herokuapp.com/Project/admin/list_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a sceenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166167880-f8a08716-caad-461f-b572-00761369614e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admi shop page with edit button on footer of card<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a sceenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168130-016ee356-455e-42b2-b6bd-f2e4ddb33438.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details page with edit <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a sceenshot showing the edit button visible to the Admin on the Admin Product List Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168182-5bd5de30-0282-49a9-96ac-52e3adc770bb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>admin product list page with edit by the side<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168207-48fa33f5-c41d-42cb-a1e2-d106eb1d572c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before editing a product (1/2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168257-f386e00c-b699-4a06-92b9-e37259aa74ac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before editing a product (2/2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168320-f434e4f4-0617-48c7-975b-db32b3511b08.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after editing a product (1/2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168339-3f92503d-e518-42be-9aba-be007fd9e141.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after editing a product (2/2)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>code process flow works as follows wherever there is an edit button the<br>user is checked if they have the admin role first and if they<br>do they are provided with the edit link to the edit page, taking<br>the id of the product, the user is sent to the edit page<br>from there the id and as well as the other information that was<br>sent from wherever the edit page was clicked is sent and that using<br>the update function is used to update products table, and then it is<br>used to display the current row on the page with the input boxes<br>ready for any update<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/71">https://github.com/rivera-jose/IT202-002/pull/71</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/admin/edit_item.php">https://jpr47-prod.herokuapp.com/Project/admin/edit_item.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168864-1ca4ceb9-59ef-4e38-9457-e21cb418ea24.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing a bunch of products with details button<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166168884-f3521427-15c6-418c-9304-24faa41bc8a9.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>product details page after I click on one of the products (Grape)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>the code basically has an details button for each product presented on the<br>page, and the details button redirects you to the details page with the<br>id of the current product. once it is there on the  product<br>details page, query is sent to the database fetching all of the information<br>of the product with that id, and then displays everything on the page,<br>broken up into collumns<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/73">https://github.com/rivera-jose/IT202-002/pull/73</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/products-details.php">https://jpr47-prod.herokuapp.com/Project/products-details.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166170149-94f334bd-48ea-4676-b6e7-79df9321c005.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image showing a product added to cart with successful message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166169985-e88d5d44-4408-4fcd-bd93-4af3fa4bb4a0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of error message, after trying to enter cart.php, while not being logged<br>in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166170191-18bd851d-17bf-404f-a3e9-470eea0ab616.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart table with some product in them<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>I have one cart per user<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>the process of add to cart works as follows, is it checks if<br>a post request was sent with any values named add, and if so,<br>it takes some information of the post request, eventually it inserts into cart<br>table the information it receives and if the id is already in table,<br>that row&#39;s quantity is updated to the new quantity, and that only runs<br>if the quantity is 1 and over, othewise it deletes the whole product<br>line from the cart<br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/74">https://github.com/rivera-jose/IT202-002/pull/74</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View (show subtotal, total, and the link to Product Details Page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166170359-f1f25248-4964-429d-b7eb-0d352b9ff2c8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart page for admin, after adding some products<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>the code queries the cart table where user&#39;s id is used to fetch<br>all of the information in cart, and in the query the user computes<br>the subtotal using the quantity * unit price, eventually the query is executed.<br>after the results are returned, the code iterates through the results array, and<br>each subtotal in array are added into a total variable.  then the<br>results array is checked, if it is empty a message explaining it is<br>empty is posted on page, or if it is not empty, all of<br>the cart information is posted in collumns as well as the available action<br>next to it corresponding the user&#39;s roles<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/75">https://github.com/rivera-jose/IT202-002/pull/75</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/Project/cart.php">https://jpr47-prod.herokuapp.com/Project/cart.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166170886-da76d379-2c85-4994-b26f-96836c468ee6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart before updating the quantity of television item<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166170938-8de48be5-d2a3-415f-8b91-28c5a44b9fed.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart after updating the quantity of television item<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166170976-c377ddca-f1c9-473e-89f2-b60f49ec6899.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart before updating cart quantity to 0<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171005-676a6bd1-5e02-4664-8b31-c4c2e83a716e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart after updating cart quantity to 0 for television<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171036-7d948256-d650-4e87-a641-77a9a0bf1911.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart before updating the cart quantity to -1<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171069-1c0beb88-9ec5-4a33-9034-79a8ab2461de.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart after updating cart to -1 value<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>process of how values of 0 and negatives are handled it is when<br>the user enters a value of 0 or less, the add variable is<br>sent to the post request and the add functionality checks if the quantity<br>entered is at least 1, and if it is, it adds but if<br>it&#39;s not, it simply deletes the item from the cart completely<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/76">https://github.com/rivera-jose/IT202-002/pull/76</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171213-b5d256da-5574-4f6a-8dc4-addec8f33135.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart before deleting item from cart<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171248-6921d464-1016-4097-8adf-08bdc374d15e.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart after deleting from cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171267-3f7f0c04-c295-4916-8797-670a4c44c876.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of cart before clearing the cart of items<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171292-a9ae4c53-360a-4218-8943-941c87f3c71d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>image of the cart after clearing the cart of items<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>basically the way the code process works depending on what button the user<br>clicks on, the post request is sent to the same page with name<br>of the corresponding button and whatever name, appears in the post request, the<br>function code then executes. for the delete_one name, the code receives the line<br>id, as well as the user id and uses that information to delete<br>from table, and from clear, the code takes in the user id and<br>deletes all rows that contain user&#39;s id<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <em>Response:</em> <p><a href="https://github.com/rivera-jose/IT202-002/pull/76">https://github.com/rivera-jose/IT202-002/pull/76</a><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Proposal.md </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em>  Add screenshots showing your updated proposal.md file with checkmarks, dates, and link to milestone1.md accordingly and a direct link to the path on Heroku prod (see instructions)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171474-d4d601e1-5221-4728-9333-963e741b8631.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>first two checkmarks proposal.md file<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171535-e6d9fe6f-f9b6-4164-a437-ac988a58730d.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>next four checkmarks into proposal.md file<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171602-494bc33c-73eb-47b6-96c3-f649f8a0dd53.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>next four checkmarks into proposal.md file<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171664-75d5ba6d-8130-4def-af27-35716702eccb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>last checkmark of proposal.md file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171767-2945a462-ab3d-4875-b946-11bb9098d409.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2 of the 11 issues that were completed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171783-e0840b7d-e0d9-452a-b392-4f7f28a44272.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3 of the 11 issues that were completed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171815-ce029c43-6c5e-439b-baf7-3782c5fd4807.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>2 of the 11 issues that were completed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171839-c5043a2d-39e8-4424-ba9a-45c997301bbc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>3 of the 11 issues that were completed<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/166171860-701dc8db-e56e-4dba-a3ca-911200d8fc3f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>11th issue that was completed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/it202-milestone-2-shop-project/grade/jpr47" target="_blank">Grading</a></td></tr></table>