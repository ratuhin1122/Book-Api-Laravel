# Book API (Read-Only)

This is a simple **Laravel REST API** for managing books.  
This API currently supports **read-only operations**:

- **List all books** (`index`)  
- **Get a single book** (`show`)  

Other operations like `store`, `update`, and `delete` exist in the controller but **require a CSRF token** and are not publicly accessible.

---

## 🚀 Installation

1. Clone the repository:


git clone https://github.com/your-username/book-api.git
cd book-api




| Method | Endpoint    | Description             |
| ------ | ----------- | ----------------------- |
| GET    | /books      | Get all books           |
| GET    | /books/{id} | Get a single book by ID |






