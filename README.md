# Todo List App

## GET /items

### Description
Get todo items.

### Request Parameters

Params    | Type    | Default | Description
----------|:-------:|:-------:|----------------
page      | integer |1        |  Page for showing data.
limit     | integer |5        |  Number of items per page.

### Response

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 2,
            "item": "Reveals intention",
            "isCompleted": 0,
            "deleted_at": null
        },
        {
            "id": 3,
            "item": "No duplication",
            "isCompleted": 0,
            "deleted_at": null
        },
        {
            "id": 4,
            "item": "Fewest elements",
            "isCompleted": 0,
            "deleted_at": null
        },
        {
            "id": 5,
            "item": "hehe",
            "isCompleted": 1,
            "deleted_at": null
        }
    ],
    "first_page_url": "http://localhost:8000/api/items?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://localhost:8000/api/items?page=1",
    "next_page_url": null,
    "path": "http://localhost:8000/api/items",
    "per_page": 5,
    "prev_page_url": null,
    "to": 4,
    "total": 4
}
```

## POST /items

### Description
Create a todo item.

### Request Parameters

Params    | Type    | Default | Description
----------|:-------:|:-------:|----------------
item      | string |(not nullable)        |  Todo item.

### Response 

```json
{
    "message": "Item created successfully"
}
```

## PUT /items

### Description
Update a todo item.

### Request Parameters

Params    | Type    | Default | Description
----------|:-------:|:-------:|----------------
id      | integer |(not nullable)        |  Todo item id which should be updated.
item      | string |        |  Todo item.
isCompleted      | boolean |        |  Data field that indicate whether this item is completed.

### Response 

```json
{
    "message": "Item updated successfully"
}
```

## DELETE /items

### Description
Delete a todo item.

### Request Parameters

Params    | Type    | Default | Description
----------|:-------:|:-------:|----------------
id      | integer |(not nullable)        |  Todo item id which should be deleted.

### Response 

```json
{
    "message": "Item deleted successfully"
}
```
