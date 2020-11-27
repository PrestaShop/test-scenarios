---
title: Check that the an email is send with a promo code when I check the box in the create account process
weight: 4
---

## Preconditions

Go to back office-> modules
Install ps_emailsubscription
Configure ps_emailsubscription module
Configure SMTP
## Steps

Add in the field “Welcome voucher code” a promo code “WELCOME”\
Go to catalog -> Cart rules\
Check the promo code exists \
Go to front office\
Entered an email in the field email subscription in the left column or footer

## Expected result

Check that an email was send with the promo code

