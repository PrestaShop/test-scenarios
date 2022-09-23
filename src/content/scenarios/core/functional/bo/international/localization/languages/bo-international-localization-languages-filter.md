---
title: "BO - International - Localization - Languages - Filter"
weight: 1
---

# BO - International - Localization - Languages - Filter
## Steps
| Step Description | Expected result |
| ----- | ----- |
| go to localization page | title contains 'Localization' |
| go to languages page | title contains 'Languages' |
| reset filter | Total of languages > 0 |
| filter by 'id_lang' '1' | Number of languages after reset < Total of languages <br>All rows column 'id_lang' contains '1' |
| reset filter | Number of languages = Total of languages |
| filter by 'name' 'English (English)' | Number of languages after reset < Total of languages <br>All rows column 'name' contains 'English (English)' |
| reset filter | Number of languages = Total of languages |
| filter by 'iso_code' 'en' | Number of languages after reset < Total of languages <br>All rows column 'iso_code' contains 'en' |
| reset filter | Number of languages = Total of languages |
| filter by 'language_code' 'en-us' | Number of languages after reset < Total of languages <br>All rows column 'language_code' contains 'en-us' |
| reset filter | Number of languages = Total of languages |
| filter by 'date_format_lite' 'm/d/Y' | Number of languages after reset < Total of languages <br>All rows column 'date_format_lite' contains 'm/d/Y' |
| reset filter | Number of languages = Total of languages |
| filter by 'date_format_full' 'm/d/Y H:i:s' | Number of languages after reset < Total of languages <br>All rows column 'date_format_full' contains 'm/d/Y H:i:s' |
| reset filter | Number of languages = Total of languages |
| filter by 'active' 'true' | Number of languages after reset < Total of languages <br>All rows column 'active' contains 'true' |
| reset filter | Number of languages = Total of languages |
