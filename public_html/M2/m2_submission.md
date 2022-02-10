<table><tr><td> <em>Assignment: </em> M2 PHP-HW</td></tr>
<tr><td> <em>Student: </em> Jose Rivera(jpr47)</td></tr>
<tr><td> <em>Generated: </em> 2/10/2022 1:33:35 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/m2-php-hw/grade/jpr47" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Make sure you have the dev/prod branches created before starting this assignment.</p>
<p>Setup steps:</p>
<ol>
<li><code>git checkout dev</code> </li>
<li><code>git pull origin dev</code></li>
<li><code>git checkout -b M2-PHP-HW</code></li>
</ol>
<p>You&#39;ll have 3 problems to save for this assignment.</p>
<p>Each problem you&#39;re given a template <strong>Do not edit anything in the template except where the comments tell you to</strong>.</p>
<p>The templates are done in such a way to make it easier to capture the output in a screenshot (if it&#39;s still not able to fit well, you can zoom out in your browser).</p>
<p>You&#39;ll copy each template into their own separate .php files, immediately git add, git commit these files (you can do it together) so we can capture the difference/changes between the templates and your additions. This part is required for full credit.</p>
<p>HW steps:</p>
<ol>
<li>Open VS Code at the root of your repository folder (you should see the Procfile and all from the Heroku setup)</li>
<li>In VS Code create a new folder/directory in public_html called M2</li>
<li>Create 3 new files in this new M2 folder (problem1.php, problem2.php, problem3.php)</li>
<li>Paste each template into their respective files</li>
<li><code>git add .</code></li>
<li><code>git commit -m &quot;adding template baselines</code></li>
<li>Do the related work (you may do steps 8 and 9 as often as needed or you can do it all at once at the end)</li>
<li><code>git add .</code></li>
<li><code>git commit -m &quot;completed hw&quot;</code></li>
<li>When you&#39;re done push the branch<ol>
<li><code>git push origin M2-PHP-HW</code></li>
</ol>
</li>
<li>Go to heroku dev, and manually deploy the M2-PHP-HW branch</li>
<li>After it deploys go to <a href="https://ucid-dev.herokuapp.com/M2/problem1.php">https://ucid-dev.herokuapp.com/M2/problem1.php</a> (replace ucid with your ucid if you followed the setup instructions)</li>
<li>Update the URL to check that each problem file displays properly</li>
<li>Create the Pull Request with <strong>dev</strong> as base and <strong>M2-PHP-HW</strong> as compare</li>
<li>Create a new file in the M2 folder in VS Code called m2_submission.md</li>
<li>Fill out the below deliverable items, save the submission, and copy to markdown<ol>
<li>For this assignment you may get screenshots from your heroku dev instance, you do not need to move it to prod then come back and update it</li>
</ol>
</li>
<li>Paste the markdown into the m2_submission.md</li>
<li>add/commit/push the md file<ol>
<li><code>git add m2_submission.md</code></li>
<li><code>git commit -m &quot;adding submission file&quot;</code></li>
<li><code>git push origin M2-PHP-HW</code></li>
</ol>
</li>
<li>Merge the pull request from step 14</li>
<li>Create a new pull request with prod as base and dev as compare</li>
<li>Immediately create/merge/confirm, this is just to deploy it to prod and you don&#39;t need to adjust anything during this step</li>
<li>On your local machine sync the changes<ol>
<li><code>git checkout dev</code></li>
<li><code>git pull origin dev</code></li>
</ol>
</li>
<li>Submit the link to the m2_submission.md file from the prod branch to Canvas</li>
</ol>
<p><strong>Template Files</strong>
You can find all 3 template files in this gist: <a href="https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a">https://gist.github.com/MattToegel/48b48377eaa1937c886b7840c449750a</a> </p>
</td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Problem 1 - Only output Odd values of the Array under "Odds output" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 1 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153472285-a5e7e6cb-693a-4ad0-9c1e-a25fcc2299f5.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the output of the first array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153472358-dd80fe34-3018-4fea-a4a1-cb50fcdd783f.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the output of the second array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153472404-749330be-3ca9-4635-9207-3bbc38dd933f.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the output of the third array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153472996-9965d642-7b10-4941-9a47-bebdbe5caaec.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the output of the fourth array<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>I solved the problem by writing down some pseudo-code for each problem previously<br>before coding. I then implemented the pseudo-code in php. executed and tested the<br>code online to test my output. I verified the output was correct. Also<br>I asked the professor for help because I was confused about what block<br>of code should the loop have included.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Problem 2 - Only output the sum/total of the array values by assigning it to the $total variable (the number must end in 2 decimal places, if it ends in 1 it must have a 0 at the end) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 2 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473049-9e4b0ceb-e8db-4f3f-b5d9-ebafeb3c78e0.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the sum of the first array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473103-de53ac28-6a99-4c04-aaf3-d54a4d572eda.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the sum of the second array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473144-a9ddd85c-132f-41b7-9638-27f4845ed898.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the sum of the third array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473186-f8cccb8a-f694-477d-84f2-4e38c6447fe0.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the sum of the fourth array<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>I solved the problem by writing down some pseudo-code for each problem previously<br>before coding. I then implemented the pseudo-code in php. executed and tested the<br>code online to test my output. I verified the output was correct. Also<br>I asked the professor for help because I was confused about the rouding<br>in this problem and I needed clarifying the precision of how the float<br>numbers should have been rounded up to.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Problem 3 - Output the given values as positive under the "Positive Output" message (the data otherwise shouldn't change) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Clearly screenshot the output of Problem 3 showing the data and the code output in the proper part of the page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473268-391aaadf-cd23-46d8-9cf2-aff8ecce4482.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the positive values of the first array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473370-b4d5a4c9-d741-40eb-b06f-ff7682e54255.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the positive values of the second array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473502-21e0bac9-534d-465d-81bc-9b76297561af.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the positive values of the third array<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/34193171/153473652-c7160d8e-a719-47f5-9b19-8cf5bc5d578b.PNG"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a screenshot of the positive values of the fourth array<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Describe how you solved the problem</td></tr>
<tr><td> <em>Response:</em> <p>I solved the problem by writing down some pseudo-code for each problem previously<br>before coding. I then implemented the pseudo-code in php. executed and tested the<br>code online to test my output. I verified the output was correct. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Misc Items </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=Complete"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add the prod URL for problem1.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/M2/problem1.php">https://jpr47-prod.herokuapp.com/M2/problem1.php</a> </td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the prod URL for problem2.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/M2/problem2.php">https://jpr47-prod.herokuapp.com/M2/problem2.php</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the prod URL for problem3.php (remember you can assume this based on how the domain gets built (i.e., ucid-prod.herokuapp.com/...)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://jpr47-prod.herokuapp.com/M2/problem3.php">https://jpr47-prod.herokuapp.com/M2/problem3.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Pull Request URL for M2-PHP-HW to dev</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/rivera-jose/IT202-002/pull/6">https://github.com/rivera-jose/IT202-002/pull/6</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Talk about what you learned, any issues you had, how you resolve them</td></tr>
<tr><td> <em>Response:</em> <p>I had some issues regarding my understanding of the instructions. I asked the<br>professor and eventually I was clarified, but I plan for the future read<br>things more clearly. <br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-002-S22/m2-php-hw/grade/jpr47" target="_blank">Grading</a></td></tr></table>
