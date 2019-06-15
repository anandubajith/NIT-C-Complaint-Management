# NIT-C Complaint Management System

[![Gitter](https://badges.gitter.im/NITC-ComplaintManagement/community.svg)](https://gitter.im/NITC-ComplaintManagement/community?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)


## Project Goals
- [x] Login using NIT-C Email
- [x] Single Complaint view
- [ ] Categories
- [ ] User roles (for concerned departments to manage)
- [ ] Redesign?
- [ ] Newsletter style emails to prevent Lost&Found spam in Inbox

## Pre alpha 
[![Pre alpha video](http://img.youtube.com/vi/tsOHJ9pt_q8/0.jpg)](http://www.youtube.com/watch?v=tsOHJ9pt_q8 "Pre-alpha video")

## Getting Started

1. Clone the repo and change to project directory

   ```sh
   git clone git@github.com:anandubajith/NIT-C-Complaint-Management.git
   cd NIT-C-Complaint-Management
   ```
2. Install the dependencies

    ```sh
    composer install
    yarn 
    ```
3. Setup the env file by copying .env.example

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```
    Fill in the database credentials in `.env` 
    
    Google OAuth tokens can be obtained from [here](https://console.developers.google.com/projectcreate?previousPage=%2Fflows%2Fenableapi%3Fapiid%3Dappsactivity%26credential%3Dclient_key%26pli%3D1&angularJsUrl=%2Fprojectcreate%3FpreviousPage%3D%252Fflows%252Fenableapi%253Fapiid%253Dappsactivity%2526credential%253Dclient_key%2526pli%253D1&project=&folder=&organizationId=0)


4. Run the migrations 
    ```sh
    php artisan migrate
    ```

5. Run the app
    ```sh
    php artisan serve
    yarn watch
    ```

