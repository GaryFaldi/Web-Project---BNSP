# Flowchart — Project Pertemuan 7 (Web Blog)

Berikut diagram alur utama aplikasi (Mermaid). Buka file ini di editor yang mendukung Mermaid atau gunakan viewer online.

```mermaid
flowchart TD
  subgraph Public[Public Pages]
    A1[Home / index.php]
    A2[Articles list / articles.php]
    A3[Single Post / singlepost.php]
    A4[About / about.php]
    A5[Contact / contact.php]
    A6[Login / login.php]
    A7[Register / register.php]
  end

  subgraph Auth[Auth Handlers]
    PLogin[/app/process_login.php/]
    PRegister[/app/process_register.php/]
    PLogout[/public/logout.php/]
  end

  subgraph User[User Area]
    UDash[/public/user/dashboard.php/]
    UComments[/public/user/comments.php/]
    ULikes[/public/user/likes.php/]
  end

  subgraph Admin[Admin Area]
    ADash[/public/admin/admin_dashboard.php/]
    ARoles[/public/admin/role_management.php/]
    AArticlesIndex[/public/admin/articles/index.php/]
    AArticlesCreate[/public/admin/articles/create.php/]
    AArticlesEdit[/public/admin/articles/edit.php/]
    AArticlesDelete[/public/admin/articles/delete.php/]
    ACommentsAdmin[/public/admin/komentar.php/]
  end

  subgraph Process[Other Processes]
    PCmt[/app/process_comment.php/]
    PLike[/app/process_like.php/]
    PCreateUser[/app/process_create_user.php/]
    PUpdateRole[/app/process_update_role.php/]
    PDeleteUser[/app/process_delete_user.php/]
  end

  %% Public navigation
  A1 --> A2
  A2 --> A3
  A2 --> A6
  A2 --> A7
  A3 --> A2
  A5 --> PContact["/app/process_contact.php/"]

  %% Auth flows
  A6 -->|submit| PLogin
  PLogin -->|success (role=user)| UDash
  PLogin -->|success (role=admin)| ADash
  PLogin -->|fail| A6

  A7 -->|submit| PRegister
  PRegister -->|success| A6
  PRegister -->|fail| A7

  PLogout --> A1

  %% User actions
  UDash --> UComments
  UDash --> ULikes
  UComments -->|submit| PCmt
  ULikes -->|click| PLike
  PCmt --> UDash
  PLike --> UDash

  %% Admin actions
  ADash --> ARoles
  ADash --> AArticlesIndex
  AArticlesIndex --> AArticlesCreate
  AArticlesIndex --> AArticlesEdit
  AArticlesIndex --> AArticlesDelete

  AArticlesCreate -->|submit| PCreateArticle[[/app/process_create_article.php/]]
  AArticlesEdit -->|submit| PEditArticle[[/app/process_edit_article.php/]]
  AArticlesDelete -->|submit| PDeleteArticle[[/app/process_delete_article.php/]]

  ARoles --> PUpdateRole
  ARoles --> PDeleteUser

  PCreateUser --> ADash
  PUpdateRole --> ARoles
  PDeleteUser --> ARoles

  %% Notes
  classDef public fill:#f9f,stroke:#333,stroke-width:1px;
  class Public,Auth,User,Admin,Process public;

  click A6 "../public/login.php" "Buka halaman login"
  click A7 "../public/register.php" "Buka halaman register"
  click ADash "../public/admin/admin_dashboard.php" "Admin dashboard"

``` 

## Penjelasan singkat
- Halaman publik (index, articles, singlepost, contact, about) merupakan titik masuk untuk pengunjung.
- Login/Register mem-post ke handler di `/app/` yang meng-handle autentikasi dan redirect berdasarkan role.
- User area berisi dashboard per-user untuk melihat komentar dan like.
- Admin area berisi manajemen artikel dan user (role management).
- Ada proses terpisah untuk komentar, like, contact, pembuatan user, penghapusan, dan update role.

Jika Anda ingin saya juga membuat versi gambar (SVG/PNG) dari diagram Mermaid atau memecah flowchart menjadi diagram terpisah (Auth, User, Admin), katakan pilihan Anda dan saya buatkan file tambahan. 
