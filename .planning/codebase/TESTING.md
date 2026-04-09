# Testing

## Frameworks
There are no automated testing frameworks such as PHPUnit, Cypress, or Selenium set up in this repository.

## Current Practices
Developer testing is done via ad-hoc scripts built into the repo (`test_check.php`, `test_cheak_local.php`, `test_reg_insert_local.php`). These scripts contain hardcoded mock data and test DB connections immediately when loading the page in the browser. 

There is no CI/CD pipeline or formalized test coverage tracking.
