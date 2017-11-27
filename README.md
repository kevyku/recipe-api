API Test - Recipe API
==========

Recipe API made with Symfony 3.3.11 and FOSRestBundle. This API uses a CSV instead of a database.

The API offers following operations:

- Fetch a recipe by id
- Fetch all recipes for a specific cuisine (with pagination)

API Routes
-------------------

#### Fetch recipe by id

Send a `GET` request to:
```
/api/recipes/[id]
```

#### Fetch all recipes for a specific cuisine

Send a `GET` request to:
```
/api/recipes?cuisine=[cuisine]
```

Add pagination parameters if needed:
* limit (default = 5)
* offset (default = 0)