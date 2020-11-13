---
title: Check that the an email is send with a promo code when I check the box in the create account process
weight: 4
---

## Preconditions

Go to back office-> modules<br />
Install ps_emailsubscription<br />
Configure ps_emailsubscription module<br />
Configure SMTP 
## Steps

Add in the field “Welcome voucher code” a promo code “WELCOME”<br />
Go to catalog -> Cart rules<br />
Check the promo code exists <br />
Go to front office<br />
Entered an email in the field email subscription in the left column or footer 

## Expected result

Check that an email was send with the promo code


