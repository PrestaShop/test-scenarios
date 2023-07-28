---
title: "BO - Products list - Bulk actions, Enable/Disable, 3-dot button"
weight: 25
---

# BO - Products list - Bulk actions, Enable/Disable, 3-dot button
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > Catalog > Products | All products should be displayed |
| Enable the checkbox near the "Min & Max" of ID | All checkbox of product present in this page is enabled |
| Disable the checkbox near the "Min & Max" of ID | All checkbox of product present in this page is disabled |
| Enable the checkbox near the "Min & Max" of ID | All checkbox of product present in this page is enabled |
| * Clic on the Bulk actions button <br> * Clic on "Deactivate selection"<br> * Clic on "Deactivate selection"<br> * Clic on "Close" | * A pop up is displayed with : "activate selection" "Deactivate selection" "Duplicate selection" "Delete Selection" <br> * A pop up is displayed with "Deactivate selection" <br> * A loading is displayed <br> * All product selected should be disabled (Status off) |
| * Clic on the Bulk actions button <br> * Clic on "Activate selection"<br> * Clic on "Cancel" | * A pop up is displayed <br> * A pop up is displayed with "Activate selection" <br> * The pop up should be closed and you still have your product selected |
| * Clic on the Bulk actions button <br> * Clic on "Activate selection"<br> * Clic on "Activate selection"<br> * Clic on "Close" | * A pop up is displayed <br> * A pop up is displayed with "Activate selection" <br> * A loading is displayed <br> * All product selected should be enabled (Status on) |
| * Clic on the Bulk actions button <br> * Clic on "Dupplicate selection"<br> * Clic on "Dupplicate selection"<br> * Clic on "Close" | * A pop up is displayed <br> * A pop up is displayed with "Dupplicate selection" <br> * A loading is displayed <br> * All product selected should be dupplicate and disabled |
| * Clic on the Bulk actions button <br> * Clic on "Delete selection"<br> * Clic on "Delete selection"<br> * Clic on "Close" | * A pop up is displayed <br> * A pop up is displayed with "Delete selection" <br> * A loading is displayed <br> * All product selected should be deleted |
| * Clic on the Bulk actions button <br> * Clic on "Delete selection"<br> * Clic on "Delete selection"<br> * Clic on "Stop processing" during the load <br> * Clic on "Close" | * A pop up is displayed <br> * A pop up is displayed with "Delete selection" <br> * A loading is displayed <br> * Two yellow alert will be displayed <br>" View 1 error logs"<br>"Something went wrong with IDs [number of IDs you selected] the operation was aborted"<br> * Product until the ID showed in the error message will be deleted |
| * On the first product, clic on the three dot <br> * Clic on "Preview" | * a pop up is displayed with "Preview", "Dupplicate" and "Delete"<br> * The product will be displayed on the FO<br>If you use it on a product disabled, you'll se a baneer with "This product is not visible to your customers" |
| * On the first product, clic on the three dot <br> * Clic on "Dupplicate"<br> * Clic on "Go to catalog" | * a pop up is displayed<br> * The new product is displayed on BO with the same details than the previous, it name is "copy of [name of your previous product" and you have a green notification "Successful duplication"<br> * All product should be displayed |
| * On the first product, clic on the three dot <br> * Clic on "Delete"<br> * Clic on "Cancel" | * a pop up is displayed<br> * A new pop up is displayed named "Delete selection"<br> * All pop up is disabled |
| * On the first product, clic on the three dot <br> * Clic on "Delete"<br> * Clic on "Delete" | * a pop up is displayed<br> * A new pop up is displayed named "Delete selection"<br> * The product is deleted and you'll have a green notification "Successful deletion" |
