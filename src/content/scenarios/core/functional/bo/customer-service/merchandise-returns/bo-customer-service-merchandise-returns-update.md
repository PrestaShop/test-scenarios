---
title: "BO - Customer Service - Merchandise returns - Update "
weight: 4
---

# BO - Customer Service - Merchandise returns - Update 
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > SELL > Customer Service > Merchandise Returns | The Merchandise returns page is well displayed |
| {color:#C1C7D0} This step was calling test issue TEST-873 (possibly downgraded){color} |  |
| Click on the line of the returned product | Then desired Return Merchandise Authorization details are well displayed |
| Click on the dropdwon list of status and change the status to "Waiting for package" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Waiting for package"<br><br>Returns form: A pdf file named "Print out" is displayed |
| Click on the pdf | The pdf file is generated with this name "Returns Prefix 000001" <br><br>The default one is : RE000001 |
| Click on the generated pdf | All informations about the order return are well displayed |
| Come back to the edit Return Merchandise Authorization page <br><br>Click on Cancel | The status of the merchandise return is changed to "Waiting for package" with the purple color <br><br>The date issued is updated by the current date |
| Go to FO > Connect with the customer > Click on the Merchandise Returns page | All information related to the returned order are well displayed  : <br> * Table title: Here is a list of pending merchandise returns<br> * Order Column: The reference of the order with a link to access to the order<br> * Return Column: The reference of the merchandise return with a link to access to the return details <br> * Package status: Waiting for package<br> * Date issued: The updated date of the returned merchandise<br> * Returns form: The generated pdf "Print out" is displayed |
| Come back to BO > SELL > Customer Service > Merchandise returns > Click again on the line of the Merchandise return | The edit Merchandise return page is well displayed |
| Change the status to "Package received" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Package received"<br><br>The returns form pdf is disappeared and the value is set to: "- -" |
| Click on Cancel | The status of the merchandise return is changed to "Package received" with the green color <br><br>The date issued= the current date |
| Come back to FO >  Click on the Merchandise Returns page | All information related to the returned order are well displayed  : <br> * Table title: Here is a list of pending merchandise returns<br> * Order Column: The reference of the order with a link to access to the order<br> * Return Column: The reference of the merchandise return with a link to access to the return details <br> * Package status: Package Received<br> * Date issued: The updated date of the returned merchandise<br> * Returns form: The value is "-" |
| Come back to BO > SELL > Customer Service > Merchandise returns > Click again on the line of the Merchandise return | The edit Merchandise return page is well displayed |
| Change the status to "Return denied" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Return denied" |
| Click on Cancel | The status of the merchandise return is changed to "Return denied" with the red color <br><br>The date issued= the current date |
| Come back to FO > Click on the Merchandise Returns page | All information related to the returned order are well displayed  : <br> * Table title: Here is a list of pending merchandise returns<br> * Order Column: The reference of the order with a link to access to the order<br> * Return Column: The reference of the merchandise return with a link to access to the return details <br> * Package status: Return denied<br> * Date issued: The updated date of the returned merchandise<br> * Returns form: The value is "-" |
| Come back to BO > SELL > Customer Service > Merchandise returns > Click again on the line of the Merchandise return | The edit Merchandise return page is well displayed |
| Change the status to "Return completed" and click on Save and stay | Successful update alert is well displayed<br><br>Status: The default status which is displayed at the top of the list is "Return completed" |
| Click on Cancel | The status of the merchandise return is changed to "Return completed" with the dark green color <br><br>The date issued= the current date |
| Come back to FO > Click on the Merchandise Returns page | All information related to the returned order are well displayed  : <br> * Table title: Here is a list of pending merchandise returns<br> * Order Column: The reference of the order with a link to access to the order<br> * Return Column: The reference of the merchandise return with a link to access to the return details <br> * Package status: Return completed<br> * Date issued: The updated date of the returned merchandise<br> * Returns form: The value is "-" |
