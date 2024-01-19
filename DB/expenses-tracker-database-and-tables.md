
## DATABASE NAME (expenses-tracker)

 **Users**
 - id (PK) int 11
 - name varchar 32
 - email varchar 64
 - password varchar 255
 - status int 1/0
 - is_admin int 1/0
 - last_seen timestamp
 - updated_at timestamp
 - created_at timestamp


 **Categories**
 - id (PK) int 11
 - user_id (FK)
 - name varchar 32
 - budget double 11,2
 - status int 1/0
 - updated_at timestamp
 - created_at timestamp


 **Expenses**
 - id (PK) int 11
 - user_id (FK) int 11
 - category_id (FK) int 11
 - name varchar 32
 - price double 11,2
 - status int 1/0
 - updated_at timestamp
 - created_at timestamp
