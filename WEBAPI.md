# [GET] /users

response
```json
[
    {
        "id": 4,
        "uid": "asasigure_ice",
        "name": "サウス",
        "image": "data:image/jpeg;base64..."
    },
]
```

# [GET] /users/{id}

response
```json
{
    "id": 4,
    "uid": "asasigure_ice",
    "name": "サウス",
    "image": "data:image/jpeg;base64..."
}
```

# [POST] /users

request

|KEY|VALUE|
|---|-----|
|uid|asasigure_ice|
|name|さうす|
|password|asasigure|
|image|base64|

response

```json
"user": {
    "id": 4,
    "uid": "asasigure_ice",
    "name": "サウス",
    "image": "data:image/jpeg;base64..."
}
```

# [DELETE] /users/{id}

ステータスコードだけ返せばいい

# [POST]/posts

request

|KEY|VALUE|
|---|-----|
|user_id|4|
|content|今日はこの本を読んだ！|
|category|mylife|

response

```json
{
    "id": 2,
    "user": {
        "id": 4,
        "uid": "asasigure_ice",
        "name": "サウス",
        "image": "data:image/jpeg;base64..."
    },
    "like_users": [],
    "useful_count": 0,
    "category": "mylife",
    "content": "今日はこの本を読んだ",
    "created_at": "2016-12-5",
    "update_at": "2016-12-5",
}
```

# [GET]/posts?type={new,popular}&category={category}&offset={offset_number}&limit={limit_number}

response

- type: newは新しい投稿順、popularは役に立つ順
- category: all,communication,business,mylife,etcのいずれか
- offset: 先頭から何番目か。
- limit_offset: 何件取得するか。

```json
[
    {
        "id": 2,
        "user": {
            "id": 4,
            "uid": "asasigure_ice",
            "name": "サウス",
            "image": "data:image/jpeg;base64..."
        },
        "like_users": [
            {
                "id": 4,
                "uid": "asasigure_ice",
                "name": "サウス",
                "image": "data:image/jpeg;base64..."
            },
        ],
        "useful_count": 12,
        "category": "mylife",
        "content": "今日はこの本を読んだ",
        "created_at": "2016-12-5",
        "update_at": "2016-12-5",
    },
]
```

# [PUT]/posts/{id}

request

|KEY|VALUE|
|---|-----|
|user_id|4|
|content|今日はこの本を読んだ！|
|category|business|

response

```json
{
    "id": 2,
    "user": {
        "id": 4,
        "uid": "asasigure_ice",
        "name": "サウス",
        "image": "data:image/jpeg;base64..."
    },
    "like_users": [],
    "useful_count": 0,
    "category": "business",
    "content": "今日はこの本を読んだ",
    "created_at": "2016-12-5",
    "update_at": "2016-12-5",
}
```

# [DELET]/posts/{id}
ステータスコードだけ返せばオッケー

# [POST] posts/like

request

|KEY|VALUE|
|---|-----|
|user_id|4|
|post_id|1|

# [POST] posts/usefuls

request

|KEY|VALUE|
|---|-----|
|user_id|4|
|post_id|1|