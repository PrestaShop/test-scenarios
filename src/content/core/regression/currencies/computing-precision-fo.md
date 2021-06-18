---
title: "Computing precision FO"
weight: 1
---
## Steps
| Step Description | Expected result |
| ----- | ----- |
| Go to BO > International > Localization > Currencies > Edit Euro currency | Set decimals to 3. |
| In BO, create a percentage discount (15%), and a Free Gift discount (with free Mug Today is a Good Day) |  |
| On Mug Today is a good day product, add a specific price, starting a 3 units, giving a 30% discount |  |
| On FO, add 4 Mug Today is a good day. | Unit price is at 9,996€, total price is at 39,984€ |
| Add the percent discount | Total is updated, it should now be 33,986€ (with a 5,998€ discount). |
| Add the free gift cart rules | Total is still 33,986€, with a second discount of 9,996€, for a total discount of 15,994€. |
| Complete the order | Check on BO and on Database that the sums are OK |
| In BO, set Order to Payment Accepted | Check Invoice and payment block. |
